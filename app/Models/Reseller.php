<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseller extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_name',
        'company_name',
        'phone_number',
        'email',
        'reason',
        'country',
    ];
}
