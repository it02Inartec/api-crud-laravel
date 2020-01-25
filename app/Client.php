<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {
    protected $table = 'clients';

    protected $fillable = [
        'address', 'firstname', 'lastname', 'age', 'gender', 'birthday', 'phone', 'id_image',
    ];

    public function image() {
        return $this->hasOne('App\Image', 'id_image');
    }

    //protected $birthday = ['datetime'];
}
