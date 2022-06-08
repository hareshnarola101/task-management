@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tasks</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('tasks.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('tasks.table')

                <div class="card-footer clearfix">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('page_scripts')
<script>
    $( "table tbody" ).sortable( {
	update: function( event, ui ) {
    $(this).children().each(function(index) {
			$(this).find('td').last().html(index + 1)
    });
  }
});
    // $(document).ready(function(){


    $('#tasks-table').DataTable();
    // $("#tablecontents").sortable({
    //       items: "tr",
    //       cursor: 'move',
    //       opacity: 0.6,
    //       update: function() {
    //           sendOrderToServer();
    //       }
    //     });

    //     function sendOrderToServer() {
    //       var order = [];
    //       var token = $('meta[name="csrf-token"]').attr('content');
    //       $('tr.row1').each(function(index,element) {
    //         order.push({
    //           id: $(this).attr('data-id'),
    //           position: index+1
    //         });
    //       });

    //       $.ajax({
    //         type: "POST",
    //         dataType: "json",
    //         url: "{{ url('post-sortable') }}",
    //             data: {
    //           order: order,
    //           _token: token
    //         },
    //         success: function(response) {
    //             if (response.status == "success") {
    //               console.log(response);
    //             } else {
    //               console.log(response);
    //             }
    //         }
    //       });
    //     }
    // });
</script>

@endpush
