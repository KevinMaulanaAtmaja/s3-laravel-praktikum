<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BibliografiKategori extends Model
{
    protected $table = 'bibliografi_kategori';

    protected $fillable = ['deskripsi'];

    // public $timestamps = false;
}
