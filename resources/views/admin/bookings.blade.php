@extends('admin.layouts.app')

@section('panel')
<div class="row">

    <div class="col-lg-12">
        <div class="card b-radius--10">
            <div class="card-body p-0">
                <div class="table-responsive--sm table-responsive">
                    <table class="table table--light style--two">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Product</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @forelse($bookings as $row)
                            <tr>
                                <td data-label="User Name">
                                    {{ $row->name }}
                                </td>
                                <td data-label="User Email">
                                    {{ $row->email }}
                                </td>
                                <td data-label="Product Name">{{ $row->product->name }}</td>
                                <td data-label="Category Name">{{ ($row->status) ? 'Read': 'Unread' }}</td>
                                <td data-label="Action">
                                    @if($row->status === 0)
                                    <a href="#" id="mark-product" data-id="{{ $row->id }}" class="icon-btn bg--7" data-toggle="tooltip" title="Mark As Read"><i class="fas fa-eye"></i></a>
                                    @else
                                    <a href="#" id="unmark-product" data-id="{{ $row->id }}" class="icon-btn bg--7" data-toggle="tooltip" title="Mark As Unread"><i class="fas fa-eye-slash"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-muted text-center" colspan="100%">No bookings found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-4">
                {{ $bookings->links('admin.partials.paginate') }}
            </div>
        </div>
    </div>
</div>
@endsection
@push('breadcrumb-plugins')
<a href="{{ route('admin.dashboard') }}" class="icon-btn"><i class="fa fa-home"></i> Dashboard</a> 
@endpush

@push('style')
<style>
table .user .thumb, table .user .thumb img {
    width: 100px;
    height: 100px;
}
</style>
@endpush

@push('script')
<script>
  $(document).ready(function(){
      jQuery('body').on('click', '#mark-product', function(e){
          e.preventDefault();
          var id = $(this).attr('data-id');
          var button = $(this);
          jQuery.ajax({
              url: `/api/admin/mark-product/`,
              dataType: 'JSON',
              type: 'POST',
              data: {id},

              success:function(data){

                  if(data['success']){
                      notify(data['message']);
                    window.location.reload();
                  }else{
                  errorMessage(data['message']);
                  
                  }
              }
          });

      })
  })

  $(document).ready(function(){
      jQuery('body').on('click', '#unmark-product', function(e){
          e.preventDefault();
          var id = $(this).attr('data-id');
          jQuery.ajax({
              url: `/api/admin/unmark-product/`,
              dataType: 'JSON',
              type: 'POST',
              data: {id},

              success:function(data){
           
                  if(data['success']){
                      notify(data['message']);
                      window.location.reload();
                  }else{
                  errorMessage(data['message']);
                  }
              }
          });

      })
  })
  
</script>
@endpush