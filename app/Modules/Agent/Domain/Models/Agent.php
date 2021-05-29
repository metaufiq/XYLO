<?php

namespace App\Modules\Agent\Domain\Models;





use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agent extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'phone_number', 'status'];
}
