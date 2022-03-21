@extends('admin.layout.app')


@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Lead</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Lead
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
            
                <!-- Basic Tables end -->

                <!--  Inverse table start -->
                <div class="row" id="table-inverse">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lead</h4>
                            </div>
                            <div class="card-content">
                                
                                <div class="table-responsive">
                                    <table class="table  mytable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Description</th>
                                                <th>Source</th>
                                                 <th>Status</th>
                                                 <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                    </table>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inverse table end -->


            </div>
        </div>
    </div>
    <!-- END: Content-->

    @endsection



    @section('js')

<script>
    

datatablefetch();

function datatablefetch()
{
        var dataTable = $('.mytable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax:{
                url: "{{url('/')}}"
            },
            columns: [
               

                {
                    data:'id',
                    name:'id'
                },

                {
                    data:'name',
                    name:'name'
                },

                  {
                    data:'email',
                    name:'email'
                },

                  {
                    data:'phone',
                    name:'phone'
                },

                 {
                    data:'description',
                    name:'description'
                },

                 {
                    data:'source',
                    name:'source'
                },



                { sortable: false, "render": function(data, type, full, meta) {
                var status = full.status
                if(status==1)
                {
                  return '<span class="badge badge-pill badge-success" style="margin: 5px;">Accepted</span>';
                }
                else if(status==0){
                  return '<span class="badge badge-pill badge-danger" style="margin: 5px;">New</span>';
                }
                else if(status==2){
                  return '<span class="badge badge-pill badge-danger" style="margin: 5px;">Completed</span>';
                }
                else if(status==3){
                  return '<span class="badge badge-pill badge-danger" style="margin: 5px;">Rejected</span>';
                }
                else if(status==4){
                  return '<span class="badge badge-pill badge-danger" style="margin: 5px;">Invalid</span>';
                }
              }
            },

              { sortable: false, "render": function(data, type, full, meta) {
                                
         return '<a class="btn   btn-success" href="<?php echo url('/');?>/edit/'+full.id+'" style="margin: 5px;">Edit</a><a class="btn btn-danger" href="<?php echo url('/');?>/delete/'+full.id+'" style="margin: 5px;">Delete</a>';

               
              }

            },



             

                 
               
            ]
        });
}
</script>



        @endsection