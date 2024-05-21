<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    protected $fillable=['nom','prenom','email','password'];
    use HasFactory;
    /**
     * Get all of the evenements for the Administrateur
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evenements(): HasMany
    {
        return $this->hasMany(Evenement::class);
    }
}
