@extends('layouts.bookapp')

@section('title', 'タイトル')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
    <!-- データベースの表示 -->
    <table>
        <tr>
            <th>タイトル</th>
            <th>作者</th>
            <th>出版社</th>
            <th>感想</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->publisher}}</td>
                <td>{{$item->description}}</td>
            </tr>
            <a href="/articles/{{$item->id}}">詳細を表示</a>
        @endforeach
    </table>   
@endsection

@section('footer')
copyright 2019 koyo
@endsection