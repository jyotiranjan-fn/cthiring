<x-admin-layout>
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Users </h3></br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Settings</a></li>

                            <li class="breadcrumb-item active">Users </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton"
                        type="button" data-target="#xlarge" data-toggle="modal" aria-haspopup="true"> Add Users</button>

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
        <!-- for delete -->
        @if(session()->has('delt'))
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('delt')}}
        </div>
        @endif

        <div class="row">
            <div class="col-12">
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
                        <div class="card-body card-dashboard ">

                            <div class="form-group">
                                <table
                                    class="table table-responsive table-striped table-bordered dataex-html5-selectors">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Designation</th>

                                            <th>Role</th>
                                            <th>Location</th>
                                            <th>Level1</th>
                                            <th>Level2</th>

                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Modified At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                        $i=1;
                                        @endphp
                                        @foreach($view as $loc)

                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td style="text-align: left;"><img src="/images/{{ $loc->images }}"
                                                    class="img-responsive" style="width:100px"></td>
                                            <td style="text-align: left;">{{ $loc->fname }} {{ $loc->lname }}</td>
                                            <td style="text-align: left;">{{ $loc->email }}</td>
                                            <td style="text-align: left;">{{ $loc->mobile }}</td>
                                            <td style="text-align: left;">{{ $loc->designation }}</td>
                                            <td style="text-align: left;">{{optional ($loc->role)->role_name }}</td>
                                            <td style="text-align: left;">{{optional ($loc->location)->location }}</td>

                                            <td style="text-align: left;">{{optional ($loc->user)->fname }}
                                                {{optional ($loc->user)->lname}}</td>
                                            <td style="text-align: left;">{{optional ($loc->user2)->fname }}
                                                {{optional ($loc->user2)->lname}}</td>


                                            @if ($loc->status == 1)
                                            <td><span class="badge badge-default badge-success">Active</span></td>

                                            @else

                                            <td><span class="badge badge-default badge-danger">Inactive</span></td>

                                            @endif

                                            <td>{{ date('j F-Y', strtotime($loc->created_at)) }} </td>

                                            <td>{{ $loc->modified_at}}</td>

                                            <td><a><i class="ft-edit text-success" data-toggle="modal"
                                                        data-target="#edit{{ $loc->id }}"></i></a>
                                                <a href="{{url('/user_delete',$loc->id)}}"
                                                    onclick="return confirm('Are you sure?')"><i
                                                        class="ft-trash-2 ml-1 text-warning"></i></a>
                                            </td>

                                        </tr>
                                        @php
                                        $i++;
                                        @endphp
                                        
                                        <!-- edit model -->

                                        <div class="modal fade text-left" id="edit{{ $loc->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
                                            <div class="modal-dialog modal-xl" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel11">Edit User</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card-body">
                                                            <form action="edit_user/{{$loc->id}}" method="post"
                                                                class="form" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('put')
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="firstname">First Name<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" class="form-control"
                                                                                name="fname" value="{{$loc->fname}}"
                                                                                placeholder="Enter First Name" required
                                                                                id="firstname">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="lastname">Last Name<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" class="form-control"
                                                                                name="lname" value="{{$loc->lname}}"
                                                                                placeholder="Enter Last Name"
                                                                                id="lastname" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="email">Email<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="email" class="form-control"
                                                                                id="email" name="email"
                                                                                value="{{$loc->email}}"
                                                                                placeholder="Enter User Email" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="phone">Contact Number<span
                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" class="form-control"
                                                                                id="mobile" name="mobile"
                                                                                value="{{$loc->mobile}}"
                                                                                placeholder="Enter User mobile no"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="gender">Gender<span
                                                                    class="text-danger">*</span></label>
                                                                            <select id="gender" class="form-control"
                                                                                name="gender">
                                                                                <option>select</option>
                                                                                <option value="male" @if($loc->
                                                                                    gender=='male') selected @endif>Male
                                                                                </option>
                                                                                <option value="female" @if($loc->
                                                                                    gender=='female') selected
                                                                                    @endif>Female</option>
                                                                                <option value="others" @if($loc->
                                                                                    gender=='others') selected
                                                                                    @endif>Others</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="Designation">Designation<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" class="form-control"
                                                                                id="" name="designation"
                                                                                placeholder="Enter User designation"
                                                                                value="{{$loc->designation}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="Role">Role <span
                                                                                    class="text-danger">*</span></label>
                                                                            <select name="role" class="form-control"
                                                                                id="role">
                                                                                <option selected>Please Select Role
                                                                                </option>
                                                                                @foreach($role as $rols)
                                                                                <option value="{{$rols->id}}"
                                                                                    {{$rols->id == $loc->role_id ? 'selected':''}}>
                                                                                    {{$rols->role_name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <div class="form-group">
                                                                            <label>Location<span
                                                                    class="text-danger">*</span></label>
                                                                            <select name="user_location" id=""
                                                                                class="form-control">
                                                                                <option selected>Please Select Location
                                                                                </option>
                                                                                @foreach($location3 as $loct)
                                                                                <option value="{{$loct->id}}"
                                                                                    {{$loct->id == $loc->location_id ? 'selected':''}}>
                                                                                    {{$loct->location}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <div class="form-group">
                                                                            <label>Level1<span
                                                                    class="text-danger">*</span></label>
                                                                            <select name="label_1" class="form-control">
                                                                                <option selected>Please Select</option>
                                                                                @foreach($l1 as $lev)
                                                                                <option value="{{$lev->id}}"
                                                                                    {{$lev->id == $loc->level_1 ? 'selected':''}}>
                                                                                    {{$lev->fname}} {{$lev->lname}}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="Level2">Level2 <span
                                                                                    class="text-danger">*</span></label>
                                                                            <select name="label_2" class="form-control"
                                                                                id="label_2">
                                                                                <option selected>Please Select</option>
                                                                                @foreach($l2 as $lev)
                                                                                <option value="{{$lev->id}}"
                                                                                    {{$lev->id == $loc->level_2 ? 'selected':''}}>
                                                                                    {{$lev->fname}} {{$lev->lname}}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="Image">Upload Image <span
                                                                                    class="text-danger">*</span></label>
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <input type="file"
                                                                                        class="custom-file-input"
                                                                                        id="inputGroupFile01"
                                                                                        name="image" value="">
                                                                                    <label class="custom-file-label"
                                                                                        for="inputGroupFile01">Choose
                                                                                        file</label>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <img src="/images/{{ $loc->images}}"
                                                                                        class="img-responsive"
                                                                                        style="width:85px;height:50px;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="service">Status <span
                                                                                    class="text-danger">*</span></label>
                                                                            <select name="status" class="form-control"
                                                                                id="status" required>
                                                                                <option>Please Select Status</option>
                                                                                <option value="1" @if($loc->
                                                                                    status=='1')selected @endif>Active
                                                                                </option>

                                                                                <option value="2" @if($loc->status=='2')
                                                                                    selected @endif>Inactive</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="service">Signature<span
                                                                                    class="text-danger">*</span></label>
                                                                            <div class="card-content collapse show">
                                                                                <div class="card-body">
                                                                                    <div class="form-group">
                                                                                        <textarea
                                                                                            class="tinymce-classic"
                                                                                            name="editor">{{$loc->signature}}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-footer ml-auto">
                                                                                <button type="submit"
                                                                                    class="btn btn-outline-success mr-1">Submit</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-outline-danger">Cancel</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach

                        <!-- -- Edit Modal End -- -->

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Designation</th>
                                <th>Role</th>
                                <th>Location</th>
                                <th>Level1</th>
                                <th>Level2</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Modified At</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        </table>
                    </div>
                        <!-- Modal -->
                        <div class="modal fade text-left" id="xlarge" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel11" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel11">Add Users</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">


                                            <form action="/userinsert" method="post" class="mt-4"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstname">First Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="fname"
                                                                placeholder="Enter First Name" required id="firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastname">Last Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="lname"
                                                                placeholder="Enter Last Name" id="lastname" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="email">Email<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" placeholder="Enter User Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="phone">Contact Number<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="mobile"
                                                                name="mobile" placeholder="Enter User mobile no"
                                                                required>
                                                        </div>
                                                    </div>



                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <label for="gender">Gender<span
                                                                    class="text-danger">*</span></label>
                                                            <select id="gender" class="form-control" name="gender">
                                                                <option>select</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="others">Others</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="Designation">Designation<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id=""
                                                                name="designation" placeholder="Enter User designation"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <label for="Role">Role <span
                                                                    class="text-danger">*</span></label>
                                                            <select name="role" class="form-control" id="role">
                                                                <option selected>Please Select Role</option>
                                                                @foreach($role as $role1)
                                                                <option value="{{$role1->id}}">
                                                                    {{$role1->role_name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Location<span
                                                                    class="text-danger">*</span></label>
                                                            <select name="user_location" id="" class="form-control">
                                                                <option selected>Please Select Location</option>
                                                                @foreach($location3 as $loct)
                                                                <option value="{{$loct->id}}">
                                                                    {{$loct->location}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Level1<span
                                                                    class="text-danger">*</span></label>
                                                            <select name="label_1" class="form-control">
                                                                <option selected>Please Select</option>
                                                                @foreach($l1 as $user1)
                                                                <option value="{{$user1->id}}">
                                                                    {{$user1->fname}}{{$user1->lname}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <label for="Level2">Level2 <span
                                                                    class="text-danger">*</span></label>
                                                            <select name="label_2" class="form-control" id="label_2"
                                                                required>
                                                                <option selected>Please Select</option>
                                                                @foreach($l2 as $userr)
                                                                <option value="{{$userr->id}}">
                                                                    {{$userr->fname}}{{$userr->lname}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <label for="Image">Upload Image <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="col-md-8">
                                                                <input type="file" class="custom-file-input"
                                                                    id="inputGroupFile01" name="image">
                                                                <label class="custom-file-label"
                                                                    for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                            <label for="service">Status <span
                                                                    class="text-danger">*</span></label>
                                                            <select name="status" class="form-control" id="service"
                                                                required>
                                                                <option selected>Please Select Status</option>
                                                                <option value="1">Active</option>
                                                                <option value="2">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="service">Signature<span
                                                                    class="text-danger">*</span></label>
                                                            <div class="card-content collapse show">
                                                                <div class="card-body">
                                                                    <div class="form-group">
                                                                        <textarea class="tinymce-classic" name="editor">
                                                                            <table style="text-align: center;">
                                                                                <thead>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                                </table>
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer ml-auto">
                                                                <button type="submit"
                                                                    class="btn btn-outline-success mr-1">Submit</button>
                                                                <button type="submit"
                                                                    class="btn btn-outline-danger">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <!---- Add Modal End -- -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</x-admin-layout>