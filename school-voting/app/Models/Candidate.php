<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
	use HasFactory;


	protected $fillable = [
		'user_id',
		'position',
		'profile_image_path',
		'slogan',
		'party'
	];


	public function user(){

		return $this->belongsTo(User::class);
	}
}
