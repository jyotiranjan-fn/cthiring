<x-admin-layout>
<style>
body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
    margin-left: 0px;
}
</style>

        <div class="content-header row">
           <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
				<h3 class="content-header-title mb-0 d-inline-block">My Plans</h3><br>
				<div class="row breadcrumbs-top d-inline-block">
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">My Plans</a>
							</li>
							<li class="breadcrumb-item active">View Leave
							</li>
						</ol>
					</div>
				</div>
			</div>
            <!-- <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger  round btn-glow px-2">Actions</button>

                </div>
            </div> -->
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
                        <!-- <h4 class="card-title" id="basic-layout-tooltip">View Position</h4> -->
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
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>Leave From</th>
                                        <th>Leave To</th>
                                        <th>Reason</th>
                                        <th>Session</th>
                                        <th>Leave Type</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($leave as $view)
                                    <tr>
                                        <td>{{date('j F-Y', strtotime($view->leave_from))}}</td>
                                        <td>{{date('j F-Y', strtotime($view->leave_to))}}</td>
                                        <td>{{$view->reason}}</td>
                                        <td>{{$view->session}}</td>
                                        <td>{{$view->leave_type}}</td>
                                        @if ($view->status == 0)
                                            <td><span class="badge badge-default badge-danger" style="background-color:#F5AA1A!important;">Approval Awaiting</span></td> 
                                        @elseif ($view->status == 1)
                                            <td><span class="badge badge-default badge-success">Approved</span></td> 
                                        @elseif ($view->status == 2)
                                            <td><span class="badge badge-default badge-danger">Rejected</span></td> 
                                        @elseif ($view->status == 3)
                                            <td><span class="badge badge-default badge-secondary">Canceled</span></td> 
                                        @endif

                                        <td>{{date('d-F-Y', strtotime($view->created_at))}}</td>
                                        <td class="t_c">
                                            <a href="{{url('/leavedetails',$view->id)}}">
                                                <i class="ft-eye text-success"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Leave From</th>
                                        <th>Leave To</th>
                                        <th>Reason</th>
                                        <th>Session</th>
                                        <th>Leave Type</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form wizard with icon tabs section end -->
</x-admin-layout>