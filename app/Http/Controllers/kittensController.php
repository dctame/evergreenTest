<?php

namespace App\Http\Controllers;

use App\breed;
use App\Http\Requests\getFilteredKittens;
use App\kittens;
use Illuminate\Http\Request;

class kittensController extends Controller
{

    public function index(getFilteredKittens $request){

        $AvailableFilters = kittens::AvailableFilters();
        $AvailableFilters->breed = breed::select('breed')->distinct()->orderBy('breed')->get();

        $kittens = kittens::filter()->with('breed')->paginate(5);
        return view('kittens', compact('AvailableFilters', 'kittens'));
    }

}
