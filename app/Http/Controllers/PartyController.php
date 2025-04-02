<?php

namespace App\Http\Controllers;
use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
public function addParty(){
    return view('party.add');



}

public function manageParty(){
    

    $parties = Party::orderBy('created_at', 'desc')->paginate(10);


    // echo"<pre>";
    // print_r($parties);
    // exit;
    
    


    return view('party.manage',compact('parties'));
}
 public function createParty(Request $request){
    if (!$request->has('party_type')) {
        return back()->withErrors(['party_type' => 'Party type is missing in the request!'])->withInput();
    }

    //Validation
    $request->validate([
        'party_type' => 'required|string',
     
        'full_name' => 'required|string|max:255',
        'phone_no' => 'required|digits:10',
        'address' => 'required|string|max:500',
        'account_holder_name' => 'nullable|string|max:255',
        'account_no' => 'nullable|numeric',
        'bank_name' => 'nullable|string|max:255',
        'ifsc_code' => 'nullable|regex:/^[A-Z]{4}0[A-Z0-9]{6}$/',
        'branch_address' => 'nullable|string|max:255',
    ]);
   
    $param = $request->all();
    // echo "<pre>";
    // print_r($param);
    // exit;
    unset($param['_token']);
    Party::create($param);
 
    return redirect()->route('add-party')->with('status', "Party created successfully!");
  

 }

 public function editParty($party_id){
    $data['party'] = Party::find($party_id);
  

    
    return view('party.edit',$data);



}
public function updateParty($id,Request $request){

    $request->validate([
        'party_type' => 'required|string',
     
        'full_name' => 'required|string|max:255',
        'phone_no' => 'required|digits:10',
        'address' => 'required|string|max:500',
        'account_holder_name' => 'nullable|string|max:255',
        'account_no' => 'nullable|numeric',
        'bank_name' => 'nullable|string|max:255',
        'ifsc_code' => 'nullable|regex:/^[A-Z]{4}0[A-Z0-9]{6}$/',
        'branch_address' => 'nullable|string|max:255',
    ]);

    $param = $request->all();
    unset($param['_token']);
    unset($param['_method']);
    Party::where('id',$id)->update($param);
    return redirect()->route('manage-party')->with('Status',"Party updated Successfully");




}

public function deleteParty(Party $party){

   $party->delete();
    return redirect()->route('manage-party')->with('Status',"Party deleted Successfully");




}


    //
}
