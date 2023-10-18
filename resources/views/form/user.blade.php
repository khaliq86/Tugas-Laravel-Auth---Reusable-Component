{{-- Start Header --}}
@include('layouts.header')
{{-- End Header --}}
{{-- Start Navbar --}}
@include('layouts.navbar')
{{-- End Navbar --}}
{{-- Start Sidebar --}}
@include('layouts.sidebar')
{{-- End Sidebar --}}
{{-- Start Content --}}

@php
    $row = 1;
@endphp

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
<div class="card">
<div class="card-body">
            <form class="row g-3" method="POST" action="/profile/update/{{$user->id}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4">
                <label for="name" class="form-label">Name</label>
                <input id="name" name="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="col-md-8">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                </div>
                <div class="col-12 mt-2">
                <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-label form-control">
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
</div>
  @include('layouts.footer')
{{-- End Footer --}}
{{-- Start Script --}}