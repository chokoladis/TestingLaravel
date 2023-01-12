@extends('layouts.app')

@section('title')Сообщения@endsection

@section('first_h1')
    <h1>Все сообщения</h1>
@endsection

@section('content')

    @if(!empty($data))
        @foreach($data as $messObj)

            <div class="alert alert-light d-flex justify-content-between align-items-end">
                <div class="main_info">
                    <b>{{ $messObj->name }}</b>
                    <p>{{ $messObj->message }}</p>
                    <small>{{ $messObj->created_at }}</small>
                </div>
                <button class="btn btn-primary h-50">Подробнее</button>
            </div>

        @endforeach
    @endif

@endsection