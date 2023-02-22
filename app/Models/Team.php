<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class Team extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'country_code';
    }

    public function position()
    {
        return $this->hasOne(Standing::class, 'country_code', 'country_code');
    }
     
}
