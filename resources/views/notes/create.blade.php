@extends('layouts.app')

@section('content')
    @auth()
        <h1>Create Note</h1>
        {!! Form::open(['action' => 'NotesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('content', 'Content')}}
            {{Form::textarea('content', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Content Text'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
        <a href="/notes" class="btn btn-dark">Discard</a>
        {!! Form::close() !!}
    @endauth
@stop
