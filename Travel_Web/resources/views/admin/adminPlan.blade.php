@extends('layouts.adminNav')
@section('content')
    <section class="destinations-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($plan as $plan)
                    <div class="col-md-4 d-flex justify-content-center mb-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('image/' . $plan->image) }}" class="card-img-top"
                                 alt="{{ $plan->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $plan->title }}</h5>
                                <p class="card-text">{{ Str::limit($plan->status, 100) }}</p>
                                <p class="card-text">{{ Str::limit($plan->start_date, 100) }}</p>
                                <p class="card-text">{{ Str::limit($plan->end_date, 100) }}</p>
                                <div class="d-flex justify-content-between">
                                    <!-- Update Button -->
                                    <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                                            data-bs-target="#updateModal{{ $plan->id }}">
                                        <i class="fas fa-edit"></i>Update
                                    </button>
                                    <form action="{{ route('plan.destroy', $plan->id) }}" method="POST"
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
                    <div class="modal fade" id="updateModal{{ $plan->id }}" tabindex="-1" role="dialog"
                         aria-labelledby="updateModalLabel{{ $plan->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateModalLabel{{ $plan->id }}">Update
                                        Destination</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('plan.update', $plan->id) }}" method="POST"
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
                                                   value="{{ $plan->title }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="status" class="form-label">Status</label>
                                            <input type="text" class="form-control" id="status" name="status"
                                                      required>{{ $plan->status }}
                                        </div>
                                        <div class="form-group">
                                            <label for="start_date" class="form-label">Start Date</label>
                                            <input type="date" class="form-control" id="start_date" name="start_date"
                                                      required>{{ $plan->start_date }}
                                        </div>
                                        <div class="form-group">
                                            <label for="end_date" class="form-label">End Date</label>
                                            <input type="date" class="form-control" id="end_date" name="end_date"
                                                      required>{{ $plan->end_date }}
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
