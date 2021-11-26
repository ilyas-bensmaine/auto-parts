<?php

namespace App\Models;

use App\Notifications\CategoryNotification;
use App\Notifications\MarqueNotification;
use App\Notifications\ModeleNotification;
use App\Notifications\NewDemandeAdded;
use App\Notifications\SubcategoryNotification;
// use App\Notifications\PieceNotification;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Demande extends Model
{
    use HasFactory;
    protected $guarded = [] ;



    public function categories()
    {
        return $this->morphedByMany(Category::class , 'demandable')->withTimestamps();
    }
    public function subcategories()
    {
        return $this->morphedByMany(Subcategory::class , 'demandable')->withTimestamps();
    }
    public function modeles()
    {
        return $this->morphedByMany(Modele::class , 'demandable')->withTimestamps();
    }
    public function marques()
    {
        return $this->morphedByMany(Marque::class , 'demandable')->withTimestamps();
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }




    /**
     * The Demander that belong to the Demande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function demander()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
    public function etat()
    {
        return $this->belongsTo(User::class);
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
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
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
        $modeles = $this->modeles;
        $marques = $this->marques;
        $category = $this->categories[0];
        $subcategory = $this->subcategories[0];
                    foreach ($modeles as $modele)
                    {
                        foreach  ($modele->interesters as $user)
                        {
                            // dd();
                            if (!in_array($user->id , $ids) and $user != $demander
                                and ($user->categories->contains($category)
                                     or $user->subcategories->contains($subcategory) ))
                            {
                                array_push($ids ,$user->id);
                                $user->notify(new ModeleNotification($this));
                                // dd($user->notifications);
                            }
                        }
                    }
                    foreach  ($subcategory->interesters as $user)
                    {
                        if (!in_array($user->id , $ids) and $user != $demander )
                        {
                            array_push($ids ,$user->id);
                            $user->notify(new SubcategoryNotification($this));

                        }
                    }

                    foreach ($marques as $marque)
                    {
                        foreach  ($marque->interesters as $user )
                            if ( (!in_array($user->id , $ids) and $user != $demander )
                                                    and ($user->categories->contains($category)
                                                    or $user->subcategories->contains($subcategory) ))
                            {
                                array_push($ids ,$user->id);
                                $user->notify(new MarqueNotification($this));
                            }
                    }

                    foreach  ($category->interesters as $user)
                        if (!in_array($user->id , $ids) and $user != $demander )
                        {
                            array_push($ids ,$user->id);
                            $user->notify(new CategoryNotification($this));
                        }

    }

}
