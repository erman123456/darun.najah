<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TarifPembiayaanOnceYear extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "tarif_pembiayaan_once_year";
    protected $guarded = [];

}
