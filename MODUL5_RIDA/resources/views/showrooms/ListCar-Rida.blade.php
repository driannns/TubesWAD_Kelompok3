@extends('layouts.master')

@section('content')
<div class="container m-4">
    <div class="text">
        <h4>My Show Room</h4>
        <p>List Show Room Rida-1202200037</p>
    </div>
    <div>
        <div class="row row-cols-3 g-2">
          @foreach($showrooms as $data)
            <div class="showroom col">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/images/{{$data->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$data -> name}}</h5>
                        <p class="card-text">{{$data -> description}}</p>
                    </div>
                    <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/showrooms.Detail-Rida/{{ $data -> id}}" class="card-link btn btn-primary me-2">Detail</a>
                        <form action="/showrooms/{{$data -> id}}" method="post">
                          @csrf
                          @method('delete')
                          <input class="btn btn-danger" type="submit" value="Delete" />
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="jumlah" style="font-weight: 700; margin:25px 50px">
            </div>
        </div>
    </div>

    @endsection
