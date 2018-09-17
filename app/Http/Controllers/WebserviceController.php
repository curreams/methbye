<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class WebserviceController extends Controller
{
    /**
     * Register an incomplete event. Web service
     */
    public function register($event)
    {
        $date_time = date('Y-m-d H:i:s');
        $event_result = json_decode($event, true);
        $is_complete = 0;
        $user = User::getUserByPhone($event_result['mobile']);        
        if (isset($user)) {
            $data = [
                'date' => $date_time,
                'description' => '',
                'user_id' => $user->id,
                'is_complete'=> $is_complete,       
            ];
            return  Event::create($data);
        }
        else {
            return "Not possible to create"; 
        }
          
    }

    /**
     * Register a test for the web service
     */
    public function testRegister()
    {
        $test_array = [
            'mobile' => '0401735648',
        ];
        
        return $this->register(json_encode($test_array));
    }    
}
