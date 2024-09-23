<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumen extends Model
{
    protected $table = 'dokumens';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'file'];
    use HasFactory;
}
