<x-admin-layout>
	<style>
		.select2 {
			width: 100% !important;
		}
	</style>
	<style>
		.pd_0 {
			padding: 0px;
		}

		.flx_wrp {
			display: flex;
			flex-wrap: wrap;
			padding-left: 0px;
			padding-right: 0px;
		}

		.hide {
			display: none;
		}
	</style>
	<div class="card">
    <div class="card-body">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
				<h3 class="content-header-title mb-0 d-inline-block">Myplans</h3><br>
				<div class="row breadcrumbs-top d-inline-block">
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Settings</a>
							</li>
							<li class="breadcrumb-item"><a href="#">Myplans</a>
							</li>
							<li class="breadcrumb-item active">Myplans
							</li>
						</ol>
					</div>
				</div>
			</div>
			<!--<div class="content-header-right col-md-6 col-12">-->
			<!--	<div class="dropdown float-md-right">-->
			<!--		<button class="btn btn-danger  round btn-glow px-2">Actions</button>-->

			<!--	</div>-->
			<!--</div>-->
		</div>

		<form action="{{url('/todays_plan_insert')}}" method="POST">
			@csrf
			<!-- Form wizard with icon tabs section start -->
			<div class="row match-height">
				<div class="col-md-12">
					<div class="">

						<div class="row" style="margin-left:0px;margin-right:0px;">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12 flx_wrp">
										<div class="col-md-3">
											<p><strong>Work Plan</strong></p>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<!--input type="radio" name="input-radio-3" id="input-radio-11">
                                        <label for="input-radio-11">Radio button</label-->
												<input type="radio"  id="input-radio-1" name="day_plan" value="Current Plan">
												<label for="input-radio-11">Current Plan</label>
												<input type="radio"  id="input-radio-2" name="day_plan" value="Previous Day Plan">
												<label for="input-radio-11">Previous Day Plan</label>
												<input type="radio"  id="input-radio-3" name="day_plan" value="Long Leave">
												<label for="input-radio-11">Long Leave</label>
											</div>
										</div>
										
									</div>
									<div class="col-md-12 flx_wrp" id="taskdate">
										<div class="col-md-3">
											<p><strong>Task Date</strong></p>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<input type="date" class="form-control" name="date" aria-invalid="false">
											</div>
										</div>
									</div>
									<div class="col-md-12 flx_wrp" id="session">
										<div class="col-md-3">
											<p><strong>Session</strong></p>
										</div>
										<div class="col-md-9">
											<!--div class="form-group" id="test"-->
											<div class="form-group">
												<!--input type="radio" name="input-radio-3" id="input-radio-11">
                                        <label for="input-radio-11">Radio button</label-->
												<input type="radio"  id="input-radio-4" name="work_time_period" value="Forenoon">
												<label for="input-radio-11">Forenoon</label>
												<input type="radio"  id="input-radio-5" name="work_time_period" value="Afternoon">
												<label for="input-radio-11">Afternoon</label>
											</div>
										</div>
									</div>
									<div class="col-md-12 flx_wrp" id="session_type">
										<div class="col-md-3">
											<p><strong>Work Plan Type</strong></p>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<!--input type="radio" name="input-radio-3" id="input-radio-11">
                                        <label for="input-radio-11">Radio button</label-->
												<input type="radio"  id="input-radio-6" onclick="show1();" name="plantype" value="Sourcing">
												<label for="input-radio-11">Sourcing</label>
												<input type="radio"  id="input-radio-7" onclick="show2();" name="plantype" value="Others">
												<label for="input-radio-11">Others</label>
											</div>
										</div>
									</div>
									<div class="col-md-4 mt_27">
										<!--<button type="button" data-repeater-delete-->
										<!--    class="btn btn-icon btn-danger mr-1"><i-->
										<!--        class="ft-x"></i></button>-->
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">

									<div class="col-md-12 flx_wrp hide" id="div1">
										<div class="col-md-3">
											<p><strong>Client Name</strong></p>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<select class="form-control" name="clientname">
												    <option value="">Select</option>
													@foreach ($client1 as $client2)
													<option value="{{$client2->id}}">{{$client2->client_name}}</option>
													@endforeach
												</select>
											</div>
										</div>
									

										<div class="col-md-3">
											<p><strong>Position</strong></p>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<select class="form-control" name="positionname">
												    <option value="">Select</option>
													<option value="1">Hacking 1</option>
													<option value="2">Hacking 2</option>
													<option value="3">Hacking 3</option>
												</select>
											</div>
										</div>
									</div>




									<div class="col-md-12 flx_wrp hide" id="div2">
										<div class="col-md-3">
											<p><strong>Options*</strong></p>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<select class="form-control" name="option">
													<option value="">Select</option>
													<option value="Client Meeting">Client Meeting</option>
													<option value="Internal Meeting">Internal Meeting</option>
													<option value="Internal Review">Internal Review</option>
													<option value="Internal Training">Internal Training</option>
													<option value="External Training">External Training</option>
													<option value="Events / Celebration">Events / Celebration</option>
													<option value="On Special Assignment">On Special Assignment</option>
													<option value="Unwell at Office">Unwell at Office</option>
													<option value="On Leave">On Leave</option>
													<option value="Holiday">Holiday</option>
													<option value="Weekly Off">Weekly Off</option>
													<option value="Others">Others</option>
												</select>
											</div>
										</div>
                                            
                                       
										<div class="col-md-3">
											<p><strong>Subject</strong></p>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<input type="text" class="form-control" name="subject" aria-invalid="false">
											</div>
										</div>
									</div>


								</div>
							</div>


						</div>
					</div>
				</div>
				<!--<button type="button" data-repeater-create-->
				<!--    id="repeater-button" class="btn btn-info">-->
				<!--    <i class="ft-plus"></i> Add more-->
				<!--</button>-->
			</div>
	</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
			<i class="ft-x"></i> Cancel
		</button>
		<button type="submit" class="btn btn-primary">
			<i class="la la-check-square-o"></i> Save
		</button>
	</div>
	</form>
	
	

	</div>
	
	
	
		</div>
		
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
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Session</th>
                                        <th>Work Type</th>
                                        <th>Work Description</th>
                                        <th>Work Description2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($student as $plan)
                                     @php
                                    $dta=date('Y-m-d', strtotime($plan->created_at));
                                    $date = date('Y-m-d', time());
                                     @endphp
                                     
                                      
              
               
                                   
                                    
                                    
                                   @php
                                    $date = date('Y-m-d', time());
                                     @endphp
                                     @if($dta==$date)
                                    <tr>
                                        
                                        
                                       
                                        
                                        <td><span class="badge badge-default badge-danger">{{date('j F-Y', strtotime($plan->task_date))}}</span></td>
                                       <td>{{$plan->day_work_name}}</td>
                                       <td>{{$plan->work_plan_type}}</td>
                                        @if(!$plan->client_name==null)
                                        <td>{{$plan->plan2->client_name}}</td>
                                        @else
                                        <td>{{$plan->others_option}}</td>
                                        @endif
                                            
                                        @if(!$plan->position_id==null)
                                        <td>{{$plan->plan->job_title}}</td>
                                        @else
                                        <td>{{$plan->subject}}</td>
                                        @endif
                                        
                                        
                                        
                                    </tr>
                                    @else
                                    
                                    <tr></tr>
                                    @endif
                                    
                                    
                                 
                                 
                                     
                                    
                                    @endforeach
                                </tbody>
                              
                            </table>
                        </div>
                    </div>
                   
                </div>
            </div>
		
	<script>
		$(document).ready(function() {
			//initialize the show hide functuion
			$('#taskdate').hide();
			$('#session').hide();
			$('#session_type').hide();
			$('#sourcing').hide();

			// for long leave        
			$('#input-radio-3').on('click', function() {
				$('#taskdate').show();
				$('#session').hide();
				$('#session_type').hide();
			})

			//current day plan
			$('#input-radio-1').on('click', function() {
				$('#taskdate').show();
				$('#session').show();
				$('#session_type').show();
			})


			//previous day plan
			$('#input-radio-2').on('click', function() {
				$('#taskdate').show();
				$('#session').show();
				$('#session_type').show();
			})

			function calculContoEco() {
				$i = 0;
				console.log($i);
				$i++;

			}

		});



		function show1() {
			document.getElementById('div1').style.display = 'flex';
			document.getElementById('div2').style.display = 'none';
		}

		function show2() {
			document.getElementById('div2').style.display = 'flex';
			document.getElementById('div1').style.display = 'none';
		}
	</script>

</x-admin-layout>