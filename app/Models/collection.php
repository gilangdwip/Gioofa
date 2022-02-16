<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collection extends Model
{
    protected $table ='collection';
    protected $fillable =['template_id','user_id'];
}
