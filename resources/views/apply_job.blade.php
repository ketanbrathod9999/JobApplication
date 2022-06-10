@extends('layouts.frontendapp')

@section('content')
<!-- Page Content-->
<div class="container px-4 px-lg-5">

    <!-- Call to Action-->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body"><h1 class="text-white m-0">Job Application Form</h1></div>
    </div>
    <!-- Content Row-->
    <form id="frm_add" method="post" enctype="multipart/form-data">
        <div class="row mb-5">
            <h2>Basic Detail</h2>
            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="first_name">First name</label>
                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name">
                  <span class="text-danger errors first_name-error"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="last_name">Last name</label>
                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name">
                  <span class="text-danger errors last_name-error"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="designation">Designation</label>
                  <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter designation">
                  <span class="text-danger errors designation-error"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="address1">Address 1</label>
                  <input type="text" class="form-control" name="address1" id="address1" placeholder="Enter address 1">
                  <span class="text-danger errors address1-error"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
                  <span class="text-danger errors email-error"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="address2">Address 2</label>
                  <input type="text" class="form-control" name="address2" id="address2" placeholder="Enter address 2">
                  <span class="text-danger errors address2-error"></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="phone_number">Phone Number</label>
                  <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Enter phone number">
                  <span class="text-danger errors phone_number-error"></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="city">City</label>
                  <input type="text" class="form-control" name="city" id="city" placeholder="Enter city">
                  <span class="text-danger errors city-error"></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="gender">Gender</label>
                  <br>
                  <input type="radio" id="male" value="Male" name="gender"> <label for="male">Male</label>
                  <input type="radio" id="female" value="Female" name="gender"> <label for="female">Female</label>
                  <br>
                  <span class="text-danger errors gender-error"></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="state">State</label>
                  <select name="state" id="state" class="form-control">
                    <option value="">--Select--</option>
                    @if(isset($States) && !empty($States))
                        @foreach ($States as $st_key => $st_data)
                            <option value="{{$st_data->id}}">{{$st_data->name}}</option>
                        @endforeach
                    @endif
                  </select>
                  <span class="text-danger errors state-error"></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="zip_code">Zip code</label>
                  <input type="number" class="form-control" name="zip_code" id="zip_code" placeholder="Enter zip code">
                  <span class="text-danger errors zip_code-error"></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="relationship_status">Relationship Status</label>
                  <select name="relationship_status" id="relationship_status" class="form-control">
                    <option value="">--Select--</option>
                    @if(isset($RelationShipStatus) && !empty($RelationShipStatus))
                        @foreach ($RelationShipStatus as $rss_key => $rss_data)
                            <option value="{{$rss_data->id}}">{{$rss_data->name}}</option>
                        @endforeach
                    @endif
                  </select>
                  <span class="text-danger errors relationship_status-error"></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-2">
                  <label for="dob">Date Of Birth</label>
                  <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                  <span class="text-danger errors date_of_birth-error"></span>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <h2>Education Detail</h2>
            <h5 class="mt-3">SSC result</h5>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="ssc_board_name">Name Of Board</label>
                  <input type="text" class="form-control" name="ssc_board_name" id="ssc_board_name" placeholder="Enter board name">
                  <span class="text-danger errors ssc_board_name-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="ssc_passing_year">Passing Year</label>
                  <input type="number" class="form-control" name="ssc_passing_year" id="ssc_passing_year" placeholder="Enter year">
                  <span class="text-danger errors ssc_passing_year-error"></span>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="ssc_percentage">Percentage</label>
                  <input type="number" class="form-control" name="ssc_percentage" id="ssc_percentage" placeholder="Enter percentage">
                  <span class="text-danger errors ssc_percentage-error"></span>
                </div>
            </div>
            
            <h5 class="mt-3">HSC/Diploma result</h5>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="hsc_board_name">Name Of Board</label>
                  <input type="text" class="form-control" name="hsc_board_name" id="hsc_board_name" placeholder="Enter board name">
                  <span class="text-danger errors hsc_board_name-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="hsc_passing_year">Passing Year</label>
                  <input type="number" class="form-control" name="hsc_passing_year" id="hsc_passing_year" placeholder="Enter year">
                  <span class="text-danger errors hsc_passing_year-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="hsc_percentage">Percentage</label>
                  <input type="text" class="form-control" name="hsc_percentage" id="hsc_percentage" placeholder="Enter percentage">
                  <span class="text-danger errors hsc_percentage-error"></span>
                </div>
            </div>
            <h5  class="mt-3">Bachelor degree</h5>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="bachelor_course_name">Course Name</label>
                  <input type="text" class="form-control" name="bachelor_course_name" id="bachelor_course_name" placeholder="Enter course name">
                  <span class="text-danger errors bachelor_course_name-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="bachelor_university">University</label>
                  <input type="text" class="form-control" name="bachelor_university" id="bachelor_university" placeholder="Enter university name">
                  <span class="text-danger errors bachelor_university-error"></span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-2">
                  <label for="bachelor_passing_year">Passing Year</label>
                  <input type="number" class="form-control" name="bachelor_passing_year" id="bachelor_passing_year" placeholder="Enter year">
                  <span class="text-danger errors bachelor_passing_year-error"></span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-2">
                  <label for="bachelor_percentage">Percentage</label>
                  <input type="number" class="form-control" name="bachelor_percentage" id="bachelor_percentage" placeholder="Enter percentage">
                  <span class="text-danger errors bachelor_percentage-error"></span>
                </div>
            </div>

            <h5 class="mt-3">Master degree</h5>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="master_course_name">Course Name</label>
                  <input type="text" class="form-control" name="master_course_name" id="master_course_name" placeholder="Enter course name">
                  <span class="text-danger errors master_course_name-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="master_university">University</label>
                  <input type="text" class="form-control" name="master_university" id="master_university" placeholder="Enter university name">
                  <span class="text-danger errors master_university-error"></span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-2">
                  <label for="master_passing_year">Passing Year</label>
                  <input type="number" class="form-control" name="master_passing_year" id="master_passing_year" placeholder="Enter year">
                  <span class="text-danger errors master_passing_year-error"></span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-2">
                  <label for="master_percentage">Percentage</label>
                  <input type="number" class="form-control" name="master_percentage" id="master_percentage" placeholder="Enter percentage">
                  <span class="text-danger errors master_percentage-error"></span>
                </div>
            </div>
           
        </div>

        <div class="row mb-5">
            <h2>Work Experience</h2>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="work_designation">Designation</label>
                  <input type="text" class="form-control" name="work_designation[]"  placeholder="Enter designtion">
                  <span class="text-danger errors work_designation-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="from_experience">From</label>
                  <input type="date" name="from_experience[]" class="form-control">
                  <span class="text-danger errors from_experience-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="to_experience">To</label>
                  <input type="date" name="to_experience[]" class="form-control">
                  <span class="text-danger errors to_experience-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="work_designation">Designation</label>
                  <input type="text" class="form-control" name="work_designation[]"  placeholder="Enter designtion">
                  <span class="text-danger errors work_designation-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="from_experience">From</label>
                  <input type="date" name="from_experience[]" class="form-control">
                  <span class="text-danger errors from_experience-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="to_experience">To</label>
                  <input type="date" name="to_experience[]" class="form-control">
                  <span class="text-danger errors to_experience-error"></span>
                </div>
            </div>
            {{-- <span class="text-danger errors work_designation-error"></span> --}}
        </div>

        <div class="row mb-5">
            <h2>Language Known</h2>
            <div class="col-md-12">
                <table class="table">
                    @if(isset($Languages) && !empty($Languages))
                        @foreach ($Languages as $lang_key => $lang_data)
                            <tr>
                                <th>
                                    <input class="chk_language" type="checkbox" name="languages[]" value="{{$lang_data->id}}" id="language_{{$lang_data->id}}"> <label for="language_{{$lang_data->id}}">{{$lang_data->name}}</label>
                                </th>
                                <td>
                                    <input type="checkbox" disabled class="lang_read" name="lang_{{$lang_data->id}}_read" id="lang_{{$lang_data->id}}_read" > <label for="lang_{{$lang_data->id}}_read">Read</label>
                                </td>
                                <td>
                                    <input type="checkbox" disabled class="lang_write" name="lang_{{$lang_data->id}}_write" id="lang_{{$lang_data->id}}_write" > <label for="lang_{{$lang_data->id}}_write">Write</label>
                                </td>
                                <td>
                                    <input type="checkbox" disabled class="lang_speak" name="lang_{{$lang_data->id}}_speak" id="lang_{{$lang_data->id}}_speak" > <label for="lang_{{$lang_data->id}}_speak">Speak</label>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                   
                </table>
                <span class="text-danger errors languages-error"></span>
            </div>
        </div>
        <div class="row mb-5">
            <h2>Technologies you know</h2>
            <div class="col-md-12">
                <table class="table">
                    @if(isset($Technologies) && !empty($Technologies))
                        @foreach ($Technologies as $tech_key => $tech_data)
                            <tr>
                                <th>
                                    <input class="chk_technologies" type="checkbox" name="technologies[]" value="{{$tech_data->id}}" id="technology_{{$tech_data->id}}"> <label for="technology_{{$tech_data->id}}">{{$tech_data->name}}</label>
                                </th>
                                <td>
                                    <input type="radio" disabled class="knowledge_level" name="knowledge_level_{{$tech_data->id}}" value="1"> Beginer
                                </td>
                                <td>
                                    <input type="radio" disabled class="knowledge_level" name="knowledge_level_{{$tech_data->id}}" value="2"> Mediator
                                </td>
                                <td>
                                    <input type="radio" disabled class="knowledge_level" name="knowledge_level_{{$tech_data->id}}" value="3"> Expert
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </table>
                <span class="text-danger errors technologies-error"></span>
            </div>
        </div>

        <div class="row mb-5">
            <h2>Referance Contact</h2>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label>Name</label>
                  <input type="text" class="form-control" name="ref_name[]" placeholder="Enter name">
                  <span class="text-danger errors ref_name-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label>Contact Number</label>
                  <input type="number" class="form-control" name="ref_contact_number[]" placeholder="Enter contact number">
                  <span class="text-danger errors ref_contact_number-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label>Relation</label>
                  <input type="text" class="form-control" name="ref_relation[]"  placeholder="Enter relation">
                  <span class="text-danger errors ref_relation-error"></span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label>Name</label>
                  <input type="text" class="form-control" name="ref_name[]" placeholder="Enter name">
                  <span class="text-danger errors ref_name-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label>Contact Number</label>
                  <input type="number" class="form-control" name="ref_contact_number[]" placeholder="Enter contact number">
                  <span class="text-danger errors ref_contact_number-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label>Relation</label>
                  <input type="text" class="form-control" name="ref_relation[]"  placeholder="Enter relation">
                  <span class="text-danger errors ref_relation-error"></span>
                </div>
            </div>
            
           
        </div>

        <div class="row mb-5">
            <h2>Preferances</h2>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="ref_name1">Prefered location</label>
                  <select name="prefered_location" id="prefered_location" class="form-control">
                      <option value="">--Select--</option>
                        @if(isset($PreferdLocations) && !empty($PreferdLocations))
                            @foreach ($PreferdLocations as $pl_key => $pl_data)
                                <option value="{{$pl_data->id}}">{{$pl_data->name}}</option>
                            @endforeach
                        @endif
                  </select>
                  <span class="text-danger errors prefered_location-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="notice_period">Notice period</label>
                  <input type="text" name="notice_period" id="notice_period" class="form-control">
                  <span class="text-danger errors notice_period-error"></span>
                </div>
                <div class="form-group mb-2">
                    <label for="expacted_ctc">Expacted CTC</label>
                    <input type="number" name="expacted_ctc" id="expacted_ctc" class="form-control">
                    <span class="text-danger errors expacted_ctc-error"></span>
                </div>
                <div class="form-group mb-2">
                    <label for="current_ctc">Current CTC</label>
                    <input type="number" name="current_ctc" id="current_ctc" class="form-control">
                    <span class="text-danger errors current_ctc-error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-2">
                  <label for="department">Department</label>
                  <select name="department" id="department" class="form-control">
                      <option value="">--Select--</option>
                        @if(isset($Departments) && !empty($Departments))
                            @foreach ($Departments as $dp_key => $dp_data)
                                <option value="{{$dp_data->id}}">{{$dp_data->name}}</option>
                            @endforeach
                        @endif
                  </select>
                  <span class="text-danger errors department-error"></span>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12 text-center mb-3">
                <button type="button" id="btn_submit" class="btn btn-primary">Submit</button>
            </div>
            <div id="main_response"></div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
 
    <script>
        $("#btn_submit").on('click',function(){

            $(".errors").text('');
            // $("#main_response").text('');

            var actionurl = '{{ route("apply_job_process") }}';

            var formData = new FormData($("#frm_add")[0]);

            $.ajax({
                type: 'POST',
                dataType: 'json',
                data:formData,
                contentType:false,
                processData:false,
                url: actionurl,
                success: function(response) {

                    if(response.success==1) {
                    
                        $("#frm_add")[0].reset();

                        $(".lang_read").attr('disabled','disabled');
                        $(".lang_write").attr('disabled','disabled');
                        $(".lang_speak").attr('disabled','disabled');

                        $(".knowledge_level").attr('disabled','disabled');
                        
                        $("#main_response").html('<div class="alert alert-success">'+response.msg+'</div>');
                    }

                    if(response.success==2) {
                        $("#main_response").html('<div class="alert alert-danger">'+response.msg+'</div>');
                    }
                    
                },
                error: function(error_response) {
                    if(error_response) {
                        // console.log(error_response.responseJSON);

                        $.each(error_response.responseJSON.errors, function(fieldname,error_msg) {
                            if(fieldname.indexOf(".") != -1){
                                var arr = fieldname.split(".");
                                // alert(arr[0]);
                                $('.'+arr[0]+'-error:eq('+arr[1]+')').text(error_msg);
                                // name = $("input[name='"+arr[0]+"[]']:eq("+arr[1]+")");
                            }
                            $('.'+fieldname+'-error').text(error_msg);
                        }); 

                        $.each(error_response.responseJSON.errors, function(fieldname,error_msg) {
                            
                            var fieldname_error = 'body';
                            if(fieldname.indexOf(".") != -1){
                                var arr = fieldname.split(".");
                                fieldname_error = '.'+arr[0]+'-error:eq('+arr[1]+')';
                            } else {
                                fieldname_error = '.'+fieldname+'-error';
                            }
                            
                            $('html, body').animate({
                                scrollTop: $(fieldname_error).offset().top - 100
                            }, 'smooth');
                            return false;
                        }); 
                        
                        $("#main_response").html('<div class="alert alert-danger">'+error_response.responseJSON.message+'</div>');
                    } else {
                        alert('Something Went Wrong');

                    }
                },
            });
        });

        $(".chk_language").on('click',function(){
            var language_id = $(this).attr('id');
            language_id = language_id.replace('language_','');
            
            if($(this).is(':checked')){
               $("#lang_"+language_id+"_read").removeAttr('disabled');
               $("#lang_"+language_id+"_write").removeAttr('disabled');
               $("#lang_"+language_id+"_speak").removeAttr('disabled');
            } else {
                $("#lang_"+language_id+"_read").attr('disabled','disabled');
                $("#lang_"+language_id+"_write").attr('disabled','disabled');
                $("#lang_"+language_id+"_speak").attr('disabled','disabled');
            }
        });

        $(".chk_technologies").on('click',function(){
            var technology_id = $(this).attr('id');
            technology_id = technology_id.replace('technology_','');
            if($(this).is(':checked')){
               $("input:radio[name='knowledge_level_"+technology_id+"']").removeAttr('disabled');
            } else {
                $("input:radio[name='knowledge_level_"+technology_id+"']").attr('disabled','disabled');
            }
        });
    </script>
@endsection