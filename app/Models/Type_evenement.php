<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_evenement extends Model
{ protected $fillable=['categorie','prix'];
    use HasFactory;
    /**
     * Get all of the evenement for the Type_evenement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evenements(): HasMany
    {
        return $this->hasMany(Evenement::class);
    }
}

