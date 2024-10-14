<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Corrida extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
        'ini_lat' => 'float',
        'ini_lng' => 'float',
        'end_lat' => 'float',
        'end_lng' => 'float',
        'usr_id' => 'int',        
        'drv_id' => 'int',
    ];
    
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }      
    
    public function driver(): HasOne
    {
        return $this->hasOne(User::class);
    }      
}