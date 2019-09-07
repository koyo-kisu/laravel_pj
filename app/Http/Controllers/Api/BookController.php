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
        $keyword = $request->input('keyword');
        
        //もしkeywordが空欄でない場合
        if(!empty($keyword))
        {
            $item = DB::table('title')
                ->where('title', 'like', '%'.$keyword.'%');
        //空欄である場合
        } else {
            $item = DB::table('title');
        }

        // $item = Book::where('title', $request->title)
        //     ->orWhere('author', $request->authoor)
        //     ->orWhere('publisher', $request->publisher)
        //     ->get();

        //     $item->where(function($item)
        //     {
        //     $item->where('title', $request->title)
        //         ->orWhere('author', $request->author)
        //         ->orWhere('publisher', $request->publisher);
        //     });
        
        // $item = Book::item();
        // $item -> where('title', $request->title);
        // $item -> where('author', $request->author);
        // $item -> where('publisher', $request->publisher);

        // $param = [
        //     'title' => $request->title, 
        //     'author' => $request->author,
        //     'publisher' => $request->publisher,
        // ];

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
