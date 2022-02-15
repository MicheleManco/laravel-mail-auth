@extends('layouts.main-layout')
@section('content')
<Videogames-component user="{{Auth::check()}}"></videogames-component>

@endsection

