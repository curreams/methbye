<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Auth;
use PDF;

class ReportsController extends Controller
{
    /**
     * New instance
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the events.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {       
        return view('reports.generate');
    }

    /**
     * Show the form for creating a new event.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('name','id')->all();
        
        return view('events.create', compact('users'));
    }

    /**
     * Store a new event in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function generate(Request $request)
    {
        try {
            
            $userId = Auth::user()->id;            
            $data = $this->getData($request); 
            $events = Event::getEventByUserIdAndDate($userId,$request['date_begin'],$request['date_end']);            
            $report =Report::create($data);
            $report->events()->attach($events);
            $new_date = strtotime($request['date_begin']);
            $date_begin = date('Y-m-d',$new_date);
            $new_date = strtotime($request['date_end']);
            $date_end = date('Y-m-d',$new_date);
            $str_date = $date_begin . ' - ' . $date_end;            
            $pdf = PDF::loadView('reports.modal', ['times'=>$str_date,'description'=>$report->description,'events'=>$events]);
            
            return $pdf->download('ReportMethBye.pdf'); 
            //view('reports.modal', compact('events'));  
            
            //back()->withInput()->with('success_message', 'Report was successfully generated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!'. $exception->getMessage()]);
        }
    }

     /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
               
        $date_time = date('Y-m-d H:i:s');
        $new_date = strtotime($request['date_begin']);
        $date_begin = date('Y-m-d H:i:s',$new_date);
        $new_date = strtotime($request['date_end']);
        $date_end = date('Y-m-d H:i:s',$new_date);       
        $data = [            
            'date_begin' => $date_begin,
            'date_end' => $date_end,
            'description' => $request['details'],
            'created_at' => $date_time,
            'update_at' => $date_time
        ];
        return $data;
    }   

    
   
    
    
    
}
