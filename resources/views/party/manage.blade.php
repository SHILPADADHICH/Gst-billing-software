@extends('layout.app')

@section('content')

<div class="container mt-4">

            @if(session('Status'))
                <div class="alert alert-success" role="alert">
                {{session('Status')}}
  
</div>
             

                @endif

               
    <h2 class="text-uppercase">Manage Clients</h2>
    
    <div class="d-flex justify-content-between mb-3">
        <button class="btn btn-primary" onclick="addClient()">+ Add Client</button>
        <input type="text" id="search" class="form-control w-25" placeholder="Search clients">
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Client Type</th>
                <th>Client Info</th>
                <th>Bank Details</th>
                
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="clientTable">
            @if($parties->count() > 0)
                @foreach($parties as $index => $party)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td contenteditable="true"> <span class="badge badge-info">{{$party->party_type}}</span></td>
                        <td>
                        <b>Name:</b> <span contenteditable="true">{{ $party->full_name }}</span><br>
                            <b>Phone:</b> <span contenteditable="true">{{ $party->phone_no }}</span><br>
                            <b>Address:</b> <span contenteditable="true">{{ $party->address }}</span>
                        </td>
                        <td contenteditable="true">
                        <b>Account Holder Name:</b> <span contenteditable="true">{{ $party->account_holder_name }}</span><br>
                            <b>Account No:</b> <span contenteditable="true">{{ $party->account_no }}</span><br>
                            <b>Bank Name:</b> <span contenteditable="true">{{ $party->bank_name }}</span><br>
                            <b>IFSC Code:</b> <span contenteditable="true">{{ $party->ifsc_code }}</span><br>
                            <b>Branch Address:</b> <span contenteditable="true">{{ $party->branch_address }}</span>
                        </td>
                       
                        <td>{{ $party->created_at->format('d/m/Y') }}</td>
                        <td>
                        <a href="{{ route('edit-party',$party->id) }}" class="btn btn-primary">Edit</a>
                           

                            <form action="{{route('delete-party',$party)}}" method="post">
                                @csrf
                                @method('DELETE')
                               <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" class="text-center">No Clients Found</td>
                </tr>
            @endif
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-3">
    {{ $parties->links('pagination::bootstrap-4') }}
</div>


</div>

@endsection
