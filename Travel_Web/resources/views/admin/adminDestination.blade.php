@extends('layouts.adminNav')

@section('content')

    <div class="container mt-5">
        <div class="row position-relative mb-4">
            <div class="col-12 text-center">
                <h2 class="mb-0">Destinations</h2>
            </div>
            <div class="position-absolute" style="right: 0;">
                <button class="btn btn-dark custom-button d-flex align-items-center px-3 py-2"
                        onclick="window.location.href='{{ route('addDestination') }}'">
                    <span class="me-2 px-2">Add New</span>
                    <span class="icon-container d-flex align-items-center justify-content-center">
        <i class="fas fa-plus"></i>
    </span>
                </button>
            </div>
        </div>
    </div>

    <section class="destinations-section py-4">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($destinations as $destination)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('image/' . $destination->image) }}"
                                 class="card-img-top"
                                 alt="{{ $destination->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $destination->title }}</h5>
                                <p class="card-text">{{ $destination->description }}</p>
                                <div class="d-flex justify-content-between">
                                    <!-- Update Button -->
                                    <button type="button" class="btn btn-primary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#updateModal{{ $destination->id }}">
                                        <i class="fas fa-edit"></i> Update
                                    </button>
                                    <form action="{{ route('destination.destroy', $destination->id) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Update Modal -->
                    <div class="modal fade" id="updateModal{{ $destination->id }}" tabindex="-1" role="dialog"
                         aria-labelledby="updateModalLabel{{ $destination->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateModalLabel{{ $destination->id }}">Update
                                        Destination</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('destination.update', $destination->id) }}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        @if($errors->any())
                                            <div class="alert alert-danger" role="alert">
                                                <ul class="mb-0">
                                                    @foreach($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                   value="{{ $destination->title }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="description"
                                                      required>{{ $destination->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" class="form-control-file" id="image" name="image">
                                            <small class="form-text text-muted">Leave empty to keep the current
                                                image.</small>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Update Modal -->
                @endforeach
            </div>
        </div>
    </section>



    <!-- Include Bootstrap JS and Popper.js for Bootstrap 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
