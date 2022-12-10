<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='category';
    protected $fillable=['name','cover','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}