<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';
	
	// Relación de Muchos a Uno
	public function user(){
		return $this->belongsTo('App\User', 'user_id');
	}

	// Relación de Muchos a Uno
	public function image(){
		return $this->belongsTo('App\Image', 'image_id');
	}
}
