<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title',
'description',
'date',
'picture',
'user_id',
];


	public function setPictureAttribute($picture)
	{
		$this->attributes['picture'] = $picture->store('events', 'public');
	}

	public function getPictureAttribute($picture)
	{
		return asset('storage/' . $picture);
	}

	public function photos()
	{
		return $this->hasMany(Photo::class);
	}
}
