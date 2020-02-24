<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminRegister;

class AdminRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-layouts.register-page-admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $_POST;

        $this->validate($request, [
            'login' => 'required',
            'email-admin-register' => 'required',
            'password' => 'required'
       ]);
       
       $admin = new AdminRegister();
       $admin -> login = $request -> input('login');
       $admin -> email_admin_register = $request -> input('email-admin-register');
       $admin -> password = $request ->input('password');

       if($data['password_2'] != $data['password']){
            return redirect('/register-page-admin') -> with('error', 'Password re-entered incorrectly');
       }
       else{
            $admin -> save();
            return redirect('/administrator');
       }       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
