<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterModel extends Model
{
    public $table = 'footer';
    public $primaryKey = 'id';
    public $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
}
