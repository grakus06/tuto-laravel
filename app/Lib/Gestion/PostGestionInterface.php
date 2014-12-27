<?php namespace Lib\Gestion;

interface PostGestionInterface {

    public function liste($i);
    public function save();
    public function del($i);

}