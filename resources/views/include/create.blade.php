@extends('include.main')
@section('content')
    <div class="container">
        <div class="row" style="margin:50px;">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h2 class="text-light text-center"><b>Create New Student</b></h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('include')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-7">
                                    <label class="control-label">Name</label><br>
                                    <input type="text" name="name" id="name" class="form-control"><br>
                                </div>
                                <div class="col-md-5">
                                    <label class="control-label">Roll</label><br>
                                    <input type="text" name="roll" id="roll" class="form-control"><br>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Email</label><br>
                                    <input type="email" name="email" id="email" class="form-control"><br>

                                    {{-- <a href="" type="submit" class="btn btn-dark">save <i class="fa-solid fa-floppy-disk"></i></a> --}}
                                    <input type="submit" value="save"  class="btn btn-md btn-dark">
                                </div>
                            </div>

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
