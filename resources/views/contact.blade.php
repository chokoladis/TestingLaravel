@extends('layouts.app')

@section('title')Свяжитесь с нами@endsection

@section('first_h1')
    <h1>Страница контактов</h1>
@endsection

@section('content')
    <div class="row">
        <form action="{{ route('contact-form') }}" method="post" class="form_contact col-8">

            @csrf

            <div class="form-group">
                <label for="name">Ваше имя</label>
                <input required type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Ваш email</label>
                <input required type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Ваше сообщение</label>
                <textarea required type="text" name="message" id="message" class="form-control"></textarea>
            </div>
            
            <button type="submit" id="submit" class="btn btn-primary">Отправить</button>
            
        </form>

        @if($errors->any())
            <div class="alert alert-danger col-4">
                <ul>
                    @foreach($errors->all() as $err)
                        <li>
                            {{ $err }}
                        </li>
                    @endforeach
                </ul>
            </div>    
        @endif
    </div>
    

@endsection