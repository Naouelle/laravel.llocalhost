<?php


namespace App\Http\Controllers;


class ArticleController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = ['a', 'b'];

        return view('article.index', ['data' => $data]);
    }
}
