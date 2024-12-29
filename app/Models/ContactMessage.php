<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = [
        'account_name', 'phone_number', 'email', 'message'
    ];
}
