@extends('layouts.app')

@section('content')
    @auth()
        <h1>Edit Note</h1>
        {!! Form::open(['action' => ['NotesController@update', $note->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $note->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('content', 'Content')}}
            {{ Form::textarea('content', $note->content, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Content Text'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
        <a href="/" class="btn btn-dark">Back</a>
        {!! Form::close() !!}
    @endauth
@stop
