@extends('include.main')
@section('content')
<div class="container">
    <a href="{{url('include/create')}}" class="btn btn-dark mt-2 mb-1">
        <i class="fa-solid fa-user-plus"></i> add
    </a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-bordered text-center">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">SI</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($students as $item )


                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->roll}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            {{-- <a href="{{url('/'.$item->id)}}" class="btn btn-info btn-sm" title="View Student" aria-hidden="true"><i class="fa fa-eye"></i></a> --}}
                            <a href="{{ url('include/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Student" aria-hidden="true"><i class="fa-solid fa-user-pen"></i></a>
                            <form method="POST" action="{{ url('include/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
