@extends('layouts.app')

@section('title')Редактирование сообщения от {{ $data->name }} @endsection

@section('first_h1')
    <h1>Редактирование сообщения от {{$data->name}}</h1>
    <i>{{$data->created_at}}</i>
@endsection

@section('content')

    <div class="row">
        <form action="{{ route('contact-message-update-submit', $data->id) }}"  method="post" class="form_contact col-8">
            @csrf

            <div class="form-group">
                <label for="name">Ваше имя</label>
                <input required type="text" name="name" id="name" class="form-control" value="{{ $data->name }}">
            </div>
            <div class="form-group">
                <label for="email">Ваш email</label>
                <input required type="email" name="email" id="email" class="form-control" value="{{ $data->email }}">
            </div>
            <div class="form-group">
                <label for="message">Ваше сообщение</label>
                <textarea required type="text" name="message" id="message" class="form-control">{{ $data->message }}</textarea>
            </div>
            
            <button type="submit" id="submit" class="btn btn-primary">Отправить</button>
            
        </form>
    </div>
   

@endsection