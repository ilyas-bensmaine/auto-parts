<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get all of the modeles for the Marque
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modeles()
    {
        return $this->hasMany(Modele::class);
    }
    /**
     * Get the nationality that owns the Marque
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nationality()
    {
        return $this->belongsTo(Nationality::class);
    }
    public function interesters()
    {
        return $this->morphToMany(User::class , 'interrestable')->withTimestamps();
    }

    /**
     * The types that belong to the Marque
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

}
