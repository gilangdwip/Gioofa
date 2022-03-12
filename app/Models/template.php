<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class template extends Model
{
    protected $table ='template';
    protected $fillable =['categories_id','nama','deskripsi', 'jenis', 'harga','image','file'];
}
