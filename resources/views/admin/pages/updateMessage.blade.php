@extends('admin.adminDashboard')
@section('title')
    Update
@endsection
@section('mainContent')
    <div class="row">
        <div class="col-10 mx-auto ">
            <div class="card flex-fill">
                <div class="card-header p-5">
                    <form method="POST" action="{{ route('update', ['id' => $data->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 col-11 mx-auto">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $data->name }}"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                            <p class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>

                        <div class="mb-3 col-11 mx-auto">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{ $data->email }}"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                            <p class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>

                        <div class="mb-3 col-11 mx-auto">
                            ` <label for="exampleInputEmail1" class="form-label">Message</label>
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder=" Enter Product Message">{{ $data->message }}</textarea>
                            <p class="text-danger">
                                @error('message')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>

                        <button type="submit" class="btn btn-primary mx-auto col-4 d-grid">Update</button>
                    </form>
                </div>

            </div>
        </div>
    @endsection
