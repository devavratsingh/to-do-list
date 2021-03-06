@extends('layouts.app')
@section('content')
<br>
<a href="/todo/{{$todo->id}}" class="btn btn-primary"> Go Back</a><br><br>
<h1>Edit Todo</h1>
{{ Form::open(array('action' => ['TodosController@update', $todo->id], 'method' => 'POST')) }}
    {{ Form::bsText('text', $todo->text) }}
    {{ Form::bsTextArea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
{{ Form::close() }}
@endsection