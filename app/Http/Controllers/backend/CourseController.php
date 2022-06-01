<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use DB;
Use Auth;

class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function course()
    {
        return view('backend.course.course');
    }



    public function courseinsert(Request $abc) 
    {

        $data = array(

            'course_name' =>$abc->course_name,
            'title' =>$abc->title,
            'description' =>$abc->description,
            'price' =>$abc->price,
            'status' =>$abc->status,
            'admin_id' =>Auth()->user()->id,
        );

        $CoursePicture = $abc->file('image');

        if ($CoursePicture) {
            $image_one_name= hexdec(uniqid()).'.'.$CoursePicture->getClientOriginalExtension();
            Image::make($CoursePicture)->save('public/image/courseimage/'.$image_one_name,80);
            $data['image']='public/image/courseimage/'.$image_one_name;
            DB::table('courseinformation')->insert($data);

        }

        else {
            DB::table('courseinformation')->insert($data);
        }

        $notification=array(
            'messege'=>'Course Insert Successfully Done !!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
        
    }



    public function managecourse()
    {
        $Course = DB::table('courseinformation')->get();
        return view('backend.course.managecourse', compact('Course'));
    }



    public function inactiveCourse($id)
    {

        DB::table('courseinformation')->where('id',$id)->update(['status' => 2]);

        $notification=array(
            'messege'=>'Course Inactive Successfully Done !!',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }


    public function activeCourse($id)
    {

        DB::table('courseinformation')->where('id',$id)->update(['status' => 1]);

        $notification=array(
            'messege'=>'Course Active Successfully Done !!',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }


    public function deleteCourse($id)
    {
        $check = DB::table('courseinformation')->where('id',$id)->first();

        if(isset($check->image)) {
            unlink($check->image);

            DB::table('courseinformation')->where('id',$id)->delete();
        }

        else {
            DB::table('courseinformation')->where('id',$id)->delete();
        }

        $notification=array(
            'messege'=>'Course Delete Successfully Done !!',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }


    public function editCourse($id)
    {
        $Data = DB::table('courseinformation')->where('id',$id)->first();
       return view ('backend.course.editcourse',compact('Data'));
    }


    public function courseupdate(Request $abc, $id)
    {
        $data = array(

            'course_name' =>$abc->course_name,
            'title' =>$abc->title,
            'description' =>$abc->description,
            'price' =>$abc->price,
            'status' =>$abc->status,
            'admin_id' =>Auth()->user()->id,
        );

        $CoursePicture = $abc->file('image');
        $old_image = $abc->old_image;

        if ($CoursePicture) {
            if($old_image) {
                unlink($old_image);
            }
            $image_one_name= hexdec(uniqid()).'.'.$CoursePicture->getClientOriginalExtension();
            Image::make($CoursePicture)->save('public/image/courseimage/'.$image_one_name,80);
            $data['image']='public/image/courseimage/'.$image_one_name;
            DB::table('courseinformation')->where('id',$id)->update($data);

        }

        else {
            DB::table('courseinformation')->where('id',$id)->update($data);
        }

        $notification=array(
            'messege'=>'Course Update Successfully Done !!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }












}
