@extends('layouts.app')

@section('content')
    @auth()
        <h1 style="color: white">{{$note->title}}</h1>
        <div class="jumbotron" style="background-color: #6cb2eb; color: white">
            {!!  $note->content !!}
        </div>
        <hr>
        <small style="color: white">Written on {{$note->created_at}}</small>

        <hr>
        <a href="/notes/{{$note->id}}/edit" class="btn btn-primary">Edit</a>

        {!!Form::open(['action' => ['NotesController@destroy', $note->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endauth
@stop