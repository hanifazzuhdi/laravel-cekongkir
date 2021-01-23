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

</div>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h5 class="text-primary"> Cek Ongkir Ekspedisi Indonesia </h5>
        </div>
        <div class="card-body">
            <form action="{{ route('cekOngkir') }}" method="POST">
                <div class="row">
                    <div class="col">
                        <h4 class="mb-4">Asal Pengiriman</h4>
                        <div class="form-group">
                            <label for="province_origin">Provinsi : </label>
                            <select class="form-control select2" name="province_origin" id="province_origin" autofocus>
                                @foreach ($hasil as $item)
                                <option value="{{$item->province_id}}">{{$item->province}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="city_origin">Kota / Kab :</label>
                            <select class="form-control select2" name="origin" id="city_origin">
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <h4 class="mb-4">Tujuan Pengiriman</h4>
                        <div class="form-group">
                            <label for="city_destination">Kota / Kab :</label>
                            <select class="form-control select2" name="destination" id="city_destination">
                                @foreach ($allCity as $city)
                                <option value="{{$city->city_id}}">{{$city->city_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ekspedisi">Ekspedisi : </label>
                            <select class="form-control" name="courier" id="ekspedisi">
                                <option value="jne">JNE</option>
                                <option value="pos">POS INDONESIA</option>
                                <option value="tiki">TIKI</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="berat">Berat (Kg) : </label>
                            <input class="form-control" type="number" name="weight" id="berat">
                        </div>
                    </div>
                </div>

                <div class="form-group border-top pt-3 mt-4 d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-primary">Cek Ongkir</button>
                </div>
                @csrf
            </form>
        </div>
    </div>
</div>

@if (session('success'))
<div class="container my-5">
    <div class="card">
        <div class="card-header text-primary">
            Ekspedisi : {{session('success')[0]->name}}
        </div>
        <div class="card-body">
            <h3 class="text-center mb-3"> Jenis Paket </h3>
            <ul class=" list-group">
                <li class="list-group-item">
                    @foreach (session('success')[0]->costs as $value)
                    <div class="row py-4 border-bottom">
                        <div class="col">
                            <span class="d-block"> Service : {{$value->service}} </span>
                            <span>Desc : {{$value->description}}</span>
                        </div>
                        <div class="col">
                            <span class="d-block">Harga : Rp.
                                {{number_format($value->cost[0]->value, 0, ',', '.')}}</span>
                            <span class="d-block">ETD : {{$value->cost[0]->etd}}</span>
                        </div>
                    </div>
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
</div>
@endif

@endsection
