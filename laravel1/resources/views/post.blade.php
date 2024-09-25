<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <article class="py-10 max-w-screen-md border-b border-black-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] ?? 'Unknown Author' }}</a> | 
            {{ optional($post['created_at'])->format('j F Y') ?? 'Unknown Date' }} 
            ({{ optional($post['created_at'])->diffForHumans() ?? '' }})
                    </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:uppercase">&laquo; Back to Posts</a>
    </article>
</x-layout>




