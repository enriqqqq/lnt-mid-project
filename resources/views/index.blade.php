@extends('layout')

@section('head')

@endsection

@section('button')
    <button id= "reroute" type="button" href="#"> Add Page </button>
@endsection
@section('main')
    @if(count($employees) == 0)
    <div class="noentry-wrapper">
        <p>No Entries Found</p>            
    </div>
    @else
        <div class="display">
            @foreach($employees as $employee)
                <div class="card">
                    <div class="btn-row" type="button">
                        <button class="update">
                            <img src="{{asset('images/edit.png')}}" alt="" class="btn">
                        </button>
                        <button class="delete" type="button">
                            <img src="{{asset('images/delete.png')}}" alt="" class="btn">
                        </button>
                    </div>
                    <img class="profile" src="{{asset('images/no-profile.png')}}" alt= "">
                    <p>{{$employee->name}}</p>
                </div>
            @endforeach
        </div>
    @endif

@endsection