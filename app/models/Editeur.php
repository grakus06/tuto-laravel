<?php

class Editeur extends Eloquent {

    protected $table = 'editeurs';
	public $timestamps = true;
	protected $fillable = array('nom');

	public function livres()
	{
		return $this->hasMany('Livre');
	}

}
