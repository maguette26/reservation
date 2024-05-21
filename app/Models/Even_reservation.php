<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Even_reservation extends Model
{
    protected $fillable=['prix','quantite','evenement_id','reservation_id'];
    use HasFactory;

    public function reservation()
    {
        return $this-> belongsTo(Reservation::class);

    }

    public function evenement()
    {
        return $this-> belongsTo(Evenement::class);

    }
}
