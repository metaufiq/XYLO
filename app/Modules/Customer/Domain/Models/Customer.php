<?php

namespace App\Modules\Customer\Domain\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'phone_number', 'email', 'agent_id', 'status_id'];
}
