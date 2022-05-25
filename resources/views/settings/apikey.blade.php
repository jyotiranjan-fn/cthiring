<x-admin-layout>

<style>
    .b_b{
        border-bottom: 1px solid #e1e4f1;
    }
</style>



   
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Api Keys</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="">Api Keys</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                    <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
                </div>
            </div> -->
        </div>
        <div class="content-body">
            <!-- Book Appointment -->
            <section id="book-appointment">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">MSG91</h2>
                    </div>
                    <div class="card-body">
                    @foreach($view as $views)
                        <form action="{{url('/msgupdate',$views->id)}}" method="POST" class="form">
                            @csrf
                            @method('PUT')
                           
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="authkey">Authkey <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="authkey" placeholder="Enter Auth Key" value="{{$views->authkey}}" id="authkey" required>
                                    
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="flowid">Flow Id<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="flowid" placeholder="Enter Flow Id" value="{{$views->flowid}}" id="flowid" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="senderid">Sender Id<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="senderid" placeholder="Enter sender Id" value="{{$views->senderid}}" id="senderid" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-footer ml-auto b_b">
                            
                                <button type="submit" class="btn btn-outline-success mr-1">update</button>
                              
                            </div>
                       
                        </form>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>


</x-admin-layout>