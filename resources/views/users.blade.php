@extends('layouts.app')
@section('css')
    <!-- CSS only -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" type="text/css" href="../assets/css/jquery.dataTables.css">
@endsection

@section('content')
@include('layouts.partials.modal')
    <div style="margin: 20px !important" class="card">
        <div class="card-body">
            @include('layouts.partials.message')
            <div class="col-4 "><a class="btn btn-primary btn-sm" href="{{ route('users.create') }}">New User</a></div><br><br>
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $i = 1; 
                    @endphp
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Update</a>
                                <button type="submit" data-id="{{ $user->id }}" class="btn btn-danger btn-sm delete-me" data-bs-toggle="modal" data-bs-target="#deleteUser">
                                Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- JavaScript Bundle with Popper -->
    <script src="../assets/js/jquery-3.6.0.min.js" ></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" charset="utf8" src="../assets/js/jquery.dataTables.js"></script>

<script>
    const base_url = {!! json_encode(url('/')) !!}
    $(document).ready( function () {
        $('#table_id').DataTable();
    });  
    
    $(document).ready(function () {
        $(".delete-me").click(function () {
            $("#user_id").val($(this).data('id'));
        });
        $("#proceed").click(function () {
            var id = $("#user_id").val();
            $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: base_url+`/users/${id}/delete`,
                    data:{
                            '_token':$('meta[name="csrf-token"]').attr('content'),
                            '_method':     'DELETE',
                        },
                    dataType: "json",
                    success:function(response){
                    if (response) {
                        console.log('success');
                    }
                    },error:function(error){
                    console.log(error);
                    },
                });
        });
    });
</script>
@endsection
