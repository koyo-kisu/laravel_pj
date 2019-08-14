<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $items = Book::all();
        return response()->json($items);
    }

    public function create(Request $request)
    {
        $item = new Book;
        $item->title = $request->title;
        $item->author = $request->author;
        $item->publisher = $request->publisher;
        $item->description = $request->description;
        $item->save();

        $items = Book::all();
        return response()->json($items);
    }
    
}
