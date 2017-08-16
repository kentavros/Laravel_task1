@extends('layout')

@section('title')
    Thank You
@stop

@section('thank')
<div class="alert alert-info" role="alert">
<h1>Thank you {{$name}}!</h1>
</div>
@stop