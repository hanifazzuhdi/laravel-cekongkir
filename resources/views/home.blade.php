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

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h5 class="text-primary"> Cek Ongkir Ekspedisi Indonesia </h5>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col">
                        <h4 class="mb-4">Asal Pengiriman</h4>
                        <div class="form-group">
                            <label for="province_origin">Provinsi : </label>
                            <select class="form-control" name="province_origin" id="province_origin">
                                @foreach ($hasil as $item)
                                <option value="{{$item->province_id}}">{{$item->province}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="city_origin">Kota / Kab :</label>
                            <select class="form-control" name="city_origin" id="city_origin">
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <h4 class="mb-4">Tujuan Pengiriman</h4>
                        <div class="form-group">
                            <label for="city_origin">Kota / Kab :</label>
                            <select class="form-control" name="city_origin" id="city_origin">
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ekspedisi">Ekspedisi : </label>
                            <select class="form-control" name="" id="ekspedisi">
                                <option value="">JNE</option>
                                <option value="">POS INDONESIA</option>
                                <option value="">TIKI</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group border-top pt-3 mt-4 d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-primary">Cek Ongkir</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
