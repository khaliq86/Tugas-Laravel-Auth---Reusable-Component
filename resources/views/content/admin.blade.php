@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="d-flex flex-wrap justify-content-start">
                @foreach ($dataUser as $key => $item)
                    @if($item->role == 'user')
                            <div style="max-width: 200px;" class="m-2"> 
                                <div class="card p-4"> 
                                    <div class=" image d-flex flex-column justify-content-center align-items-center"> 
                                        @if($item->image == null)
                                        <a href="{{asset('storage/images/default.png')}}" class="btn btn-secondary" id="profile"> 
                                            <img src="{{asset('storage/images/default.png')}}" style="width: 100px; "/>
                                        </a>
                                        @else
                                        <a href="{{asset('storage/images/'. $item->image)}}" id="profile"> 
                                            <img src="{{asset('storage/images/'. $item->image)}}" style="width: 64px; object-fit: cover; "/>
                                        </a> 
                                        @endif
                                        <span class="name mt-3">{{ucfirst($item->name)}}</span> 
                                        <span class="idd">{{$item->email}}</span>   
                                        <div class=" d-flex mt-2"> 
                                            <form action="{{route('userDelete', ['id' => $item->id])}}" method="GET">
                                            <button class="btn btn-danger" type="submit" onclick="deleteUser()">
                                                <span class="edit">Delete User</span>
                                            </button>
                                            </form>
                                        </div>  
                                            <div class=" px-2 rounded mt-4 date "> <span class="join">Joined {{$newFormatDates[$key]}}</span> </div> 
                                    </div> </div>
                            </div>
                            @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')