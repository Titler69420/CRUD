<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    public $table = 'crud_tables';

    use HasFactory;
    protected $fillable = [
        'name',
        'qty',
        'price',
        'description' 
    ];
}
