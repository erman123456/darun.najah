<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramOrangTuaAsuhController extends Controller
{
    public function latar_belakang()
    {
        return view('program_orang_tua_asuh.latar_belakang');
    }
    public function idealisme_program()
    {
        return view('program_orang_tua_asuh.idealisme_program');
    }
    public function tujuan_sasaran()
    {
        return view('program_orang_tua_asuh.tujuan_sasaran');
    }
    public function legalitas_program()
    {
        return view('program_orang_tua_asuh.legalitas_program');
    }
}
