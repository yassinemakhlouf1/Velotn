@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit Event</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('events.index_backend') }}" enctype="multipart/form-data">
                                Back</a>
                        </div>
                    </div>
                </div>
                @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('events.update',$event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name of event:</strong>
                                <input type="text" name="name" value="{{ $event->name }}" class="form-control"
                                       placeholder="event model">
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Event Description:</strong>
                                <input type="text" name="description" class="form-control" placeholder="description"
                                       value="{{ $event->description }}">
                                @error('description')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Location:</strong>
                                <input type="text" name="location" class="form-control" placeholder="location"
                                       value="{{ $event->location }}">
                                @error('location')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date:</strong>
                                <input type="date" name="date"  class="form-control"
                                       placeholder="date" value="{{ $event->date }}" >
                                @error('date')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary ml-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

