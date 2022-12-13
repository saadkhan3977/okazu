@extends('admin.layouts.master')
@section('page-title')
    Manage Emails
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
          <div class="box-header">
            <h3>Manage Emails</h3>
                  <hr>
            <a href="{{route('emails.create')}}" class="btn btn-icon generalsetting_admin">
                    <i class="fa fa-plus"></i>
                  </a>
          </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t">
        <thead>
          <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Manage</th>
          </tr>
        </thead>
        <tbody>
          @if($data)
          <?php $id=1 ?>
          @foreach($data as $row)
          <tr>
            <td>{{$id++}}</td>
            <td>{{$row->email}}</td>
            <td style="display: flex;">
              <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" href="{{route('emails.show',$row->id)}}"><i class="fa fa-edit "></i></a>
              <form method="post" action="{{route('emails.destroy',$row->id)}}">
                @csrf
                @method('delete')
              <button type="submit" onclick="return confirm('Are You Sure Want To Delete This..??')" class="btn btn-default generalsetting_admin"><i class="fa fa-trash "></i></button>
              </form>
            </td>
          </tr>
          @endforeach
          @endif

        </tbody>
      </table>
    </div>
  </div>
      </div>
    </div>
  </div>
@endsection