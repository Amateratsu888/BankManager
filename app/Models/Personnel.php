<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function ville (){
        return $this->belongsTo(Ville::class);
    }

    public function bank (){
        return $this->belongsTo(Bank::class);
    }

    public function fonction (){
        return $this->belongsToMany(Fonction::class);
    }
}
