@extends('admin.layouts.master')
@section('page-title')
    Manage Favicon
@endsection
@section('mainContent')
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
          <h5 style="float:right">Current Favicon:</h5>
        </div>
        <div class="col-3"><br>
          <img style="float:left" src="/uploads/logo/{{ ($logo) ? $logo->file : null}}" id="logo-img" width="100" alt="MLS">
        </div>
      </div><br>
      <div class="row">
        <div class="col-6"> <p style="float:right">Set New Favicon</p></div>
        <form id="faviconform" method="POST" class="form-inline" role="form" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="sr-only" for="">label</label>
            <input style="float:left" required="" type="file" name="file" class="form-control input-border" required=""id="file"  placeholder="Input field">
          </div>
      </div><br>
          <button type="submit" id="submit" class="btn btn-primary generalsetting_admin" >Submit</button><hr>
        </form>
    </center>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $("#submit").click(function(event){
    var form_data = new FormData(document.getElementById("faviconform"));
    var file = $('#file').val();
    if(file == ''){
        swal("Failed", "Please Upload File", "error");
    }
    else
    {
      event.preventDefault();
      $('#submit').html('Please Wait...');
      $("#submit").attr("disabled", true);
      $.ajax({
        url:"/admin/general-setting/favicon",
        method:"POST",
        data:form_data,
        contentType: false,
        cache: false,
        processData: false,
        success:function(response)
        {
          $("#submit"). attr("disabled", false);
          $('#submit').html('Submit');
          document.getElementById('faviconform').reset(); 
          $('#logo-img').attr("src", "/uploads/logo/"+response.data.file);
          swal("Sucess", "Logo Upload SuccesFull", "success");
        }
      })
    }
  });
});

</script>
@endsection