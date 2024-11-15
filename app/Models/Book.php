<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
   * fillable
   *
   * @var array
   */
  protected $fillable = [
    'Judul Buku',
    'Author',
    'Jenis Buku',
    'Access_code',
    'Tahun Terbit',
  ];

  public static function jenisBukuOptions()
  {
      return ['Physical Book', 'E-Book'];
  }
}

