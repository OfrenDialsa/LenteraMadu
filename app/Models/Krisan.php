<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krisan extends Model
{
    protected $table = 'krisans';
    protected $primaryKey = 'id';
    protected $fillable = ['judul','aduan', 'status'];
    use HasFactory;
}
