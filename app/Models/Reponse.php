<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Reponse extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * The Responder that belong to the Demande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Responder()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
    /**
     * Get the demande that owns the Reponse
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
