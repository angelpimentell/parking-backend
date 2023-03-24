<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\System\Setting;
use App\Http\Resources\System\SettingResource;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::all();
        return new SettingResource($settings);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $setting = Setting::create($request->all());
        return new SettingResource($setting);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $setting = Setting::find($id);
        return new SettingResource($setting);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return Setting::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Setting::find($id)->delete();
    }
}
