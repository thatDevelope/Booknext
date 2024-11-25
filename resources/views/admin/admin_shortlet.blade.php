@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"></a></li>
            <li class="breadcrumb-item active" aria-current="page">Your Registered Shortlet</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Shortlet Table</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Amount</th>
                                    <th>Client Name</th>
                                    <th>Date of Upload</th>
                                    <th>Time of Upload</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shortlets as $shortlet)
                                <tr>
                                    <td>{{ $shortlet->name }}</td>
                                    <td>{{ $shortlet->location }}</td>
                                    <td>{{ $shortlet->amount }}</td>
                                    <td>{{ $shortlet->client_name }}</td>
                                    <td>{{ $shortlet->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $shortlet->created_at->format('H:i:s') }}</td>
                                    <td>
                                     <a href="{{ route('shortlets.edit', $shortlet->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                    <td>
                                       <form action="{{ route('shortlets.destroy', $shortlet->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this venue?');">
                                           @csrf
                                           @method('DELETE')
                                           <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                       </form>
                                     </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Custom Pagination Controls -->
                    <div class="d-flex justify-content-between">
                        <div class="dataTables_info">
                            Showing {{ $shortlets->firstItem() }} to {{ $shortlets->lastItem() }} of {{ $shortlets->total() }} entries
                        </div>

                        <div class="dataTables_paginate">
                            <ul class="pagination">
                                <!-- Previous Page Link -->
                                @if ($shortlets->onFirstPage())
                                    <li class="paginate_button page-item previous disabled" aria-disabled="true"><span class="page-link">Previous</span></li>
                                @else
                                    <li class="paginate_button page-item previous"><a href="{{ $shortlets->previousPageUrl() }}" class="page-link">Previous</a></li>
                                @endif

                                <!-- Pagination Elements -->
                                @foreach ($shortlets->getUrlRange(1, $shortlets->lastPage()) as $page => $url)
                                    @if ($page == $shortlets->currentPage())
                                        <li class="paginate_button page-item active"><span class="page-link">{{ $page }}</span></li>
                                    @else
                                        <li class="paginate_button page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                <!-- Next Page Link -->
                                @if ($shortlets->hasMorePages())
                                    <li class="paginate_button page-item next"><a href="{{ $shortlets->nextPageUrl() }}" class="page-link">Next</a></li>
                                @else
                                    <li class="paginate_button page-item next disabled" aria-disabled="true"><span class="page-link">Next</span></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
