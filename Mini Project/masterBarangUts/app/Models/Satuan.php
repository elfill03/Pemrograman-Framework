<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;
    
    public function barang()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id', 'id');
        return $this->belongsTo(Barang::class, 'satuan_id', 'id');
    }
}
