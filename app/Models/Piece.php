<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;
    /**
     * The inerests that belong to the Piece
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function interrested()
    {
        return $this->belongsToMany(User::class,'piece_user', 'piece_id' , 'user_id');
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
    public function modeles()
    {
        return $this->belongsToMany(Modele::class);
    }

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
