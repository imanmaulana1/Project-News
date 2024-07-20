<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $headline = [
            'title' => "Where To Watch 'John Wick: Chapter 4'",
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima at ex, asperiores ratione dignissimos. Tenetur consectetur assumenda quo impedit ut dolores voluptate illum voluptas...',
            'category' => 'Movies',
            'author' => 'Netflix',
            'created_at' => '12 minutes ago'
        ];

        $latestNews = [
            [
                'title' => "'He deserves a lot more' Verstappen backs Alonso",
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima...',
                'category' => 'Sport',
                'author' => 'Formula 1',
                'created_at' => '3 hours ago'
            ],
            [
                'title' => 'Liverpool hammer Leeds for first win in five games',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima...',
                'category' => 'Sport',
                'author' => 'BBC',
                'created_at' => '12 hours ago'
            ],
            [
                'title' => 'Lates News 3',
                'content' => 'Content of the latest news 3',
                'category' => 'Entertainment',
                'author' => 'CNN',
                'created_at' => '2 hours ago'
            ],
            [
                'title' => 'Latest News 4',
                'content' => 'Content of the latest news 4',
                'category' => 'Technology',
                'author' => 'Microsoft',
                'created_at' => '5 hours ago'
            ]
        ];

        $entertainmentNews = [
            [
                'title' => "Top 10 Music Albums of the Year",
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima...',
                'category' => 'Entertainment',
                'author' => 'Spotify',
                'created_at' => '17 hours ago'
            ],
            [
                'title' => "Exciting New Movie Releases This Summer",
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima...',
                'category' => 'Entertainment',
                'author' => 'Netflix',
                'created_at' => '13 hours ago'
            ]
        ];

        $technologyNews = [
            [
                'title' => "Top Gadgets to Watch Out for in 2024'",
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima...',
                'category' => 'Technology',
                'author' => 'IDN News',
                'created_at' => '3 hours ago'
            ],
            [
                'title' => "All the rumors about Iphone 16",
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima...',
                'category' => 'Technology',
                'author' => 'Mac Rumors',
                'created_at' => '10 hours ago'
            ]
        ];

        return view('user.home', compact('headline', 'latestNews'));
    }
}
