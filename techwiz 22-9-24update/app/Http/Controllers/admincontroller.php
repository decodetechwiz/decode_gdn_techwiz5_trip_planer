<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\packages;
use App\Models\contactus;
use App\Models\tripmodel;
use App\Models\Guidemodel;
use App\Models\servicemodel;
use Illuminate\Http\Request;
use App\Models\categorymodel;
use App\Models\expensismodel;
use App\Models\destinationmodel;
use App\Models\activitymodel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;




class admincontroller extends Controller
{
    // contacts code start
    public function InsertContactusRecord(Request $contactdata)
    {
        $contactdata->validate ([
            "cnumber" => "required",
            "cmessage"=>"required",
    
        ]);
        $data = new contactus();
        $data->Name = $contactdata->cname;
        $data->Email = $contactdata->cemail;
        $data->Contact_number = $contactdata->cnumber;
        $data->Message = $contactdata->cmessage;
        $data->save();
        return redirect()->back()->with('contactmessage' , 'Contact data Add successfully');


    }
    public function all_contact(){
        $data = contactus::all();
        return view('admin.view_contact' , compact('data'));
    }

    public function contactus_delete($id){
        $data = contactus::find($id)->delete();
        return redirect()->back();
    }
    // contacts code delete

    // auth code start
    public function all_auth(){
        $data = User::all();
        return view('admin.view_auth' , compact('data'));
    }
    public function authdelete($authid){
        $data = User::find($authid)->delete();
        return redirect()->back()->with('authmessagedelete' , 'auth data deleted successfully');
    }
    // auth code end


    // trips code start
    public function addtrips(Request $req)
    {
        $req->validate ([
            "start_date" => "required",
            "end_date"=>"required",
            "trip_name" => "required",
            "destination"=>"required",
            "trip_budget"=>"required",
        ]);
        $trip = new tripmodel();
        $trip->user_id = Auth()->id();
        $trip->start_date = $req->start_date;
        $trip->end_date = $req->end_date;
        $trip->trip_name = $req->trip_name;
        $trip->destination = $req->destination;
        $trip->budget = $req->trip_budget;
        $trip->save();
        return redirect()->back()->with("tripmessage","Trip Submitted");
    }
    public function tripsfetch()
    {
        $posts = tripmodel::with('user')->get();
        return view('admin.view_trip', compact('posts'));
    }

    public function viewtripmessage($viewtripmessageid){
        $posts = tripmodel::find($viewtripmessageid)->delete();
        return redirect()->back()->with('viewtripmessage','viewtripmessage data deleted successfully');
    }



    public function edit_trip($id){
        $trip = tripmodel::find($id);
        return view('admin.edit_trip_fetch' , compact('trip'));
    }

    public function update_trip_fetch(Request $req , $id){
        $trip = tripmodel::find($id);
    $trip->start_date = $req->start_date;
    $trip->end_date = $req->end_date;
    $trip->trip_name = $req->trip_name;
    $trip->budget = $req->trip_budget;
    $trip->save();
    $posts = tripmodel::with('user')->get();
    return view('admin.view_trip', compact('posts'));

        
    }
    // trips code end

 

    // destination code start
    public function adddestination(Request $req)
    {
        $req->validate ([
            'destination_name' => 'required',
        ]);
        $dest = new destinationmodel();
        $dest->Destination_Name = $req->destination_name;
        $dest->save();
        return redirect()->back()->with("adddestination","AddDestination Submitted");
    }

    public function destinationfortrip()
    {
        $data = destinationmodel::all();
        return view('admin.addtrips', compact('data'));
    }
    public function view_destination()
    {
        $data = destinationmodel::all();
        return view('admin.view_destination', compact('data'));
    }

    public function destinationdelete($destinationid){
        $data = destinationmodel::find($destinationid)->delete();
        return redirect()->back()->with('destinationmessage' , 'destination data deleted successfully');
    }
    // destination code end

    //package code
    public function addpackages(Request $req)
    {
        $package_details = new packages();
        $package_details->Packages_location = $req->packagelocation;
        $package_details->Package_days = $req->packagedays;
        $package_details->Package_persons = $req->packagePersons;
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


    public function homeviewpackage()
    {
        $packageview = packages::all();
        $guideview = Guidemodel::all();
        $serviceView = servicemodel::all();
        $posts = tripmodel::with('user')->get();
        $recactivity = activitymodel::all();
        return view('index', compact('packageview', 'guideview' , 'serviceView', 'posts', 'recactivity'));
    }

    public function viewpackagepage()
    {
        $packageview = packages::all();
        return view('package', compact('packageview'));
    }


    public function showPackage($pacid)
    {
        // Fetch the package by ID
        $packageview = packages::find($pacid);
    
        // Return the view with the package data
        return view('viewpackageuser', compact('packageview'));
    }


    public function deletepackage($deletepackageid){
        $delete = packages::find($deletepackageid)->delete();
        return redirect()->back()->with('viewpackagemessage','view package data deleted successfully');
    }
    //package code end


    //guide work
    public function addguides(Request $req)
    {
        $guide_details = new Guidemodel();
        $guide_details->Guide_name = $req->guidename;
        $guide_details->Guide_designation = $req->guidedesignation;
        $image = $req->file('guideprofile');
        $ext = rand() . "." . $image->getClientOriginalName();
        $myfile = $image->move("Dynamic_images", $ext);
        $guide_details->Guide_profile = $myfile;
        $guide_details->save();
        return redirect()->back()->with("guidemessage","Our Guide Inserted Successfully!");
    }

    public function viewguides()
    {
        $guideview = Guidemodel::all();
        return view('admin.view_guides', compact('guideview'));
    }

    public function viewguidepage()
    {
        $guideview = Guidemodel::all();
        return view('about', compact('guideview'));
    }

    public function deleteguide($deleteguideid){
        $delete = Guidemodel::find($deleteguideid)->delete();
        return redirect()->back();
    }
    //guide work end

    //service code
    public function addservices(Request $req)
    {
        $guide_details = new servicemodel();
        $guide_details->Service_icon = $req->serviceicon;
        $guide_details->Service_name = $req->servicename;
        $guide_details->Service_description = $req->servicedescription;
        $guide_details->save();
        return redirect()->back()->with("servicemessage","Service Inserted Successfully!");
    }


    public function viewservice()
    {
        $serviceView = servicemodel::all();
        return view('/admin.view_services', compact('serviceView'));
    }

    public function viewservicepage()
    {
        $serviceView = servicemodel::all();
        return view('service', compact('serviceView'));
    }

    // service delete
    public function deleteService($deleteserviceid){
        $data = servicemodel::find($deleteserviceid)->delete();
        return redirect()->back()->with('servicedelete' , 'servicedelete deleted successfully');
    }
    // fetch update
    public function fetchupdateservice($fetchupdateserviceid) {
        $updateid = servicemodel::find($fetchupdateserviceid);
        return view('admin.update_service', compact('updateid')); 
    }
    
    public function updateService($updateid, Request $req) {
        $updateService = servicemodel::find($updateid);
        $updateService->Service_icon = $req->serviceicon;
        $updateService->Service_name = $req->servicename;
        $updateService->Service_description = $req->servicedescription;
        $updateService->update();
        return redirect()->route('admin.view_services')->with("servicemessage", "Service updated Successfully!");
    }
    //service code end

    // Expense
        public function addexpenses(Request $req)
        {
            // Validate request
            $req->validate([
                'amount' => 'required|numeric',
                'category' => 'required|string',
                'expense_date' => 'required|date',
                'notes' => 'nullable|string',
            ]);
        
            // Create a new expense
            $expense = new expensismodel();
            $expense->user_id = Auth::id();
            $expense->amount = $req->amount;
            $expense->category = $req->category;
            $expense->expense_date = $req->expense_date;
            $expense->trip_name = $req->expensedara;
            $expense->notes = $req->notes;
            $expense->save();
        
            return redirect()->back()->with("addexpensemessage", "Add Expenses Submitted");
        }

        public function viewexpense()
    {
        $viewexpen = expensismodel::all();
        return view('admin.view_expense', compact('viewexpen'));
    }

    public function deleteexpense($deleteexpenseid){
        $delete = expensismodel::find($deleteexpenseid)->delete();
        return redirect()->back();
    }


        public function tripforexpense()
        {
            $expense = tripmodel::all();
            return view('admin.addexpense', compact('expense'));
        }

        public function tripforexpenseforuser()
        {
            $expense = tripmodel::all();
            return view('users.addexpense_users', compact('expense'));
        }
    

    // categories
    public function addcategories(Request $req)
    {
        $cat = new categorymodel();
        $cat->user_id = Auth()->id();
        $cat->Category_name	 = $req->categoryname;
        $cat->save();
        return redirect()->back();
    }


    public function viewcategories()
    {
        $viewcategory = categorymodel::all();
        return view('admin.view_category', compact('viewcategory'));
    }
    
    
    public function deletecategory($deletecategoryid){
        $delete = categorymodel::find($deletecategoryid)->delete();
        return redirect()->back();
    }


    

    // activity code
    public function addrecactivities(Request $req)
    {
        $trip = new activitymodel();


        $trip->Activity_name = $req->activityname;
        $trip->start_date = $req->activstart_date;
        $trip->end_date = $req->activend_date;
        $trip->Location = $req->activlocation;
        $trip->Expense_category = $req->expense_category;
        $trip->Amount = $req->activamount;
        $trip->Payment_method = $req->activpayment;
        $trip->Notes = $req->activnotes;
        $trip->save();
        return redirect()->back()->with("activitymessage","Activity Submitted");
    }

    public function viewactivity()
    {
        $activview = activitymodel::all();
        return view('admin.viewactivity', compact('activview'));
    }
    
    public function deleteactivity($deleteactivityid){
        $delete = activitymodel::find($deleteactivityid)->delete();
        return redirect()->back()->with('viewactivmessage','view activity message data deleted successfully');
    }
    

    


}
