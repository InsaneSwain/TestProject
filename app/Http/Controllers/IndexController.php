<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;
use Intervention\Image\Facades\Image;
class IndexController extends Controller
{
    public function index(){

        $images=Index::all();
        return view('index',compact('images'));
    }

    public function index_2(){

        $images=Index::all();
        return view('index-2',compact('images'));
    }

    public function convert_to_small(){
        $allImages=Index::firstorFail();

        $image_1=$allImages->pluck('image_1');
        $image_2=$allImages->pluck('image_2');
        $image_3=$allImages->pluck('image_3');


        $image_1_path =  public_path('files/pic1/1.jpg');
        $image_2_path =  public_path('files/pic2/2.jpg');
        $image_3_path =  public_path('files/pic3/3.jpg');

        $image_1_destination_path =  public_path('files/pic1/thumb_pic1');
        $image_2_destination_path =  public_path('files/pic2/thumb_pic2');
        $image_3_destination_path =  public_path('files/pic3/thumb_pic3');



        $image_1_file=Image::make($image_1_path);
        $image_1_file->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($image_1_destination_path.'/'.'1.jpg');

        $image_2_file=Image::make($image_2_path);
        $image_2_file->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($image_2_destination_path.'/'.'2.jpg');

        $image_3_file=Image::make($image_3_path);
        $image_3_file->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($image_3_destination_path.'/'.'3.jpg');




        $allImages->update([
           'image_thumb_1' =>'/files/pic1/thumb_pic1/1.jpg',
           'image_thumb_2' =>'/files/pic2/thumb_pic2/2.jpg',
           'image_thumb_3' =>'/files/pic3/thumb_pic3/3.jpg',
        ]);
        return redirect(route('home.2'));


    }



       public function image1_delete(){

        $image_1=public_path('/files/pic1/thumb_pic1/1.jpg');
        \File::delete($image_1);

        return redirect(route('home.2'));

    }
    public function image2_delete(){

        $image_2=public_path('/files/pic2/thumb_pic2/2.jpg');
        \File::delete($image_2);

        return redirect(route('home.2'));

    }
    public function image3_delete(){

            $image_3=public_path('/files/pic3/thumb_pic3/3.jpg');
            \File::delete($image_3);

            return redirect(route('home.2'));

        }





}
