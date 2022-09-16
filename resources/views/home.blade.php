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


                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <dic class="mb-4">
                        <form action="/cari" method="get">
                            @csrf
                            <div class="input-group">
                                <h5 class="card-title text-primary">Cari surat</h5>
                                <input type="text" class="form-control" placeholder="Masukkan Judul Surat"
                                    aria-label="Recipient's username" aria-describedby="button-addon2" />
                                <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari
                                    !</button>
                            </div>

                        </form>
                </div>
                <div class="table table-bordered table-responsive">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nomer Surat</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Waktu Pengarsipan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($surat->count() > 0 )
                            @foreach ($surat as $s)
                            <tr>
                                <td>{{$s->no_surat}}</td>
                                <td>{{$s->kategori}}</td>
                                <td>{{$s->judul}}</td>
                                <td>{{$s->updated_at}}</td>
                                <td> <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalLong">
                                        Hapus
                                    </button>
                                    <a href="{{asset('dokumen/'.$s->file)}}" download> <button class="btn btn-sm btn-warning">Unduh</button></a>
                          
                                    <a href="/lihat/{{$s->id}}" type="button" class="btn btn-sm btn-primary">Lihat</a>
                                    <div class="modal fade" id="modalLong" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLongTitle">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Apaka anda yakin ingin menghaous arsip surat ini?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">
                                                        Batal
                                                    </button>
                                                    <a href="/hapus_{{$s->id}}" type="button"
                                                        class="btn btn-primary">Ya!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                @endforeach
                                @else
                                        <tr>
                                            <td colspan="4" class="align-middle">
                                                <br>
                                                Maaf, Surat Tidak Ditemukan. . .
                                                <br>
                                                <br>
                                            </td>
                                        </tr>

                                        @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nomer Surat</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Waktu Pengarsipan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="">
                        <br>
                        <a href="/1" type="button" class="btn btn-primary">Arsipkan Surat</a>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                            alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- / Content -->
@endsection