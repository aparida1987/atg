<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\ATG;
use Session;
use Validator;
use Response;



class ATGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
               'name' => 'required|string|max:50',           
               'email' => 'required|email|unique:atg',
               'pincode' => 'required|digits:6'
           ]);
        
      
           if ($validator->fails()) {
                return redirect('/')
                            ->withErrors($validator)
                            ->withInput();
            }

            $name = $request->input('name');
            $email = $request->input('email');
            $pincode = $request->input('pincode');

            try {

                $insert = ATG::create(['name' => $name,
                                        'email' => $email,
                                        'pincode' => $pincode,            
                                    ]);
                return redirect()->back()->with('message', 'Records successfully inserted!');
            }
            catch(\Exception $e){

                return redirect()->back()->with('message', $e->getMessage()); 
                
            }   

        }


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

    public function checkEmail(Request $request){

        $email = $request->input('email');

        $user = ATG::all()->where('email', $email)->first();

        if ($user) {

            return Response::json(array('msg' => 'true'));

        }else{
            
            return Response::json(array('msg' => 'false'));
        }

    }
}
