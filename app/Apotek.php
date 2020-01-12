<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apotek extends Model
{
    protected $table = 'apotek';
    protected $fillable = [
        'nama_apotek', 'alamat_apotek', 'latitude_apotek', 'longitude_apotek', 'link_apotek', 'avatar', 'user_id'
    ];

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('images/default.jpg');
        }
        return asset('images/' . $this->avatar);
    }

    public function dabat()
    {
        return $this->hasMany(dabat::class);
    }
}
