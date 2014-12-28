<?php

class LivresController extends \BaseController {

	/**
	 * Display a listing of livres
	 *
	 * @return Response
	 */
	public function index()
	{
		$livres = Livre::all();

		return View::make('livres.index', compact('livres'));
	}

	/**
	 * Show the form for creating a new livre
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('livres.create');
	}

	/**
	 * Store a newly created livre in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Livre::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Livre::create($data);

		return Redirect::route('livres.index');
	}

	/**
	 * Display the specified livre.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$livre = Livre::findOrFail($id);

		return View::make('livres.show', compact('livre'));
	}

	/**
	 * Show the form for editing the specified livre.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$livre = Livre::find($id);

		return View::make('livres.edit', compact('livre'));
	}

	/**
	 * Update the specified livre in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$livre = Livre::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Livre::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$livre->update($data);

		return Redirect::route('livres.index');
	}

	/**
	 * Remove the specified livre from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Livre::destroy($id);

		return Redirect::route('livres.index');
	}

}
