<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class ContactoController extends Controller
{
    //
    public function contacto(){

        return view('site.contacto');

    }
}
