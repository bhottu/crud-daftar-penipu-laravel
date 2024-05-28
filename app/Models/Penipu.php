<?php

// app/Models/Penipu.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penipu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'alamat', 'telepon', 'email', 'keterangan',
    ];
}

