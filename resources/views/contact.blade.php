@extends('layouts.app')

@section('title')Свяжитесь с нами@endsection

@section('first_h1')
    <h1>Страница контактов</h1>
@endsection

@section('content')
    <form action="{{ route('contact-form') }}" method="post" class="form_contact">

        @csrf

        <div class="form-group">
            <label for="name">Ваше имя</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Ваш email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Ваше сообщение</label>
            <textarea type="text" name="message" id="message" class="form-control"></textarea>
        </div>
        
        <button type="submit" id="submit" class="btn btn-primary">Отправить</button>
        
    </form>

@endsection