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
      <div class="row">
        <div class="col-6"><br>
          <h5 style="float:right">Current Logo:</h5>
        </div>
        <div class="col-3"><br>
          <img style="float:left" src="/uploads/logo/{{ ($logo) ? $logo->file : null}}" id="logo-img" width="100" alt="MLS">
        </div>
      </div><br>
      <div class="row">
        <div class="col-6"> <p style="float:right">Set New Logo</p></div>
          <form action="" id="logoform" method="POST" class="form-inline" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group hide-btn">
              <label class="sr-only" for="">label</label>
              <input style="float:left" required="" type="file" name="file" class="form-control input-border" id="file" placeholder="Input field">
            </div> 
          </div><br>
          <button type="submit" id="jobsubmit" class="btn btn-default generalsetting_admin">Submit</button><hr>
        </form>
      </div>
    </center>
    {{-- <button type="button" class="btn btn-default generalsetting_admin edit">Edit</button>          --}}
  </div>
  
<script type="text/javascript">
$(document).ready(function(){
    // $('.hide-btn').hide();
  $("#jobsubmit").click(function(event){
    var form_data = new FormData(document.getElementById("logoform"));
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
          document.getElementById('logoform').reset(); 
          $('#logo-img').attr("src", "/uploads/logo/"+response.data.file);
          swal("Sucess", "Logo Upload SuccesFull", "success");
       }
      });
    }
  });
});

</script>
@endsection