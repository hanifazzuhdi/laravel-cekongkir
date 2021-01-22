@extends('layouts.app')

@section('content')

<div class="text-center my-4">
    <h2>LaraKir</h2>
    <p class="lead">Layanan Cek Ongkir ke Seluruh Kota / Kab di Indonesia </p>
</div>

<div class="container d-flex justify-content-between mt-5 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center pt-2 text-primary">Nasional</h4>
        </div>
        <div class="card-body">
            <div class="text-center my-3">
                <i class="fas fa-truck fa-3x"></i>
            </div>
            <p class=""> Cek Ongkir Ke Seluruh Daerah di Indonesia </p>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <div class="btn btn-outline-primary">Get Started</div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="text-center pt-2 text-primary">Starter</h4>
        </div>
        <div class="card-body">
            <div class="text-center my-3">
                <i class="fas fa-truck fa-2x"></i>
            </div>
            <p class=""> Cek Ongkir Ke Seluruh Daerah di Indonesia </p>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <div class="btn btn-outline-primary">Get Started</div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="text-center pt-2 text-primary">Starter</h4>
        </div>
        <div class="card-body">
            <div class="text-center my-3">
                <i class="fas fa-truck fa-2x"></i>
            </div>
            <p class=""> Cek Ongkir Ke Seluruh Daerah di Indonesia </p>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <div class="btn btn-outline-primary">Get Started</div>
        </div>
    </div>
</div>

<div class="container">

    <div class="text-center my-4">
        <h2>Cek Ongkir Nasional</h2>
        <p class="lead">Layanan Cek Ongkir ke Seluruh Kota / Kab di Indonesia </p>
    </div>


    <form action="" method="POST">
        <div class="form-group">
            <label for="province_origin">Provinsi Asal : </label>
            <select class="form-control" name="province_origin" id="province_origin">
                @foreach ($hasil as $item)
                <option value="{{$item->province_id}}">{{$item->province}}</option>
                @endforeach
            </select>
        </div>
    </form>

</div>

@endsection
