<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='tb_municispio';
    protected $primaryKey='muni_codi';
    public $timestamps=false;
}
