@extends('layouts/main')
@section('container')
<div class="main-content">
    <main>
        <h3>
            Tambah Data Penduduk Desa Temboro
        </h3>
        @php
            $statuses = ['Kawin', 'Belum Kawin', 'Cerai Hidup', 'Cerai Mati'];
            $JK = ['Laki-Laki', 'Perempuan'];
            $kedudukans = ['Kepala Keluarga', 'Suami', 'Istri', 'Anak', 'Menantu', 'Cucu', 'Orang Tua', 'Mertua', 'Famili Lain']
        @endphp
        <form action="/tambah-data", method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="NIK">NIK</label>
                <input class="form-control @error('NIK') is-invalid @enderror" type="text" id="NIK" placeholder="NIK" required autofocus name="NIK"> 
                @error('NIK') 
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="Nama">Nama Lengkap</label>
                <input class="form-control @error('Nama') is-invalid @enderror" type="text" id="Nama" placeholder="Nama Lengkap" required autofocus name="Nama"> 
                @error('Nama') 
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="Nomor_KK">Nomor KK</label>
                <input class="form-control @error('Nomor_KK') is-invalid @enderror" type="text" id="Nomor_KK" placeholder="Nomor KK"  required autofocus name="Nomor_KK"> 
                @error('Nomor_KK') 
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="Jenis_Kelamin">Jenis Kelamin</label>
                <select class="form-control @error('Jenis_Kelamin') is-invalid @enderror" id="Jenis_Kelamin" required autofocus name="Jenis_Kelamin">
                    @php
                    foreach($JK as $jk){
                       echo('<option value="'. $jk. '"');
                        echo('>'.$jk. '</option>') ;
                    }
                @endphp
                </select>
                @error('Jenis_Kelamin') 
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="Status_Perkawinan">Status Perkawinan</label>
                <select class="form-control @error('Status_Perkawinan') is-invalid @enderror" id="Status_Perkawinan" required autofocus name="Status_Perkawinan">
                    @php
                        foreach($statuses as $status){
                           echo('<option value="'. $status. '"');
                            echo('>'.$status. '</option>') ;
                        }
                    @endphp
                </select>
                @error('Status_Perkawinan') 
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="Tanggal_Lahir">Tanggal Lahir</label>
                <input class="form-control @error('Tanggal_Lahir') is-invalid @enderror" type="date" id="Tanggal_Lahir" required autofocus name="Tanggal_Lahir"> 
                @error('Tanggal_Lahir') 
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="Pekerjaan">Pekerjaan</label>
                <input class="form-control @error('Pekerjaan') is-invalid @enderror" type="text" id="Pekerjaan" placeholder="Pekerjaan"  required autofocus name="Pekerjaan"> 
                @error('Pekerjaan') 
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="Status_Dalam_Keluarga">Status dalam Keluarga</label>
                <select class="form-control @error('Status_Dalam_Keluarga') is-invalid @enderror" id="Status_Dalam_Keluarga" required autofocus name="Status_Dalam_Keluarga">
                    @php
                        foreach($kedudukans as $kedudukan){
                           echo('<option value="'. $kedudukan. '"');
                            echo('>'.$kedudukan. '</option>') ;
                        }
                    @endphp
                </select>
                @error('Status_Dalam_Keluarga') 
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="Nomor_Telepon">Nomor Telepon</label>
                <input class="form-control @error('Nomor_Telepon') is-invalid @enderror" type="text" id="Nomor_Telepon" placeholder="Nomor Telepon" required autofocus name="Nomor_Telepon"> 
                @error('Nomor_Telepon') 
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="dusun_id">Dusun Tinggal</label>
            <select class="form-control @error('dusun_id') is-invalid @enderror" id="dusun_id" required autofocus name="dusun_id">
                @php
                    foreach($dusuns as $dusun){
                       echo('<option value="'. $dusun['DusunID']. '"');
                        echo('>'.$dusun['Nama_Dusun']. '</option>') ;
                    }
                @endphp
            </select>
            @error('dusun_id') 
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
            </div>
            
            <div>
                <button type="submit" class="btn btn-primary mb-3 justify-content-end">Submit</button>
            </div>
            
        </form>
        
        
    </main>
</div>
@endsection