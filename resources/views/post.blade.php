@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="container">

            <div class="columns">
                <div class="column is-8 is-offset-2">
                    <div class="content">
                        <h1 class="title is-1">
                            {{ $post->title }}
                        </h1>
                        {!! $post->parseBody() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
