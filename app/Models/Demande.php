<?php

namespace App\Models;

use App\Notifications\CategoryNotification;
use App\Notifications\MarqueNotification;
use App\Notifications\ModeleNotification;
use App\Notifications\NewDemandeAdded;
use App\Notifications\PieceNotification;
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

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
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


    public function notify_interresters($mod , $mar){
        $demander = $this->demander;
        $ids = [];
        $piece = $this->pieces[0];
        $modeles = $piece->compatible_with;
        $modeles->push(Modele::find($mod));
        // dd($modeles);
        $category = $piece->subcategory->category;
        foreach  ($piece->interesters as $user)
            if (!in_array($user->id , $ids) and $user != $demander )
                    {
                        array_push($ids ,$user->id);
                        $user->notify(new PieceNotification($this));
                    }
                    foreach ($modeles as $modele)
                    {
                        foreach  ($modele->interesters as $user)
                        if (!in_array($user->id , $ids) and $user != $demander )
                        {
                            array_push($ids ,$user->id);
                            $user->notify(new ModeleNotification($this));

                        }
                    foreach  ($category->interesters as $user)
                        if (!in_array($user->id , $ids) and $user != $demander )
                                {
                                    array_push($ids ,$user->id);
                                    $user->notify(new CategoryNotification($this));
                                }
                foreach  ($modele->marque->interesters as $user){
                    if (!in_array($user->id , $ids) and $user != $demander )
                    {
                       array_push($ids ,$user->id);
                       $user->notify(new MarqueNotification($this));
                    }
                }
            }
        dd($ids);


    }

}
