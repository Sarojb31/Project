@extends('BackEnd.admin')


@section('content')
<div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    	<a href="">
                        <div class="white-box">
                            <h3 class="box-title">USERS</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-people text-info"></i></li>
                                <li class="text-right"><span class="counter">{{$counterU}}</span></li>
                            </ul>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    	<a href="#">
                        <div class="white-box">
                            <h3 class="box-title">Boooks</h3>
                            <ul class="list-inline two-part">
                                <li><i class="fa fa-book text-purple"></i></li>
                                <li class="text-right"><span class="counter">{{$counterP}}</span></li>
                            </ul>
                        </div>
                    </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    	<a href="">
                        <div class="white-box">
                            <h3 class="box-title">Orders</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-folder-alt text-danger"></i></li>
                                <li class="text-right"><span class="">311</span></li>
                            </ul>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    	<a href="">
                        <div class="white-box">
                            <h3 class="box-title">Donations</h3>
                            <ul class="list-inline two-part">
                                <li><i class="ti-wallet text-success"></i></li>
                                <li class="text-right"><span class="">117</span></li>
                            </ul>
                        </div>
                        </a>
                    </div>
                </div>

@endsection