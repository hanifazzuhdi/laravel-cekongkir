<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index()
    {
        $hasil = $this->getProvince();
        $allCity = $this->getAllCity();

        return view('home', compact('hasil', 'allCity'));
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

    public function getAllCity()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://api.rajaongkir.com/starter/city', [
            'headers' => [
                'key' => '40faa719f0c3f072390e437ef1905723',
            ]
        ]);
        $hasil = json_decode($res->getBody()->getContents());

        return $hasil->rajaongkir->results;
    }

    public function getCity($province_id)
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

    public function cekOngkir(Client $client)
    {
        $res = $client->request('POST', 'https://api.rajaongkir.com/starter/cost', [
            'headers' => [
                'key' => '40faa719f0c3f072390e437ef1905723'
            ],

            'form_params' => [
                'origin' => request('origin'),
                'destination' => request('destination'),
                'weight' => request('weight'),
                'courier' => request('courier')
            ]
        ]);

        abort_if(!$res, 404, "tidak ditemukan");

        $hasil = json_decode($res->getBody()->getContents());

        $data = $hasil->rajaongkir->results;

        return redirect(route('home'))
            ->with('success', $data);
    }
}
