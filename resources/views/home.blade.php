<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">


           <h2>    {{ __('Selamat Datang') }}, {{ Auth::user()->name }}!</h2>



</div>
@endsection
