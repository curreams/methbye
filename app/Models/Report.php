<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Report extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'report';

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
                  'date_begin',
                  'date_end',
                  'description'
              ];
     
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the events for this model.
     */
    public function events()
    {
        return $this->belongsToMany('App\Models\Event','event_report','report_id','event_id')
                    ->withTimestamps();
    }

   


}
