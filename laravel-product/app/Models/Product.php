<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Jika kamu belum setting fillable, tambahkan ini agar bisa mass-assignment
    protected $fillable = ['name', 'description', 'price', 'stock'];
}