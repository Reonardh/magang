<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = "Mahasiswa";
    protected $primaryKey = "no";
    protected $fillable = [
    'nim','nama','jurusan'];
}
