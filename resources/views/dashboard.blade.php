@extends('layouts.app')

@section('content')
    Hi {{ Auth::user()->name }}, its your dashboard.
@endsection