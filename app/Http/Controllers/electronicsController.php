<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ElectronicFormRequest;

class electronicsController extends Controller
{
    public function create(){
        return view('electronics.create');
    }

    public function store(ElectronicFormRequest $request){
        $request->validated(); // Request-Form validation.

    
        // ANOTHER METHODS FOR VALIDATIONS

        // public function store(Request $request){
        // $request -> validate([
        //     'name'=> 'required|min:3|max:255|string',
        //     // 'name'=> ['required', 'min:3', 'max:255', 'string'], // using in array format  
        //     'electronic_category'=> 'required|string',
        //     'description'=> 'required|string',
        //     'is_available'=> 'sometimes',
        //     'price'=> 'required|numeric',
        // ]);
    }
}
