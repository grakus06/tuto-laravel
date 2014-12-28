<?php

class Livre extends Eloquent {

	protected $table = 'livres';
	public $timestamps = true;

	public function auteur()
	{
		return $this->belongsTo('Auteur');
	}

}