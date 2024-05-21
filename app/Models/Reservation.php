<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=['date_reservation'];
    use HasFactory;
    /**
     * Get the utilisateur that owns the Reservation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function utilisateur(): BelongsTo
    {
        return $this->belongsTo(Utilisateur::class);
    }
     /**
     * The evenements that belong to the Evenement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function evenements(): BelongsToMany
    {
        return $this->belongsToMany(Evenement::class, 'even_reservation')->withPivot('prix','quantite')
        ->withTimestamps()
        ;
    }

}
