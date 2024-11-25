@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"></a></li>
            <li class="breadcrumb-item active" aria-current="page">Scheduled email</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Scheduled email</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Recipient_email</th>
                                    <th>Created_at</th>
                                    <!-- <th>Date of Upload</th>
                                    <th>Time of Upload</th>  -->
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($emails as $email)
                                <tr>
                                    <td>{{ $email->subject }}</td>
                                    <td>{{ $email->message }}</td>
                                    <td>{{ $email->recipient_email }}</td>
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
