<x-admin-layout>
<style>
body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
    margin-left: 0px;
}
</style>

        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Resume</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Resume</a>
                            </li>
                            <li class="breadcrumb-item active">View Resumes
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
                        <h4 class="card-title" id="basic-layout-tooltip">View Resumes</h4>
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
                                        <th>Code</th>

                                        <th>Client Name</th>
                                        <th>Job Title</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email Id</th>
                                        <th>Exp.</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Created By</th>
                                        <th>Type</th>
                                        <th>Actions</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $i=1;
                                    @endphp
                                    @foreach($view as $loc)

                                    <tr>
                                        <td><a href="{{url('/resume_viewdetails',$loc->id)}}">{{$loc->resume_code}}
                                            </a>
                                        </td>
                                        <td>{{optional($loc->view_nameofclient)->client_name}}</td>
                                        <td>{{optional($loc->jobname)->job_title}}</td>
                                        <td>{{$loc->name}}</td>
                                        <td>{{$loc->mobile}}</td>
                                        <td>{{$loc->email}}</td>
                                        <td>{{$loc->year_experience}}{{$loc->month_experience}}</td>
                                        <td> {{$loc->present_location}} </td>

                                        <td> </td>

                                        <td>{{optional($loc->username_of_resume)->fname}}{{optional($loc->username_of_resume)->lname}}
                                        </td>
                                        @php
                                        $type=App\Models\Position::where('position_id',$loc->position_id
                                        )->get('resume_type')->unique('position_id');
                                        @endphp
                                        @foreach ($type as $types)


                                        <td>{{$types->resume_type}}</td>
                                        @endforeach
                                        @if (session('USER_ID')==$loc->created_by)
                                        <td> <a href="{{url('/resume_editview',$loc->id)}}">
                                                <i class="ft-edit text-success"></i>
                                            </a>
                                            @else
                                        <td></td>
                                        
                                        @endif
                                        </td>
                                        <td>{{$loc->created_at}}</td>
                                        <td>{{$loc->updated_at}}</td>

                                    </tr>

                                    @php
                                    $i++;
                                    @endphp
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Code</th>
                                        <th>Client Name</th>
                                        <th>Job Title</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email Id</th>
                                        <th>Exp.</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Created By</th>
                                        <th>Type</th>
                                        <th>Actions</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                    </tr>
                                </tfoot>

                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
           
  

</x-admin-layout>