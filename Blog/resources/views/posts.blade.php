{{----------------------------- Approach with Blade Components -------------------------------}}
{{--<x-layoutComponent>--}}
{{--    @foreach($posts as $post)--}}
{{--        <article>--}}
{{--            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>--}}
{{--            <div> {{ $post->excerpt }} </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}
{{--</x-layoutComponent>--}}

{{----------------------------- Approach without Components ---------------------------------}}
@extends ('layout')

@section ('content')
    @foreach($posts as $post)
        <article>
            <h1><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h1>
            <div> {{ $post->excerpt }} </div>
        </article>
    @endforeach
@endsection
