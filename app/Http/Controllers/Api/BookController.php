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

        //paginateメソッド 
        $sort = $request->sort;
        $items = Book::orderBy($sort, 'asc')->paginate(5);
        $param = ['items' => $items, 'sort' => $sort];
        return response()->json($items);
    }

    public function create(Request $request)
    {
        // $request->validate($request, [
        //     'title' => 'required',
        //     'author' => 'required',
        //     'description' => 'max:200',
        // ]);

        $item = new Book;
        $item->title = $request->title;
        $item->author = $request->author;
        $item->publisher = $request->publisher;
        $item->description = $request->description;
        $item->save();

        // Book::insert([
        //     "title" => $item->title, 
        //     "author" => $item->author,
        //     "publisher" => $item->publisher,
        //     "description" => $item->description,
        // ]);

        // $items = Book::all();
        return response()->json($item);
    }

    public function delete(Request $request)
    {
        $item = Book::where('id', $request->id)->delete();
        
        // $items = Book::all();
        return response()->json($item);
    }

    public function search(Request $request)
    {
        $text = Book::where('title', $request->input)->get();
        $param = ['input' => $request->input, 'text' => $text];
        return response()->json($item);
    }
    
}
