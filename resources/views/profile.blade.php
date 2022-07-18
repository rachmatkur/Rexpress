@extends('master')

@section('title', 'profile')

@section('content')
    <div class="container-fluid bg-light m-0 p-0 position-relative">
        <img src="/gambar/banner.jpg" alt="" class="background">
        <div class="contentContainer">
            <div class="container d-flex justify-content-center my-3">
                <div class="rounded-3 w-75 border shadow row p-3">
                    <div class="flex-column align-items-center col-md-4">
                        <img src="gambar/egg.png" alt="" class="rounded-circle border border shadow mb-3 img-fluid">
                        <h2 class="m-0">Mr. Habbla</h2>
                        <p>restaurant</p>
                    </div>
                    <div class="col-md-8 position-relative">
                        <p>Joan of Arc (French: Jeanne d'Arc pronounced [ʒan daʁk]; c. 1412 – 30 May 1431) is considered a
                            heroine of France for her role in the siege of Orléans and the coronation of Charles VII of
                            France during the Hundred Years' War against England. After successfully leading several French
                            military actions, she was captured, handed over to English authorities, convicted as a heretic,
                            and burnt at the stake in 1431.</p>
                        <p>ADDRESS: Jakarta</p>
                        <p class="mb-5">PHONE NUMBER: Jakarta</p>
                        <a href="" class="btn btn-dark w-50"
                            style="position: absolute; margin-left: auto;
                            margin-right: auto;
                            left: 0;
                            right: 0;
                            text-align: center;
                            bottom: 1%;">Edit
                            Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
