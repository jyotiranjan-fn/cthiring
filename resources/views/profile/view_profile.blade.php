<x-admin-layout>
<style>
    .select2 {
        width: 100% !important;
    }
</style>

        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Profile</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Profile</a>
                            </li>
                            <li class="breadcrumb-item active">View Profile
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    @php
                    $request= Auth::id(); 
                    $role = App\Models\User::where('id','=',$request)->get();
                    @endphp
                    @foreach($role as $loc)
                    <a href="{{url('/edit_profile',$loc->id)}}">
                        <button class="btn btn-danger  round btn-glow px-2">Edit</button>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- Form wizard with icon tabs section start -->
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card mt_94">
                    <div class="card-content collapse show p_r">
                        <div class="card-body">
                            <div class="form-body">
                                <div id="box" class="col-md-12">
                                    <div class="card-header pl_0">
                                        @foreach($role as $loc)
                                        <div class="col-md-6 col-sm-6 col-xs-12 p_a">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="/images/{{$loc->images}}" class="img_width">
                                                </div>
                                                <div class="col-10">
                                                    <h4 class="card-title profile_name" id="basic-layout-tooltip">{{$loc->fname}} {{$loc->lname}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                                        
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
                                        <div class="card-body pd_0">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12 pd_0">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered wd_37">
                                                                @foreach($role as $loc)
                                                                <tr>
                                                                    <th>Full Name</th>
                                                                    <td>{{$loc->fname}} {{$loc->lname}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td>{{$loc->email}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Mobile</th>
                                                                    <td>{{$loc->mobile}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Location</th>
                                                                    <td>{{optional ($loc->location)->location}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered wd_37">
                                                                @foreach($role as $loc)
                                                                <tr>
                                                                    <th>Role</th>
                                                                    <td>{{optional ($loc->role)->role_name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Designation</th>
                                                                    <td>{{$loc->designation}}</td>
                                                                </tr>
                                                                @endforeach
                                                                <tr>
@php
    $post=App\Models\User::where('id','=',$loc->level_1)->get();
@endphp
@foreach($post as $l1)
                                                                    <th>L1</th>
                                                                    <td>{{$l1->fname}} {{$l1->lname}}</td>
@endforeach
                                                                </tr>
                                                                <tr>
@php
    $post1=App\Models\User::where('id','=',$loc->level_2)->get();
@endphp
@foreach($post1 as $l2)
                                                                    <th>L2</th>
                                                                    <td>{{$l2->fname}} {{$l2->lname}}</td>
                                                                </tr>
@endforeach
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{url('/')}}">
                                                <button type="button" class="btn btn-primary">Back</button>
                                            </a>
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