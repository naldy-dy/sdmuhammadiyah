@extends('landing.layout')
@section('content')

<div class="card">
    <div class="card-body"> 
       @if($ppdb->tanggal_mulai <= date('Y-m-d') && $ppdb->tanggal_selesai >= date('Y-m-d'))



        Silahkan Lengkapi data berikut untuk melakukan pendaftaran !!! <br>
        <b class="text-info">Biodata Calon Siswa</b> <br><hr>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Nama Lengkap Siswa</span>
                            <input type="text" name="nama_lengkap" required="" class="form-control">
                        </div> 
                    </div>
               </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Jenis Kelamin</span>
                            <select class="form-control" name="jenis_kelamin" required>
                                <option value="" hidden>Pilih...</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>NIK</span>
                            <input type="number" name="nik" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>No KK</span>
                            <input type="number" name="no_kk" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>No Registrasi Akta Kelahiran</span>
                            <input type="number" name="no_reg_akta" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> NISN</span>
                            <input type="number" name="nisn" required="" class="form-control">
                        </div> 
                    </div>
               </div>


                 <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> Tempat Lahir</span>
                            <input type="text" name="tempat_lahir" required="" class="form-control">
                        </div> 
                    </div>
               </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> Tanggal Lahir</span>
                            <input type="date" name="tanggal_lahir" required="" class="form-control">
                        </div> 
                    </div>
               </div>
               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> Anak Ke</span>
                            <input type="number" name="anak_ke" min="1" required="" class="form-control">
                        </div> 
                    </div>
               </div>
               
               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Agama</span>
                            <select class="form-control" name="agama" required>
                                <option value="" hidden>Pilih...</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="budha">budha</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                        </div> 
                    </div>
               </div>

               <div class="col-md-6"></div>
               <div class="col-md-12">
                <br> <br>
                    <b class="text-info">Alamat <hr> </b>
                </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Kewarganegaraan</span>
                            <select class="form-control" name="kewarganegaraan" required>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> Alamat Lengkap</span>
                            <input type="text" name="alamat" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> RT</span>
                            <input type="number" name="rt" required="" class="form-control">
                        </div> 
                    </div>
               </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> RW</span>
                            <input type="number" name="rw" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> Desa/Dusun</span>
                            <input type="text" name="nama_dusun" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> Kelurahan</span>
                            <input type="text" name="nama_kelurahan" required="" class="form-control">
                        </div> 
                    </div>
               </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> Kapanewon</span>
                            <input type="text" name="kapanewon"  class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> Kode POS</span>
                            <input type="number" name="kode_pos" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Tempat Tinggal</span>
                            <select class="form-control" name="tempat_tinggal" required>
                                <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                <option value="Wali">Wali</option>
                                <option value="Kos">Kos</option>
                                <option value="Wali">Wali</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                            </select>
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Berkebutuhan Khusus</span>
                            <select class="form-control" name="berkebutuhan_khusus" required>
                               <option value="Tidak">Tidak</option>
                                <option value="Netra">Netra</option>
                                <option value="Rungu">Rungu</option>
                                <option value="Grahita Ringan">Grahita Ringan</option>
                                <option value="Grahita Sedang">Grahita Sedang</option>
                                <option value="Daksa Ringan">Daksa Ringan</option>
                                <option value="Daksa Sedang">Daksa Sedang</option>
                                <option value="Wicara">Wicara</option>
                                <option value="Tuna Ganda">Tuna Ganda</option>
                                <option value="Hiper Aktif">Hiper Aktif</option>
                                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                <option value="Bakat Istimewa">Bakat Istimewa</option>
                                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                <option value="Narkoba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Down Sindrome">Down Sindrome</option>
                                <option value="Autis">Autis</option>
                            </select>
                        </div> 
                    </div>
               </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Transportasi Ke Sekolah</span>
                            <select class="form-control" name="transportasi" required>
                                <option value="Jalan kaki">Jalan kaki</option>
                                <option value="Kendaraan pribadi">Kendaraan pribadi</option>
                                <option value="Kendaraan Umum/angkot/Pete-pete">Kendaraan Umum/angkot/Pete-pete</option>
                                <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                <option value="Kereta Api">Kereta Api</option>
                                <option value="Ojek">Ojek</option>
                                <option value="Andong/Bendi/Sado/Dokar/Delman/Beca">Andong/Bendi/Sado/Dokar/Delman/Beca</option>
                                <option value="Perahu">Perahu</option>
                                <option value="Denvebrandan/Rakit/Getek">Denvebrandan/Rakit/Getek</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div> 
                    </div>
               </div>


               <div class="col-md-6"></div>
               <div class="col-md-12">
                <br> <br>
                    <b class="text-info">Data Orang Tua/Wali <hr> </b>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> Nama Ayah/Wali</span>
                            <input type="text" name="nama_ayah" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> Nama Ibu/Wali</span>
                            <input type="text" name="nama_ibu" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> No WA Orang Tua/Wali</span>
                            <input type="number" name="wa_orangtua" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span> Email Orangtua</span>
                            <input type="email" name="email_orangtua" class="form-control">
                        </div> 
                    </div>
               </div>


               <div class="col-md-12">
                <br> <br>
                    <b class="text-info">Dokumen/Berkas Dibutuhkan <hr> </b>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Asal TK</span>
                            <input type="text" name="asal_sekolah" required="" class="form-control">
                        </div> 
                    </div>
               </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Foto Latar Merah (3x4)</span>
                            <input type="file" accept="image/*" name="foto" required="" class="form-control">
                        </div> 
                    </div>
               </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Scan KK</span>
                            <input type="file" accept=".pdf" name="file_kk" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Scan Akta Kelahiran</span>
                            <input type="file" accept=".pdf" name="file_akta" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>Foto KTP Orang Tua</span>
                            <input type="file" accept="image/*"  name="file_ktp_ortu" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <span>File Nilai Akhir TK</span>
                            <input type="file"  name="file_nilai" accept=".pdf" required="" class="form-control">
                        </div> 
                    </div>
               </div>

               <div class="col-md-12 mt-3 mb-3">
                   <button class="btn btn-block btn-info btn-lg">Daftarkan Calon Siswa</button>
               </div>


            </div> 
        </form>

        @else
            <center>
                <h3 class="text-danger"><i class="fa fa-warning"></i> Pendaftaran PPDB Sedang/Telah Tutup !!!</h3>
                <p>Silahkan hubungi admin kami untuk lebih lanjut</p>
            </center>
       @endif
    </div>
</div>

@endsection