@extends('backend.admin.app')

@section('title','Edit Department')

@section('content')
   <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Edit Department</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{route('admin.department.index')}}">Department</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="{{route('admin.department.edit',$data->id)}}">Edit Department</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
              <div class="btn-group" role="group">
                 <a class="btn btn-info  dropdown-menu-right"  href="{{route('admin.department.index')}}" type="button" ><i class="ft-pen icon-left"></i> Department List </a>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
<div>
   <div>
     <div>


    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-card-center">Create Department</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
                    <form action="{{route('admin.department.update',$data->id)}}" method="post">

                     

                    @method('PUT')

                    @csrf                  
                        <form class="form">
                            <div class="form-body">

                                <div class="form-group">
                                    <label for="eventRegInput1">Department Name</label>
                                    <input type="text" id="eventRegInput1" class="form-control" value="{{$data->dept_name}}" placeholder="Department name" name="dept_name" required="">
                                </div> 

                                <div class="form-group">
                                    <label for="eventRegInput1">Status</label> 
                                    <select class="form-control" name="dept_status">
                                      <option value="1" {{$data->status ==1 ?"selected='' ":"" }}> Active</option>
                                      <option value="0" {{$data->status ==0 ?"selected='' ":"" }}> Deactive</option>
                                    </select>
                                </div>                             
                                

                                
                            </div>

                            <div class="form-actions center">
                                <a href="{{route('admin.department.index')}}" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Back
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check-square-o"></i> Update
                                </button>
                            </div>
                        </form>

                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>
    </div>

</section>

  </div>
      </div>
    </div>

    <!-- END: Content-->

@endsection