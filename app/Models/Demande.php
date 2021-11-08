<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Demande extends Model
{
    use HasFactory;
    protected $guarded = [] ;
    /**
     * The Demander that belong to the Demande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function demander()
    {
        return $this->belongsTo(User::class , 'user_id');
    }


    /**
     * The pieces that belong to the Demande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pieces()
    {
        return $this->belongsToMany(Piece::class)->withTimestamps();
    }
    /**
     * Get all of the reponses for the Demande
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }

    public function scopeInterrested($query)
    {

        $inter = $query->table('demande_piece')->join('piece_user' , 'demande_piece.piece_id' , '=' ,'piece_user.piece_id' )
                                            ->where('demande_piece.demande_id',1);
        dd($query);// return $inter;
    }

}
