@extends('layouts.app')

@section('content')
    <div class="from-wrapper d-flex justify-content-center mt-5">
        <form action="/showrooms/Profile-Andrian/{{ auth()->user()->id }}" method="post" style="width:60%">
        @csrf
        @method('put')
            <h2>Profile</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                    aria-describedby="emailHelp" value="{{ Auth::user()->email }}" readonly="readonly">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="exampleInputPassword1"
                    value="{{ Auth::user()->name }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" name="no_hp" id="exampleInputPassword1"
                    value="{{ Auth::user()->no_hp }}">
            </div>
            <hr>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" required
                    placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" name="confirmpassword" required name="rememberme"
                    id="exampleInputPassword1" placeholder="Confirm your password">
            </div>
            <label for="navbar_color" class="form-label">Warna Navbar:</label>
            <select class="form-select" aria-label="Default select example" name="navbar_color">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Update</button>
    </div>
    </form>
@endsection