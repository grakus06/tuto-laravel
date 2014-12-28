<?php

class Auteur extends Eloquent {

	protected $table = 'auteurs';
	public $timestamps = true;

	public function livres()
	{
		return $this->hasMany('Livre');
	}

}