{{--@extends("layouts.master")--}}
@extends('layouts.user_type.auth')

@section('extra_css')
<style type="text/css">
.card{
    margin-bottom: 1rem;
}
.mr-1{
    margin-right: 0.5em;
}
.fs-icon{
    font-size: 29px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<div class="row">

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <a href="{{url('#')}}" class="row" >
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Open Tickets</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$open_ticket}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="fa-solid fa-comment text-white  fs-icon"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <a href="{{url('#')}}" class="row" >
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Replied Tickets</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$replied_ticket}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="fa-solid fa-comment-dots text-white  fs-icon"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <a href="{{url('#')}}" class="row" >
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Pending Tickets</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$pending_ticket}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="fa-solid fa-comments text-white  fs-icon"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <a href="{{url('#')}}" class="row" >
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Resolved Tickets</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$resolved_ticket}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="fa-solid fa-clipboard-check text-white fs-icon"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <a href="{{url('#')}}" class="row" >
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Closed Tickets</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$closed_ticket}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="fa-solid fa-clipboard-list text-white  fs-icon"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

  <div class="col-md-12">
    <div class="row">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title float-left">
                Support Request
            </h3>
            <a data-bs-toggle="modal"  data-bs-target="#deleteModal" class="btn btn-danger float-right">Delete</a>
        </div> 
      
      <div class="card-body table-responsive table-bordered table-striped">
        <table class="table" id="data_table_ticket">
          <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Ticket ID</th>
                <th>Created By</th>
                <th>Status</th>
                <th>Category</th>
                <th>Subject</th>
                <th>Priority</th>
                <th>Last Updated</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($data as $row)
            <tr>
                <td class="align-middle"><input type="checkbox" class="delete" name="delete" value="{{$row->id}}"></td>
                <td class="align-middle"><a href="{{route('support-ticket.show',$row->ticket_id)}}" class="text-primary">{{$row->ticket_id}}</a></td>
                <td class="align-middle">
                @if ($row->user)
                    {{$row->user->name}}
                 @else
                    Deleted User
                 @endif
                <td class="align-middle">{{$row->status}}</td>
                <td class="align-middle">{{$row->category}}</td>
                <td class="align-middle">{{$row->subject}}</td>
                <td class="align-middle">{{$row->priority}}</td>
                <td class="align-middle">{{date('d M Y H:i A', strtotime($row->updated_at))}}</td>
                <td class="align-middle">
                    <div class="btn-group">
                    @if ($row->user)
                        <a href="{{route('support-ticket.show',$row->ticket_id) }}" class="mr-1"><button type="button" class="btn btn-success"><span aria-hidden="true" class="fa fa-eye"></span></button></a>
                     @endif
                        
                        <a data-id="{{$row->id}}"  data-bs-toggle="modal" data-bs-target="#myModal" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-danger ml-2"><span aria-hidden="true" class="fa fa-trash"></span></button></a>
                    </div>
                    {!! Form::open(['url' => 'dashboard/support-requests/'.$row->ticket_id,'method'=>'DELETE','class'=>'form-horizontal','id'=>'form_'.$row->id]) !!}
                    {!! Form::hidden("id",$row->id) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade"  role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                        aria-label="Close">X
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to Delete ?</p>
            </div>
            <div class="modal-footer">
                @if(Auth::user()->user_type == "Demo")
                <button type="button" class="btn btn-danger ToastrButton">Delete</button>
                @else
                <button id="del_btn" class="btn btn-danger" type="button" data-submit="">Delete</button>
                @endif
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<!-- delete Modal -->
<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                        aria-label="Close">X
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to Delete all Check Record ?</p>
            </div>
            <div class="modal-footer">
                @if(Auth::user()->user_type == "Demo")
                <button type="button" class="btn btn-danger ToastrButton">Delete</button>
                @else
                <form action="{{url('dashboard/multi-delete-support-request')}}" method="post">
                  @csrf
                  <input type="hidden" name="deleted_ids" id="deleted_ids">
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                @endif
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- delete Modal -->
@endsection

@section('script')
<script type="text/javascript">
    $("#del_btn").on("click",function(){
        var id=$(this).data("submit");
        $("#form_"+id).submit();
    });

    $('#myModal').on('show.bs.modal', function(e) {
        var id = e.relatedTarget.dataset.id;
        $("#del_btn").attr("data-submit",id);
    });

    $('.ToastrButton').click(function() {
      toastr.error('This Action Not Available Demo User');
    });

    $('#deleteModal').on('show.bs.modal', function(e) {
      var searchIDs = [];

      $("input:checkbox:checked.delete").map(function(){
        searchIDs.push($(this).val());
      });

      document.getElementById('deleted_ids').value = JSON.stringify(searchIDs);
    });

    var table = $('#data_table_ticket').DataTable({
      "order": [[ 7, 'desc' ]],
     columnDefs: [ { orderable: false, targets: [0] } ],
     // individual column search
     "initComplete": function() {
      table.columns().every( function () {
          var that = this;
          $('input', this.footer()).on('keyup change', function () {
            // console.log($(this).parent().index());
              that.search(this.value).draw();
          });
        });
      }
    });
</script>
@endsection
