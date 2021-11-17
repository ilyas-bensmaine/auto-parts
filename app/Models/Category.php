<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get all of the modeles for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pieces()
    {
        return $this->belongsToMany(Piece::class);
    }
    public function interesters()
    {
        return $this->morphToMany(User::class , 'interrestable')->withTimestamps();
    }

}
