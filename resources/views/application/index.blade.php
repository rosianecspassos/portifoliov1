@extends('templates.home')
<!--Título navegador--> 
@section('title')
Vitrine da Rosi
@endsection

<!--Cabeçalho e menu--> 
@section('header')
@include('layouts.header')
@endsection

<!--Sobre--> 
@section('sobre')
@include('layouts.conteudo')
@endsection

@section('projetos')
@include('layouts.projetos')
@endsection

@section('cursos')
@include('layouts.cursos')
@endsection

@section('contato')
@include('layouts.contato')
@endsection

@section('footer')
@include('layouts.footer')
@endsection




