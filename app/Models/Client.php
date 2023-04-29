<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    private static $client,$image ,$ImgName,$directory,$imgUrl,$update;

    public static function saveClient($request){
        self::$client = new Client();
        self::$client->name = $request->name;
        self::$client->review = $request->review;
        if($request->file('photo')){
            self::$client->photo = self::saveImage($request);
        }
        self::$client->save();
    }
    public static function saveImage($request){
        self::$image = $request->file('photo');
        self::$ImgName = 'client-'.rand().'.'.self::$image->extension();
        self::$directory = 'uploads/client/';
        self::$imgUrl = self::$directory.self::$ImgName;
        self::$image->move(self::$directory,self::$ImgName);
        return self::$imgUrl;
    }
    public static function updateClient($request){
        self::$update = Client::find($request->id);
        self::$update->name = $request->name;
        self::$update->review = $request->review;
        if($request->file('photo')){
            if(self::$update->photo){
                if(file_exists(self::$update->photo)){
                    unlink(self::$update->photo);
                    self::$update->photo = self::saveImage($request);
                }
            }
            else{
                self::$client->photo = self::saveImage($request);
            }
        }
        self::$update->save();
    }
    public static function updateStatus($id){
        self::$client = Client::find($id);
        if (self::$client->status == 1){
            self::$client->status = 0;
        }
        else{
            self::$client->status = 1;
        }
        self::$client->save();
    }
}
