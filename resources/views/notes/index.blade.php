@extends('layouts.app')

@section('content')
    @auth()
        <h1 style="color: white">Notes</h1>
        @if (count($notes) > 0)
            @foreach($notes as $note)
                <a href="notes/{{$note->id}}" style="color: black; text-decoration: none">
                    <div class="card text-white mb-3 pb-3 pl-2 pt-2" style="background-color: #f44336;-webkit-box-shadow: 11px 10px 46px 6px rgba(0,0,0,0.7);-moz-box-shadow: 11px 10px 46px 6px rgba(0,0,0,0.7);box-shadow: 11px 10px 46px 6px rgba(0,0,0,0.7);">
                        <h3>{{$note->title}}</h3>
                        <small>Written on {{$note->created_at}}</small>
                    </div>
                </a>
                <br>
            @endforeach
        @else
            <p style="color: white">No notes found</p>
        @endif
    @endauth
@stop
