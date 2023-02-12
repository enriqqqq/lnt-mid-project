@extends('layout')

@section('button')
    <div id="reroute"><a href="/">Home</a></div>
@endsection

@section('main')
    <div class="create-container">
        <h1>Add New Entry</h1>
        <div class="show-modal create-modal">
            <form action="/employees" id="createform" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text">
                    @error('name')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <div class="row">
                    <label for="age">Age</label>
                    <input id="age" name="age" type="text">
                    @error('age')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <div class="row">
                    <label for="address">Address</label>
                    <input id="address" name="address" type="text">
                    @error('address')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <div class="row">
                    <label for="phone_number">Phone Number</label>
                    <input id="phone_number" name="phone_number" type="text">
                    @error('phone_number')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <div class="row">
                    <label for="image">Photo</label>
                    <input id="image" name="image" type="file">
                    @error('image')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
            </form>
        </div>
        <button class="create-btn" type="submit" form="createform">Submit</button>
    </div>
@endsection