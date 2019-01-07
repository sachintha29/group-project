<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
class AdminController extends Controller
{
    public function __consctuct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $user = auth()->user();
        return view('admin.profile.index', compact('user'));
    }
    public function edit(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nic = $request->nic;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->save();
        return $user;
    }

    public function show(User $user)
    {
        return $user;
    }

    public function main()
    {
        $user = auth()->user();
        $users_count=\App\User::count();
        $courses_count=\App\Course::count();
        $orders_count=\App\Order::count();
        //dd($courses_count);

            return view('admin.index')->with(compact(['users_count','courses_count','orders_count']));
        

    }

   
}