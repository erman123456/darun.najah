<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TarifPembiayaanEachMonth extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "tarif_pembiayaan_each_month";
    protected $guarded = [];

}
