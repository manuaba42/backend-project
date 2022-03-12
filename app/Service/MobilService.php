<?php

namespace App\Service;

use App\Repository\MobilRepository;

class MobilService
{
    public function storeMobil($mobil)
    {   
        $error = (new MobilRepository)->storeMobil($mobil);
        if ($error){
            return [
                'error' => 1
            ];
        }else{
            return [
                'error' => 0
            ];
        }
    }

    public function getMobil()
    {
        return (new MobilRepository)->getAll();
    }

    public function updateMobil($mobil)
    {   
        $error = (new MobilRepository)->updateMobil($mobil);
        if ($error){
            return [
                'error' => 1
            ];
        }else{
            return [
                'error' => 0
            ];
        }
    }

    public function deleteMobil(string $mobil)
    {   
        $error = (new MobilRepository)->deleteById($mobil);
        if ($error){
            return [
                'error' => 1
            ];
        }else{
            return [
                'error' => 0
            ];
        }
    }

    public function buyMobil($mobil)
    {   
        $error = (new MobilRepository)->buyMobil($mobil);
        if ($error){
            return [
                'error' => 1
            ];
        }else{
            return [
                'error' => 0
            ];
        }
    }
}