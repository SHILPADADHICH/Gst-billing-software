<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gst extends Model
{
    protected $table ='gstbill';
    protected $fillable =[
        'party_id', 'invoice_date', 'invoice_number', 'item_description', 
    'total_amount', 'cgst_amount', 'sgst_amount', 'igst_amount', 
    'text_amount', 'net_amount', 'declaration'


    ];

    

    //
}
