<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Riwayat extends Model
{
    
    use HasFactory;
    protected $fillable = ['user_id','tanggal', 'waktu', 'status'];
    public function getWaktuAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
