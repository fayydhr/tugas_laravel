<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @foreach ($posts as $post)
        
    

    <article class="py-10 max-w-screen-md border-b border-black-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] ?? 'Unknown Author' }}</a> | {{ optional($post['created_at'])->format('j F Y') ?? '27 Desember 2003' }} ({{ optional($post['created_at'])->diffForHumans() ?? '' }})
        </div>
        <p class="my-4 font-light">
            {{ Str::limit($post['body'], 100)}}
        </p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:uppercase">Read more &raquo;</a>
    </article>
    @endforeach
</x-layout>




{{-- 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <h1>Ini artikel</h1>
    <article>Tes</article>
    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Dolor, excepturi repellat! Ipsam doloremque temporibus corrupti 
        nisi harum quasi, error soluta eaque quo ab repellat, vitae cum voluptas itaque, alias debitis.</h3>
</body>
</html> --}}