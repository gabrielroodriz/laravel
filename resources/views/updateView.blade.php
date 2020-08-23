@extends('layout')
@section('content')

<form action="{{ route('update.book',['id' => $books->id])}}">
    <input type="text" name="title" id="" value="{{$books->title}}">
    <input type="submit" value="Send">
</form>

@stop