@extends('include.main')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-primary">Student Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Name: {{ $students->name }}</h5>
                        <p class="card-text">Email: {{ $students->roll }}</p>
                        <p class="card-text">Phone: {{ $students->email }}</p>
                        {{-- <p class="card-text">Address: {{ $students->address }}</p> --}}
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
