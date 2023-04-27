<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huis extends Model
{
    use HasFactory;
    protected $table = "huis";
    public $timestamps = false;
}
