<!DOCTYPE html>
<html lang="en" class="imagec">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
    <style>
        .card-body {
            box-shadow: rgba(0, 0, 0, 0.19) 10px 10px 20px, rgba(0, 0, 0, 0.23) 0px 10px 10px;
        }
    </style>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5" >
                    <div class="card-body ">
                        <h3>Form Pendaftaran Pemuda Pancasila</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px; border:red">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Nomor KTP</td>
                                <td>{{ $data->no_ktp }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Tempat lahir</td>
                                <td>{{ $data->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Tanggal lahir</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Jenis Kelamin</td>
                                <td>{{ $data->sex }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Alamat</td>
                                <td >{{ $data->alamat }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Provinsi</td>
                                <td>{{ $data->provinsi }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Kota</td>
                                <td>{{ $data->kota }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Kecamatan</td>
                                <td>{{ $data->kecamatan }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Kelurahan</td>
                                <td>{{ $data->kelurahan }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">No Telepon</td>
                                <td>{{ $data->no_hp }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Email</td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Agama</td>
                                <td>{{ $data->religion }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Golongan Darah</td>
                                <td>{{ $data->blood_type }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Pekerjaan</td>
                                <td>{{ $data->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Tinggi Badan(cm)</td>
                                <td>{{ $data->tinggi }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Berat Badan(kg)</td>
                                <td>{{ $data->berat }}</td>
                            </tr>
                            <tr>
                                <td>KTP</td>
                                <td><img src="{{ $data->image }}" alt="" width="200px"></td>
                            </tr>
                        </table>

                        <a href="/form" class="btn btn-primary">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('sweetalert::alert')
</html> 