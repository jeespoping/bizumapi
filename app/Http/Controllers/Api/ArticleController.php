<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleCollection;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(Article $article){
        return ArticleResource::make($article);
    }

    public function index(){
        return ArticleCollection::make(
            Article::orderBy(request('amount'), 'desc')
                ->paginate(
                    $perPage = request('page.size'),
                    $columns = ['*'],
                    $pageName = 'page[number]',
                    $page = request('page.number')
                )
                ->appends(request()->except('page.number'))
        );
    }

}
