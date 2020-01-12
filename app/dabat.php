<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dabat extends Model
{
    protected $table = 'dabat';
    protected $fillable = [
        'kode', 'nama', 'satuan', 'jumlah', 'harga', 'user_id', 'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
