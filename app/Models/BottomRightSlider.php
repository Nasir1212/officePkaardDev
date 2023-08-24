<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BottomRightSlider extends Model
{
    use HasFactory;
    public $table='bottom_right_slider';
    public $incrementing = true;
    public $keyType = 'int';
    public $primaryKey = 'id';
    public $timestamps = false;
}
