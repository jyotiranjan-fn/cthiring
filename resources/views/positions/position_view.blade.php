<x-admin-layout>
<style>
body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
    margin-left: 0px;
}
</style>

        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Position</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Positions</a>
                            </li>
                            <li class="breadcrumb-item active">View Position
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
                        <h4 class="card-title" id="basic-layout-tooltip">View Position</h4>
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
                                        <th>Job Title</th>
                                        <th>Client</th>
                                        <th>Total Openings</th>
                                        <th>CRM</th>
                                        <th>Recruiters</th>
                                        <th>CV Sent</th>
                                        <th>Joined</th>

                                        <th>Created By</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $i=1;
                                    @endphp
                                    @foreach($view as $loc)
                                  
                                    @php
                                    if($loc->is_approve==1){
                                    @endphp

                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                            data-title="click to view the details" style="text-align: left;"><a
                                                href="{{url('/position_view_details',$loc->position_id)}}">{{$loc->job_title}}</a>
                                        </td>
                                        <td style="text-align: left;">{{optional ($loc->client_na)->client_name }}</td>

                                        <td style="text-align: left;">{{$loc->total_opening}}</td>

                                        <td style="text-align: left;">
                                            <!-- CRM Name Fetch -->

                                        @php
                                        
                                        $test=json_decode($loc->crm);
                                        $count=count($test);
                                        @endphp
                                                           
                                            @php
                                            for($i=0;$i<$count;$i++){ 
                                            $crm_name=App\Models\User::where('id',$test[$i])->get();
                                                                                
                                                @endphp <span class="badge badge-primary">
                                                   
                                                    {{$crm_name[0]->fname}} {{$crm_name[0]->lname}}</span>

                                                @php
                                                }

                                                @endphp
                          
                                        </td>

                                           @php
                                        $recruiter_id=App\Models\Position::where('position_id', $loc->position_id)->get('recruiters');
                                        @endphp

                                       <td style="text-align: left;">
                                          @foreach($recruiter_id as $recruiter_name)
                                                <span class="badge badge-primary">
                                            
                                                {{optional ($recruiter_name->client_requiter)->fname}}{{optional ($recruiter_name->client_requiter)->lname}}
                                                </span>
                                            @endforeach
                                        </td>


                                        <td style="text-align: left;"> </td>





                                        <td> {{$loc->joining_date}}</td>



                                        <td>{{optional ($loc->position_create)->fname}}{{optional ($loc->position_create)->lname}}
                                        </td>


                                        @if ($loc->status == 1)
                                        <td><span class="badge badge-default badge-success">Assigned</span></td>

                                        @else

                                        <td><span class="badge badge-default badge-danger">Inactive</span></td>

                                        @endif

                                        <td>{{$loc->created_at}}</td>
                                        <td>{{$loc->updated_at}}</td>
                                        @if (session('USER_ID')==$loc->created_by)
                                        <td>
                                            <a href="{{url('/position_edit',$loc->position_id)}}">
                                                <i class="ft-edit text-success"></i>
                                            </a>
                                            @else
                                        <td></td>
                                        @endif
                                        <!-- <a href="" onclick="return confirm('Are you sure?')">
                                                <i class="ft-trash-2 ml-1 text-warning"></i>
                                            </a> -->
                                        </td>
                                    </tr>
                                    @php
                                    $i++;
                                    }
                                    @endphp
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Job Title</th>
                                        <th>Client</th>
                                        <th>Total Openings</th>
                                        <th>CRM</th>
                                        <th>Recruiters</th>
                                        <th>CV Sent</th>
                                        <th>Joined</th>

                                        <th>Created By</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Modified</th>
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