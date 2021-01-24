<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $settings = Setting::where(["id" => 1])->first();
        if($settings === null) {
            // settings doesn't exist
            $settings = new Setting();
            $settings->save();
        }
        return view('admin.setting.index', ['settings' => $settings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try{
            $file = $request->file();
            $settings = Setting::find(1);
            if($file) {
                foreach($file as $key => $f) {      
                    if($f) {
                        $fileName = time().'_'.$f->getClientOriginalName();
                        $filePath = $f->storeAs('uploads', $fileName, 'public');
                        $settings->$key = '/storage/' .$filePath;
                    }      
                }
                $settings->save();
                return back()->with('success', "Successfully changed settings");
            } else {
                return back()->with('error', "There is no updates");
            }
        } catch(Exception $e) {
            return back()->with("error", $e);
        }    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
