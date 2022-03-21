<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran Pemuda Pancasila</title>

    <style>
    html {
            height: 100%;
        }
        body {
            font-family: sans-serif;
            background-color:#af0e0e;
        }
        .card-body {
            position: relative;
            padding: 40px;
            background: rgb(13, 41, 63);
            box-sizing: border-box;
            box-shadow: rgba(0, 0, 0, 0.19) 10px 10px 20px, rgba(0, 0, 0, 0.23) 0px 10px 10px;
        border-radius: 40px;
        }
    
    </style>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center sm:items-center py-4">
                <div class="col-lg-6">
                    <div class="card mt-3">
                        <div class="card-body" >
                            <p style="text-align: center"><img src="/img/PP.jpg" alt="Logo PP" width="100px"></p>
                            <h3 class="text-center" style="color:whitesmoke">Form Pendaftaran Pemuda Pancasila</h3>

                             <!-- form validasi -->
                            <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group" >
                                    <label for="nama" style="color:whitesmoke">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                    @error('nama')
               		                <div class="alert alert-danger">{{ $message }}</div>
       		                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp" style="color:whitesmoke">Nomor KTP</label>
                                    <input class="form-control" type="text" name="no_ktp" value="{{ old('no_ktp') }}" class="@error('no_ktp') is-invalid @enderror">
                                    @error('no_ktp')
               		                <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir" style="color:whitesmoke">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" class="@error('tempat_lahir') is-invalid @enderror">
                                    @error('tempat_lahir')
               		                <div class="alert alert-danger">{{ $message }}</div>
                                       @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir" style="color:whitesmoke">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="@error('tanggal_lahir') is-invalid @enderror">
                                    @error('tanggal_lahir')
               		                <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="@error('sex') is-invalid @enderror" style="color:whitesmoke">Jenis Kelamin</label>
                                    @error('sex')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" value="male" id="male" name="sex">
                                            <label class="custom-control-label" for="male" style="color:whitesmoke">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" value="female" id="female" name="sex">
                                            <label class="custom-control-label" for="female" style="color:whitesmoke">Perempuan</label>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat" style="color:whitesmoke">Alamat</label>
                                    <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}" class="@error('alamat') is-invalid @enderror">
                                    @error('alamat')
               		                <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="provinsi" style="color:whitesmoke">Provinsi</label>
                                    <input class="form-control" type="text" name="provinsi" value="{{ old('provinsi') }}" class="@error('provinsi') is-invalid @enderror">
                                    @error('provinsi')
               		                <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kota" style="color:whitesmoke">Kota</label>
                                    <input class="form-control" type="text" name="kota" value="{{ old('kota') }}" class="@error('kota') is-invalid @enderror">
                                    @error('kota')
               		                <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan" style="color:whitesmoke">Kecamatan</label>
                                    <input class="form-control" type="text" name="kecamatan" value="{{ old('kecamatan') }}" class="@error('kecamatan') is-invalid @enderror">
                                    @error('kecamatan')
               		                <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kelurahan" style="color:whitesmoke">Kelurahan</label>
                                    <input class="form-control" type="text" name="kelurahan" value="{{ old('kelurahan') }}" class="@error('kelurahan') is-invalid @enderror">
                                    @error('kelurahan')
               		                <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="no_hp" style="color:whitesmoke">Nomor Telepon</label>
                                    <input class="form-control" type="text" name="no_hp" value="{{ old('no_hp') }}" class="@error('no_hp') is-invalid @enderror">
                                    @error('no_hp')
               		                <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" style="color:whitesmoke">Email</label>
                                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror">
                                    @error('email')
               		                <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label class="@error('religion') is-invalid @enderror" style="color:whitesmoke">Agama</label>
                                    @error('religion')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="religion" id="religion">
                                        <option>--Pilih agama--</option>
                                        <option value="islam">Islam</option>
                                        <option value="katolik">Katolik</option>
                                        <option value="protestan">Protestan</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="@error('blood_type') is-invalid @enderror" style="color:whitesmoke">Golongan Darah</label>
                                    @error('blood_type')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="blood_type" id="blood_type">
                                        <option>--Pilih--</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="pekerjaan" style="color:whitesmoke">Pekerjaan</label>
                                    <input class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}" class="@error('pekerjaan') is-invalid @enderror">
                                     @error('pekerjaan')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label class="@error('pendidikan') is-invalid @enderror" style="color:whitesmoke">Pendidikan Terakhir</label>
                                    @error('pendidikan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="pendidikan" id="pendidikan">
                                        <option>--Pilih--</option>
                                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tinggi" style="color:whitesmoke">Tinggi Badan(cm)</label>
                                    <input class="form-control" type="text" name="tinggi" value="{{ old('tinggi') }}" class="@error('tinggi') is-invalid @enderror">
                                     @error('tinggi')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                                <div class="form-group">
                                    <label for="berat" style="color:whitesmoke">Berat Badan(kg)</label>
                                    <input class="form-control" type="text" name="berat" value="{{ old('berat') }}" class="@error('berat') is-invalid @enderror">
                                     @error('berat')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label" style="color:whitesmoke">KTP</label>
                                    <input class="form-control" type="file" id="image" name="image" value="{{ old('image') }}" class="@error('image') is-invalid @enderror">
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="examplecheck1" class="@error('exampleCheck1') is-invalid @enderror">
                                    @error('exampleCheck1')
                                             <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="form-check-label" for="exampleCheck1" style="color:whitesmoke">Data yang telah diisi valid</label>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                </div>
                            </form>
                            <a href="/article" class="text-decoration-none d-block mt-3" style="color:rgb(65, 203, 245)">Back to Article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>