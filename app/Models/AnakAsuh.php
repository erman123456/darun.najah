<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class AnakAsuh extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "anak_asuh";
    protected $guarded = [];

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'id', 'id_anak_asuh');
    }
    
    public function tarifPembiayaanJustOnce()
    {
        return $this->belongsTo(tarifPembiayaanJustOnce::class, 'id', 'id_anak_asuh');
    }

    public function tarifPembiayaanOnceYear()
    {
        return $this->belongsTo(tarifPembiayaanOnceYear::class, 'id', 'id_anak_asuh');
    }

    public function tarifPembiayaanEachMonth()
    {
        return $this->belongsTo(tarifPembiayaanEachMonth::class, 'id', 'id_anak_asuh');
    }
}
