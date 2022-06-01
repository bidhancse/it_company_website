<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use DB;
Use Auth;

class WebsiteSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function Settings()
    {
        $Data = DB::table('settinginformation')->first();
        return view('backend.websitesettings.setting', compact('Data'));
    }


    public function updatesettings(Request $abc, $id)
    {
        $data = array(
            'title'     => $abc->title,
            'email'     => $abc->email,
            'phone'     => $abc->phone,
            'facebook'  => $abc->facebook,
            'twitter'   => $abc->twitter,
            'instagram' => $abc->instagram,
            'youtube'   => $abc->youtube,
            'admin_id'  => Auth()->user()->id,
        );

        $LogoPicture = $abc->file('logo');
        $FaveiconPicture = $abc->file('favicon');
        $oldimage = DB::table('settinginformation')->first();


        if ($LogoPicture) {
            if ($oldimage->logo) {
                unlink($oldimage->logo);
            }

            $image_one_name= hexdec(uniqid()).'.'.$LogoPicture->getClientOriginalExtension();
            Image::make($LogoPicture)->save('public/image/settingimage/'.$image_one_name,80);
            $data['logo']='public/image/settingimage/'.$image_one_name;
            DB::table('settinginformation')->where('id',$id)->update($data);
        }

        else{
            DB::table('settinginformation')->where('id',$id)->update($data);
        }

        if ($FaveiconPicture) {
            if ($oldimage->favicon) {
                unlink($oldimage->favicon);
            }

            $image_one_name= hexdec(uniqid()).'.'.$FaveiconPicture->getClientOriginalExtension();
            Image::make($FaveiconPicture)->save('public/image/settingimage/'.$image_one_name,80);
            $data['favicon']='public/image/settingimage/'.$image_one_name;
            DB::table('settinginformation')->where('id',$id)->update($data);
        }

        else{
            DB::table('settinginformation')->where('id',$id)->update($data);
        }

        $notification=array(
            'messege'=>'Setting update Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }


    public function Contact()
    {
        $Data = DB::table('contactinformation')->first();
        return view('backend.websitesettings.contact', compact('Data'));
    }


    public function contactupdate(Request $abc, $id)
    {
        $data = array(

            'description_one' =>$abc->description_one,
            'description_two' =>$abc->description_two,
            'admin_id' =>Auth()->user()->id,
        );


        DB::table('contactinformation')->where('id',$id)->update($data);

        $notification=array(
            'messege'=>'Contact Update Successfully Done !!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }


    public function whychosseus()
    {
        $Data = DB::table('whychosseusinformation')->first();
        return view('backend.websitesettings.whychosseus', compact('Data'));
    }


    public function whychosseusupdate(Request $abc, $id)
    {
        $data = array(

            'description' =>$abc->description,
            'admin_id' =>Auth()->user()->id,
        );


        DB::table('whychosseusinformation')->where('id',$id)->update($data);

        $notification=array(
            'messege'=>'Data Update Successfully Done !!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }




}
