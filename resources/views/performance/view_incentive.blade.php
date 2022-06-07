<x-admin-layout>
    <style>
        body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
            margin-left: 0px;
        }
    </style>

    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Incentive</h3><br>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Performance</a>
                        </li>
                        <li class="breadcrumb-item active">View Incentive
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
            <div class="dropdown float-md-right">
                <button class="btn btn-danger  round btn-glow px-2">Export Excel</button>
            </div>
        </div>
    </div>

    @if(session()->has('roleinster'))
    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{session('roleinster')}}
    </div>
    @endif
    <!-- Form wizard with icon tabs section start -->
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-tooltip">View Incentive</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show table-responsive">
                    <div class="card-body ">
                        <table class="table table-striped table-bordered dataex-html5-selectors table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Employee</th>
                                    <th>Type</th>
                                    <th>Client Name</th>
                                    <th>Billing Amount</th>
                                    <th>Billing Date</th>
                                    <th>Recruiter</th>
                                    <th>CRM</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="{{url('/view_billing_details')}}">Uttam kumar</a></td>
                                    <td>calling</td>
                                    <td>training edevlop</td>
                                    <td>3.00</td>
                                    <td>23-Apr-2022</td>
                                    <td>ganesh kumar</td>
                                    <td>Prasant Vertical Lead</td>
                                    <td>23-Apr-2022</td>
                                    <td class="pd_0 t_c"><span class="p_d">L1 - P</span></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Candidate Name</th>
                                    <th>Position</th>
                                    <th>Client Name</th>
                                    <th>Billing Amount</th>
                                    <th>Billing Date</th>
                                    <th>Recruiter</th>
                                    <th>CRM</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form wizard with icon tabs section end -->


</x-admin-layout>