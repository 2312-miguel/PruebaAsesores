<?php

class User extends BaseModel
{
	protected $table = 'users';
        
	public function __construct() {
        parent::__construct();
        
    }

    public function validarClave($hash)
    {
    	
    }
}