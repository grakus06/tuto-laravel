<?php

use Lib\Validation\EmailValidator as EmailValidator;

/* version with no dependency injection
class EmailController extends BaseController {

	public function __construct(EmailValidator $validation)
	{
		parent::__construct();
		$this->validation = $validation;
	}

	public function getForm()
	{
		return View::make('email');
	}

	public function postForm()
	{
		if ($this->validation->fails()) {
		  return Redirect::to('email/form')
		  ->withErrors($this->validation->errors());
		} else {
    		$email = new Email;
			$email->email = Input::get('email');
			$email->save();
			return View::make('email_ok');
		}
	}

}
*/
/* version with Dep injection to avois a-having model reference code in controller 
class EmailController extends BaseController {

    protected $email;

	public function __construct(EmailValidator $validation, Email $email)
	{
		parent::__construct();
		$this->validation = $validation;
		$this->email = $email;
	}

	public function getForm()
	{
		return View::make('email');
	}

	public function postForm()
	{
		if ($this->validation->fails()) {
		  return Redirect::to('email/form')
		  ->withErrors($this->validation->errors());
		} else {
			$email = new $this->email;
			$email->email = Input::get('email');
			$email->save();
			return View::make('email_ok');
		}
	}

}
*/
/* version with dep in on validation and management */
use Lib\Gestion\EmailGestion as EmailGestion;

class EmailController extends BaseController {

    protected $emailgestion;

	public function __construct(EmailValidator $validation, EmailGestion $emailgestion)
	{
		parent::__construct();
		$this->validation = $validation;
		$this->emailgestion = $emailgestion;
	}

	public function getForm()
	{
		return View::make('email');
	}

	public function postForm()
	{
		if ($this->validation->fails()) {
		  return Redirect::to('email/form')
		  ->withErrors($this->validation->errors());
		} else {
			$this->emailgestion->save();
			return View::make('email_ok');
		}
	}

}