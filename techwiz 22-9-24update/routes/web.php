<?php

use App\Models\contactus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = contactus::all();
    return view('index' , compact('data'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/package', function () {
    return view('package');
});

Route::get('/user', function () {
    return view('users.index');
});

Route::get('/view_contact', function () {
    return view('admin.view_contact');
});

Route::get('/user', function () {
    return view('users.user');
});


Route::get('/destination', function () {
    return view('admin.adddestination');
});

Route::get('/packages', function () {
    return view('admin.addpackages');
});

Route::get('/guides', function () {
    return view('admin.addguide');
});

Route::get('/services', function () {
    return view('admin.addservices');
});



//Contact
Route::post('/inserted',[admincontroller::class,('InsertContactusRecord')]);
Route::get('/view_contact',[admincontroller::class,('all_contact')]);
Route::get('/contactus_delete/{id}' , [admincontroller::class , 'contactus_delete']);

//Auth
Route::get('/view_auth',[admincontroller::class,('all_auth')]);
Route::get('/auth_delete/{authid}' , [admincontroller::class , 'authdelete']);

//Trip
Route::get('/trips',[admincontroller::class,('destinationfortrip')]);
Route::post('/addtrips',[admincontroller::class,('addtrips')]);
Route::get('/view_trip',[admincontroller::class,('tripsfetch')]);
Route::get('/destinationdelete/{destinationid}' , [admincontroller::class , 'destinationdelete']);

Route::get('/edit_trip/{id}' , [AdminController::class , 'edit_trip']);
Route::post('/update_trip_fetch/{id}' , [AdminController::class , 'update_trip_fetch']);



//Packages
Route::get('/',[admincontroller::class,('homeviewpackage')]);
Route::post('/insertpackages',[admincontroller::class,('addpackages')]);
Route::get('/fetchpackages',[admincontroller::class,('viewpackages')]);
Route::get('/package',[admincontroller::class,('viewpackagepage')]);
Route::get('/packageview/{pacid}',[admincontroller::class,('showPackage')]);
Route::get('/deletepackage/{id}' , [admincontroller::class,'deletepackage']);



//Destination

Route::post('/adddestination',[admincontroller::class,('adddestination')]);

Route::get('/view_destination',[admincontroller::class,('view_destination')]);
Route::get('/viewtripmessage/{viewtripmessageid}' , [admincontroller::class , 'viewtripmessage']);


//Our Guides
Route::post('/insertguides',[admincontroller::class,('addguides')]);
Route::get('/fetchguides',[admincontroller::class,('viewguides')]);
Route::get('/about',[admincontroller::class,('viewguidepage')]);
Route::get('/deleteguide/{id}' , [admincontroller::class,'deleteguide']);

//Services
Route::post('/insertservices',[admincontroller::class,('addservices')]);
Route::get('/fetchservice',[admincontroller::class,('viewservice')])->name('admin.view_services');
Route::get('/service',[admincontroller::class,('viewservicepage')]);
// service delete
Route::get('/deleteservice/{id}',[admincontroller::class,'deleteService']);
// service update
Route::get('/updateservice/{id}', [admincontroller::class, 'fetchupdateservice']);
Route::post('/updateservices/{id}', [admincontroller::class, 'updateService']);

// Expense
Route::post('/addexpenseinserted', [admincontroller::class,'addexpenses']);
Route::get('/addexpense',[admincontroller::class,('tripforexpense')]);
Route::get('/expenseforuser',[admincontroller::class,('tripforexpenseforuser')]);
Route::get('/expenseforuserdata',[UsersController::class,('viewusersexpensedata')]);

Route::get('/view_expense',[admincontroller::class,('viewexpense')]);
Route::get('/deleteexpense/{id}' , [admincontroller::class,'deleteexpense']);



// categories
Route::get('/categories', function () {
    return view('admin.addcategories');
});
Route::post('/insercategories',[admincontroller::class,('addcategories')]);
Route::get('/fetchcategories',[admincontroller::class,('viewcategories')]);
Route::get('/deletecategory/{id}' , [admincontroller::class,'deletecategory']);


//currency
// Route::post('/currency',[currency/CurrencyController::class,'currencies']);

// activity route
Route::get('/recentactivity', function () {
    return view('admin.addactivity');
});

Route::post('/insertactivity',[admincontroller::class,('addrecactivities')]);
Route::get('/fetchactivity',[admincontroller::class,('viewactivity')]);
Route::get('/deleteactivity/{id}' , [admincontroller::class,'deleteactivity']);



// Expense
Route::get('/addexpense_users', function () {
    return view('users.addexpense_users');
});
Route::post('/addexpenseinserted', [Userscontroller::class,'addusersexpenses']);
Route::get('/viewuserexpense',[Userscontroller::class,('viewusersexpense')]);
Route::get('/usersview_expense',[Userscontroller::class,('viewusersexpense')]);
// Route::get('/deleteusersexpense/{id}' , [Userscontroller::class,'deleteusersexpense']);


// iter
Route::get('/additems', function () {
    return view('users.additems');
});

//items work
Route::post('/insertitem',[UsersController::class,('additems')]);
Route::get('/fetchitem',[UsersController::class,('viewitems')]);
Route::get('/itemdelete/{id}',[UsersController::class,'deleteitems']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role == 1)
        {
            $data = contactus::all();
            return view('admin.index' , compact('data'));
           
        }
        else if(Auth::User()->role == 0)
        {
            return view('users.index');

        }
        
        else
        {
            return view('index');
        }
        return view('dashboard');
    })->name('dashboard');
});
