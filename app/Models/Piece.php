<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;
    protected $guarded = [];




    public function interesters()
    {
        return $this->morphToMany(User::class , 'interrestable')->withTimestamps();
    }


    /**
     * The demandes that belong to the Piece
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function demandes()
    {
        return $this->belongsToMany(Demande::class);
    }

    /**
     * The modeles that belong to the Piece
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    /**
     * The categories that belong to the Piece
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * The Modeles that   the Piece is compatible with
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function compatible_with()
    {
        return $this->belongsToMany(Modele::class, 'modele_piece', 'piece_id', 'modele_id');
    }
}
