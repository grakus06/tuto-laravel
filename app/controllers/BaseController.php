<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	 /* not needed
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	*/
	/* add CSRF protection */
		  
	protected $validation; /* version with dep inection on validation */

    public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
	}
}
