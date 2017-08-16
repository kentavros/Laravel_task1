@extends('layout')

@section('title')
    Contact-us
@stop


@section('contact')
<h1>contact-us</h1>

@if ($error == 1)
<div class="alert alert-danger" role="alert">Fill in all the fields!</div>
@endif

<form method="post">
    Name:<input type="text" name="name" />
    Message:<input type="text" name="msg" />
    <button type="submit">SEND</button>
</form>
@stop