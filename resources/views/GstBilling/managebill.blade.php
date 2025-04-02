@extends('layout.app')
@section('content')

            <div class="row">
                <div class="col">
                    <div class="page-title-box">
                        
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                {{session('status')}}
  
</div>
             

                @endif
                        <h2 class="page-title font-weight-bold text-uppercase">Manage Bills</h2>
                    </div>
                </div>

            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <a href="{{route('create-bill')}}" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                            <i class="mdi mdi-plus-circle"></i> Create New Bill
                        </a>
                        <h4 class="header-title mb-4 text-uppercase">Manage Bills</h4>
                        <div class="row">
                            <div class="col-sm-12 col-md-10">
                                <div class="dataTables_length" id="alternative-page-datatable_length"><label>Show
                                        <select name="alternative-page-datatable_length"
                                            aria-controls="alternative-page-datatable"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-2">
                                <div id="alternative-page-datatable_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm"
                                            placeholder="" aria-controls="alternative-page-datatable"></label>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered"
                            id="tickets-table">
                            <thead>
                                <tr>
                                    <th>
                                        S.No.
                                    </th>
                                    <th>Bill No</th>
                                    <th>Cielnt's Info</th>
                                    <th>Billing Info</th>
                                    <th>Date</th>
                                    <th class="hidden-sm">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><b>#1256</b></td>
                                    <td>
                                        #5
                                    </td>

                                    <td>
                                        Joh Doe
                                    </td>

                                    <td>
                                        <ul class="list-unstyled">
                                            <li><b>Total Amount :</b><span> 555</span></li>
                                            <li><b>TAX :</b><span> 55</span></li>
                                            <li><b>Net Amount :</b><span> 55</span></li>
                                        </ul>
                                    </td>

                                    <td>
                                        01/09/2023
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);"
                                                class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm"
                                                data-toggle="dropdown" aria-expanded="false"><i
                                                    class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="mdi mdi-alert-octagon-outline mr-2 text-muted font-18 vertical-middle"></i>Detail</button>
                                                <a class="dropdown-item" href="#"><i
                                                        class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a>
                                                <a class="dropdown-item" href="{{route('print-bill')}}"><i
                                                        class="mdi mdi-printer mr-2 text-muted font-18 vertical-middle"></i>
                                                    Print</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- end col -->
                </div>
            </div>
            <!-- end row -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-body p-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-box m-0">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="m-1"><b>Date : </b>01/09/2023</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-1 float-right"><b>Bill No. : </b>#01</p>
                                            </div>
                                        </div>
                                        <div class="border-top"></div>
                                        <div class="row pt-1">
                                            <div class="col-6">
                                                <p class="m-1"><b>Customer Name : </b>John Doe</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-1 float-right"><b>Phone No. : </b>9865320159</p>
                                            </div>
                                        </div>
                                        <!-- <div class="border-bottom"></div> -->

                                        <!-- Logo & title -->

                                        <div class="row">
                                            <div class="col-12 p-0">
                                                <div class="table-responsive table-bordered">
                                                    <table class="table mt-0 table-centered border">
                                                        <thead>
                                                            <tr>

                                                                <th class="py-0"
                                                                    style="background-color: rgb(130, 210, 241); color: black;">
                                                                    DESCRIPTION</th>
                                                                <th style="width: 15%; background-color: rgb(130, 210, 241); color: black;"
                                                                    class="text-center py-1">
                                                                    AMOUNT
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td>
                                                                    <b>Web Design</b> <br />
                                                                    2 Pages static website - my website
                                                                </td>
                                                                <td class="text-center">$660.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive -->
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row border">
                                            <div class="col-sm-12 col-lg-12 mt-1">
                                                <ul class="list-unstyled float-right">
                                                    <li><b>Total Amount :</b> <span class="float-right"><i
                                                                class="fas fa-rupee-sign ml-2"></i> 0.00</span></li>

                                                    <li><b>TAX :</b><span class="float-right"><i
                                                                class="fas fa-rupee-sign"></i> 0.00</span>
                                                    </li>
                                                    <li><b>Net Amount :</b><span class="float-right"><i
                                                                class="fas fa-rupee-sign"></i> 0.00</span>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{route('print-bill')}}" class="btn btn-primary waves-effect waves-light">Print
                                <i class="mdi mdi-printer mr-1"></i></a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

            
            <!-- end Footer -->

            
        


@endsection