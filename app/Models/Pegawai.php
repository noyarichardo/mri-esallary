<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawais";
    protected $primaryKey = "id";
    protected $fillable=['name', 'email', 'alamat', 'no_telp', 'jabatan_id'];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }

}
