@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar', ['user' => Auth::user()])
@php
$timestamp = $user->created_at;
$dateTime = new DateTime($timestamp);
$bulan = $dateTime->format('F'); // Mengambil nama bulan
$tahun = $dateTime->format('y'); // Mengambil tahun dalam format dua digit

// Ubah nama bulan ke bahasa Indonesia jika diperlukan
$bulanIndonesia = [
    'January' => 'Januari',
    'February' => 'Februari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'Oktober',
    'November' => 'November',
    'December' => 'Desember'
];

$bulan = $bulanIndonesia[$bulan];

// Format akhir yang diinginkan
$formatAkhir = "$bulan, $tahun"; // Output: "Oktober, 23"
@endphp
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
    <div class="card p-4"> 
        <div class=" image d-flex flex-column justify-content-center align-items-center"> 
            @if($user->image == null)
            <a href="{{asset('storage/images/default.png')}}" class="btn btn-secondary" id="profile"> 
                <img src="{{asset('storage/images/default.png')}}" style="width: 100px; "/>
            </a>
            @else
            <a href="{{asset('storage/images/'. $user->image)}}" class="btn btn-secondary" id="profile"> 
                <img src="{{asset('storage/images/'. $user->image)}}" style="width: 100px;  heigth: 50px; object-fit: cover; "/>
            </a> 
            @endif
            <span class="name mt-3">{{ucfirst($user->name)}}</span> 
            <span class="idd">{{$user->email}}</span>   
            <div class=" d-flex mt-2"> 
                <form action="{{route('editProfile', ['id' => $user->id])}}" method="GET">
                <button class="btn btn-dark" type="submit">
                    <span class="edit">Edit Profile</span>
                </button>
                </form>
            </div> 
                <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> 
                    <span><i class="fa fa-twitter"></i></span> 
                    <span><i class="fa fa-facebook-f"></i></span> 
                    <span><i class="fa fa-instagram"></i></span> 
                    <span><i class="fa fa-linkedin"></i></span> </div> 
                <div class=" px-2 rounded mt-4 date "> <span class="join">Joined {{$formatAkhir}}</span> </div> 
        </div> </div>
</div>
        </div>
    </div>
</div>
@include('layouts.footer')