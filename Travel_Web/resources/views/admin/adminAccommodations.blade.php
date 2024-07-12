@extends('layouts.adminNav')

@section('content')
    <section class="accommodations-section py-5">
        <h2 class="text-center">Accommodations</h2>
        <div class="container">
            <div class="row justify-content-center">
                @foreach($accommodations as $acc)
                    <div class="col-md-4 d-flex justify-content-center mb-4">
                        <div class="card accommodation-card">
                            <img src="{{ asset('image/' . $acc->image) }}" class="card-img-top" alt="{{ $acc->name }}">
                            <div class="rating-badge">
                                <span class="badge badge-dark"><i class="fas fa-star"></i> 4.7 (283)</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $acc->name}}</h5>
                                <h5 class="card-title">{{ $acc->location }}</h5>
                                <p class="card-price">{{ $acc->price }} Rs. / Per Night</p>
                                <div class="d-flex justify-content-between mt-3">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#updateModal{{ $acc->id }}">
                                        <i class="fas fa-edit"></i> Update
                                    </button>
                                    <form action="{{ route('accommodations.destroy', $acc->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this accommodation?');">
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
                    <div class="modal fade" id="updateModal{{ $acc->id }}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel{{ $acc->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateModalLabel{{ $acc->id }}">Update Accommodation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('updateAccommodations', $acc->id) }}" method="POST" enctype="multipart/form-data">
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
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $acc->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control" id="price" name="price" value="{{ $acc->price }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <input type="text" class="form-control" id="price" name="location" value="{{ $acc->location }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control-file" id="image" name="image">
                                            <small class="form-text text-muted">Leave empty to keep the current image.</small>
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
