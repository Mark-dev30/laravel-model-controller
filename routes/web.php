<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $menu = [
        'characters' => '/characters',
        'comics' => '/',
        'movies' => '/movies',
        'tv' => '/tv',
        'games' => '/games',
        'collectibles' => '/collectibles',
        'videos' => '/videos',
        'fans' => '/fans',
        'news' => '/news',
        'shop' => '/shop'
    ];

    $menu_footer = [
        "comics" => [
            'Characters' => '/characters',
            'Comics' => '/comics',
            'Movies' => '/movies',
            'Tv' => '/tv',
            'Games' => '/games',
            'Videos' => '/videos',
            'News' => '/news',
        ],
        "shop" => [
            'Shop DC' => '/shop-dc',
            'Shop DC Collectibles' => '/shop-dc-collectibles',
        ],
        "dc" => [
            'Term Of Use' => '/term-of-use',
            'Privacy policy (New)' => '/privacy-policy',
            'Ad Choices' => '/ad-choices',
            'Advertising' => '/advertising',
            'Jobs' => '/jobs',
            'Subscriptions' => '/subscriptions',
            'Talent Workshops' => '/talent-workshops',
            'CPSC Certificates' => '/cpsc-certificates',
            'Ratings' => '/ratings',
            'Shop Help' => '/shop-help',
            'Contact Us' => '/contact-us',

        ],
        "sites" => [
            'DC' => '/dc',
            'MAD Magazine' => '/mad-magazine',
            'DC Kids' => '/dc-kids',
            'DC Universe' => '/dc-universe',
            'DC Power Visa' => '/dc-power-visa',
        ],
        "img_social" => [
            'footer-facebook.png',
            'footer-twitter.png',
            'footer-youtube.png',
            'footer-pinterest.png',
            'footer-periscope.png'
        ],
    ];
    $comics = config('comics');

    return view('comics', compact('menu', 'comics', 'menu_footer'));
})->name('comics');

Route::get('/info-comic/{key}', function ($key) {

    $menu = [
        'characters' => '/characters',
        'comics' => '/',
        'movies' => '/movies',
        'tv' => '/tv',
        'games' => '/games',
        'collectibles' => '/collectibles',
        'videos' => '/videos',
        'fans' => '/fans',
        'news' => '/news',
        'shop' => '/shop'
    ];

    $menu_footer = [
        "comics" => [
            'Characters' => '/characters',
            'Comics' => '/comics',
            'Movies' => '/movies',
            'Tv' => '/tv',
            'Games' => '/games',
            'Videos' => '/videos',
            'News' => '/news',
        ],
        "shop" => [
            'Shop DC' => '/shop-dc',
            'Shop DC Collectibles' => '/shop-dc-collectibles',
        ],
        "dc" => [
            'Term Of Use' => '/term-of-use',
            'Privacy policy (New)' => '/privacy-policy',
            'Ad Choices' => '/ad-choices',
            'Advertising' => '/advertising',
            'Jobs' => '/jobs',
            'Subscriptions' => '/subscriptions',
            'Talent Workshops' => '/talent-workshops',
            'CPSC Certificates' => '/cpsc-certificates',
            'Ratings' => '/ratings',
            'Shop Help' => '/shop-help',
            'Contact Us' => '/contact-us',

        ],
        "sites" => [
            'DC' => '/dc',
            'MAD Magazine' => '/mad-magazine',
            'DC Kids' => '/dc-kids',
            'DC Universe' => '/dc-universe',
            'DC Power Visa' => '/dc-power-visa',
        ],
        "img_social" => [
            'footer-facebook.png',
            'footer-twitter.png',
            'footer-youtube.png',
            'footer-pinterest.png',
            'footer-periscope.png'
        ],
    ];

    $comics = config('comics');
    $single = $comics[$key];


    return view('info_comic', compact('single', 'menu', 'menu_footer'));
})->name('info-comic');
