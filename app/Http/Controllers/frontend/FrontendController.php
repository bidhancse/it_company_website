<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{


    public function home()
    {
        $SliderActive = DB::table('sliderinformation')->orderBy('id','DESC')->get();
        $About = DB::table('aboutinformation')->first();
        $Services = DB::table('servicesinformation')->where('status',1)->get();
        $Software = DB::table('softwareinformation')->where('status',1)->get();
        return view('frontend.home', compact('SliderActive','About','Services','Software'));
    }


    public function aboutus()
    {
        $About = DB::table('aboutinformation')->first();
        return view('frontend.about.aboutus', compact('About'));
    }


    public function whychosseus()
    {
        $WhyChosseUs = DB::table('whychosseusinformation')->first();
        return view('frontend.about.whychosseus', compact('WhyChosseUs'));
    }


    public function teammember()
    {
        $Team = DB::table('teaminformation')->get();
        return view('frontend.team.team', compact('Team'));
    }


    public function course()
    {
        $Course = DB::table('courseinformation')->get();
        return view('frontend.course.course', compact('Course'));
    }


    public function coursedetails($id, $course_name)
    {
        $CourseDetails = DB::table('courseinformation')->where('id',$id)->first();
        return view('frontend.course.coursedetails', compact('CourseDetails'));
    }


    public function services($id)
    {
        $Services = DB::table('servicesinformation')->where('id',$id)->first();
        return view('frontend.services.servicesdetails', compact('Services'));
    }


    public function software($id)
    {
        $Software = DB::table('softwareinformation')->where('id',$id)->first();
        return view('frontend.software.softwaredetails', compact('Software'));
    }


    public function contactus()
    {
        return view('frontend.contact.contact');
    }


    public function usermessage(Request $abc)
    {
      $data = array(

        'name' =>$abc->name,
        'email' =>$abc->email,
        'phone' =>$abc->phone,
        'subject' =>$abc->subject,
        'message' =>$abc->message,
    );


      DB::table('usermessage')->insert($data);

      $notification=array(
        'messege'=>'Message Send Successfully Done !!',
        'alert-type'=>'success'
    );
      return Redirect()->back()->with($notification);
  }




}
