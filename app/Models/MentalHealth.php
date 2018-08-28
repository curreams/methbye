<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MentalHealth extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mental_distress';

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
        'period',
        'type',
        'psycchological_distres'
    ];



}
