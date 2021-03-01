<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    public $table = 'project';
    public $primaryKey = 'id';
    public $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
}
