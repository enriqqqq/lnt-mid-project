@extends('layout')

@section('button')
    <div id= "reroute"><a href="/employees/create">Add Entry</a></div>
@endsection

@section('main')
    @if(count($employees) == 0)
        <p class= "noentry-wrapper">No Entries Found</p>            
    @else
        <div class="index-container">
            <form action="/" id="search">
                <div class="search-row">
                    <input type="text" placeholder="Search Employee..." name="search" class="search">
                    <button class="search"type="submit">Search</button>
                </div>
            </form>
            <div class="display">
                @foreach($employees as $employee)
                    <div class="card">
                        <form action="/employees/{{$employee->id}}" method="POST" style="visibility: hidden" id="delete-{{$employee->id}}">
                            @csrf
                            @method('DELETE')
                        </form>
    
                        <div class="btn-row" type="button">
                            <div class="update">
                                <a href="/employees/{{$employee->id}}">
                                    <img src="{{asset('images/edit.png')}}" alt="" class="btn">
                                </a>
                            </div>
                            <button class="delete" type="submit" form="delete-{{$employee->id}}">
                                <img src="{{asset('images/delete.png')}}" alt="" class="btn">
                            </button>
                        </div>
                        <img class="profile" src="{{asset('images/no-profile.png')}}" alt= "">
                        <p>{{$employee->name}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    
@endsection