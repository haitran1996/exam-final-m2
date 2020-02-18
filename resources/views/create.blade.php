@extends('layout.master')
@section('content')
    <h2>Create new contact</h2><br>
    @if(Session::has('alert'))
        <div class="alert-success">{{Session::get('alert')}}</div>
        @endif
    <form method="post" action="{{route('contact.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">First Name</label>
            <input type="text" class="form-control" name="fisrtName" value="{{old("fisrtName")}}">
        </div>
        @error('fisrtName')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="form-group">
            <label for="exampleFormControlInput1">Last Name</label>
            <input type="text" class="form-control" name="lastName" value="{{old("lastName")}}">
        </div>
        @error('lastName')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="form-group">
            <label for="exampleFormControlInput1">Phone Number</label>
            <input type="number" class="form-control" name="phone" value="{{old("phone")}}">
        </div>
        @error('phone')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="text" class="form-control" name="email" value="{{old("email")}}">
        </div>
        @error('email')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address">{{old('address')}}</textarea>
        </div>
        @error('address')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="form-group">
            <label for="exampleFormControlInput1">Avatar</label>
            <input type="file" class="form-control" name="avatar">
        </div>
        @error('avatar')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
