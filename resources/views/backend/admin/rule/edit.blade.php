@extends('backend.admin.app')

@section('title','Edit Rule')

@push('js')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
@endjs

@section('content')
   <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Edit Rule</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{route('admin.rule.index')}}">Rule</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="{{route('admin.rule.edit',$rule->id)}}">Edit Rule</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
              <div class="btn-group" role="group">
                 <a class="btn btn-info  dropdown-menu-right"  href="{{route('admin.chapter.index')}}" type="button" ><i class="ft-pen icon-left"></i> Rule List </a>
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-card-center">Update Rule Information</h4>
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
                    <form action="{{route('admin.rule.update',$rule->id)}}" method="post" enctype="multipart/form-data">

                     

                    @method('PUT')

                    @csrf                  
                        <form class="form">
                            <div class="form-body">

                                
                                  

                                <div class="form-group">
                                    <label for="bookid">Book Name: <span class="danger">*</span></label>
                                      
                                       <select class="custom-select form-control " name="bookid" id="bookId" required="" >
                                             <option value="">Select Book</option>


                                             @foreach($books as $book)
                                             <option value="{{$book->id}}" {{$rule->book_id ==$book->id ?"selected='' ":"" }} > {{$book->book_name}}</option>
                                             @endforeach
                                       </select>


                                        @error('bookid')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                       @enderror


                                   </div>




                                   <div class="form-group">
                                    <label for="cpname">Chapter  Name: <span class="danger">*</span></label>
                                      
                                       <select class="custom-select form-control " name="cpname" id="chapterId" required="" >
                                            @foreach($chapters as $chapter)
                                             <option value="{{$chapter->id}}" {{$rule->chapter_id ==$chapter->id ?"selected='' ":"" }} > {{$chapter->chapter_name}}</option>
                                             @endforeach
                                     

                                       </select>


                                  @error('cpname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                   </div> 



                                    <div class="form-group">
                                    <label for="cName">Rule Name: <span class="danger">*</span></label>
                                      
                                       <input type="text" name="rule_name" value="{{$rule->rules_name}}" class="form-control " required="">


                                  @error('rule_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div> 




                                <div class="form-group">
                                    <label for="imgsf">Image : <span class="danger">*</span></label>
                                      
                                       <input type="file" name="rule_image" class="form-control required" id='imgsf' >

                                        <img src="{{asset('rulePhoto/'.$rule->image)}}" height="150" width="150">

                                          @error('rule_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>  

                                 




                                <div class="form-group">
                                    <label for="imgsf">Description : <span class="danger">*</span></label>
                                      
                                        <textarea cols="4" class="form-control" id="summernote" name="ruleDescription" required="">{{$rule->description}}</textarea>
                                       

                                         @error('ruleDescription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div> 



                                
                            </div>

                            <div class="form-actions center">
                                <a href="{{route('admin.rule.index')}}" class="btn btn-warning mr-1">
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


@push('js')
  <!-- include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
<!-- include summernote css/js -->



<script type="text/javascript">


    $(document).ready(function() {
  $('#summernote').summernote();
});



$('#summernote').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
                   // set focus to editable area after initializing summernote
});



 $('#bookId').change(function(){
    var book_id = $(this).val(); 

    

    if(book_id){
      $('#chapterId').empty();
        // console.log(dis_id);
        $.ajax({
           type:"GET",
        

            url : '{{('/admin/book/chapter')}}/'+book_id,  


           success:function(data){     
            console.log(data);

           $.each(data,function(key,value){

                    $("#chapterId").append('<option value="'+value.id+'">'+value.chapter_name+'</option>');

                });



           }
        });
    }    
   });

</script>

@endpush