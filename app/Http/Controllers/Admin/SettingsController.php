<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Redirect;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::find(1);
        return view("admin.settings", compact("settings"));
    }


    public function edit(Request $request)
    {
        if(Setting::find(1)->logo == null) {
            if($request->logo) {
                $logo = Storage::disk("public")->put("imgs", $request->logo);
            } else $logo = null;
        } else {
            if($request->logo) {
                $logo = Storage::disk("public")->put("imgs", $request->logo);
            } else $logo = Setting::find(1)->logo;   
        }


        if(Setting::find(1)->favicon == null) {
            if($request->favicon) {
                $favicon = Storage::disk("public")->put("imgs", $request->favicon);
            } else $favicon = null;
        } else {
            if($request->favicon) {
                $favicon = Storage::disk("public")->put("imgs", $request->favicon);
            } else $favicon = Setting::find(1)->favicon;   
        }

        Setting::find(1)->update([
            "facebook" => $request->facebook,
            "instagram" => $request->instagram,
            "youtube" => $request->youtube,
            "subscription_price" => $request->price,
            "description" => $request->description,
            "tags" => $request->tags,
            "logo" => $logo,
            "favicon" => $favicon
        ]);

        return Redirect::back();

    }


    public function deleteLogo()
    {
        Setting::find(1)->update([
            "logo" => NULL
        ]);

        return Redirect::back();
    }


    public function deleteFavicon()
    {
        Setting::find(1)->update([
            "favicon" => NULL
        ]);

        return Redirect::back();
    }


}
