<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts/{id}', function($id){
    $posts = [
        [
            'id' => 1,
            'title' => 'Teknologi AI dalam Pengembangan Video',
            'author' => 'FAYYDHR',
            'body' => 'Teknologi kecerdasan buatan (AI) terus mengalami perkembangan pesat, salah satunya dalam bidang pembuatan video. Saat ini, AI dapat digunakan untuk menghasilkan video otomatis berdasarkan data dan input pengguna. AI video generator memungkinkan pembuatan konten visual yang dipersonalisasi dalam hitungan menit. Pengguna hanya perlu memberikan teks, gambar, atau data lain yang relevan, dan sistem AI akan mengolahnya menjadi video yang siap digunakan. Ini sangat bermanfaat bagi para kreator konten, pemasar, atau tim produksi yang ingin menghemat waktu dan biaya. Teknologi ini membuka banyak kemungkinan baru dalam dunia video editing dan produksi.'  
        ],        
        [
            'id' => 2,
            'title' => 'Ekonomi Sirkular: Solusi untuk Keberlanjutan',
            'author' => 'FAYYDHR',
            'body' => 'Ekonomi sirkular adalah konsep di mana produk, material, dan sumber daya dirancang agar dapat digunakan kembali, diperbaiki, atau didaur ulang secara terus-menerus, dengan tujuan mengurangi limbah. Berbeda dengan ekonomi linear yang mengambil, membuat, dan membuang, ekonomi sirkular bertujuan untuk menciptakan siklus penggunaan yang lebih panjang. Banyak perusahaan dan negara mulai mengadopsi model ini untuk mengurangi dampak lingkungan dan meningkatkan efisiensi sumber daya. Selain berkelanjutan, ekonomi sirkular juga membuka peluang inovasi dan menciptakan pasar baru yang ramah lingkungan.'       
        ],
        [
            'id' => 3,
            'title' => 'Peran Media Sosial dalam Pemasaran Modern',
            'author' => 'FAYYDHR',
            'body' => 'Media sosial telah menjadi salah satu alat pemasaran paling efektif di era digital. Platform seperti Instagram, TikTok, dan X (sebelumnya Twitter) memberikan akses langsung ke audiens global dan memungkinkan brand untuk berinteraksi dengan pelanggan secara real-time. Melalui konten visual, kampanye influencer, dan iklan yang ditargetkan, perusahaan dapat membangun citra merek yang kuat dan meningkatkan penjualan. Selain itu, media sosial juga menyediakan data analitik yang membantu memahami preferensi konsumen, tren pasar, dan efektivitas kampanye. Dengan strategi yang tepat, media sosial dapat meningkatkan pertumbuhan bisnis secara signifikan.'       
          
    
            
            ]
    ];

    $post = Arr::first($posts, function($post) use ($id){
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
    [
        'id' => 1,
        'title' => 'Teknologi AI dalam Pengembangan Video',
        'author' => 'FAYYDHR',
        'body' => 'Teknologi kecerdasan buatan (AI) terus mengalami perkembangan pesat, salah satunya dalam bidang pembuatan video. Saat ini, AI dapat digunakan untuk menghasilkan video otomatis berdasarkan data dan input pengguna. AI video generator memungkinkan pembuatan konten visual yang dipersonalisasi dalam hitungan menit. Pengguna hanya perlu memberikan teks, gambar, atau data lain yang relevan, dan sistem AI akan mengolahnya menjadi video yang siap digunakan. Ini sangat bermanfaat bagi para kreator konten, pemasar, atau tim produksi yang ingin menghemat waktu dan biaya. Teknologi ini membuka banyak kemungkinan baru dalam dunia video editing dan produksi.'  
    ],        
    [
        'id' => 2,
        'title' => 'Ekonomi Sirkular: Solusi untuk Keberlanjutan',
        'author' => 'FAYYDHR',
        'body' => 'Ekonomi sirkular adalah konsep di mana produk, material, dan sumber daya dirancang agar dapat digunakan kembali, diperbaiki, atau didaur ulang secara terus-menerus, dengan tujuan mengurangi limbah. Berbeda dengan ekonomi linear yang mengambil, membuat, dan membuang, ekonomi sirkular bertujuan untuk menciptakan siklus penggunaan yang lebih panjang. Banyak perusahaan dan negara mulai mengadopsi model ini untuk mengurangi dampak lingkungan dan meningkatkan efisiensi sumber daya. Selain berkelanjutan, ekonomi sirkular juga membuka peluang inovasi dan menciptakan pasar baru yang ramah lingkungan.'       
      

        
    ],

    [
        'id' => 3,
        'title' => 'Peran Media Sosial dalam Pemasaran Modern',
        'author' => 'FAYYDHR',
        'body' => 'Media sosial telah menjadi salah satu alat pemasaran paling efektif di era digital. Platform seperti Instagram, TikTok, dan X (sebelumnya Twitter) memberikan akses langsung ke audiens global dan memungkinkan brand untuk berinteraksi dengan pelanggan secara real-time. Melalui konten visual, kampanye influencer, dan iklan yang ditargetkan, perusahaan dapat membangun citra merek yang kuat dan meningkatkan penjualan. Selain itu, media sosial juga menyediakan data analitik yang membantu memahami preferensi konsumen, tren pasar, dan efektivitas kampanye. Dengan strategi yang tepat, media sosial dapat meningkatkan pertumbuhan bisnis secara signifikan.'       
      

        
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});