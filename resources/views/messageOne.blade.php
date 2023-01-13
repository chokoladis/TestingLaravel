@extends('layouts.app')

@section('title')Сообщения от {{ $data->name }} @endsection

@section('first_h1')
    <h1>Сообщение от {{$data->name}}</h1>
    <i>{{$data->created_at}}</i>
@endsection

@section('content')

    <div class="message-detail alert alert-light d-flex justify-content-between align-items-end mt-5">
        <div class="main_info">
            <b>{{ $data->name }}</b>
            <b>{{ $data->email }}</b>
            <p>{{ $data->message }}</p>
            <div class="d-flex">
                <i>Создано</i>
                <small class="ms-3">{{ $data->created_at }}</small>
            </div>
            <div class="d-flex">
                <i>Обновлено</i>
                <small class="ms-3">{{ $data->updated_at }}</small>
            </div>
        </div>
        
        <div class="btns d-flex justify-content-end">
            <a href="{{ route('contact-message-update', $data->id )  }}">
                <button class="btn btn-warning">Обновить</button>
            </a>
            <a href="{{ route('contact-message-delete', $data->id )  }}" class="ms-4">
                <button class="btn btn-danger">Удалить</button>
            </a>
        </div>
        
    </div>

@endsection