@extends('layouts.template')


@section('title', 'All Posts')


@section('container')
    @foreach($posts as $post)
        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
                <p class="card-text">
                    {{ $post['body'] }}
                </p>
            <a href="/post/{{ $post['id'] }}" class="btn btn-primary">More</a>
            </div>
        </div>
    @endforeach
@endsection


@section('scripts')
    <script src='/js/audio.js'>
    </script>
@endsection