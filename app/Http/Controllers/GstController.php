<?php

namespace App\Http\Controllers;
use App\Models\Gst;
use App\Models\Party;
use Illuminate\Http\Request;

class GstController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function createBill(){
        $data['parties'] = Party::where('party_type','client')->orderBy('full_name')->get();
    return view("GstBilling.addbill",$data);
        return view('GstBilling.createbill');

    }

    public function manageBill(){
        return view('GstBilling.managebill');
    }

    public function printBill(){
        return view('GstBilling.printbill');
    }
    public function addBill(Request $request)
    
    {
    $request->validate([
        'party_id' => 'required|exists:parties,id',  // Ensure selected party exists
        'invoice_date' => 'required|date',  // Must be a valid date
        'invoice_number' => 'required|string|max:255|unique:bills,invoice_number',
        'item_description' => 'required|string|max:1000',
        'total_amount' => 'required|numeric|min:0',
        'cgst_amount' => 'nullable|numeric|min:0',
        'sgst_amount' => 'nullable|numeric|min:0',
        'igst_amount' => 'nullable|numeric|min:0',
        'text_amount' => 'nullable|numeric|min:0',
        'net_amount' => 'required|numeric|min:0',
        'declaration' => 'nullable|string|max:1000',



    ]);
    $param = $request->all();
    unset($param['_token']);
    Gst::create($param);
    return redirect()->route('manage-bill')->with('status',"Bill created successfully");


    }

}
