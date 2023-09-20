<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;


class BannerController extends Controller
{

    public function AllBanners()
    {

        $banner = Banner::findOrFail(1);
        return view('backend.banner.banner_update', compact('banner'));
    } // End Method


    public function UpdateBanners(Request $request)
    {
        $banner_id = $request->id;
        $messages = [];


        $sectionNames = [
            'home_one', 'home_two', 'home_three', 'home_four', 'news_category_one', 'news_details_one'
        ];

        foreach ($sectionNames as $sectionName) {
            if ($request->file($sectionName)) {
                $currentImagePath = Banner::findOrFail($banner_id)->{$sectionName};

                if (file_exists(public_path($currentImagePath))) {
                    unlink(public_path($currentImagePath));
                }

                $image = $request->file($sectionName);
                $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

                Image::make($image)->resize(725, 100)->save('upload/banner/' . $name);

                Banner::findOrFail($banner_id)->update([
                    $sectionName => 'upload/banner/' . $name,
                ]);

                $messages[] = "Banner for '$sectionName' updated successfully.";
            }
        }

        if (!empty($messages)) {
            $message = implode("\n", $messages);

            $notification = [
                'message' => $message,
                'alert-type' => 'success'
            ];
            return redirect()->back()->with($notification);
        } else {
            $error_message = 'No banners were updated.';
            return redirect()->back()->with('error_message', $error_message);
        }
    } // End Method
}
