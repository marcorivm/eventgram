<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    

	public function setPictureAttribute($picture)
	{
		$this->attributes['picture'] = $picture->store('event_photos', 'public');
	}

	public function getPictureAttribute($picture)
	{
		return asset('storage/' . $picture);
	}

	public function event()
	{
		return $this->belongsTo(Event::class);
	}
}
