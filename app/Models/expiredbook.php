<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expiredbook extends Model
{
    use HasFactory;
    
    protected $table = 'expiredbooks';
    protected $primaryKey = 'id';
}
