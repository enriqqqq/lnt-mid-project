@extends('layout')

@section('button')
    <div id="reroute"><a href="/">Home</a></div>
@endsection

@section('main')
    <div class="show-container">
        <div class="btn-row">
            <form action="/employees/{{$employee->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="delete" type="submit" style="height: 42px; width: 42px; border-radius: 7px; padding: 6px;">
                    <img src="{{asset('images/delete.png')}}" alt="" class="btn">
                </button>
            </form>
        </div>
        <div class="show-display">
            <div class="img-wrapper">
                <img class="show-profile" src="{{asset('images/no-profile-2.png')}}" alt="">
            </div>
            <div class="show-modal">
                <form action="/employees/{{$employee->id}}" id="updateform" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" value="{{$employee->name}}">
                        @error('name')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="age">Age</label>
                        <input id="age" name="age" type="text" value="{{$employee->age}}">
                        @error('age')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="address">Address</label>
                        <input id="address" name="address" type="text" value="{{$employee->address}}">
                        @error('address')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="phone_number">Phone Number</label>
                        <input id="phone_number" name="phone_number" type="text" value="{{$employee->phone_number}}">
                        @error('phone_number')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
        <div class="prev-next">
            <div class="prev" @if(!$prev)style="visibility: hidden"@endif>
                <a class="prev" @if($prev)href="/employees/{{$prev->id}}"@endif>
                    <img src="{{asset('images/left-arrow.png')}}" alt="">
                </a>
            </div>
            <button class="show-update" type="submit" form="updateform">Update</button>
            <div class="next" @if(!$next)style="visibility: hidden"@endif>
                <a class="next" @if($next)href="/employees/{{$next->id}}"@endif>
                    <img src="{{asset('images/right-arrow.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
@endsection