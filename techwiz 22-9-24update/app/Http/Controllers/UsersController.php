<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\expensismodel;
use App\Models\itineraryitems;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    // Expense
    public function addusersexpenses(Request $req)
    {
        // Validate request
        $req->validate([
            'amount' => 'required|numeric',
            'category' => 'required|string',
            'expense_date' => 'required|date',
            'notes' => 'nullable|string',
        ]);
    
        // Create a new expense
        $expenseuser = new expensismodel();
        $expenseuser->user_id = Auth::id();
    
        $expenseuser->amount = $req->amount;
        $expenseuser->category = $req->category;
        $expenseuser->expense_date = $req->expense_date;
        $expenseuser->trip_name = $req->expensedara;
        $expenseuser->notes = $req->notes;
        $expenseuser->save();
    
        return redirect()->back()->with("addexpensemessage", "Add Expenses Submitted");
    }

    public function viewusersexpensedata()
{
    $viewusersexpen = expensismodel::all();
    return view('users.view_expense_users', compact('viewusersexpen'));
}

public function additems(Request $req)
    {
        $trip = new itineraryitems();
        $trip->Transport = $req->itemtransport;
        $trip->Lodging = $req->itemLodging;
        $trip->Activities = $req->itemactivities;
        $trip->Accommodation = $req->itemaccommodation;

        $trip->save();
        return redirect()->back()->with("itemsmessage","Items Submitted");
    }

    public function viewitems()
    {
        $itemview = itineraryitems::all();
        return view('users.viewitems', compact('itemview'));
    }


    public function deleteitems($deleteitemsid){
        $delete = itineraryitems::find($deleteitemsid)->delete();
        return redirect()->back()->with('itemdelete','item delete successfully!!!');
    }


}
