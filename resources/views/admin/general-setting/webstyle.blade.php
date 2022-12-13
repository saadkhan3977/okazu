@extends('admin.layouts.master')
@section('page-title')
    Manage Logo
@endsection
@section('mainContent')
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<style type="text/css">
  .table-responsive {
    display: block;
    width: 100%;
    height: 52vh;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}
</style>
<div class="padding">
  <div class="box">
    <center>
      <form action="" id="websiteform" class="form-control" method="post" role="form" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-4"><br>
            <h6 style="float:right">Title *</h6>
          </div>
          <div class="col-4"><br>
            <input  name="title" id="title" @if($webstyle) @if($webstyle->title !='') value="{{$webstyle->title}}"  @endif @endif required class="form-control input-border">
          </div>
        </div><br>
        <div class="row">
          <div class="col-4"><br>
            <h6 style="float:right">Admin Text Color *</h6>
          </div>
          <div class="col-4"><br>
            <input type="color" name="admin_text_color" id="admin_text_color" @if($webstyle) @if($webstyle->admin_text_color !='') value="{{$webstyle->admin_text_color}}"  @endif @endif required class="form-control input-border">
          </div>
        </div><br>
        <div class="row">
          <div class="col-4"><br>
            <h6 style="float:right">Admin Background Color *</h6>
          </div>
          <div class="col-4"><br>
            <input type="color" name="admin_background" id="admin_background" @if($webstyle) @if($webstyle->admin_background !='') value="{{$webstyle->admin_background}}"  @endif @endif required class="form-control input-border">
          </div>
        </div><br>
        <button type="submit" id="jobsubmit" class="btn btn-default generalsetting_admin">Submit</button><hr>
        {{-- <button type="button" id="submit" class="btn btn-default generalsetting_admin" >Submit</button><hr> --}}
        </div>
      </form>
    </center>
    {{-- <button type="button" class="btn btn-default generalsetting_admin edit">Edit</button>          --}}
  </div>
<script type="text/javascript">
$(document).ready(function(){
    // $('.hide-btn').hide();
  $("#jobsubmit").click(function(event){
    var file = $('#title').val();
    var admin_text_color = $('#admin_text_color').val();
    var admin_background = $('#admin_background').val();
    if(file == ''){
        swal("Failed", "Please Input Title", "error");
    }
    if(admin_text_color == ''){
        swal("Failed", "Please Input Admin Text Color", "error");
    }
    if(admin_background == ''){
        swal("Failed", "Please Input Background Color", "error");
    }
    else
    {
    var form_data = new FormData(document.getElementById("websiteform"));
      event.preventDefault();
      $('#jobsubmit').html('Please Wait...');
      $("#jobsubmit").attr("disabled", true);
      $.ajax({
       url:"/admin/general-setting/webstyle",
       // url:"/admin/general-setting/logo",
       method:"POST",
       data: form_data,
       contentType: false,
       cache: false,
       processData: false,
       success:function(response)
       {
        $("#jobsubmit"). attr("disabled", false);
        $('#jobsubmit').html('Submit');
        $('#title').val(response.data.title);
        $('.site-title').text(response.data.title);
        $('#admin_text_color').val(response.data.admin_text_color);
        $('#admin_background').val(response.data.admin_background);
          // document.getElementById('websiteform').reset(); 
          // $('#logo-img').attr("src", "/uploads/logo/"+response.data.file);
          swal("Sucess", "Record Updated SuccesFull", "success");
       }
      });
    }
  });
});

</script>  
{{-- <script type="text/javascript">
$(document).ready(function(){
    // $('.hide-btn').hide();
  $("#jobsubmit").click(function(event){
    var form_data = new FormData(document.getElementById("websiteform"));
    var file = $('#file').val();
    if(file == ''){
        swal("Failed", "Please Upload File", "error");
    }
    else
    {
      event.preventDefault();
      $('#jobsubmit').html('Please Wait...');
      $("#jobsubmit").attr("disabled", true);
      $.ajax({
       url:"/admin/general-setting/logo",
       method:"POST",
       data: form_data,
       contentType: false,
       cache: false,
       processData: false,
       success:function(response)
       {
        $("#jobsubmit"). attr("disabled", false);
        $('#jobsubmit').html('Submit');
          document.getElementById('websiteform').reset(); 
          $('#logo-img').attr("src", "/uploads/logo/"+response.data.file);
          swal("Sucess", "Logo Upload SuccesFull", "success");
       }
      });
    }
  });
});

</script> --}}
@endsection