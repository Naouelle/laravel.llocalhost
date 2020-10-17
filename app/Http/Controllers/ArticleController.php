<?php


namespace App\Http\Controllers;


class ArticleController extends Controller
{
    /**
     * @returns \Illuminate\Contracts\View\Factory\Illuminate\View\View
     */
    public function index()
    {
        $data = ['a', 'b'];

        // dd($data);

        \Debugbar::info($data);
        \Debugbar::addMessage('Debug', 'mon label');

        return view( 'article.index', ['articles' => $data]);
    }

}
