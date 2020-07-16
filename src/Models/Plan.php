<?php

namespace doctype_admin\Landing\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $guarded = [];

    protected $casts = [
        'plan_services' => 'array'
    ];

    public function getPlanPeriodAttribute($attribute)
    {
        return [
            1 => "Year",
            2 => "Month",
            3 => "Day"
        ][$attribute];
    }
}
