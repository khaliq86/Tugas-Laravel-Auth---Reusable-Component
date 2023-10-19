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
            <form class="row g-3" method="POST" action="/project/update/{{$projects->id}}">
                @csrf
                <div class="col-md-4">
                <label for="project_name" class="form-label">Project Name</label>
                <input id="project_name" name="project_name" class="form-control" value="{{$projects->project_name}}">
                </div>
                <div class="col-md-8">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$projects->description}}">
                </div>
                <div class="col-md-3 mt-2">
                <label for="id_category" class="form-label">Category</label>
                <select id="id_category" class="form-select form-control" name="id_category">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id}}" {{$category->id == $selectedCategories ? 'selected' : ''}}>{{$category->category_name}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-3 mt-2">
                <label for="id_tag" class="form-label">Tag</label>
                <select id="id_tag" class="form-select form-control" name="id_tag">
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" {{$tag->id == $selectedTags ? 'selected' : ''}}>{{$tag->tag_name}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-3 mt-2">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{$projects->start_date}}">
                </div>
                <div class="col-md-3 mt-2">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="{{$projects->end_date}}">
                </div>  
                <div class="col-md-3 mt-2">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" class="form-select form-control" name="status">
                    <option value="On Progress" {{$projects->status == 'On Progress' ? 'selected' : ''}}>On Progress</option>
                    <option value="Inactive" {{$projects->status == 'Inactive' ? 'selected' : ''}}>Inactive</option>
                    <option value="Done" {{$projects->status == 'Done' ? 'selected' : ''}}>Done</option>
                    </select>
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