<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table = 'tb_home';
    public static function index()
    {
        $data = Home::where('id',5)->first();
        return $data;
    }
}
