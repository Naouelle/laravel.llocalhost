<?php


namespace App\Http\Controllers;


class ArticleController extends Controller
{
    /**
     * @returns \Illuminate\Contracts\View\Factory\Illuminate\View\View
     */
    public function index()
    {
        $url = route('article', ['id' => 15]);
        //dd($url);
        return redirect()->route('article', ['id' => 16]);

        $data = ['a', 'b'];

        // dd($data);

        \Debugbar::info($data);
        \Debugbar::addMessage('Debug', 'mon label');

        return view( 'article.index', ['articles' => $data]);
    }

}
