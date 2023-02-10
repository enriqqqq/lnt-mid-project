@extends('layout')

@section('button')
    <div id= "reroute" href="#"> Add Entry </div>
@endsection

@section('main')
    @if(count($employees) == 0)
        <p class= "noentry-wrapper">No Entries Found</p>            
    @else
        <div class="display">
            @foreach($employees as $employee)
                <div class="card">
                    <div class="btn-row" type="button">
                        <div class="update">
                            <a href="/employees/{{$employee->id}}">
                                <img src="{{asset('images/edit.png')}}" alt="" class="btn">
                            </a>
                        </div>
                        <div class="delete" type="button">
                            <a href="#">
                                <img src="{{asset('images/delete.png')}}" alt="" class="btn">
                            </a>
                        </div>
                    </div>
                    <img class="profile" src="{{asset('images/no-profile.png')}}" alt= "">
                    <p>{{$employee->name}}</p>
                </div>
            @endforeach
        </div>
    @endif
    
@endsection