<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    //
    public function index(): View
    {
        
 
        return View('profile');
    }
}
