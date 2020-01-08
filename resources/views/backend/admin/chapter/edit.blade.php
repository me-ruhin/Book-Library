@extends('backend.admin.app')

@section('title','Edit Chapter')

@section('content')
   <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Edit Chapter</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{route('admin.chapter.index')}}">Chapter</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="{{route('admin.chapter.edit',$data->id)}}">Edit Chapter</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
              <div class="btn-group" role="group">
                 <a class="btn btn-info  dropdown-menu-right"  href="{{route('admin.chapter.index')}}" type="button" ><i class="ft-pen icon-left"></i> Chapter List </a>
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
                    <h4 class="card-title" id="basic-layout-card-center">Update Book Information</h4>
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
                    <form action="{{route('admin.chapter.update',$data->id)}}" method="post">

                     

                    @method('PUT')

                    @csrf                  
                        <form class="form">
                            <div class="form-body">

                                
                                <div class="form-group">
                                    <label for="cName">Chapter's Name: <span class="danger">*</span></label>
                                    <input type="text" id="cName" class="form-control" placeholder="Chapter Name" value="{{$data->chapter_name}}" name="chapterName" required="">
                                </div>   

                                <div class="form-group">
                                            <label for="book">
                                                Book Name :
                                                <span class="danger">*</span>
                                            </label>
                                            <select class="custom-select form-control required"  name="bookId" id="book" >
                                             <option>Select Book</option>


                                             @foreach($books as $book)
                                             <option value="{{$book->id}}" {{$data->book_id ==$book->id ?"selected='' ":"" }}> {{$book->book_name}}</option>
                                             @endforeach
                                           </select>
                                </div>   

                                
                            </div>

                            <div class="form-actions center">
                                <a href="{{route('admin.chapter.index')}}" class="btn btn-warning mr-1">
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