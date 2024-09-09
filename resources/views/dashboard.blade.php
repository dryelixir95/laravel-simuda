@extends('layouts.app')

@section('contents')

<div class="mb-3 text-center">
    <h1 class="h3 mb-0" style="color: #009D3C;">Data Pemuda Kabupaten Banyuwangi</h1>
</div>

<div class="row p-2" style="background-color: #508C9B; border-radius: 5px;">
    <!-- Selamat datang! -->
    <div class="col-md-4 mt-1 d-none d-md-block">
        <h2 class="text-white"><b>Selamat datang!</b></h2>
    </div>

    <!-- Kolom Pencarian dan Tombol New dan Upload -->
    <div class="col-sm-6 col-md-5 d-flex justify-content-end align-items-center">
        <!-- Kolom Pencarian -->
        <div class="input-group flex-grow-1">
            <input type="text" class="form-control" placeholder="Cari Disini..." aria-label="Cari">
            <div class="input-group-append">
                <button class="btn btn-light" type="button">
                    <i class="fas fa-search"></i> <!-- Menggunakan ikon pencarian -->
                </button>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 d-flex justify-content-center align-items-center">
        <!-- Tombol New dan Upload -->
        <button class="btn btn-light mr-2" style="color: #134B70;">
            <i class="fas fa-plus"></i> New
        </button>
        <button class="btn btn-light" style="color: #134B70;">
            <i class="fas fa-upload"></i> Upload
        </button>
    </div>
</div>

<!-- Tabel Data -->
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">
                    <input type="checkbox" id="selectAll"> <!-- Checkbox untuk memilih semua -->
                </th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Gender</th>
                <th scope="col">Umur</th>
                <th scope="col">Desa</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Contoh Baris Tabel -->
            <tr>
                <td><input type="checkbox" name="select_row[]"></td>
                <td>1234567890</td>
                <td>John Doe</td>
                <td>01/01/1990</td>
                <td>Laki-laki</td>
                <td>34</td>
                <td>Desa A</td>
                <td>Kecamatan B</td>
                <td>
                    <a href="#" class="btn btn-sm btn-info">
                        <i class="fas fa-info-circle"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-info">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="select_row[]"></td>
                <td>8723993</td>
                <td>John Doe 2</td>
                <td>01/01/1989</td>
                <td>Laki-laki</td>
                <td>35</td>
                <td>Desa A</td>
                <td>Kecamatan B</td>
                <td>
                    <a href="#" class="btn btn-sm btn-info">
                        <i class="fas fa-info-circle"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-info">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        // Script untuk memilih semua checkbox
        $('#selectAll').on('change', function() {
            var isChecked = $(this).prop('checked');
            $('input[name="select_row[]"]').prop('checked', isChecked);
        });
    });
</script>

@endsection
