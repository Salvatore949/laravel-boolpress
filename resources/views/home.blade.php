@extends('layouts.main')

@section('main')

<body>
   <h1>Posts</h1>

   @auth
 
   <a href="{{route('post.create')}}"> Create new post</a> <br>

   @endauth

   <table border="2">
     <tr>
        <th>titolo</th>
        <th>sottotitolo</th>
        <th>testo</th>
        <th>autore</th>
        <th>data</th>
        <th>category</th>
        <th>tags</th>
        <th>created_at</th>
     </tr>
   @foreach($posts as $post)
      <tr>
         <td>{{$post -> titolo}} </td> 
         <td>{{$post -> sottotitolo}}</td> 
         <td>{{$post -> testo}}</td> 
         <td>{{$post -> autore}}</td> 
         <td>{{$post -> data}}</td> 
         <td>{{$post -> category -> nome}}</td>
         <td>
            @foreach($post -> tags as $tag)
            {{$tag -> nome}}
            @endforeach
         </td>
         <td>{{$post -> created_at -> format('d/m/Y - H:m')}}</td>  <br>
    @endforeach
      </tr>
    </table>
</body>

@endsection
