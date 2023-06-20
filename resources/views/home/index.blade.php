
@extends('home.main')   
@section('home')
<!-- ***** Header Area End ***** -->
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Pilih Hari Untuk Melihat Data Yang Piket Rayon</h2>
                                    <p>Jangan Lupa Piket Rayon Ya!! saat jam pulang sekolah</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="white-button first-button scroll-to-section">
                                        <a
                                            href="https://www.quipper.com/id/blog/tips-trick/school-life/piket-kelas/#Pengertian_Piket_Kelas">Pengertian
                                            Piket <i class="fab fa-gitkraken"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group-6">
                        <hr>
                        <hr>
                        <hr>
                        <div class="pspj-ruang">PS./PJ RUANG.
                        <P class="gurupj">{{Auth::user()->rayon}} | {{Auth::user()->namapj}} | {{Auth::user()->ruang}}</P>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{asset('homepage/assets/images/img-1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                </div>
            </div>
            @foreach($haris as $hari)
            <div class="col-lg col-sm-6 col-xs-12">
                <div class="item">
                    <h4>{{$hari->hari}}</h4>
                    <div class="thumb">
                        <a href="{{route('detil.hari',$hari->hari)}}"><img src="{{asset('homepage/assets/images/senin.png')}}" alt=""></a>
                    </div>
                </div> 
            </div>
            @endforeach
        </div>
    </div>
</div>

<!--percobaan-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{Auth::user()->name}}
                    {{Auth::user()->nis}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save   changes</button>
                </div>
            </div>
        </div>
    </div>

    @endsection