<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WargaModel extends Model
{
    protected $table    = 'tb_warga';
    const CREATED_AT    = null;
    const UPDATED_AT    = null;
    protected $fillable = ['*'];

    use HasFactory;
}
