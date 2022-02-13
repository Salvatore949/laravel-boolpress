@extends('layouts.main')
@section('main')


<h2>Insert a new post</h2>
<label for="title">Title</label><br>
<input type="text" name="title"> <br>
<label for="Text"> TextArea</label><br>
<textarea name="text" cols="30" rows="10"></textarea><br>
<select name="category" > category</select>
<h5>tags</h5>
@endsection