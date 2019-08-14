@extends('layouts.bookapp')
@section('title', 'タイトル')

@section('menubar')
   @parent
   登録ページ
@endsection

@section('content')
<form action="/articles" method="post">
    {{ csrf_field() }}
    <tr><th>タイトル:</th><td><input type="text" name="title" value="{{old('title')}}"></td></tr>
    <tr><th>著者:</th><td><input type="text" name="author" value="{{old('author')}}"></td></tr>
    <tr><th>出版社:</th><td><input type="text" name="publisher" value="{{old('publisher')}}"></td></tr>
    <tr><th>感想:</th><td><textarea type="text" name="description" value="{{old('description')}}"></textarea></td></tr>
    <tr><th></th><td><input type="submit" value="追加"></td></tr>
</form>
@endsection

@section('footer')
copyright 2019 koyo.
@endsection
