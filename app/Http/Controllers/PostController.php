<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function listNews($slug){
        $user = Auth::user();

        $lstArticles = new Article();
        $lstArticles = $lstArticles->showArticles($slug); // danh sach tat ca cac bai viet

        $listCate = new Category();
        $listCategory = $listCate->showCategory(); /// danh sach tat ca category
        $Cate = $listCate->showName($slug); // lay ra ten cua 1 category thong qua slug

//        dd($Cate);
        return view('post.list_news', compact('listCategory', 'lstArticles','Cate', 'user', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name, $item) // name=slug_category; item = slug_article
    {
        $user = Auth::user();

        $lstArt = new Article();
        $lstArticles = $lstArt->showItem($item); // lay ra chi tiet cua 1 bai viet
        $listArt = $lstArt->showListArticles($name);

        $listCate = new Category();
        $listCategory = $listCate->showCategory(); // danh sach category
        $Cate = $listCate->showName($name);

        return view('post.detail', compact('listCategory','item', 'user', 'lstArticles', 'name', 'Cate', 'listArt'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
