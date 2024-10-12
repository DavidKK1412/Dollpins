<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class position extends Model
{
    protected $table = 'position';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = ['name'];
}