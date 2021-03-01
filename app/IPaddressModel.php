<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPaddressModel extends Model
{
    public $table = "visitor";
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps  = false;
}
