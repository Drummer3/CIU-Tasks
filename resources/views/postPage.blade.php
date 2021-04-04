@extends('layouts.template')


@section('title', 'Post '.$id)

@section('container')
    <div class="card m-2">
        <div class="card-header">Post ID: {{ $id }}</div>
        <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ $body }}</p>
        </div>
        <div class="card-footer">
            User ID: {{ $userId }}
        </div>
    </div>
@endsection