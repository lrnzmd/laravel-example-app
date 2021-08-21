<x-layout>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article class="{{ $loop-> even ? 'footbar' : ''}}">
                <h1>
                    <a href="/posts/{{ $post->id }}">
                        {{ $post->title }}
                    </a>
                </h1>
                <div>
                    {{ $post->excerpt }}
                </div>
            </article>
        @endforeach
    </x-slot>
</x-layout>