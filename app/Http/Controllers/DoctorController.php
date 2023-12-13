<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Doctor;

class DoctorController extends Controller{
    public function getWhere(){
        $doctor = Doctor::where('id','selectedDoctorId')
         ->orderBy('nama', 'desc')
         ->get();
        return ;
       }
     
     
}