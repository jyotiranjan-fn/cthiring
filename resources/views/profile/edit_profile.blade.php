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
                            <li class="breadcrumb-item active">Edit Profile
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <!-- Form wizard with icon tabs section start -->
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="form-body">
                                <div id="box" class="col-md-12">
                                    <div class="card-header pl_0">
                                        <h4 class="card-title" id="basic-layout-tooltip">Edit Profile</h4>
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
                                        <form action="{{url('/update_profile',$role->id)}}" method="post" class="form" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="card-body pd_0">
                                                <div class="col-md-12 col-sm-12 col-xs-12 pd_0">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">First Name </label>
                                                                <input type="text" class="form-control" value="{{$role->fname}}" name="fname">
                                                                @error('fname')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Last Name </label>
                                                                <input type="text" class="form-control" value="{{$role->lname}}" name="lname">
                                                                @error('lname')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Mobile</label>
                                                                <input type="text" class="form-control" value="{{$role->mobile}}" name="mobile">
                                                                @error('mobile')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Email</label>
                                                                <input type="email" class="form-control" value="{{$role->email}}" name="email">
                                                                @error('email')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="issueinput4">Location</label>

                                                                <select name="user_location" id="" class="form-control">
                                                                    <option selected>Please Select Location
                                                                    </option>
                                                                    @foreach($loc as $loct)
                                                                    <option value="{{$loct->id}}" {{$loct->id == $role->location_id ? 'selected':''}}>
                                                                        {{$loct->location}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                                @error('location')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Role</label>

                                                                <select name="role" class="form-control" id="role">
                                                                    <option selected>Please Select Role</option>
                                                                    @foreach($rol as $rols)
                                                                    <option value="{{$rols->id}}" {{$rols->id == $role->role_id ? 'selected':''}}>
                                                                        {{$rols->role_name}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                                @error('role')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="issueinput4">Designation</label>
                                                                <input type="text" class="form-control" value="{{$role->designation}}" name="designation">
                                                                @error('designation')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="issueinput4">L1</label>

                                                                <select name="label_1" class="form-control">
                                                                    <option selected>Please Select</option>
                                                                    @foreach($l1 as $lev)
                                                                    <option value="{{$lev->id}}" {{$lev->id == $role->level_1 ? 'selected':''}}>
                                                                        {{$lev->fname}} {{$lev->lname}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                                @error('l1')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">L2</label>

                                                                <select name="label_2" class="form-control" id="label_2">
                                                                    <option selected>Please Select</option>
                                                                    @foreach($l2 as $lev)
                                                                    <option value="{{$lev->id}}" {{$lev->id == $role->level_2 ? 'selected':''}}>
                                                                        {{$lev->fname}} {{$lev->lname}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                                @error('l2')
                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <a href="{{url('/dashboard')}}">
                                                    <button type="button" class="btn btn-primary">Back</button>
                                                </a>
                                                <input type="submit" name="submit" class="btn btn-success" value="Update">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-admin-layout>