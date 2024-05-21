<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable=['nom','date','nombre_place','lieu','description','picture'];
    use HasFactory;
    /**
     * Get the type_evenement that owns the Evenement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type_evenement(): BelongsTo
    {
        return $this->belongsTo(Type_evenement::class);
    }

    /**
     * The reservations that belong to the Evenement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reservations(): BelongsToMany
    {
        return $this->belongsToMany(Reservation::class, 'even_reservation')->withPivot('prix','quantite')
        ->withTimestamps()
        ;
    }

    /**
     * Get the administrateur that owns the Evenement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function administrateur(): BelongsTo
    {
        return $this->belongsTo(Administrateur::class);
    }
}
