<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\AnakAsuh;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function user_register()
    {
        return view('users.register');
    }
    public function calon_anak_asuh()
    {
        return view('users.calon_anak_asuh');
    }
    
    public function dataJson()
    {
        $allData = AnakAsuh::all();
        return Datatables::of($allData)
            ->addIndexColumn()
            ->addColumn('created_at_wib', function ($allData) {
                $date = Carbon::createFromFormat('Y-m-d H:i:s', $allData->created_at, 'UTC');
                $date = $date->setTimezone('Asia/Jakarta')->format('d M Y H:i:s');
                return $date;
            })
            ->addColumn('action', function ($data) {
                $button = '<div class="btn-group-vertical">';
                $button .= '
                <div class="demo-google-material-icon">
                <button id="addRow" class="btn btn-warning btn-sm editJenjangPendidikan" data-toggle="modal"
                                data-target="#form_modal" data-id="' . $data->id . '" title="edit"><i class="fas fa-pencil-alt"></i></button>
                <button id="addRow" class="btn btn-danger btn-sm btnHapusJenjangPendidikan"  data-id="' . $data->id . '" title="delete"><i class="fas fa-trash"></i></button>
                </div>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}