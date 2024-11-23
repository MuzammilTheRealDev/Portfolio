@extends('admin.adminDashboard')
@section('title')
    User Messages
@endsection
@section('home')
    User Messges
@endsection
@section('mainContent')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($data as $message )
                                        <tbody id="tbody">
                                            <tr>
                                                <th> {{ $message->id}}</th>
                                                <td> {{ $message->name}}</td>
                                                <td> {{ $message->email}}</td>
                                                <td> {{ $message->message}}</td>
                                                <td> {{ $message->created_at}}</td>
                                                <td>
                                                    <a href="{{ route('edit',['id' => $message->id])}}" class="btn btn-primary mx-auto d-grid mb-1">Edit</a>
                                                    <a href="{{ route('delete',['id' => $message->id])}}" class="btn btn-danger mx-auto d-grid">Delete</a>
                                                </td>
                                        </tr>
                                            
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="pagination" style="display: flex; justify-content: center; align-items: center; color: black;">
                                    {{-- {{ $data->links() }} --}}
                                </div>
                            </div>
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection