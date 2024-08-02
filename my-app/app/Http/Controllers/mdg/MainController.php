<?php

namespace App\Http\Controllers\mdg;

use App\Http\Controllers\Controller;
use App\Models\mdg\Specialties;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){
        $specialties = Specialties::all();
        return view('mdg/index', ['specialties' => $specialties]);
    }
}
