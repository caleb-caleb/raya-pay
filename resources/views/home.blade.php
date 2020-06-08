@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @foreach($teleComs as $teleCom)
        <a type="button" href="/api/telecom/{{$teleCom}}" class="btn btn-block btn-primary btn-lg">{{$teleCom}}</a>
    @endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop