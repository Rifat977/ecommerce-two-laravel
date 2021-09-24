<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcomCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
    ];
    public function product(){
        return $this->hasMany(EcomProduct::class);
    }
}
