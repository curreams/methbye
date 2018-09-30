<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'event';

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
                  'date',
                  'location',
                  'mood',
                  'physical_condition',
                  'details',
                  'user_id',
                  'is_complete'
              ];

    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

 /**
     * Get the events for this model.
     */
    public function reports()
    {
        return $this->belongsToMany('App\Models\Report','event_report','event_id','report_id')
                    ->withTimestamps();
    }
    /**
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public static function getEventByUserId($id)
    {
        return Event::where('user_id', $id)->orderBy('date', 'asc')->get();
    }

    public static function getEventByUserIdAndDate($id,$date_begin,$date_end)
    {
        
        return Event::where('user_id', $id)
                    ->where('date','>=', $date_begin)
                    ->whereRaw(' date <= date(?) + 1', [$date_end])                    
                    ->orderBy('date', 'asc')->get();
    }
    public static function getFirstEventByUser($id)
    {
        return Event::where('user_id', $id)->first();
    }

    


}
