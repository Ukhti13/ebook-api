<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return['nis' =>'3103118135',
        'name' => 'Ukhti Salsabila',
        'gender' => 'Perempuan',
        'phone' => '+62 896-8118-4723',
        'class' => 'XII RPL 4'];
     }
}
