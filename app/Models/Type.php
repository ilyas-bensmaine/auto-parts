<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * The modeles that belong to the Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function modeles()
    {
        return $this->belongsToMany(Modele::class);
    }
    /**
     * The marques that belong to the Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function marques()
    {
        return $this->belongsToMany(Marque::class);
    }
    public function interesters()
    {
        return $this->morphToMany(User::class , 'interrestable')->withTimestamps();
    }
    public function demandes()
    {
        return $this->morphToMany(Demande::class , 'demandable')->withTimestamps();
    }
}
