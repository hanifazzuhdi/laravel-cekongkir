<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    // Home
    public function index()
    {
        $hasil = $this->getProvince();

        return view('home', compact('hasil'));
        // return view('home');
    }

    public function getProvince()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://api.rajaongkir.com/starter/province', [
            'headers' => [
                'key' => '40faa719f0c3f072390e437ef1905723',
            ]
        ]);
        $hasil = json_decode($res->getBody()->getContents());

        return $hasil->rajaongkir->results;
    }

    public function getCity($province_id = null)
    {
        $client = new Client();
        $res = $client->request('GET', 'https://api.rajaongkir.com/starter/city', [
            'query' => [
                'province' => $province_id
            ],
            'headers' => [
                'key' => '40faa719f0c3f072390e437ef1905723',
            ]
        ]);

        $hasil = json_decode($res->getBody()->getContents());

        return $hasil->rajaongkir->results;
    }

    public function cekOngkir()
    {
        return request();
    }
}
