@extends('layouts.app')

@section('title')
Contact Listing
@endsection

@section('header')
<h1 class=""><i class="fa fa-lg fa-fw fa-users"></i>Contacts </h1>
@endsection

@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert success">
        {{ session('status') }}
    </div>
    @endif

    <div class="nav-tabs-cutsom">
        <div class="tab-content">
            <div class="tab-pane active" id="bseda">
                <div class="table-responsive">
                    <table id="bseda-table" class="table table-bordered table-hover dataTable" border="1">
                        <thead>
                            <tr>
                                <th aria-sort="ascending">Name</th>
                                <th>Email</th>
                                <th>Birthday</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td><a href="{{ route('contacts.show', ['contact' => $contact->id]) }}">{{ $contact->name }}</a></td>
                                <td><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                                <td>{{ $contact->birthday }}</a></td>
                                <td><a href="{{ route('contacts.edit', ['contact' => $contact->id]) }}" class="form-btn" data-title="<i class='fa fa-users'></i> Edit Contact"><i class="bi bi-pencil"></i></a>
                                    <a href="{{ route('contacts.destroy', ['contact' => $contact->id]) }}" class="delete-btn"><i class="bi bi-trash"></i></a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <p><a href="{{ route('contacts.create') }}" class="btn btn-primary btn-sm form-btn" data-title="<i class='fa fa-users'></i> Add Contact">Add A Contact</a></p>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // delete an item
        $('.delete-btn').click(function(evt) {
            var url = $(evt.currentTarget).attr('href');
            if (confirm('Are you sure you want to permanently delete this item?')) {
                $.ajax({
                    url: url,
                    method: 'DELETE',
                    data: {
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(resp) {
                        $(evt.currentTarget).closest('tr').remove(); //trash the row this was in
                    },
                    error: function(e) {
                        console.log(e.responseText);
                    }
                });
            }
            evt.preventDefault();
        });
    });

    $(function() {
        $('bseda-table, #bsedc-table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": fale,
            "autoWidth": false,
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "all"]
            ]
        });
    });
</script>
@endsection