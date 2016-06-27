<?php


class post extends Eloquent{
	public $timestamps = false;
	protected $table = 'post';


	//custom attributes

	public function getImageAttribute(){
		return '/images/' . $this->attributes['imagen'];
	}

	public function getFechaAttribute(){
        return date('d/m/Y', strtotime($this->attributes['fecha']));
	}
}