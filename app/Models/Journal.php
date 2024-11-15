<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

      /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'Judul Journal',
        'Author',
        'Tahun Terbit',
        'Access_Granted',

    ];
}
