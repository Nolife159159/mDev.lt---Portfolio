<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Work;
use Auth;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'photos' => 'required',
            'photos.*' => 'required|image|max:20000',
            'name' => 'required|max:255',
            'desc' => 'required',
            'langs' => 'required',
        ]);


        foreach ($request->photos as $photo) {
            $filename = $photo->store('public');
            $my_name [] = str_replace('public', 'storage', $filename);
        }

        $work = new Work;
        $work->name = $request->name;
        $work->description = $request->desc;
        $work->lang = $request->langs;
        $work->image_url = json_encode($my_name);
        $work->user_id = Auth::user()->id;
        $work->save();

        return back()
            ->with('success', 'Work uploaded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
