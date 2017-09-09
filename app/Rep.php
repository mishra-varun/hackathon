<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rep extends Model
{
    protected $fillable=[
    'date',
    'title',
    'event_details',
    'objectives',
    'participants',
    'external_resource_person',
    'description',
    'outcomes',
    'staff_involved',
    'learning',
    'scope_for_improvement',
    'conclusion',
    'prepared_by',
    'designation'
    ];
}
