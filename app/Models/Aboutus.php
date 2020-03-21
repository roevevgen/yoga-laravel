<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aboutus extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = [
        'info_header_tab',
        'description_title',
        'description_text',
        'image'
    ];
}
