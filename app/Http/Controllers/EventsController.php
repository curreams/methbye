<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Auth;

class EventsController extends Controller
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
        $events = Event::with('user')->paginate(25);

        return view('events.index', compact('events'));
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
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Event::create($data);

            return redirect()->route('welcome')
                             ->with('success_message', 'Event was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified event.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $event = Event::with('user')->findOrFail($id);

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified event.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $users = User::pluck('name','id')->all();

        return view('events.edit', compact('event','users'));
    }

    /**
     * Update the specified event in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $event = Event::findOrFail($id);
            $event->update($data);

            return redirect()->route('events.event.index')
                             ->with('success_message', 'Event was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified event from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $event = Event::findOrFail($id);
            $event->delete();

            return redirect()->route('events.event.index')
                             ->with('success_message', 'Event was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
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
        
        $currentMood = '';
        foreach ($request['currentMood'] as $key => $mood) {
            if($mood) {
                $currentMood .= ' ' . $mood . ',';
            }
           
        }
        $physicalCondition = '';
        foreach ($request['physicalCondition'] as $key => $condition) {
            if($condition){
                $physicalCondition .= ' ' . $condition . ',';
            }
        }
        $userId = Auth::user()->id;
        $is_complete = 1;        
        $date_time = $request['date'];
        
        $data = [
            'date' => $date_time,
            'location' => $request['location'],
            'mood' => $currentMood,
            'physical_condition' => $physicalCondition,
            'details' =>  $request['details'],
            'user_id' => $userId,
            'is_complete'=> $is_complete,       
        ];
        return $data;
    }
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
     * 
     */
    public function displayTimeline()
    {
        $userId = Auth::user()->id;
        $events = Event::getEventByUserId($userId);
        $firstEvent  = Event::getFirstEventByUser($userId);
        foreach ($events as $key => $event) {
            
            //dd(date('d/m/Y', strtotime($event->date)));
        }
        return view('events.timeline', compact('events'));
        
    }

    /**
     * Register a test for the web service
     */
    public function testRegister()
    {
        $test_array = [
            'mobile' => '0401735648',
        ];
        $web_service = new WebserviceController;
        return $web_service->register(json_encode($test_array));
    }
    /**
     * Get info view
     */
    public function getinfo()
    {
        return view('events.info');
    }



}
