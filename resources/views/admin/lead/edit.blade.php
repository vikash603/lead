 
@extends('admin.layout.app')


@section('content')


 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Form Validation</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Validation
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                

                <!-- Multiple Rules Validation start -->
                <section class="multiple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Leads Form</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">


                                    	@foreach($data as $d)
                                        <form class="form-horizontal" method="post" action="{{url('/')}}/update" novalidate>
                                            @csrf
                                            <input type="hidden" value="{{$d->id}}" name="id">


                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="name" id="name" value="{{$d->name}}" class="form-control" placeholder="Your Name" required data-validation-required-message="This name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="email" name="email" id="email" value="{{$d->email}}" class="form-control" placeholder="Your Email" required data-validation-required-message="The email field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="phone" id="phone" value="{{$d->phone}}" class="form-control" placeholder="Your phone" required data-validation-required-message="This phone field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="description" id="description" value="{{$d->description}}" class="form-control" placeholder="Your description" required data-validation-required-message="The description field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="source" id="source" value="{{$d->source}}" class="form-control" placeholder="Your source" required data-validation-required-message="This source field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="cars">Choose a status:</label>

<select name="status" id="status" >
  <option value="" required>Select</option>
  <option value="0">new</option>
  <option value="1">accepted</option>
  <option value="2">completed</option>
  <option value="3">rejected</option>
  <option value="4">invalid</option>
</select>
                                                </div>
                                               
                                                
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </form>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Multiple Rule Validation end -->

                

            </div>
        </div>
    </div>
    <!-- END: Content-->

     @endsection