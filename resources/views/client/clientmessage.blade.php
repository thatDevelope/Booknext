@extends('client.client_dashboard')
@section('admin2')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"></a></li>
            <li class="breadcrumb-item active" aria-current="page">client message</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Client Message</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Property Type</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Created_at</th>
                                    
                                    <!-- <th>Date of Upload</th>
                                    <th>Time of Upload</th>  -->
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($emails as $email)
                                <tr>
                                    <td>{{ $email->property_type }}</td>
                                    <td>{{ $email->name }}</td>
                                    <td>{{ $email->email }}</td>
                                    <td>{{ $email->phone }}</td>
                                    <td>{{ $email->message }}</td>
                                    <td>{{ $email->created_at->format('M d, Y') }}</td>
                                    
                                    <td>
                                    
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Custom Pagination Controls -->
                  

                        <div class="dataTables_paginate">
                            <ul class="pagination">
                              

                             
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
