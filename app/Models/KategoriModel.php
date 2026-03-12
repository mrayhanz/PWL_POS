<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class UserModel extends Model{
    public function barang(): HasMany
    {
        return $this->hasMany(BarangModel::class,'barang_id','barang_id');
    }
}

