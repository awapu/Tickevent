<?php

namespace App\Http\Controllers;

use App\Models\eventos;
use Illuminate\Http\Request;

class indexAllEventsController extends Controller
{
    public function index()
    {
        $datos['eventosi']=eventos::all();
        return view('welcome', $datos);
    }  
}
