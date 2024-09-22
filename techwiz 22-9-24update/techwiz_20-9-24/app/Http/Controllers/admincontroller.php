<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\packages;
use App\Models\contactus;
use App\Models\tripmodel;
use Illuminate\Http\Request;
use App\Models\destinationmodel;
use Illuminate\Database\Eloquent\Model;




class admincontroller extends Controller
{
    public function InsertContactusRecord(Request $contactdata)
    {
        $data = new contactus();
        $data->Name = $contactdata->cname;
        $data->Email = $contactdata->cemail;
        $data->Contact_number = $contactdata->cnumber;
        $data->Message = $contactdata->cmessage;
        $data->save();
        return redirect()->back();

    }
    public function all_contact(){
        $data = contactus::all();
        return view('admin.view_contact' , compact('data'));
    }

    public function contactus_delete($id){
        $data = contactus::find($id)->delete();
        return redirect()->back();
    }

    public function all_auth(){
        $data = User::all();
        return view('admin.view_auth' , compact('data'));
    }
    public function authdelete($authid){
        $data = User::find($authid)->delete();
        return redirect()->back()->with('authmessagedelete' , 'auth data deleted successfully');
    }


    

    public function addtrips(Request $req)
    {
        $trip = new tripmodel();
        $trip->user_id = Auth()->id();
        $trip->start_date = $req->tripsdate;
        $trip->end_date = $req->tripedate;
        $trip->trip_name = $req->trip_name;
        $trip->destination = $req->destination;
        $trip->budget = $req->trip_budget;
        $trip->save();
        return redirect()->back();
    }

    public function tripsfetch()
    {
        // Posts ke sath associated User ko fetch karna
        $posts = tripmodel::with('user')->get();

        return view('admin.view_trip', compact('posts'));
    }
 

   
    public function adddestination(Request $req)
    {
        $dest = new destinationmodel();
        $dest->Destination_Name = $req->destname;
        $dest->save();
        return redirect()->back();


    }

    public function destinationfortrip()
    {
        $data = destinationmodel::all();
        return view('admin.addtrips', compact('data'));
    }
    public function destinationview()
    {
        $data = destinationmodel::all();
        return view('admin.destinationview', compact('data'));
    }

    public function destinationdelete($destinationid){
        $data = destinationmodel::find($destinationid)->delete();
        return redirect()->back()->with('destinationmessage' , 'destination data deleted successfully');
    }

    public function viewtripmessage($viewtripmessageid){
        $posts = tripmodel::find($viewtripmessageid)->delete();
        return redirect()->back()->with('viewtripmessage','viewtripmessage data deleted successfully');
    }

    public function addpackages(Request $req)
    {
        $package_details = new packages();
        $package_details->Package_price = $req->packageprice;
        $package_details->Package_description = $req->packagedescription;
        $image = $req->file('packagefile');
        $ext = rand() . "." . $image->getClientOriginalName();
        $myfile = $image->move("Dynamic_images", $ext);
        $package_details->Packages_image = $myfile;
        $package_details->save();
        return redirect()->back()->with("packagemessage","Package Inserted Successfully!");
    }

    public function viewpackages()
    {
        $packageview = packages::all();
        return view('admin.view_packages', compact('packageview'));
    }


}
