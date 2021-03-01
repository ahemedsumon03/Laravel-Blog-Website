<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
    public $table = 'review';
    public $primaryKey = 'id';
    public $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
}
