@extends('layouts.app')

@section('content')
    <h3>CLIENTE</h3>
   Bienvenido {{ auth()->user()->name}} y usted es {{ auth()->user()->user_type }} 
@endsection