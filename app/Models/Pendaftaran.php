<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = ['nama', 'nim', 'program_studi', 'email', 'no_hp', 'alasan_bergabung'];
}
