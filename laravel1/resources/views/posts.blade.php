<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @foreach ($posts as $post)
    <article class="py-10 max-w-screen-md border-b border-black-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold">{{ $post->title }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->id}}"class=hover:underline>{{ $post->author->name }}</a> | {{ $post->created_at->format('j F Y') }} ({{ $post->created_at->diffForHumans() }})
        </div>
        <p class="my-4 font-light">
            {{ Str::limit($post->body, 100) }}
        </p>
        <a href="/posts/{{ $post->slug }}" class="font-medium text-blue-500 hover:uppercase">Read more &raquo;</a>
    </article>
    @endforeach
</x-layout>
