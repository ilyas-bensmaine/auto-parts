<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory2 extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function pieces()
    {
        return $this->hasMany(Piece::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function demandes()
    {
        return $this->morphToMany(Demande::class , 'demandable')->withTimestamps();
    }

    public function interesters()
    {
        return $this->morphToMany(User::class , 'interrestable')->withTimestamps();
    }

}
