<x-admin-layout>
    <style>
        .box {
            display: none;
        }
    </style>
    <script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    @php



    @endphp
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">My Plans</h3><br>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">My Plans
                        </li>
                        <li class="breadcrumb-item"><a href="#">View Leave Details</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger  mt_b round btn-glow px-2">Upload Resume</button>

                </div>
            </div> -->
    </div>

    @if ($message = Session::get('msg'))
    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{$message}}
    </div>
    @endif

    <!-- for delete -->
    @if(session()->has('delt'))
    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{session('delt')}}
    </div>
    @endif

    <!-- Form wizard with icon tabs section start -->
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

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
                <div class="card-content collapse show">
                    <div class="card-body pd_lr_body">
                        <div class="card-content collapse show">
                            <div class="card-body pd_0">
                                <div class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    @foreach ($leave as $view)
                                                    <tr>
                                                        <th>Leave From</th>
                                                        <td>{{date('j F-Y', strtotime($view->leave_from))}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Session</th>
                                                        <td>{{$view->session}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Reason</th>
                                                        <td>{{$view->reason}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Created On</th>
                                                        <td>{{date('j F-Y', strtotime($view->created_at))}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th>Leave To</th>
                                                        <td>{{date('j F-Y', strtotime($view->leave_to))}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Leave Type</th>
                                                        <td>{{$view->leave_type}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Created By</th>
                                                        @php
                                                        $createdby=App\Models\User::where('id',$view->user_id)->get();
                                                        @endphp
                                                        
                                                        <td>{{$createdby[0]->fname}} {{$createdby[0]->lname}}</td>
                                                    </tr>
                                                    @if ($view->status == 1)
                                                    <tr>
                                                        <th>Remarks</th>
                                                        <td>{{$view->approve_remarks}}</td>
                                                    </tr>
                                                    @elseif ($view->status == 2)
                                                    <tr>
                                                        <th>Remarks</th>
                                                        <td>{{$view->reject_remarks}}</td>
                                                    </tr>
                                                    @elseif ($view->status == 3)
                                                    <tr>
                                                        <th>Remarks</th>
                                                        <td>{{$view->cancel_remarks}}</td>
                                                    </tr>
                                                    @endif
                                                </table>
                                            </div>
                                        </div>
                                        <div class="mt_btn">
                                            <a href="{{url('/viewleave')}}">
                                                <button type="button" class="btn btn-primary">Back</button>
                                            </a>
                                            @php
                                            $level_id=App\Models\User::where('id',$view->user_id)->get(['level_1','level_2']);
                                            @endphp
                                            @if($level_id[0]->level_1==session('USER_ID')||$level_id[0]->level_2==session('USER_ID'))
                                            @if($view->status == 0)
                                            <button type="button" data-toggle="modal" data-target="#approvemodel{{$view->id}}" class="btn btn-success">Approve</button>

                                            <button type="button" data-toggle="modal" data-target="#rejectmodel{{$view->id}}" class="btn btn-danger">Reject</button>
                                            @endif
                                            @endif

                                            @if ($view->user_id == session('USER_ID') && $view->status != 3 && $view->status != 2)
                                                <button type="button" data-toggle="modal" data-target="#cancelleave{{$view->id}}" class="btn btn-danger">Cancel Leave</button>
                                            @endif
                                        </div>
                                        <!-- Approve Leave Model pop up -->

                                        <div class="modal fade" id="approvemodel{{$view->id}}" tabindex="-1" role="dialog" aria-labelledby="approvemodel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Approve Leave</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{url('/leave_approve_remark',$view->id)}}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <tr>
                                                                            <th>Remarks*</th>
                                                                            <!-- // <td><textarea class="form-control"></textarea></td> -->
                                                                            <td class="pd_0"><textarea name="remarks" class="form-control" required></textarea></td>

                                                                            <input type="hidden" name="plan_id" value="{{$view->user_id}}">
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Approve Leave Model pop up -->

                                        <!-- Reject Leave Model pop up -->
                                        <div class="modal fade" id="rejectmodel{{$view->id}}" tabindex="-1" role="dialog" aria-labelledby="rejectmodel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Reject Leave</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{url('/leave_reject_remark',$view->id)}}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <tr>
                                                                            <th>Remarks*</th>
                                                                            <!-- // <td><textarea class="form-control"></textarea></td> -->
                                                                            <td class="pd_0"><textarea name="remarks" class="form-control" required></textarea></td>

                                                                            <input type="hidden" name="plan_id" value="{{$view->user_id}}">
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Reject Leave Model pop up -->

                                        <!-- Cancel Leave Model pop up -->
                                        <div class="modal fade" id="cancelleave{{$view->id}}" tabindex="-1" role="dialog" aria-labelledby="cancelleave" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Cancel Leave</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{url('/cancel_leave_remark',$view->id)}}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <tr>
                                                                            <th>Remarks*</th>
                                                                            <td class="pd_0"><textarea name="remarks" class="form-control" required></textarea></td>

                                                                            <input type="hidden" name="plan_id" value="{{$view->user_id}}">
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Cancel Leave Model pop up -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>