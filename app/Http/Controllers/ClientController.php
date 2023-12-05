<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Notifications\ClientConfirmation;
use Illuminate\Support\Facades\Notification;



class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('contact');
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
        //
            $validatedData = $request ->validate([
                'name' => 'required',
                'firstName' => 'required',
                'number' => 'required',
                'email' => 'required|email',
                'message' => 'required',
                 
            ]);

        $contact = new Client;
        $contact->name = $validatedData['name'];
        $contact->firstName = $validatedData['firstName'];
        $contact ->number = $validatedData['number'];
        $contact ->email = $validatedData['email'];
        $contact ->message = $validatedData['message'];

        $contact->save();

        session()->flash('success', 'Votre message a été envoyé avec succès. Nous vous recontacterons dans les plus brefs délais.');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * *

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
