<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    use HasFactory;
    /**
     * Get all of the demandes for the Wilaya
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }


}
