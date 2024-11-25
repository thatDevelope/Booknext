@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hotel</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Featured Properties Table</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Property Name</th>
                                    <th>Location</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($featuredProperties as $property)
                                <tr>
                                    <td>{{ $property->name }}</td>
                                    <td>{{ $property->location }}</td>
                                    <td>{{ $property->amount }}</td>
                                    <td>{{ $property->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info change-status" data-id="{{ $property->id }}">
                                            <i class="fas fa-eye">Activate</i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Custom Pagination Controls -->
                  

                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="statusModalLabel">Change Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to change the status of this property to Active?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-primary" id="confirmStatusChange1">Yes, Change Status</button>
      </div>
    </div>
  </div>
</div>



<script>
    $(document).ready(function() {
        let propertyId;

        $('.change-status').on('click', function() {
            propertyId = $(this).data('id');
            $('#statusModal').modal('show');
        });

        $('#confirmStatusChange1').on('click', function() {
            $.ajax({
                url: '/admin/change-venue/' + propertyId,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: 1 // Changing status to active
                },
                success: function(response) {
                    window.location.reload(); // Reload the page after status is updated
                },
                error: function(xhr) {
                    console.log(xhr.responseText); // Handle error
                }
            });
        });
    });




    $(document).ready(function() {
    // Manually close the modal when the cancel button or close button is clicked
    $('#statusModal .btn-secondary').on('click', function() {
        $('#statusModal').modal('hide');
    });

    $('#statusModal .btn-close').on('click', function() {
        $('#statusModal').modal('hide');
    });
});


$(document).ready(function() {
    // Handle the "X" close button click
    $('#statusModal .close').on('click', function() {
        $('#statusModal').modal('hide');
    });
});

</script>


@endsection



<!-- Add this in the <head> or just before the closing </body> tag -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


