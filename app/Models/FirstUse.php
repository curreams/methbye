<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FirstUse extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'first_use';

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
        'age',
        'reason',
        'usage'
    ];



}
