<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pasien extends Model
{
    protected $table = 'pasien';

    protected $fillable = [
        'no_rm',
        'nama_pasien',
        'alamat',
        'no_hp',
        'tanggal_lahir',
        'jenis_kelamin',
    ];

    public function daftarPolis(): HasMany
    {
        return $this->hasMany(DaftarPoli::class, 'pasien_id');
    }
}
