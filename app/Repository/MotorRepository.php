<?php

namespace App\Repository;

use App\Models\Motor;

class MotorRepository
{
    public function storemotor(array $motor)
    {
        try {
            $newMotor = new Motor();
            $newMotor->tahun_keluaran = $motor['tahun_keluaran'];
            $newMotor->warna = $motor['warna'];
            $newMotor->harga = $motor['harga'];
            $newMotor->mesin = $motor['mesin'];
            $newMotor->tipe_suspensi = $motor['tipe_suspensi'];
            $newMotor->tipe_transmisi = $motor['tipe_transmisi'];
            $newMotor->stok = $motor['stok'];
            $newMotor->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }

    public function getAll()
    {
        return Motor::all();
    }

    public function updatemotor(array $motor)
    {
        try {
            $newMotor = Motor::find($motor['id']);
            $newMotor->tahun_keluaran = $motor['tahun_keluaran'] ?? $newMotor->tahun_keluaran; 
            $newMotor->warna = $motor['warna'] ?? $newMotor->warna;
            $newMotor->harga = $motor['harga'] ?? $newMotor->harga;
            $newMotor->mesin = $motor['mesin'] ?? $newMotor->mesin;
            $newMotor->tipe_suspensi = $motor['tipe_suspensi'] ?? $newMotor->tipe_suspensi;
            $newMotor->tipe_transmisi = $motor['tipe_transmisi'] ?? $newMotor->tipe_transmisi;
            $newMotor->stok = $motor['stok'] ?? $newMotor->stok;
            $newMotor->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }

    public function deleteById(string $motor)
    {
        try {
            $motor = Motor::find($motor);
            if($motor){
                $motor->delete();
            }

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }

    }

    public function buyMotor(array $motor)
    {
        try {
            $newmotor = Motor::find($motor['id']);
            $newmotor->status = 'Sold';
            $newmotor->save();

            return 0;
        } catch (\Throwable $th) {
            return 1;
        }
    }
}