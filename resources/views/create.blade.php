@extends('layouts.main')
@section('main')


<h2>Insert a new post</h2>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{route('post.store')}}"  method="POST">

@method('POST')
@csrf

<label for="title">Title</label><br>
<input type="text" name="titolo" value="aaa"> <br>
<label for="Text"> TextArea</label><br>
<textarea name="sottotitolo" cols="30" rows="10">Testo</textarea><br>
<select name="category_id" >
    @foreach ($categories as $category)
        <option value="{{$category -> id}}"> {{$category -> nome}} </option>
    @endforeach
</select>
<h5>tags</h5>

    @foreach ($tags as $tag)
       <input type="checkbox" name="tags[]"  value="{{$tag -> id}}">{{$tag ->nome}} <br>
    @endforeach 
  <input type="submit" value="Create">

  </form>
@endsection