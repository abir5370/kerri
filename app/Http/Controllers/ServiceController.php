<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private static $services;

    public function index(){
        return view('admin.service.add_service');
    }
    public function storeService(Request $request){
        Service::saveService($request);
        return back();
    }
    public function manageService(){
        self::$services = Service::all();
        return view('admin.service.manage_service',[
            'services'=>self::$services
        ]);
    }
    public function serviceDestroy(Request $request){
        Service::serviceDelete($request);
        return back()->with('delete','delete successfull!');
    }
    public function statusService($id){
        Service::serviceStatus($id);
        return back();
    }
    public function serviceEdit($id){
        $service = Service::find($id);
        return view('admin.service.edit_service',[
            'service'=>$service
        ]);
    }
    public function serviceUpdate(Request $request){
       Service::find($request->id)->update([
           'icon'=>$request->icon,
           'title'=>$request->title,
           'description'=>$request->description,
       ]);
       return redirect('/manage-service')->with('update','service Updated!');
    }
}
