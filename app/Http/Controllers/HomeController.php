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

        $categories = ['Politics', 'Sports', 'Technology', 'Entertainment', 'Movie', 'Health'];

        return view('user.home', compact('headline', 'latestNews', 'categories'));
    }

    public function category($category)
    {
        $dummyData = collect([
            [
                'title' => 'Political News',
                'content' => 'Details on recent political events and decisions.',
                'category' => 'Politics',
                'author' => 'John Doe',
                'created_at' => '2 hours ago'
            ],
            [
                'title' => 'Sports Update',
                'content' => 'Latest scores and highlights from the world of sports.',
                'category' => 'Sports',
                'author' => 'Jane Smith',
                'created_at' => '3 hours ago'
            ],
            [
                'title' => 'Tech Innovations',
                'content' => 'Breaking news on the latest technology advancements.',
                'category' => 'Technology',
                'author' => 'TechCrunch',
                'created_at' => '4 hours ago'
            ],
            [
                'title' => 'Entertainment Buzz',
                'content' => 'Trending news in the entertainment industry.',
                'category' => 'Entertainment',
                'author' => 'BuzzFeed',
                'created_at' => '5 hours ago'
            ],
            [
                'title' => 'Movie Reviews',
                'content' => 'Latest movie reviews and box office updates.',
                'category' => 'Movie',
                'author' => 'Hollywood',
                'created_at' => '6 hours ago'
            ],
            [
                'title' => 'Health Tips',
                'content' => 'Important health tips and medical news.',
                'category' => 'Health',
                'author' => 'WebMD',
                'created_at' => '7 hours ago'
            ],
            [
                'title' => 'Political News',
                'content' => 'Updates on governmental policies and elections.',
                'category' => 'Politics',
                'author' => 'CNN',
                'created_at' => '8 hours ago'
            ],
            [
                'title' => 'Sports Update',
                'content' => 'In-depth analysis and reports on recent sports matches.',
                'category' => 'Sports',
                'author' => 'ESPN',
                'created_at' => '9 hours ago'
            ],
            [
                'title' => 'Tech Innovations',
                'content' => 'Insights on new gadgets and software releases.',
                'category' => 'Technology',
                'author' => 'Microsoft',
                'created_at' => '10 hours ago'
            ],
            [
                'title' => 'Entertainment Buzz',
                'content' => 'Celebrity news and upcoming entertainment events.',
                'category' => 'Entertainment',
                'author' => 'Variety',
                'created_at' => '11 hours ago'
            ],
            [
                'title' => 'Movie Reviews',
                'content' => 'Critiques and audience reactions to the latest films.',
                'category' => 'Movie',
                'author' => 'IMDB',
                'created_at' => '12 hours ago'
            ],
            [
                'title' => 'Health Tips',
                'content' => 'Guidelines for maintaining good health and well-being.',
                'category' => 'Health',
                'author' => 'Healthline',
                'created_at' => '13 hours ago'
            ]
        ]);

        $categories = ['Politics', 'Sports', 'Technology', 'Entertainment', 'Movie', 'Health'];

        $filteredCategory = $dummyData->filter(function ($newsItem) use ($category) {
            return strtolower($newsItem['category']) === strtolower($category);
        });

        return view('user.category', compact('category', 'categories', 'filteredCategory'));
    }
}
