@extends('include.main')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Student</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('include/' .$students->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$students->id}}" />
                            <label class="control-label">Name</label><br>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $students->name }}"><br>

                            <label class="control-label">Roll</label><br>
                            <input type="text" name="roll" id="roll" class="form-control" value="{{ $students->roll }}"><br>

                            <label class="control-label">Email</label><br>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $students->email }}"><br>

                            <input type="submit" value="update" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
