@extends('layouts.template')


@section('title', 'Post '.$id)

@php
    $json = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/posts/$id"), true);
    $userId = $json['userId'];
    $title = $json['title'];
    $body = $json['body'];
@endphp
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