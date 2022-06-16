<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'Artikel';
    protected $primaryKey = 'ID';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['Judul', 'Isi', 'status', 'Slug', 'Gambar'];
}