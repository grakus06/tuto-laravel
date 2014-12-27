<?php
class UsersController extends BaseController {

    public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

    public function getInfos()
	{
		return View::make('infos');
	}

	public function postInfos()
	{
//		echo 'Le nom est ' . Input::get('nom');
// probleme la page ne s'affiche pas. on enleve la reference a Input 
//		return View::make('confirm');
		$regles = array(
			'nom' => 'required|min:5|max:20|alpha'
		);

		$validation = Validator::make(Input::all(), $regles);

		if ($validation->fails()) {
		  return Redirect::to('users/form')->withErrors($validation)->withInput();
		} else {
		      return View::make('confirm');
			};

	}
	/* post method is nok with restful controller */
     /* from openstack, seems we need the store method */
     
	public function storeInfos()
	{
		echo 'Le nom est ' . Input::get('nom');
	}

}
