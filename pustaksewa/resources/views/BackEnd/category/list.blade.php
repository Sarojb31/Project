@extends('BackEnd.admin')

@section('css')
    <link href="{{ asset('public/BackEnd_assets/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('title')
Category List
@endsection

@section('page_heading')
    <h3>Category List</h3>
@endsection

@section('button')
    <a href="{{route('admin.category.add')}}" class="btn btn-primary"><i class="fa fa-plus"> Category Add</i></a>

@endsection

@section('content')

    <div class="row ">
        <div class="white-box">
            <table class="table table-bordered  " id="user-datatable">
                <thead>
                {{--<tr>--}}
                <th>S.N.</th>
                <th>Title</th>
                <th>Summary</th>
                <th>Added By</th>
                <th>Category Image</th>
                <th>Action</th>
                {{--</tr>--}}
                </thead>

                <tbody>
                @foreach($category as $value)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$value->category_title}}</td>
                       <td>{{$value->category_summary}}</td>
                        <td>{{$value->user->name}}</td>
                        <td>
                            @if($value->category_image == null)
                                <img src="{{asset('public/image_upload/image_not_found.jpg')}}" alt="" style="max-width: 100px;" class="img img-responsive">
                            @else
                                <img src="{{asset('public/storage/'.$value->category_image)}}" alt="" style="max-width: 100px;" class="img img-responsive">
                            @endif
                        </td>
                        <td>
                            <a  href="{{route('admin.edit-category',$value->id)}}" >Edit</a>
                            ||<a  href="#deleteUser"  class="" data-toggle="modal"  data-id="{{$value->id}}" data-title="{{$value->title}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

@endsection


@section('scripts')
    <script src="{{ asset('public/assets/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>


    <script>
        $(document).ready(function() {
            $('#user-datatable').DataTable();
        });



        $('#deleteUser').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id');
            var title = button.data('title');
            // var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#id').val(id);
            modal.find('.name').text(title);
        })
    </script>
@endsection