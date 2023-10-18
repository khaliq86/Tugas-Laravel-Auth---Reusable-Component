<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
                <h1 class="m-0">Dashboard</h1>
                <div class="d-flex justify-content-end">
                   <a href="{{route('create')}}" class="btn btn-sm bg-success"><i class="fas fa-plus fa-lg"></i></a>
                </div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Project Name</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            @if(Auth::user()->role == 'admin')
            <th scope="col">Author</th>
            @endif
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $row = 1;
            @endphp
            @foreach ($projects as $projects)
          <tr>
            <th scope="row">{{$row++}}</th>
            <td>{{$projects->project_name}}</td>
            <td>{{$projects->description}}</td>
            <td>{{$projects->category->category_name}}</td>
            @if(Auth::user()->role == 'admin')
            <td>{{$projects->user->name}}</td>
            @endif
            <td>{{$projects->start_date}}</td>
            <td>{{$projects->end_date}}</td>
            <td>
                @if ($projects->status == "On Progress")
                    <span class="badge badge-success">On Proggress</span>
                @else
                    <span class="badge badge-danger">Inactive</span>
                @endif
            </td>
            <td>
                <a href="{{url('/project/edit/'.$projects->id)}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{url('/project/delete/'.$projects->id)}}" class="btn btn-sm btn-danger">Delete</a>
          </tr>
            @endforeach
        </tbody>
      </table>
      @section('success')
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @endsection
    </div>
</div>
</div>