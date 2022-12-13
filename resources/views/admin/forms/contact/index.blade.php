@extends('admin.layouts.master')
@section('page-title')
    Manage Contact Data
@endsection
@section('mainContent')

      <div class="padding">
        <div class="box">
          <div class="box-header">
            <h3>Contact Data</h3>
            <table id="example2" class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contacts as $key => $row)
                  <tr>
                  <td>{{$key + 1}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->phone}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->subject}}</td>
                  <td>{{$row->description}}</td>
                  <td style="display: flex;">
                    <form method="post" action="{{url('admin/contact/'.$row->id)}}">
                      @csrf
                      @method('delete')
                    <button type="submit" onclick="return confirm('Are You Sure Want To Delete This..??')" class="btn btn-default generalsetting_admin"><i class="fa fa-trash "></i></button>
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
@endsection