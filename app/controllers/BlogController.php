<?php

class BlogController extends \BaseController {

	


	protected $layout= 'layouts.master';

	public function index()
	{
		//

		$this->layout->master= View::make('blog.index');
		//$this->layout->master= View::make('layouts.master');
		//return View::make('blog.index');

	}



public function newPost()
	{
		//

		$this->layout->master= View::make('blog.new');
		
	}



	public function createPost()
	{
		$post = new Post();
		$post->title = Input::get('title');
		$post->content = nl2br(Input::get('content'));
		$post->save();

		return Redirect::route('viewPost',array('id'=> $post->id));





	}



	public function viewPost($id)
	{
		$post = Post::findOrFail($id);
		$this->layout->content = View::make('blog.view', array(
			'post'=>$post

			));


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
