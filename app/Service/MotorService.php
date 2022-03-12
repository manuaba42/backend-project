<?php

namespace App\Service;

use App\Repository\MotorRepository;

class MotorService
{
    public function storemotor($motor)
    {   
        $error = (new MotorRepository)->storemotor($motor);
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

    public function getmotor()
    {
        return (new MotorRepository)->getAll();
    }

    public function updatemotor($motor)
    {   
        $error = (new MotorRepository)->updatemotor($motor);
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

    public function deletemotor(string $motor)
    {   
        $error = (new MotorRepository)->deleteById($motor);
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

    public function buyMotor($motor)
    {   
        $error = (new MotorRepository)->buyMotor($motor);
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