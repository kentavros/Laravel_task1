@extends('layout')

@section('title')
    Home page
@stop


@section('home')
<h1>Page - "HOME" - TASK1</h1>
<div style="margin-left: 40px;">
    <a href='{{URL::to('articles')}}'>articles</a><br>
    <a href='{{URL::to('about')}}'>about</a><br>
    <a href='{{URL::to('contact')}}'>contact</a><br>
</div>
@stop


