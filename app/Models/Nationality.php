<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get all of the marques for the Nationality
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marques()
    {
        return $this->hasMany(Marque::class);
    }
    public function interesters()
    {
        return $this->morphToMany(User::class , 'interrestable')->withTimestamps();
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
