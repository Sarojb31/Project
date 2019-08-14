@extends('BackEnd.admin')

@section('css')
    <link href="{{ asset('public/BackEnd_assets/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('title')
Book List
@endsection

@section('page_heading')
    <h3>LIST OF BOOKS AVAILABLE</h3>
@endsection


@section('button')
    <a href="{{route('admin.product.add')}}" class="btn btn-primary"><i class="fa fa-plus">Add Book</i></a>

@endsection

@section('content')

<div class="row ">
        <div class="white-box">
            <table class="table table-bordered  " id="user-datatable" title="PRODUCT TABLE">
                <thead>
                {{--<tr>--}}
                <th>S.N.</th>
                <th>Title</th>
                <th>Summary</th>
                <th>Added By</th>
                <th>Product Image</th>
                <th>Action</th>
                {{--</tr>--}}
                </thead>
                
                <tbody>
                @foreach($product as $value)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$value->product_name}}</td>
                    <td>{{$value->description}}</td>
                    <td>{{$value->added_by}}</td>
                    <td>
                            @if($value->product_image == null)
                                <img src="{{asset('public/image_upload/image_not_found.jpg')}}" alt="" style="max-width: 100px;" class="img img-responsive">
                            @else
                                <img src="{{asset('public/storage/'.$value->product_image)}}" alt="" style="max-width: 100px;" class="img img-responsive">
                            @endif
                        </td>
                        <td>
                            <a  href="{{route('admin.edit-product',$value->id)}}" >Edit</a>
                            ||<a  href="{{route('admin.delete-product',$value->id)}}"  class="" data-toggle="modal"  data-id="{{$value->id}}" data-title="{{$value->title}}">Delete</a>
                        </td>
                </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
</div>
              

@endsection