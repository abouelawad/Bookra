@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Discount <span style="color: forestgreen">{{ $discount->code }}</span> Details</h1>
@stop

@section('content')
    <h1>Code : {{ $discount->code }}</h1>
    <h1>Quantity : {{ $discount->quantity }}</h1>
    <h1>Percentage : {{ $discount->percentage }}%</h1>
    <h1>Expiry Date : {{ $discount->expiry_date }}</h1>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop