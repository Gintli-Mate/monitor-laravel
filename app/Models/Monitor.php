<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
     protected $table = 'monitors';

     protected $fillable = [
         'brand', 'model', 'screen_size', 'resolution', 'refresh_rate', 'price', 'type', 'availability',
     ];
}
