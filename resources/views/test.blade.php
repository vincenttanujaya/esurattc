@extends('layouts.appadmin')

@section('content')

@php
    echo $mantap;
@endphp
{!!html_entity_decode($mantap)!!}
 {!! $mantap !!} 

@endsection
