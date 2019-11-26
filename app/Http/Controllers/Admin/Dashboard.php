<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class Dashboard extends Controller
{

    //dashboard page load
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
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
        //
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
    public function edit()
    {
        $id = Auth::user()->id;
    	$data = User::where('id',$id)->first();
        return view('admin.update-profile',compact('data'));
    }

    public function view($id)
    {
        
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

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',          
        ]);

        $check = User::where('email',$request['email'])->first();
        if(!empty($check) && $id !=$check->id)
        { 
            return back()->with('error','Email id already registered!');
        }

        $inst = User::find($id);
        $inst->name       = ucfirst(trim($request['name'])); 
        $inst->email            = trim($request['email']);
        $inst->mobile           = trim($request['mobile']);
        $pass                   = trim($request['password']);
        $con_pass               = trim($request['password_confirmation']);

        if($pass!='' && $pass!=$con_pass)
        {
            return back()->with('error','Confirm password not match'); 
        }
        if($pass!='')
        {
            $inst->password     = bcrypt($pass);
        }

        $result =  $inst->save();               
        if($result)
        {
           return back()->with('success','Profile updated successfully');
        }else{
           return back()->with('error','Profile not updated'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}