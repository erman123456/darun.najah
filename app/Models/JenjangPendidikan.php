<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class JenjangPendidikan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "jenjang_pendidikan";
    protected $guarded = [];

    // public function kuesioner()
    // {
    //     return $this->hasMany(MasterKuesioner::class, 'id_kriteria', 'id');
    // }
    // public function detail_kriteria()
    // {
    //     return $this->hasMany(DetailKriteria::class, 'id_kriteria', 'id');
    // }
}
