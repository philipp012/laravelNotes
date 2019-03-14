@extends('layouts.app')

@section('content')
    @auth()
        <h1>Notes</h1>
        @if (count($notes) > 0)
            @foreach($notes as $note)
                <a href="notes/{{$note->id}}" style="color: black; text-decoration: none">
                    <div class="card pb-3 pl-2 pt-2" style="box-shadow: 7px 7px 5px grey;">
                        <h3>{{$note->title}}</h3>
                        <small>Written on {{$note->created_at}}</small>
                    </div>
                </a>
                <br>
            @endforeach
        @else
            <p>No notes found</p>
        @endif
    @endauth
@stop
