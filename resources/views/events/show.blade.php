@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Event' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('events.event.destroy', $event->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('events.event.index') }}" class="btn btn-primary" title="Show All Event">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('events.event.create') }}" class="btn btn-success" title="Create New Event">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('events.event.edit', $event->id ) }}" class="btn btn-primary" title="Edit Event">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Event" onclick="return confirm(&quot;Delete Event??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>text</dt>
            <dd>{{ $event->date }}</dd>
            <dt>Location</dt>
            <dd>{{ $event->location }}</dd>
            <dt>Current Mood</dt>
            <dd>{{ implode('; ', $event->currentMood) }}</dd>
            <dt>Physical Condition</dt>
            <dd>{{ implode('; ', $event->physicalCondition) }}</dd>
            <dt>Details</dt>
            <dd>{{ $event->details }}</dd>

        </dl>

    </div>
</div>

@endsection