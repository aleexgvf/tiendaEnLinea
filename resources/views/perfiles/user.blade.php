@extends('layouts.app')

@section('content')
<h1>Bienvenid@ {{Auth::user()->name}} a su Panel de Control</h1>
@if (Session::has('status'))
<hr />
<div class='text-success'>
    {{Session::get('status')}}
</div>
<hr />
@endif

<img src='{{url(Auth::user()->perfiles)}}' class='img-responsive' style='max-width: 150px' />

<h3>Opciones:</h3>
<ul>
    <li><a href="{{url('perfiles/profile')}}">Cambiar mi imagen de perfil</a></li>
</ul>

@stop