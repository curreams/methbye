<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class EventsController extends Controller
{

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

            return redirect()->route('events.event.index')
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
        $rules = [
            'date' => 'string|min:1|nullable',
            'description' => 'string|min:1|max:20000|nullable',
            'user_id' => 'nullable',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

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

    public function testRegister()
    {
        $test_array = [
            'mobile' => '0401735648',
        ];
        return $this->register(json_encode($test_array));
    }

    public function getinfo()
    {
        return view('events.info');
    }



}
