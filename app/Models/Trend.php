<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trend extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trend';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'year',
        'health-problem',
        'death',
        'offence',
        'age',
        'user',
    ];



}
