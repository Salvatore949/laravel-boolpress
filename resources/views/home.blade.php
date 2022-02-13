@extends('layouts.main')

@section('main')

<body>
   <h1>Posts</h1> 
   @foreach($posts as $post)
   <table>

      <tr>

   <td>{{$post -> titolo}} </td> 
   <td>{{$post -> sottotitolo}}</td> 
   <td>{{$post -> testo}}</td> 
   <td>{{$post -> autore}}</td> 
   <td>{{$post -> data}}</td> 
   <td>{{$post -> created_at -> format('d/m/Y - H:m')}}</td>  <br>
    
    @endforeach

      </tr>

    </table>
</body>

@endsection
