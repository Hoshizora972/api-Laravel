<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //Methode pour afficher le formulaire de contact 

    public function index(){
        return view('contact');
    }
}
