@extends('layout')
@section('content')

@foreach ($books as $book)
{{ $book->title}}
<a href="{{ route('delete.book',['id' => $book->id])}}">x</a>
<a href="{{ route('update.view',['id' => $book->id])}}"><button>Update</button></a>
<br>

@endforeach

<form action="/books/create">
    <input type="text" name="book" id="" placeholder="Enter the title of a new book">
    <input type="submit" value="Send">
</form>

@stop