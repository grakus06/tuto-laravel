<?php

class Auteur extends Eloquent {

    protected $table = 'auteurs';
	public $timestamps = true;
	protected $fillable = array('nom');

	public function livres()
	{
		return $this->belongsToMany('Livre');
	}

}
