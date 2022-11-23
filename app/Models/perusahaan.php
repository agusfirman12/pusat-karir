<?php

namespace App\Models;

use App\Models\lowongan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class perusahaan extends Model
{
    use HasFactory;

    public function lowongan()
    {
        return $this->hasMany(lowongan::class);
    }
}
