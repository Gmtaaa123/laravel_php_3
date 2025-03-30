<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
    protected $table = 'tins';
    protected $primaryKey = 'id';
    protected $date = ['ngayDang'];
    protected $fillable = [
        'tieuDe',
        
        'ngayDang',
        'urlHinh',
      
        'view',
        'noiBat',
        'anHien',
        'tags'
    ];
}
