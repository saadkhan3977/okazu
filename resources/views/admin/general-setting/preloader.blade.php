@extends('admin.layouts.master')
@section('page-title')
    Manage Preloader
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
    <div class="row m-b">          
      <div class="col-sm-12">
        <div class="box">
          <div class="box-header generalsetting_admin">
            <center><h3>Website Loader</h3></center>
          </div>
          <div class="box-body">
            <center>
              <div class="row">
                <div class="col-6">
                  <p>Current Loader</p>
                </div>
                <div class="col-6">
                  <img id="loader-img" src="/uploads/preloader/{{ ($loader) ? $loader->website_loader : null}}" width="150" alt="">
                  {{-- @else --}}
                  @if(!$loader)
                  EMPTY
                  @endif
                </div>
              </div>
              <form action="" id="preloader-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">  
                  <div class="col-6">
                    <p>Set New Loader</p>
                  </div>
                  <div class="col-6">
                      <input type="file" id="file" class="input-border" required name="website_loader">      
                  </div>
                </div><br>
                <button type="submit" id="submit" class="btn generalsetting_admin">Submit</button>
              </form>
            </center>
          </div>
        </div>
      </div>
<script type="text/javascript">
$(document).ready(function(){
    // $('.hide-btn').hide();
  $("#submit").click(function(event){
    var form_data = new FormData(document.getElementById("preloader-form"));
    var file = $('#file').val();
    if(file == ''){
        swal("Failed", "Please Upload File", "error");
    }
    else
    {
      event.preventDefault();
      $('#submit').html('Please Wait...');
      $("#submit").attr("disabled", true);
      // alert('ads');
      $.ajax({
       url:"/admin/general-setting/preloader/website",
       method:"POST",
       data: form_data,
       contentType: false,
       cache: false,
       processData: false,
       success:function(response)
       {
        $("#submit"). attr("disabled", false);
        $('#submit').html('Submit');
          document.getElementById('preloader-form').reset(); 
          $('#loader-img').attr("src", "/uploads/preloader/"+response.data.website_loader);
          swal("Sucess", "Logo Upload SuccesFull", "success");
       }
      });
    }
  });
});

</script>              

              {{-- <div class="col-sm-6">
                <div class="box">
                  <div class="box-header generalsetting_admin" >
                    <center><h3>Admin Loader</h3></center>
                  </div>
                  <div class="box-body">
                  <center>
                    <div class="row">
                      <div class="col-4">
                        <p>Current Loader</p>
                      </div>
                      <div class="col-2">
                        @if($loader)
                        <img src="/uploads/preloader/{{$loader->admin_loader}}" width="150" alt="">
                        @else
                        EMPTY
                        @endif
                      </div>
                    </div>
                    <form action="/admin/general-setting/preloader/admin" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">  
                        <div class="col-4">
                          <p>Set New Loader</p>
                        </div>
                        <div class="col-2">
                            <input type="file" required name="admin_loader">      
                        </div>
                    </div>
                    <br>
                        <button type="Submit" class="btn generalsetting_admin">Submit</button>
                      </form>
                      </center>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection