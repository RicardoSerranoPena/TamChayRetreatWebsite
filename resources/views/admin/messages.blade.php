@extends('layouts.app')

@section('content')
    <h1>Messages</h1>
    @if(count($messages) > 0 )
        @foreach($messages as $message)
            <div class="well">
                <h2>{{$message->name}}</h2>
                <h4>{{$message->phone}}</h4>
                <h4>{{$message->email}}</h4>
                <p>{{$message->message}}</p>
            </div>
        @endforeach
    @else
        <p>No messages</p>
    @endif

@endsection