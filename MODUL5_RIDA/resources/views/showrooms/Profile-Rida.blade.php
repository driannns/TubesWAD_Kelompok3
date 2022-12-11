@extends('layouts.master')

@section('content')
<div class="from-wrapper d-flex justify-content-center m-4">
    <form action="/showrooms/Profile-Rida/{{ auth()->user()->id }}" method="post" style="width:60%">
    @csrf
            @method('put')
        <h2>Profile</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                value="{{ auth()->user()->email }}" readonly="readonly">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputPassword1"
                value=" {{auth()->user()->name}} ">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>
            <input type="text" class="form-control" name="no_hp" id="exampleInputPassword1"
                value="{{auth()->user()->no_hp }}">
        </div>
        <hr>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" required
                placeholder="Enter your password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="konfirmasipassword" required
                id="exampleInputPassword1" placeholder="Confirm your password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Warna Navbar</label>
            <input type="text" class="form-control" name="navbar" name="navbar" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
