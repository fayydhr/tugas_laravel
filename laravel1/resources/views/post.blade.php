\<x-layout>
    <x-slot:title>{{ $post->title }}</x-slot:title>

    <article class="py-10 max-w-screen-md border-b border-black-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold">{{ $post->title }}</h2>
        
        <div class="text-base text-gray-500">
            <!-- Link ke halaman penulis, menampilkan semua post oleh penulis -->
            <a href="/author/{{ $post->author->id }}" class="font-medium text-blue-500 hover:underline">
                {{ $post->author->name }}
            </a>
            | {{ \Carbon\Carbon::parse($post->created_at)->format('j F Y') }} 
            ({{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }})
        </div>
        
        <p class="my-4 font-light">
            {{ $post->body }}
        </p>
        
        <!-- Link kembali ke daftar post -->
        <a href="/posts" class="font-medium text-blue-500 hover:uppercase">&laquo; Back to Posts</a>
    </article>
</x-layout>
