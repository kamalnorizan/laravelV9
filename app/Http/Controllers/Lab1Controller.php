<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lab1Controller extends Controller
{
    public function index()
    {
        $myString = 'Hello World';

        // return view('lab1.index', ['myString'=>$myString])
        $arrNames = ['Kamal','Nabil','Aisyah'];
        $names = $this->getNames();
        // dump($arrNames[count($arrNames)-1]);
        // dd($names->last());

        $ages = collect([2,35,18]);
        return view('lab1.index', compact('myString','names','arrNames'));
    }

    public function show()
    {
        $names = $this->getNames();
        return view('lab1.show',compact('names'));
    }

    public function getNames()
    {
        $names = collect(['Syakir','Ammar','Irsyad', 'Aidil','Anis']);

        return $names;
    }

}
