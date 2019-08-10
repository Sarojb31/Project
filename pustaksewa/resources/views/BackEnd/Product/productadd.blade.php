@extends('layouts.app')


@section('page_title')
    Product Add
@endsection

@section('pagetitle')
    Products Add
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('public/assets/plugins/bower_components/dropify/dist/css/dropify.min.css')}}">
@endsection

@section('button')
    <a href="{{route('admin.product')}}" class="btn btn-primary"><i class="fa fa-list"> Product List</i></a>

@endsection

@section('content')
    <div class="row">
        <div class="white-box">
            <form class="form-horizontal" enctype="multipart/form-data" action="{{route('admin.product.add')}}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Book Name</label>
                            <input type="text" class="form-control" name="title" placeholder="Book Name" value="{{old('title')}}">
                        </div>
                    </div>

                   

                    <div class="col-md-3 col-md-offset-1">
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter Product Price" value="{{old('price')}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Quantity</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter Product Quantity" value="{{old('title')}}">
                        </div>
                    </div>

                    <div class="col-md-3 col-md-offset-1">
                        <div class="form-group">
                            <label class="control-label">Discount</label>
                            <input type="number" class="form-control" name="discount" placeholder="Enter Product Discount" value="{{old('brand')}}">
                        </div>
                    </div>

                    
                
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="" class="control-label">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" ></textarea>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Category</label>
                            <select name="category" id="parent_category" class="form-control">
                                <option value="0" selected>---Select Any One Category---</option>
                                @foreach($category as $value)
                                    <option value="{{$value->id}}">{{$value->category_title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                   <!--  <div class="col-md-4 col-md-offset-2" id="show_sub_category" style="display: none;">
                        <div class="form-group">
                            <label for="" class="control-label">Sub Category</label>
                            <select name="sub_category" id="sub_category" class="form-control">
                                <option value=""></option>

                            </select>
                        </div>
                    </div>
                </div>
 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="input-file-now" class="col-md-12">Product Image</label>
                            <input type="file" name="product_image" id="input-file-now" class="dropify"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="input-file-now" class="col-md-12">Other Image</label>
                            <input type="file" name="other_images[]" multiple>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <input type="submit" value="Add Category" class="btn btn-success">
                </div>


            </form>
        </div>
    </div>

@endsection

<!-- @section('scripts')
    <script src="{{asset('public/assets/plugins/bower_components/dropify/dist/js/dropify.min.js')}}"></script>
    {{--<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>--}}
    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'description' );

        $('.dropify').dropify();



        // $('#parent_category').change(function(){
        //     let id = $('#parent_category').val();
        //     if(id != 0){
        //         //retrieve data by id through ajax.
        //         $.ajax({
        //             type: "POST",
        //             url: "{{ route('admin.category.get-sub-category-by-id') }}",
        //             headers: {
        //                 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        //             },
        //             data: "id=" + id,
        //             success: function (msg) {
        //                 console.log(msg);
        //                 var data = $.parseJSON(msg);

        //                 if(data == null){
        //                     $('#show_sub_category').hide();
        //                 }
        //                 else{
        //                     var option1='';
        //                     $.each(data,function(key,value){
        //                         option1+='<option value="'+value['id']+'" >'+value['title']+'</option>'
        //                     });
        //                     $('#sub_category').children().remove();
        //                     $("#sub_category").append(option1);
        //                     $('#show_sub_category').show();


        //                 }
                        // alert(msg['category']);
                        // if(msg['category'] == null){
                        //     alert('no sub child')
                        // }
                        // else{
                        //     alert('has sub child')
                        // }

                        // alert(msg);

                    }
                });
            }
        })
    </script>
@endsection -->