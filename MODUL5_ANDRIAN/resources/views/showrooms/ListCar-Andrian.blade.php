@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title">
        <h1>My Show Room</h1>
        <p class="text-muted">List Show Room Andrian Saputra-1202204011</p>
    </div>
    <div class="row row-cols-4 g-3">
        <div class="col">
            @foreach($showrooms as $select)
            <div class="card p-2 shadow" style="width: 18rem;">
                <img src="/assets/images/{{ $select->image }}" class="card-img-top" alt="..."
                    style="max-width: 270px; height: 136px; border-radius:10px;">
                <div class="card-body">
                    <h5>{{ $select->name }}</h5>
                    <p class="card-text">{{ $select->description  }}</p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/showrooms/Detail-Andrian/{{ $select -> id}}"><button type="button"
                            class="btn btn-primary rounded-pill me-3 px-4">Detail</button></a>
                    <form action="/showrooms/{{$select -> id}}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger rounded-pill me-3 px-4" type="submit" value="Delete" />
                    </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div style="margin:20px; font-weight:600;">
    </div>

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-delay="5000"
        data-autohide="false">
        <div class="toast-header">
            <span class="rounded mr-2 bg-primary" style="width: 15px;height: 15px"></span>

            <strong class="mr-auto">Notifikasi</strong>
            <small>1 menit yang lalu</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
        </div>
    </div>
    @endsection
