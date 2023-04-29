<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function bannerContent(){
        return view('admin.Banner.add_banner');
    }
    public function storeBanner(Request $request){
        Banner::saveBanner($request);
        return back();
    }
    public function manageBanner(){
        $banners = Banner::all();
        return view('admin.banner.manage_banner',[
            'banners'=>$banners
        ]);
    }
    public function deleteBanner(Request $request){
        Banner::deleteBanner($request);
        return back();
    }
    public function statusBanner($id){
       $banner = Banner::find($id);
       if ($banner->status == 1){
           $banner->status =0;
       }
       else{
           $banner->status =1;
       }
       $banner->save();
       return back();
    }
    public function editBanner($id){
        $banner = Banner::find($id);
        return view('admin.banner.edit_banner',[
            'banner'=>$banner
        ]);
    }
    public function updateBanner(Request $request){
        Banner::updateBanner($request);
        return back();
    }
}
