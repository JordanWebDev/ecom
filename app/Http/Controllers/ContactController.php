<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
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
        //validate form fields
        $this->validate($request, [
            'name' => 'required',
            'email'=> 'required|email',
            'message' => 'required',
        ]);
        //sending message using contact-message.blade.php inside emails which basically renders message
        Mail::send('emails.contact-message', [
            //passing message in
            'msg' => $request->message

        ], function($mail) use($request){
            //using this function to set from and to and subject
            $mail->from($request->email, $request->name);

            $mail->to('dev.jordn@gmail.com')->subject('Contact Message From Ecommerce');

        });

        return redirect()->back()->with('flash_message', 'Thank you for contacting us! We will respond within 24 hours!');
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
