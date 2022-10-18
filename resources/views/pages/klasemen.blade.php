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
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tim</th>
                                    <th>Poin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($klasemen as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->tim->nama }}</td>
                                        <td>{{ $item->poin }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('klasemen.store') }}" method="POST">
                            @csrf
                            <div class="row row-sm">
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tim</label>
                                        <select name="id_tim_home" class="form-control">
                                            <option label="Pilih Tim Home"></option>
                                            @foreach ($tim as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Score</label>
                                        <input type="text" class="form-control" name="score_home">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm">
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <select name="id_tim_away" class="form-control">
                                            <option label="Pilih Tim Away"></option>
                                            @foreach ($tim as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="score_away">
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
