<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function manageNews()
    {
        $dummyData = collect([
            [
                'id' => 1,
                'title' => 'Political News',
                'content' => 'Details on recent political events and decisions.',
                'category' => 'Politics',
                'author' => 'John Doe',
                'created_at' => '2 hours ago'
            ],
            [
                'id' => 2,
                'title' => 'Sports Update',
                'content' => 'Latest scores and highlights from the world of sports.',
                'category' => 'Sports',
                'author' => 'Jane Smith',
                'created_at' => '3 hours ago'
            ],
            [
                'id' => 3,
                'title' => 'Tech Innovations',
                'content' => 'Breaking news on the latest technology advancements.',
                'category' => 'Technology',
                'author' => 'TechCrunch',
                'created_at' => '4 hours ago'
            ],
            [
                'id' => 4,
                'title' => 'Entertainment Buzz',
                'content' => 'Trending news in the entertainment industry.',
                'category' => 'Entertainment',
                'author' => 'BuzzFeed',
                'created_at' => '5 hours ago'
            ],
            [
                'id' => 5,
                'title' => 'Movie Reviews',
                'content' => 'Latest movie reviews and box office updates.',
                'category' => 'Movies',
                'author' => 'Hollywood',
                'created_at' => '6 hours ago'
            ],
            [
                'id' => 6,
                'title' => 'Health Tips',
                'content' => 'Important health tips and medical news.',
                'category' => 'Health',
                'author' => 'WebMD',
                'created_at' => '7 hours ago'
            ],
            [
                'id' => 7,
                'title' => 'Political News',
                'content' => 'Updates on governmental policies and elections.',
                'category' => 'Politics',
                'author' => 'CNN',
                'created_at' => '8 hours ago'
            ],
            [
                'id' => 8,
                'title' => 'Sports Update',
                'content' => 'In-depth analysis and reports on recent sports matches.',
                'category' => 'Sports',
                'author' => 'ESPN',
                'created_at' => '9 hours ago'
            ],
            [
                'id' => 9,
                'title' => 'Tech Innovations',
                'content' => 'Insights on new gadgets and software releases.',
                'category' => 'Technology',
                'author' => 'Microsoft',
                'created_at' => '10 hours ago'
            ],
            [
                'id' => 10,
                'title' => 'Entertainment Buzz',
                'content' => 'Celebrity news and upcoming entertainment events.',
                'category' => 'Entertainment',
                'author' => 'Variety',
                'created_at' => '11 hours ago'
            ]
        ]);

        return view('admin.news', compact('dummyData'));
    }

    public function manageCategories()
    {
        $categories = ['Politics', 'Sports', 'Technology', 'Entertainment', 'Movies', 'Health'];
        $categories = [
            [
                'id' => 1,
                'name' => 'Politics'
            ],
            [
                'id' => 2,
                'name' => 'Sports'
            ],
            [
                'id' => 3,
                'name' => 'Technology'
            ],
            [
                'id' => 4,
                'name' => 'Entertainment'
            ],
            [
                'id' => 5,
                'name' => 'Movies'
            ],
            [
                'id' => 6,
                'name' => 'Health'
            ]
        ];

        return view('admin.categories', compact('categories'));
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
