<?php

namespace App\Repository;

use App\Models\Mobil;

class MobilRepository
{
    public function storeMobil(array $mobil)
    {
        try {
            $newMobil = new Mobil();
            $newMobil->tahun_keluaran = $mobil['tahun_keluaran'];
            $newMobil->warna = $mobil['warna'];
            $newMobil->harga = $mobil['harga'];
            $newMobil->mesin = $mobil['mesin'];
            $newMobil->kapasitas_penumpang = $mobil['kapasitas_penumpang'];
            $newMobil->tipe = $mobil['tipe'];
            $newMobil->status = 'Available';
            $newMobil->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }

    public function getAll()
    {
        return Mobil::where('status', 'Available')->get();
    }

    public function updateMobil(array $mobil)
    {
        try {
            $newMobil = Mobil::find($mobil['id']);
            $newMobil->tahun_keluaran = $mobil['tahun_keluaran'] ?? $newMobil->tahun_keluaran; 
            $newMobil->warna = $mobil['warna'] ?? $newMobil->warna;
            $newMobil->harga = $mobil['harga'] ?? $newMobil->harga;
            $newMobil->mesin = $mobil['mesin'] ?? $newMobil->mesin;
            $newMobil->kapasitas_penumpang = $mobil['kapasitas_penumpang'] ?? $newMobil->kapasitas_penumpang;
            $newMobil->tipe = $mobil['tipe'] ?? $newMobil->tipe;
            $newMobil->status = $mobil['status'] ?? $newMobil->status;
            $newMobil->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }

    public function deleteById(string $mobil)
    {
        try {
            $mobil = Mobil::find($mobil);
            if($mobil){
                $mobil->delete();
            }

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }

    }

    public function buyMobil(array $mobil)
    {
        try {
            $newMobil = Mobil::find($mobil['id']);
            $newMobil->status = 'Sold';
            $newMobil->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }

    public function getSoldMobil()
    {
        return Mobil::where('status', 'Sold')->get();
    }

    public function getSingleData(object $id)
    {
        return Mobil::where('_id', $id)->get() ?? [];
    }

}