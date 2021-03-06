<?php

namespace App\Http\Controllers;

use App\Work;
use App\User;
use App\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function index()
    {
        $allWorks = Work::all();
        $allUsers = User::all();
        $allContacts = Contact::all();

        return view('admin.index')
                    ->withWorks($allWorks)
                    ->withUsers($allUsers)
                    ->withContacts($allContacts);
    }

    public function deleteWork($id = null)
    {
        $workToDelete = Work::findOrFail($id);

        $images = json_decode($workToDelete->image_url);
        $images = str_replace('storage', 'public', $images);

        Storage::delete($images);

        $workToDelete->delete();
        return back();
    }

    public function show($id)
    {
        $work = Work::findOrFail($id);
        $images = json_decode($work->image_url);
        return view('admin.edit-work')->withWork($work)->withImages($images);
    }

    public function store(Request $request, $id)
    {
        $work = Work::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|max:255',
            'desc' => 'required',
            'langs' => 'required',
        ]);

        $work->name = $request->name;
        $work->description = $request->desc;
        $work->lang = $request->langs;

        // add new photos
        if ($request->photos != null)
        {
            // to array
            $workImagesArray = json_decode($work->image_url);

            foreach ($request->photos as $photo)
            {
                $filename = $photo->store('public');
                $workImagesArray [] = str_replace('public', 'storage', $filename);
            }

            $work->image_url = json_encode($workImagesArray);
        }

        $work->save();

        return back()
            ->with('success', 'Work updated!');
    }

    // user edit

    public function showUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit-user')->withUser($user);
    }

    public function storeUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return back()
            ->with('success', 'User updated!');
    }

    public function deleteWorkImage($work_id = null, $img_id = null)
    {
        // find work if exists
        $findWork = Work::findOrFail($work_id);

        // decode json for readable data
        $images = json_decode($findWork->image_url);
        $images = str_replace('storage', 'public', $images);

        $images_total = count($images);

        $deleted = false;

        // loop all images
        foreach ($images AS $image_key => $image)
        {
            // find image
            if ($image_key == $img_id)
            {
                // deleting image
                Storage::delete($image);
                // removing image from database array
                unset($images[$image_key]);

                $deleted = true;

                break;
            }
        }

        // cant delete image redirect back
        if (!$deleted) return redirect('/admin/work-edit/'.$work_id)->with('success', 'Bad image key?');

        if ($images_total == 1) {
            // delete work if last image deleted
            $findWork->delete();
            return redirect('/admin/')->with('success', 'All images deleted and work too!');
        }
        else {
            // make json and update
            $imagesSave = str_replace('public', 'storage', $images);
            $imagesSave = json_encode($imagesSave);

            $findWork->image_url = $imagesSave;

            $findWork->update();
        }
        return redirect('/admin/work-edit/'.$work_id)->with('success', 'Image with id '.$img_id.' deteleted!');
    }
}