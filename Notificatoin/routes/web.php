<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\EmailNotification;
use App\Models\User;
use Illuminate\Support\Facades\Notification;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/email-notification', function (){
    $users = User::find(2);
    //$users->notify(new EmailNotification());
    //Notification::send($users, new EmailNotification());

    $users = User::all();
    foreach($users as $user){
       //Notification::send($user, new EmailNotification()); 
       Notification::send($user, new EmailNotification('Nazmul','Web Journey')); 
    }

    return redirect()->back();
});



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');