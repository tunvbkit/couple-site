<?php

class ArticleController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function getTaxonomyArticle($slug_taxonomy)
	{
		return Taxonomy::where('slug',$slug_taxonomy)->get()->first();
	}
	public static function getArticle($slug_article)
	{
		return Article::where('slug',$slug_article)->get()->first();
	}
	public function index()
	{   
		
	}
	public function listArticle($slug_taxonomy){
		$slug_taxonomy = $this->getTaxonomyArticle($slug_taxonomy)->slug;
		$id_taxonomy = $this->getTaxonomyArticle($slug_taxonomy)->id;
		$articles = Article::where('taxonomy',$id_taxonomy)->paginate(10);
		return View::make('article.list-article')->with('articles',$articles)
													->with('slug_taxonomy',$slug_taxonomy);	
	}

	public function detailArticle($slug_taxonomy,$slug_article){
		$id_taxonomy = $this->getTaxonomyArticle($slug_taxonomy)->id;
		$id_article = $this->getArticle($slug_article)->id;
		$article = Article::where('id',$id_article)->get()->first();
		$others = Article::where('taxonomy',$id_taxonomy)->get();
		return View::make('article.detail-article')->with('article',$article)
													->with('others',$others);
	}
	public function searchArticle(){
		$slug_taxonomy = Input::get('taxonomy');
		$id_taxonomy = $this->getTaxonomyArticle($slug_taxonomy)->id;
		$title = Input::get('search_name');
		$articles = Article::where('taxonomy',$id_taxonomy)->where('title', 'LIKE' ,"%$title%")->paginate(10);
		return View::make('article.list-article')->with('articles',$articles)
													->with('slug_taxonomy',$slug_taxonomy)
													->with('title',$title);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
