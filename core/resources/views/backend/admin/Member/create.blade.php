@extends('backend.admin.app')

@section('title','Add Member')


@push('css')

<!-- Vendor: Page CSS-->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/pickers/daterange/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">

<!-- End: Page CSS-->

 <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/wizard.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/pickers/daterange/daterange.min.css')}}">
    <!-- END: Page CSS-->

@endpush
@section('content')
  
     <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0"> Member Regisration </h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                  </li>
                  
                  <li class="breadcrumb-item active">Registration
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
               <a class="btn btn-info  dropdown-menu-right"  href="{{route('admin.member.index')}}" type="button" ><i class="ft-pen icon-left"></i> Member List</a>
            </div>
          </div>
        </div>
        <div class="content-body">
<!-- Form wizard with step validation section start -->
<section id="validation">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registration From</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-h font-medium-3"></i></a>
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
                    <div class="card-body">
                        <form action="#" class="steps-validation wizard-circle">

                            <!-- Step 1 -->
                            <h6>Personal Details</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName3">
                                                First Name :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="firstName3" name="firstName" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName3">
                                                Last Name :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="lastName3" name="lastName" >
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="father3">
                                                Father's Name :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="father3" name="fatherName" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mother3">
                                                Mother's Name :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="mother3" name="motherName" >
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date3">
                                                Date of Birth :
                                                <span class="danger">*</span>
                                            </label>
                                             <input type="date" class="form-control required" id="date3" name="birthDate" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gender3">
                                               Gender :
                                                <span class="danger">*</span>
                                            </label>
                                              <select  class="custom-select form-control required" name="userGender" id="gender3">
                                                   <option value="">Select Gender</option>
                                                  <option value="Male">Male</option>
                                                  <option value="Female">Female</option>

                                              </select>
                                          
                                        </div>
                                    </div>
                                </div>





                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                                Email Address :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="email" class="form-control required" id="emailAddress5" name="userEmail">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address3">
                                                Address :
                                                <span class="danger">*</span>
                                            </label>
                                           <input type="email" class="form-control required" id="address3" name="user_Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber3">Phone Number :<span class="danger">*</span></label>
                                            <input type="number" class="form-control required" id="phoneNumber3" name="mobileNumber" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="imgs2">Image :</label>
                                            <input type="file" name="userImage" class="form-control" id="imgs2" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 2 -->
                            <h6>Company Details</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emp_id">
                                                Employee ID:
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="emp_id" name="empId">
                                        </div>
                                        <div class="form-group">
                                            <label for="dept">
                                                Department :
                                                <span class="danger">*</span>
                                            </label>
                                            <select class="custom-select form-control required" name="memberDepartment" id="dept" >
                                             <option>Select Department</option>


                                             @foreach($departments as $department)
                                             <option value="{{$department->id}}"> {{$department->dept_name}}</option>
                                             @endforeach
                                           </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="joinSalary">Joining Salary :  <span class="danger">*</span></label>
                                            <input type='number' class="form-control required" id="joinSalary" name="userSalary" />
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="joinDate">
                                                Date of Joining :
                                                <span class="danger">*</span>
                                            </label>
                                           

                                            <input type='date' class="form-control required" id="joinDate" name="joinDate" />
                                               


                                        </div>

                                          <div class="form-group">
                                            <label for="design">Designation :</label>
                                           <select class="custom-select form-control required" name="memberDesignation" id="design" >
                                             <option>Select Designation</option>
                                             @foreach($designations as $designation)
                                             <option value="{{$designation->id}}"> {{$designation->des_title}}</option>
                                             @endforeach
                                           </select>
                                        </div>

                                      


                                        

                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 3 -->
                            <h6>Account Login</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="loginEmail">
                                                E-mail:
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="loginEmail" name="userEmail" >
                                        </div>
                                       
                                       
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userpassword">
                                                Password :
                                                <span class="danger">*</span>
                                            </label>
                                            <div class='input-group'>
                                                <input type='password' class="form-control required" id="userpassword" name="userPassword" />
                                                
                                            </div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 4 -->
                            <h6>Documents</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="meetingName3">
                                                Name of Meeting :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="meetingName3" name="meetingName" >
                                        </div>

                                        <div class="form-group">
                                            <label for="meetingLocation3">
                                                Location :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="meetingLocation3" name="meetingLocation" >
                                        </div>

                                        <div class="form-group">
                                            <label for="participants3">Names of Participants</label>
                                            <textarea name="participants" id="participants3" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="decisions3">Decisions Reached</label>
                                            <textarea name="decisions" id="decisions3" rows="4" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Agenda Items :</label>
                                            <div class="c-inputs-stacked">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item31">
                                                    <label class="custom-control-label" for="item31">1st item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item32">
                                                    <label class="custom-control-label" for="item32">2nd item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item33">
                                                    <label class="custom-control-label" for="item33">3rd item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item34">
                                                    <label class="custom-control-label" for="item34">4th item</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item35">
                                                    <label class="custom-control-label" for="item35">5th item</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form wizard with step validation section end -->


        </div>
      </div>
    </div>
    <!-- END: Content-->


@endsection


@push('js')

 <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->


<!-- BEGIN: Page JS-->
    <script src="{{asset('backend/app-assets/js/scripts/forms/wizard-steps.min.js')}}"></script>
    <!-- END: Page JS-->

@endpush