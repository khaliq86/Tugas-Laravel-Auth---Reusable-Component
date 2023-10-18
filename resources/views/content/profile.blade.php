@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')

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
            <button class="btn btn-secondary"> 
                <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" />
            </button> 
            <span class="name mt-3">{{ucfirst($user->name)}}</span> 
            <span class="idd">{{$user->email}}</span> 
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                <span class="idd1">Oxc4c16a645_b21a</span> 
                <span><i class="fa fa-copy"></i></span> 
            </div> 
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
                <span class="number">1069 
                    <span class="follow">Followers</span>
                </span> 
            </div> 
            <div class=" d-flex mt-2"> 
                <button class="btn1 btn-dark">Edit Profile</button> 
            </div> 
            <div class="text mt-3"> 
                <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> 
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