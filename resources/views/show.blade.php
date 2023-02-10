@extends('layout')

@section('button')
    <div id="reroute" href="/">Home</div>
@endsection

@section('main')
    {{$employee}}
    <div class="show-container">
        <div class="btn-row">
            <div class="delete" style="height: 35px; width: 35px; border-radius: 7px; padding: 3px;">
                <a href="#">
                    <img src="{{asset('images/delete.png')}}" alt="" class="btn">
                </a>
            </div>
        </div>
        <div class="show-display">
            <div class="img-wrapper">
                <img class="show-profile" src="{{asset('images/no-profile-2.png')}}" alt="">
            </div>
            <div class="show-modal">
                <form action="/employees/update/{{$employee->id}}" id="updateform" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" value="{{$employee->name}}">
                    </div>
                    <div class="row">
                        <label for="age">Age</label>
                        <input id="age" name="age" type="text" value="{{$employee->age}}">
                    </div>
                    <div class="row">
                        <label for="address">Address</label>
                        <input id="address" name="address" type="text" value="{{$employee->address}}">
                    </div>
                    <div class="row">
                        <label for="phone_number">Phone Number</label>
                        <input id="phone_number" name="phone_number" type="text" value="{{$employee->phone_number}}">
                    </div>
                </form>
            </div>
        </div>
        <div class="prev-next">
            <div class="prev">
                <a class="prev" href="">
                    <img src="{{asset('images/left-arrow.png')}}" alt="">
                </a>
            </div>
            <button class="show-update" type="submit" form="updateform">Update</button>
            <div class="next">
                <a class="next" href="">
                    <img src="{{asset('images/right-arrow.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
@endsection