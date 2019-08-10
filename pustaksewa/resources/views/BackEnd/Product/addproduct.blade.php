@section('content')
sad

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
@endsection
