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
/**
 * Get all of the pieces for the Category
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
 */
// public function pieces()
// {
//     return $this->hasManyThrough(Piece::class, Subcategory::class , 'category_id' , 'subcategory_id','id' , 'id' );
// }
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
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
