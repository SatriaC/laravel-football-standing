@extends('layouts.app')
@section('title', 'Klasemen & Input Hasil Pertandingan')
@section('content')
    <div class="container">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('klasemen.test-store') }}" method="POST">
                            @csrf
                            <div class="row row-sm">
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Panjang Sisi</label>
                                        <input type="text" name="panjang">
                                    </div>
                                </div>
                            </div>
                            <div class="float-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
