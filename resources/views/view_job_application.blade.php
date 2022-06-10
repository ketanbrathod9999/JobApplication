@extends('layouts.newapp')

@section('styles')

@endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Job Application </h1>
        </div>
        <div class="col-sm-6">
         
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
        
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Basic Detail</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12 mb-4">
                                <strong>First name: </strong>
                                <span>{{ $application_details->first_name}}</span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <strong>Last name: </strong>
                                <span>{{ $application_details->first_name}}</span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <strong>Designation: </strong>
                                <span>{{ $application_details->designation}}</span>
                            </div>
                            
                            <div class="col-md-12 mb-4">
                                <strong>Email: </strong>
                                <span>{{ $application_details->email}}</span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <strong>Phone: </strong>
                                <span>{{ $application_details->phone_number}}</span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <strong>Gender: </strong>
                                <span>{{ $application_details->gender}}</span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <strong>Date Of Birth: </strong>
                                <span>{{ date('d/m/Y',strtotime( $application_details->date_of_birth))}}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12 mb-4">
                                <strong>Address1: </strong>
                                <span>{{ $application_details->address1}}</span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <strong>Address2: </strong>
                                <span>{{ $application_details->address2}}</span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <strong>City: </strong>
                                <span>{{ $application_details->city}}</span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <strong>State: </strong>
                                <span>{{ $application_details->state->name}}</span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <strong>Zip Code: </strong>
                                <span>{{ $application_details->zip_code}}</span>
                            </div>
                           
                            <div class="col-md-12 mb-4">
                                <strong>Relationship Status: </strong>
                                <span>{{ $application_details->relationship_status->name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-12">
        
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Education Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <h5>SSC result</h5>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <strong>Name Of Board</strong><br>
                            <span>{{ $application_details->ssc_board_name}}</span>
                        </div>
                        <div class="col-md-4 mb-4">
                            <strong>Passing Year</strong><br>
                            <span>{{ $application_details->ssc_passing_year}}</span>
                        </div>
                        <div class="col-md-4 mb-4">
                            <strong>Percentage</strong><br>
                            <span>{{ $application_details->ssc_percentage}}</span>
                        </div>
                    </div>
                    <h5>HSC/Diploma result</h5>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <strong>Name Of Board</strong><br>
                            <span>{{ $application_details->hsc_board_name}}</span>
                        </div>
                        <div class="col-md-4 mb-4">
                            <strong>Passing Year</strong><br>
                            <span>{{ $application_details->hsc_passing_year}}</span>
                        </div>
                        <div class="col-md-4 mb-4">
                            <strong>Percentage</strong><br>
                            <span>{{ $application_details->hsc_percentage}}</span>
                        </div>
                    </div>
                    <h5>Bachelor degree</h5>
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <strong>Course Name</strong><br>
                            <span>{{ $application_details->bachelor_course_name}}</span>
                        </div>
                        <div class="col-md-3 mb-4">
                            <strong>University</strong><br>
                            <span>{{ $application_details->bachelor_university}}</span>
                        </div>
                        <div class="col-md-3 mb-4">
                            <strong>Passing Year</strong><br>
                            <span>{{ $application_details->bachelor_passing_year}}</span>
                        </div>
                        <div class="col-md-3 mb-4">
                            <strong>Percentage</strong><br>
                            <span>{{ $application_details->bachelor_percentage}}</span>
                        </div>
                    </div>
                    <h5>Master degree</h5>
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <strong>Course Name</strong><br>
                            <span>{{ $application_details->master_course_name}}</span>
                        </div>
                        <div class="col-md-3 mb-4">
                            <strong>University</strong><br>
                            <span>{{ $application_details->master_university}}</span>
                        </div>
                        <div class="col-md-3 mb-4">
                            <strong>Passing Year</strong><br>
                            <span>{{ $application_details->master_passing_year}}</span>
                        </div>
                        <div class="col-md-3 mb-4">
                            <strong>Percentage</strong><br>
                            <span>{{ $application_details->master_percentage}}</span>
                        </div>
                    </div>
            
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-12">
        
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Work Experience</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    @if(isset($application_details->work_experiences) && !empty($application_details->work_experiences))
                        @foreach ($application_details->work_experiences as $we_key => $wedata)
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <strong>Designation</strong><br>
                                <span>{{ $wedata->designation}}</span>
                            </div>
                            <div class="col-md-4 mb-4">
                                <strong>From</strong><br>
                                <span>{{ date('d/m/Y',strtotime($wedata->from_date)) }}</span>
                            </div>
                            <div class="col-md-4 mb-4">
                                <strong>To</strong><br>
                                <span>{{ date('d/m/Y',strtotime($wedata->to_date)) }}</span>
                            </div>
                        </div>
                        @endforeach
                    @endif
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-12">
        
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Language Known</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Language</th>
                                  <th>Read</th>
                                  <th>Write</th>
                                  <th>Speak</th>
                              </tr>
                          </thead>
                          <tbody>
                            @if(isset($application_details->language_knowns) && !empty($application_details->language_knowns))
                                @foreach ($application_details->language_knowns as $lang_key => $langdata)
                                    <tr>
                                        <th>{{$langdata->language->name}}</th>
                                        <td>{{ ($langdata->read==1)?'Yes':'No' }}</td>
                                        <td>{{ ($langdata->write==1)?'Yes':'No' }}</td>
                                        <td>{{ ($langdata->speak==1)?'Yes':'No' }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-12">
        
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Technologies you know</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Technology</th>
                                  <th>Beginer</th>
                                  <th>Mediator</th>
                                  <th>Expert</th>
                              </tr>
                          </thead>
                          <tbody>
                            @if(isset($application_details->technologies_knowns) && !empty($application_details->technologies_knowns))
                                @foreach ($application_details->technologies_knowns as $tech_key => $techdata)
                                    <tr>
                                        <th>{{$techdata->technology->name}}</th>
                                        <td>{{ ($techdata->knowledge_level==1)?'Yes':'No' }}</td>
                                        <td>{{ ($techdata->knowledge_level==2)?'Yes':'No' }}</td>
                                        <td>{{ ($techdata->knowledge_level==3)?'Yes':'No' }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-12">
        
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Referance Contact</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Contact Number</th>
                                  <th>Relation</th>
                              </tr>
                          </thead>
                          <tbody>
                            @if(isset($application_details->referance_contacts) && !empty($application_details->referance_contacts))
                                @foreach ($application_details->referance_contacts as $rc_key => $rcdata)
                                    <tr>
                                        <td>{{$rcdata->name}}</td>
                                        <td>{{$rcdata->contact_number}}</td>
                                        <td>{{$rcdata->relation}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-12">
        
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Preferances</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <strong>Prefered location</strong><br>
                        <span>{{ $application_details->preferd_location->name}}</span>
                    </div>
                    <div class="col-md-4 mb-4">
                        <strong>Notice period</strong><br>
                        <span>{{ $application_details->notice_period}}</span>
                    </div>
                    <div class="col-md-4 mb-4">
                        <strong>Expacted CTC</strong><br>
                        <span>{{ $application_details->expacted_ctc}}</span>
                    </div>
                    <div class="col-md-4 mb-4">
                        <strong>Current CTC</strong><br>
                        <span>{{ $application_details->current_ctc}}</span>
                    </div>
                    <div class="col-md-4 mb-4">
                        <strong>Department</strong><br>
                        <span>{{ $application_details->department->name}}</span>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->


@endsection


@section('scripts')


<!-- AdminLTE App -->
<script src="{{ asset('assets') }}/dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>

</script>

@endsection