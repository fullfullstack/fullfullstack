@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">

        @foreach($posts as $post)
            <nav class="panel">
                <p class="panel-heading">
                    <a href="{{ route('post', [$post->slug]) }}">{{ $post->title }}</a>
                </p>

                <a class="panel-block">
                    {{ str_limit($post->body) }}
                </a>

            </nav>
        @endforeach

    </div>
</section>
@endsection
