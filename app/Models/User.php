<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Rinvex\Subscriptions\Traits\HasSubscriptions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasSubscriptions;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     /**
     * The demandes that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function demandes()
    {
        return $this->hasMany(Demande::class);
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

    /**
     * The pieces that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    /**
     * what a user can be interrested in
     *
     */

    public function pieces()
    {
        return $this->morphedByMany(Piece::class , 'interrestable')->withTimestamps();
    }
     public function modeles()
     {
         return $this->morphedByMany(Modele::class , 'interrestable')->withTimestamps();
     }
     public function types()
     {
         return $this->morphedByMany(Type::class , 'interrestable')->withTimestamps();
     }
     public function categories()
     {
         return $this->morphedByMany(Category::class , 'interrestable')->withTimestamps();
     }
     public function subcategories()
     {
         return $this->morphedByMany(SUbcategory::class , 'interrestable')->withTimestamps();
     }
     public function marques()
     {
         return $this->morphedByMany(Marque::class , 'interrestable')->withTimestamps();
     }
     public function nationalities()
     {
         return $this->morphedByMany(Nationality::class , 'interrestable')->withTimestamps();
     }

     public function image()
     {
         return $this->morphOne(Image::class, 'imageable');
     }
     public function viewedDemandes(){
         return $this->belongsToMany(Demande::class, 'viewed_demandes', 'user_id', 'demande_id')
                     ->withTimestamps()->withPivot(['is_saved']);
     }
     public function savedDemandes(){
         return $this->belongsToMany(Demande::class, 'viewed_demande', 'user_id', 'demande_id')
                     ->wherePivot('is_saved' , true);
     }




}
