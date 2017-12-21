<?php

namespace App\Http\Controllers;

use App\Work;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function index()
    {
        $allWorks = Work::all();
        $allUsers = User::all();

        return view('admin.index')->
                withWorks($allWorks)->
                withUsers($allUsers);
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

        $work->save();

        return back()
            ->with('success', 'Work updated!');
    }
}