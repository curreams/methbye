<style>
    table, th, td {
      border: 1px solid black;
    }
</style>
<div class="modal fade modal-scroll" id="report_modal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <span class="modal-title"></span>
      </div>
        <h2> METHBYE REPORT </h2>
        <h4> Date: <small>{!! date('Y-m-d') !!}</small></h3>
        <h4> Comments: <small>{!! $description !!}</small></h4>
        <h4> Episode Dates (From - To): <small>{!! $times !!}</small></h4>
        <h4> Episodes </h4>
        <table >
            <tr style=>
                <th>Date</th>
                <th>Location</th>
                <th>Mood</th>
                <th>Physical Condition</th>
                <th>Details</th>
            </tr>
            <tbody id="table_body">
            @foreach($events as $key => $event)
            <tr >
                <th>{{$event->date}}</th>
                <th>{{$event->location}}</th>
                <th>{{$event->mood}}</th>
                <th>{{$event->physical_condition}}</th>
                <th>{{$event->details}}</th>
            </tr>
            @endforeach


            </tbody>
        </table>


      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>



