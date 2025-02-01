<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request )
    {
        // $name= $request->name;
        // $description= $request->description;
        // $price= $request->price;

        $data=[
            'name' => $request->name,
            'description' => $request->description,
            'price' =>$request->price
        ];

        //dd($request);
   Book::create($data);

        return view('books.store');
    }
}
