<?php

namespace App\Models;

use App\Notifications\NewDemandeAdded;
use Illuminate\Database\Eloquent\Collection;
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
     * Get the wilaya that owns the Demande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
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


    public function notify_interresters(){
        $demander = $this->demander;
        $ids = [];
        $piece = $this->pieces[0];
        $modeles = $piece->compatible_with;
        $categories = $piece->categories;


        foreach  ($piece->interesters as $user)
            if (!in_array($user->id , $ids) and $user != $demander )
                    {
                        array_push($ids ,$user->id);
                        $user->notify(new NewDemandeAdded($this));

                    }

        foreach ($modeles as $modele)
            {
                foreach  ($modele->interesters as $user)
                 if (!in_array($user->id , $ids) and $user != $demander )
                         {
                            array_push($ids ,$user->id);
                            $user->notify(new NewDemandeAdded($this));
                         }
            }

        foreach ($categories as $category)
            {
                foreach  ($category->interesters as $user)
                 if (!in_array($user->id , $ids) and $user != $demander )
                          {
                            array_push($ids ,$user->id);
                            $user->notify(new NewDemandeAdded($this));
                          }
            }



    }

}
