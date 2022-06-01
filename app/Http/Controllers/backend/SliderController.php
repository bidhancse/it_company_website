<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Image;
use DB;
Use Auth;

class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function slider()
    {
        return view('backend.slider.slider');
    }



    public function sliderinsert(Request $abc) {

        $data = array(

            'title' =>$abc->title,
            'status' =>$abc->status,
            'admin_id' =>Auth()->user()->id,
        );

        $SliderPicture = $abc->file('image');

        if ($SliderPicture) {
            $image_one_name= hexdec(uniqid()).'.'.$SliderPicture->getClientOriginalExtension();
            Image::make($SliderPicture)->save('public/image/sliderimage/'.$image_one_name,80);
            $data['image']='public/image/sliderimage/'.$image_one_name;
            DB::table('sliderinformation')->insert($data);

        }

        else {
            DB::table('sliderinformation')->insert($data);
        }

        $notification=array(
            'messege'=>'Slider Insert Successfully Done !!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
        
    }



    public function manageslider()
    {
        $Slider = DB::table('sliderinformation')->get();
        return view('backend.slider.manageslider', compact('Slider'));
    }


    public function deleteslider($id)
    {
        $check = DB::table('sliderinformation')->where('id',$id)->first();

        if(isset($check->image)) {
            unlink($check->image);

            DB::table('sliderinformation')->where('id',$id)->delete();
        }

        else {
            DB::table('sliderinformation')->where('id',$id)->delete();
        }

        $notification=array(
            'messege'=>'Slider Delete Successfully Done !!',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }


    public function inactiveslider($id)
    {
        DB::table('sliderinformation')->where('id',$id)->update(['status' => 2]);

        $notification=array(
            'messege'=>'Brand Inactive Successfully Done !!',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }


    public function activeslider($id)
    {
        DB::table('sliderinformation')->where('id',$id)->update(['status' => 1]);

        $notification=array(
            'messege'=>'Brand Inactive Successfully Done !!',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }


    public function editslider($id)
    {
       $Data = DB::table('sliderinformation')->where('id',$id)->first();
       return view ('backend.slider.editslider',compact('Data'));
    }


    public function sliderupdate(Request $abc, $id)
    {
        $data = array(
            'title' =>$abc->title,
            'status' =>$abc->status,
            'admin_id' =>Auth()->user()->id,
        );

        $SliderPicture = $abc->file('image');
        $old_image = $abc->old_image;

        if ($SliderPicture) {
            if($old_image) {
                unlink($old_image);
            }
            $image_one_name= hexdec(uniqid()).'.'.$SliderPicture->getClientOriginalExtension();
            Image::make($SliderPicture)->save('public/image/sliderimage/'.$image_one_name,80);
            $data['image']='public/image/sliderimage/'.$image_one_name;
            DB::table('sliderinformation')->where('id',$id)->update($data);

        }

        else {
            DB::table('sliderinformation')->where('id',$id)->update($data);
        }

        $notification=array(
            'messege'=>'Slider Update Successfully Done !!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }


    
}


