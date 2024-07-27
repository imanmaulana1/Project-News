<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\News;
use App\Models\Category;
use App\Models\Region;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::with('category', 'user')->latest()->first();
        $popularNews = News::with('category')->orderBy('views', 'desc')->take(4)->get();
        $categories = Category::all();

        return view('user.home', compact('news', 'popularNews', 'categories'));
    }

    public function category($category)
    {
        $categoryModel = Category::where('name',  ucwords(strtolower($category)))->firstOrFail();
        $paginatedNews = News::where('category_id', $categoryModel->id)->latest()->paginate(6);

        $popularNews = News::with('category')->orderBy('views', 'desc')->take(5)->get();
        $categories = Category::all();

        return view('user.category', compact('category', 'paginatedNews', 'popularNews', 'categories'));
    }


    public function region($region)
    {
        $regionModel = Region::where('name', $region)->firstOrFail();
        $news = News::where('region_id', $regionModel->id)->latest()->paginate(6);

        $popularNews = News::with('category')->orderBy('views', 'desc')->take(5)->get();
        $categories = Category::all();
        $regions = Region::all();

        return view('user.region', compact('region', 'news', 'popularNews', 'categories', 'regions'));
    }

    public function detail($id)
    {
        $newsItem = News::with(['category', 'region'])->findOrFail($id);
        $popularNews = News::with('category')->orderBy('views', 'desc')->take(3)->get();
        $categories = Category::all();
        $regions = Region::all();
        $relatedNews = News::where('category_id', $newsItem->category_id)->where('id', '!=', $id)->take(3)->get();

        return view('user.detail', compact('newsItem', 'popularNews', 'categories', 'relatedNews'));
    }
}
