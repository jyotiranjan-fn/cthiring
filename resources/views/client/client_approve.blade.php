<x-admin-layout>
<style>
body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
    margin-left: 0px;
}
</style>

        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Client</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="#">Client</a>
                            </li>
                            <li class="breadcrumb-item active">Approve Client
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!--<div class="content-header-right col-md-6 col-12">-->
            <!--    <div class="dropdown float-md-right">-->
            <!--        <button class="btn btn-danger  round btn-glow px-2">Actions</button>-->

            <!--    </div>-->
            <!--</div>-->
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
                        <h4 class="card-title" id="basic-layout-tooltip"> Approve Client</h4>
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
                                        <th>Client Name</th>
                                        <th>Contact</th>
                                        <th>City</th>
                                        <th>Discrict</th>
                                        <th>CRM</th>
                                        <th>Status</th>

                                        <th>Created By</th>
                                        <th>Pending</th>
                                        <th>Created At</th>
                                        <th>Modified At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $j=1;

                                    @endphp
                                    @foreach($view as $key=>$loc)
                                    @php
                                    if($loc->is_approve==0 ){
                                    @endphp

                                    <tr>
                                        <td>{{ $j }}</td>
                                        <td data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                            data-title="click to view the details" style="text-align: left;"><a
                                                href="{{url('/approve_details',$loc->id)}}">{{$loc->client_name}}</a>
                                        </td>
                                        <td style="text-align: left;">{{$loc->mobile}}</td>

                                        <td style="text-align: left;"> {{optional ($loc->citys)->name }}</td>

                                        <td style="text-align: left;"> {{optional ($loc->dist)->district_title }}</td>

                                        <!-- CRM Name Fetch -->




                                        @php
                                        $test='';
                                        $test=json_decode($loc->crm_id);
                                        $count=count($test);

                                        @endphp



                                        <td style="text-align: left;">
                                            @php
                                            for($i=0;$i<$count;$i++){ $crm_name=App\Models\User::where('id',$test[$i])->
                                                get();
                                                @endphp <span class="badge badge-primary">
                                                    {{$crm_name[0]->fname}} {{$crm_name[0]->lname}}</span>

                                                @php
                                                }

                                                @endphp
                                        </td>


                                        @if ($loc->is_approve == 1)
                                        <td><span class="badge badge-default badge-success">Approved</span></td>


                                        @else
                                        <td><span class="badge badge-default badge-warning">Pending</span> </td>


                                        @endif

                                        <td>{{optional($loc->Use)->fname}}{{optional($loc->Use)->lname}}</td>

                                        <!-- for pending time -->
                                        <td><span class="badge badge-default badge-warning">

                                                {{(($loc->updated_at)->diffForHumans(now()))}}
                                            </span>
                                        </td>
                                        <!-- end -->

                                        <td>{{ date('j F-Y', strtotime($loc->created_at)) }} </td>

                                        <td>{{ date('j F-Y', strtotime($loc->updated_at))}}</td>

                                        <td><a data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                                data-title="Verify Client"
                                                href="{{url('/approve_details',$loc->id)}}"><i
                                                    class="fa fa-external-link" aria-hidden="true"></i></a>


                                        </td>




                                    </tr>
                                    @php
                                    }
                                    $j++;
                                    @endphp
                                    @endforeach
                                </tbody>





                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Client Name</th>
                                        <th>Contact</th>
                                        <th>City</th>
                                        <th>District</th>

                                        <th>CRM</th>
                                        <th>Status</th>

                                        <th>Created By</th>
                                        <th>Pending</th>

                                        <th>Created On</th>
                                        <th>Modified At</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form wizard with icon tabs section end -->


        </div>
    

                                </x-admin-layout>