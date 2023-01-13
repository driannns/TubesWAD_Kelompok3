@extends('layouts.master')
<style>
    .judul-obat{
        font-size: 48px;
        font-weight: 650;
    }
    .container {
        width: 95%;
    }
    .search{
        width: 100%;
    }
    .search > input{
        width: 100%;
        padding: 10px;
    }
    .icon-search{
    justify-content: center;
    margin-left:2%;
    font-size: 3vw;
    width: 16%;
    height: 48px;
    background-color: #F5F5F5;
    color: #bdbdbd;
    cursor: pointer;
}
.icon-search > div > p{
    font-size: 2vw;
    margin-bottom:0px;
}
.jenis-container > div{
    max-width: 200px;
    background-color: #F5F5F5;
    font-size: 2vw;
    color: #bdbdbd;
    margin: 10px 10px 10px 0;
    padding: 5px 10px;

}

@media only screen and (min-width: 768px){
    
}

</style>
@section('content')
<h3 class="judul-obat m-5">Obat RS MediCare</h3>
<div class="container">
    <!-- <a href="/obat/input"><button class="btn btn-primary mb-3">Input Obat</button></a> -->
    <div class="search d-flex align-items-center justify-contents-center">
        <input type="text" placeholder="Example: Covid-19, vitamin C or Redoxon">
        <div class="icon-search d-flex align-items-center">
            <i class='bx bx-search'></i>
            <div>
                <p>cari</p>
            </div>
        </div>
    </div>
    <div class="jenis-container d-flex g-2">
        <div class="jenis-sirup">
            Sirup
        </div>
        <div class="jenis-tablet">
            Tablet
        </div>
        <div class="jenis-kapsul">
            Kapsul
        </div>
    </div>
    <div class="list-obat mt-4">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($obat as $select)
    <a href="/obat/show/{{ $select -> id }}" style="text-decoration: none; color: black">
        <div class="col">
            <div class="card">
                <img src="/assets/images/obat/{{ $select -> gambar_obat}}" class="card-img-top" alt="..." width="200px;">
                <div class="card-body">
                    <div height="">
                        <h5 class="card-title">{{ $select -> nama_obat }}</h5>
                    </div>
                    <p class="card-text">{{ $select ->jenis_obat}}</p>
                    <button href="/obat/{{ $select -> id }}" class="btn btn-success">Detail</button>
                </div>
            </div>
        </div>
    </a>
  @endforeach
    </div>
</div>
@endsection