
@extends('layout.main')

@section('judul')
    Data Member
    
@endsection

@section('konten')
<section class="section">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Member
            </button>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Member ID</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Telp / Handphone</th>
                        <th>Saldo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lutfi</td>
                        <td>LF001</td>
                        <td>Bandung</td>
                        <td>1996-02-02</td>
                        <td>Cihanjuang</td>
                        <td>08666765</td>
                        <td>Rp. 5000 </td>
                        <td>
                            <span class="badge bg-success">Edit</span>
                            <span class="badge bg-danger">Hapus</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Asep</td>
                        <td>ASP001</td>
                        <td>Bandung</td>
                        <td>1996-02-04</td>
                        <td>Cihanjuang</td>
                        <td>08666765</td>
                        <td>Rp. 5000 </td>
                        <td>
                            <span class="badge bg-success">Edit</span>
                            <span class="badge bg-danger">Hapus</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Sukanta</td>
                        <td>SKN001</td>
                        <td>Bandung</td>
                        <td>1996-02-10</td>
                        <td>Cihanjuang</td>
                        <td>08666765</td>
                        <td>Rp. 5000 </td>
                        <td>
                            <span class="badge bg-success">Edit</span>
                            <span class="badge bg-danger">Hapus</span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- Modal Popup untuk Add-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Contoh : Asep Rukmana">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Contoh : Bandung">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Alamat</label>
                                <textarea class="form-control" placeholder="Contoh : jl Cihanjuang RT 03/04 Parongpong" id="floatingTextarea"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Telp / Hp</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Contoh : 0857823883">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Saldo</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Contoh : 50000">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
