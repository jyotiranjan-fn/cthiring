<x-admin-layout>

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Permissions Branch</h3></br>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Settings</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Branch</a>
                                </li>
                                <li class="breadcrumb-item active">Permissions Branch
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{route('admin.permissions.index')}}">
                <input class="btn btn-danger  round btn-glow px-2"  type="button" data-target="#info"  aria-haspopup="true" value="Back Permission">
            </a>

        </div>
        <section id="pagination">
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
                            <div class="card-body card-dashboard">
                       <form method="POST" action="{{route('admin.permissions.update', $permission)}}">
                           @csrf
                           @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Permissions Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Permissions" value="{{$permission->name}}">
    @error('name') <span style="color: red; font-weight:400;">{{$message}}</span>@enderror
  </div>
  
  <button type="submit" class="btn btn-danger  round btn-glow px-2">Update</button>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
</x-admin-layout>