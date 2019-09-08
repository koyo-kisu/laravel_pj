<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        //Bookクラスのデータを$itemsに代入
        $items = Book::all();
        //itemsをjson形式で返す
        return response()->json($items);

        //paginateメソッド 
        // $sort = $request->sort;
        // $items = Book::orderBy($sort, 'asc')->paginate(5);
        // $param = ['items' => $items, 'sort' => $sort];
        // return response()->json($items);
    }

    public function create(Request $request)
    {

        $item = new Book;
        
        $item->title = $request->title;
        $item->author = $request->author;
        $item->publisher = $request->publisher;
        $item->description = $request->description;
        $item->finish_date = $request->finish_date;
        $item->genre = $request->genre;
        $item->save();

        return response()->json($item);
    }

    public function delete(Request $request)
    {
        $item = Book::where('id', $request->id)->delete();
        
        $items = Book::all();
    }

    public function search(Request $request)
    {
        $item = Book::where('title', $request->title)->get();
        // $param = ['title' => $request->title];

        return response()->json($item);
    }

    public function update(Request $request, Book $item)
    {
        $item = Book::find($id);

        $id = $request->id;
        $title = $request->title;
        $author = $request->author;
        $publisher = $request->publisher;
        $description = $request->description;
        $finish_date = $request->finish_date;
        $item->genre = $request->genre;
        $item->save();

        return response()->json($item);
    }
}
