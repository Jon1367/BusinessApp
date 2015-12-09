<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class userAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');


        //echo  Hash::make();


        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            $data = array(
                'email'=>$email
            );
            //var_dump($data);

            session(['userEmail' => $email]);
            return view('userHomePage',$data);

        }else{
            //echo 'failed';
            return view('welcome');

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logOut(Request $request)
    {
        $request->session()->flush();

        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createUser(Request $request)
    {
            $email = $request->input('email');
            $password = $request->input('password');

            // echo $email;
            // echo $password;

            DB::table('users')->insert(
                ['email' => $email, 'password' =>  Hash::make($password)]
            );

            return view('welcome');
       
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
