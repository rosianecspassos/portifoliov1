@extends('templates.dadosprincipais')

@section('principaisinfo')
@include('creates.createinfo')
@endsection

@section('dadosacademicos')
@include('creates.createformacao')
@endsection

@section('experiencia')
@include('creates.createexperiencia')
@endsection

@section('sobre')
@include('creates.createsobre')
@endsection