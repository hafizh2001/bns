@extends('layouts.master')
@section('content')



<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Arsip surat</h5>
                            <p class="mb-4">
                                Berikut ini adalah surat-surat yang telah terbit dan diarsipkan Klik <span
                                    class="fw-bold">"Lihat"</span> pada kolom aksi untuk menampilkan surat

                            </p>
                            <br>
                            <h3>Arsip Surat >> Lihat</h3>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-4">
                                        Nomor
                                    </p>
                                </div>
                                <div class="col">
                                    : {{$surat->no_surat}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-4">
                                        Kategori
                                    </p>
                                </div>
                                <div class="col">
                                    : {{$surat->kategori}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-4">
                                        Judul
                                    </p>
                                </div>
                                <div class="col">
                                    : {{$surat->judul}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-4">
                                        Waktu Unggah
                                    </p>
                                </div>
                                <div class="col">
                                    : {{$surat->updated_at}}
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- <iframe src="dokumen/{{$surat->file}}" width="100%" height="500px" frameborder="0"></iframe> -->
                    <embed src="{{asset('dokumen/'.$surat->file)}}" width="500" height="375" alt="pdf">
                    <!-- <iframe src="dokumen/{{$surat->file}}" width="100%" height="500px"
                                    frameborder="0"></iframe> -->
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                    <br>
                    <br>
                    </br>
                    </br>
                    <div class="col">
                        <a href="/home" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                    <div class="col">
                        <a href="{{asset('dokumen/'.$surat->file)}}" download> <button class="btn btn-sm btn-warning">Unduh</button></a>
                                
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-sm btn-secondary">Edit/Ganti File</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection