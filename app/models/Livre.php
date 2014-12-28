<?php

class Livre extends Eloquent {

    protected $table = 'livres';
	public $timestamps = true;
	protected $fillable = array('titre', 'editeur_id');

	public function auteurs()
	{
		return $this->belongsToMany('Auteur');
	}

	public function editeur()
	{
		return $this->belongsTo('Editeur');
	}

}
