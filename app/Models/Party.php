<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    // Define the table name (optional, if different from model name)
    protected $table = 'parties';
    protected $primaryKey = "id";

    // Allow mass assignment for these fields
    protected $fillable = [
        "party_type",
        "full_name",
        "phone_no",
        "address",
        "account_holder_name",
        "account_no",
        "bank_name",
        "ifsc_code",
        "branch_address"
    ];
}
