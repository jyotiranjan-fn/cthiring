<x-admin-layout>
    <style>
        body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
            margin-left: 263px;
        }
    </style>


    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Billing</h3><br>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">performance
                        </li>
                        <li class="breadcrumb-item"><a href="#">Billing</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <!-- Form wizard with icon tabs section start -->
    <div class="row match-height">
        <div class="col-md-12">
            <form class="form" action="{{url('insert_billing')}}" method="post">
                 @csrf
                <div class="card">
                    <div class="card-header cnt223">
                        <h1 class="" id="basic-layout-tooltip">Add Billing</h1>
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
                            <div class="col-md-12 col-sm-12 col-xs-12 pd_0">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="table-responsive">

                                          <input type="text" class="form-control" value="{{$position_id}}" name="position_id">
                                          <input type="text" class="form-control" value="{{$client_id}}" name="client_id">
                                          <input type="text" class="form-control" value="{{$resu_id}}" name="resume_id">


                                            <table class="table table-bordered wd_37">
                                                <tr>
                                                    <th class="pd_410">Candidate Name</th>
                                                    <td class="pd_410"><input type="text" class="form-control" value="{{$candidate_name}}"  name="candidate_name" readonly></td>
                                                </tr>
                                        
                                                
                                                <tr>
                                                    <th class="pd_410">Position</th>
                                                    <td class="pd_410"><input type="text" class="form-control" value="{{$position_name->job_title}}" name="position_name" readonly></td>
                                                </tr>
                                                <tr>
                                                    <th class="pd_410">Client Name</th>
                                                    <td class="pd_410"><input type="text" class="form-control" value="{{$client_name->client_name}}" name="client_name" readonly></td>
                                                </tr>
                                                @php
                                                $count = count($job_offers_joined);
                                                @endphp
                                                
                                                @for($i=0;$i<$count;$i++)
                                                @if($job_offers_joined[$i]->job_joined_date != null)
                                                <tr>
                                                    <th class="pd_410">Joined Date</th>
                                                    <td class="pd_410"><input type="text" class="form-control" value="{{$job_offers_joined[$i]->job_joined_date}}" name="joining_date" readonly></td>
                                                </tr>
                                                @endif
                                                
                                            @endfor
                                            
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered wd_37">
                                                @for($i=0;$i<$count;$i++)
                                                @if($job_offers_joined[$i]->offer_ctc != null)
                                                <tr>
                                                
                                                    <th class="pd_410">CTC Offered*</th>
                                                    <td class="pd_410"><input type="text" class="form-control" value="{{$job_offers_joined[$i]->offer_ctc}}" id="ctc_offered" name="ctc_offer" readonly></td> 
                                                </tr>
                                                @endif
                                                @endfor
                                                <tr>
                                                    <th class="pd_410">Designation Offered</th>
                                                    <td class="pd_410"><input type="text" class="form-control" value="" name="designation_offer"></td>
                                                </tr>
                                                <tr>
                                                    <th class="pd_410">Billing %</th>
                                                    <td class="pd_410"><input type="text" class="form-control" value="" id="billing_percentage" name="bill_percentage"></td>
                                                </tr>
                                                <tr>
                                                    <th class="pd_410">Billing Amount*</th>
                                                    <td class="pd_410"><input type="text" class="form-control" value="" id="billing_amount" name="billing_amount" readonly></td>
                                                </tr>
                                                <tr>
                                                    <th class="pd_410">Billing Date*</th>
                                                    <td class="pd_410"><input type="date" class="form-control" value="" name="billing_date"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 pd_0 cnt223">
                                <h1>Additional Client Information</h1>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th class="pd_410">Kindly Attention(Address To):*</th>
                                                <td class="pd_410">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-3 col-xs-12 p_left">
                                                                <select class="form-control" name="sur_name">
                                                                    <option>Mr</option>
                                                                    <option>Mrs</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-12 p_left p_right">
                                                                <input type="text" class="form-control" value="" name="client_name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pd_410">Designation:*</th>
                                                <td class="pd_410"><input type="text" class="form-control" value="" name="designation"></td>
                                            </tr>
                                            <tr>
                                                <th class="pd_410" rowspan="4">Billing Address:*</th>
                                                <td class="pd_410"><input type="text" class="form-control" value="" placeholder="Flat No/Door No" name="add_doorno" id="door_no"></td>
                                            </tr>
                                            <tr>
                                                <td class="pd_410"><input type="text" class="form-control" value="" placeholder="Address 1" name="address_1" id="addres_one"></td>
                                            </tr>
                                            <tr>
                                                <td class="pd_410"><input type="text" class="form-control" value="" placeholder="Address 2" name="address_2" id="addres_two"></td>
                                            </tr>
                                            <tr>
                                                <td class="pd_410">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-12 p_left">
                                                                <input type="text" class="form-control" value="" placeholder="State" name="state" id="state">
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-12 p_left">
                                                                <input type="text" class="form-control" value="" placeholder="City" name="city" id="city">
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-12 p_left p_right">
                                                                <input type="text" class="form-control" value="" placeholder="Pincode" name="pincode" id="pincode">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2"><input type="checkbox" class="m_r" id="checkedbox_checked">Check this if courier address same as billing address*</th>
                                            </tr>
                                            <tr>
                                                <th class="pd_410" rowspan="4">Courier Address:*</th>
                                                <td class="pd_410"><input type="text" class="form-control" value="" placeholder="Flat No/Door No" name="door_name_courier" id="door"></td>
                                            </tr>
                                            <tr>
                                                <td class="pd_410"><input type="text" class="form-control" value="" placeholder="Address 1" name="address_1_courier" id="adr_one"></td>
                                            </tr>
                                            <tr>
                                                <td class="pd_410"><input type="text" class="form-control" value="" placeholder="Address 2" name="address_2_courier" id="adr_two"></td>
                                            </tr>
                                            <tr>
                                                <td class="pd_410">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-12 p_left">
                                                                <input type="text" class="form-control" value="" placeholder="State" name="state_courire" id="state_name">
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-12 p_left">
                                                                <input type="text" class="form-control" value="" placeholder="City" name="city_courier" id="city_name">
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-12 p_left p_right">
                                                                <input type="text" class="form-control" value="" placeholder="Pincode" name="pincode_courier" id="pin_code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pd_410">GSTN:*</th>
                                                <td class="pd_410"><input type="text" class="form-control" value="" name="gstn_courier"></td>
                                            </tr>
                                            <tr>
                                                <th class="pd_410">Remarks:</th>
                                                <td class="pd_410"><input type="text" class="form-control" value="" name="remarks"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt_btn">
                        
                            <button type="submit" class="btn btn-primary">Submit</button>
                      
                        <a href="">
                            <button type="button" class="btn btn-danger">Cancel</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>


        <script>
            $( document ).ready(function() {
                $('#billing_percentage').on('input',function(){
                    var ctc =$('#ctc_offered').val();
                    var billing=$(this).val();
                    var billing_ammount= ctc*(billing/100);
                    $('#billing_amount').val(billing_ammount);


                })
   
            });
      
        </script>

        <script>
            $('#checkedbox_checked') .click(function(){
                var doorno= $('#door_no') .val();
                var address =$('#addres_one').val();
               var adres_two =$('#addres_two').val();
                var sta =$('#state').val();
                var ct =$('#city').val();
                var pncode =$('#pincode').val();


            


                 $('#door').val(doorno);
                 $('#adr_one').val(address);

                  $('#adr_two').val(adres_two);
                 $('#state_name').val(sta);
                 $('#city_name').val(ct);
                 $('#pin_code').val(pncode);

                
                

                
            });

        </script>


</x-admin-layout>