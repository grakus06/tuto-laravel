<?php  namespace Lib\Validation; 
interface ValidatorInterface {

   // public function fails();
   // Pour la 2eme partie du cours on rajoute un id d'enregistrement
    public function fails($id = null);
    
	public function errors();

}