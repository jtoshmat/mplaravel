<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenewalDepartmentController extends Controller
{
    public function renewLicense(){
        return view("pick_documents");
    }
}
