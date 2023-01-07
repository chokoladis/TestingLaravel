@extends('layouts.app')

@section('title')Главная страница@endsection

@section('first_h1')
    <h1>Главная страница</h1>
@endsection
@section('content')
    <p>Контент на главной стр</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus fuga ullam voluptatibus tempora doloremque maiores.</p>
@endsection

@section('aside')
    @parent
    <p>От главной страницы)</p>
@endsection