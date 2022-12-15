<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Blog extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'blogs';
    protected $guarded = [];
    public function find_category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id')->select('name', 'slug', 'description', 'image');
    }
}