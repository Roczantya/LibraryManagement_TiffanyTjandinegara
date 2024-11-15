<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    use HasFactory;

    /**
   * fillable
   *
   * @var array
   */
  protected $fillable = [
    'Judul Surat Kabar',
    'Author',
    'Publisher',
    'Tanggal Terbit',
    'Dipajang',
    'Dsimpan',
  ];

  public static function publisherOptions()
  {
      return ['Kompas', 'Tribun Timur', 'Fajar'];
  }
}

