<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'Population',
        'Cost_of_Living',
        'Property_Value',
        'Employment',
        'Weather',
        'Region',
        'Geography',
        'Avg_Rent',
        'Median_Income',
        'City',
        'State'
        ];
}
