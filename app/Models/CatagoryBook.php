<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatagoryBook extends Model
{
    use HasFactory;
    protected $table = ('catagory_books');
    protected $primaryKey = 'id';
}
