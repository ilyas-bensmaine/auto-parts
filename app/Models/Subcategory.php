<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded = [];


    /**
     * Get the category that owns the Subcategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get all of the pieces for the Subcategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pieces()
    {
        return $this->hasMany(Piece::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
