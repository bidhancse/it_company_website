<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use DB;
Use Auth;

class ClientController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function clients()
    {
        return view('backend.clients.clients');
    }


    public function clientsinsert(Request $abc) 
    {

        $data = array(

            'company_name' =>$abc->company_name,
            'website_url' =>$abc->website_url,
            'status' =>$abc->status,
            'admin_id' =>Auth()->user()->id,
        );

        $WebsiteLogo = $abc->file('image');

        if ($WebsiteLogo) {
            $image_one_name= hexdec(uniqid()).'.'.$WebsiteLogo->getClientOriginalExtension();
            Image::make($WebsiteLogo)->save('public/image/websitelogo/'.$image_one_name,80);
            $data['image']='public/image/websitelogo/'.$image_one_name;
            DB::table('clientsinformation')->insert($data);

        }

        else {
            DB::table('clientsinformation')->insert($data);
        }

        $notification=array(
            'messege'=>'Clients Insert Successfully Done !!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
        
    }


    public function manageclients()
    {
        $Clients = DB::table('clientsinformation')->get();
        return view('backend.clients.manageclients', compact('Clients'));
    }


    public function deleteClients($id)
    {
        $check = DB::table('clientsinformation')->where('id',$id)->first();

        if(isset($check->image)) {
            unlink($check->image);

            DB::table('clientsinformation')->where('id',$id)->delete();
        }

        else {
            DB::table('clientsinformation')->where('id',$id)->delete();
        }

        $notification=array(
            'messege'=>'Clients Delete Successfully Done !!',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }



    public function editClients($id)
    {
        $Data = DB::table('clientsinformation')->where('id',$id)->first();
        return view ('backend.clients.editClients',compact('Data'));
    }


    public function clientsupdate(Request $abc, $id)
    {
        $data = array(

            'company_name' =>$abc->company_name,
            'website_url' =>$abc->website_url,
            'status' =>$abc->status,
            'admin_id' =>Auth()->user()->id,
        );

        $WebsiteLogo = $abc->file('image');
        $old_image = $abc->old_image;

        if ($WebsiteLogo) {
            if($old_image) {
                unlink($old_image);
            }
            $image_one_name= hexdec(uniqid()).'.'.$WebsiteLogo->getClientOriginalExtension();
            Image::make($WebsiteLogo)->save('public/image/websitelogo/'.$image_one_name,80);
            $data['image']='public/image/websitelogo/'.$image_one_name;
            DB::table('clientsinformation')->where('id',$id)->update($data);

        }

        else {
            DB::table('clientsinformation')->where('id',$id)->update($data);
        }

        $notification=array(
            'messege'=>'CCLients Update Successfully Done !!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }



}
