@extends('backend.admin.app')

@section('title','Department List')

@push('css')

@endpush
@section('content')
     <!-- BEGIN: Content-->
<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Department Infromation</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{route('admin.designation.index')}}">Designation</a>
                  </li>
                  <li class="breadcrumb-item active">List
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">

              <a class="btn btn-info  dropdown-menu-right"  href="{{route('admin.designation.create')}}" type="button" ><i class="ft-pen icon-left"></i> Add Department</a>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Designation List</h4>
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
                

                @if (session('success'))
                        <div class="alert alert-success" id="success-alert" role="{{session('class')}}">
                            {{ session('success') }}
                        </div>
                @endif

                @if (session('delete'))
                        <div class="alert alert-danger" id="success-alert" role="{{session('class')}}">
                            {{ session('delete') }}
                        </div>
                @endif



                

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>SL No </th>
                                <th>Designation Name</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($datas as $key=>$data)
                            <tr class="">
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$data->des_title}}</td>                            
                                <td> <a href="{{route('admin.designation.edit',$data->id)}}" class="btn btn-warning">Edit</a>

                                 || <button type="submit" onclick="deletepost('{{$data->id}}')" class="btn btn-danger"> Delete </button>


                                 <form action="{{route('admin.designation.destroy',$data->id)}}" id="delete-form-{{$data->id}}" method="POST" >
                                              @csrf
                                             @method('delete')

                                            </form>


                                             </td>
                            </tr>
                            
                            @endforeach
                            
                                                       
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>

<!-- Basic Tables end -->












        </div>
      </div>
    </div>
    <!-- END: Content-->





@endsection


@push('js')

  <script>
  
$(document).ready (function(){
            $("#success-alert").fadeTo(7000, 7000).slideUp(800);
 });
</script>



<script >
                
                    function deletepost(id){
                            Swal.fire({
                              title: 'Are you sure?',
                              text: "You won't be able to revert this!",
                              type: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                              if (result.value) {
                            event.preventDefault();
                            document.getElementById('delete-form-'+id).submit();
                                
                              }
                            })
                      
                    }
            </script>

@endpush