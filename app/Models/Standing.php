<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AdjustTime;


class Standing extends Model
{
    use HasFactory, AdjustTime;

    protected $fillable = [
        'country_code', 'MP', 'D', 'W', 'L', 'Pts', 'GF', 'GA', 'GD'
     ];

    public function team()
    {
        return $this->belongsTo(Team::class, 'country_code', 'country_code');
    }

    // public function results()
    // {
    //     return $this->belongsTo(Team::class, 'country_code', 'country_code');
    // }

    public function getRouteKeyName()
    {
        return 'country_code';
    }

}
