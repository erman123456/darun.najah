@extends('layouts.app',
[
'pageTitle'=>'Home',
'mainPage'=> 'Home',
]
)

@section('css')
  <!-- Custom CSS -->
  {{-- <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet"> --}}
  <style>
    td {
      padding: 5px;
    }
  </style>
@endsection

@section('content')
<section class="wrapper bg-light">
  <div class="container py-14 py-md-18">
    <div class="row gx-lg-8 gx-xl-12">
      <div class="col-lg-10">
        <h3 class="h2 mb-4">Profile Yayasan</h3>
        <p class="justify">Yayasan Pendidikan Islam H, Djaidah Darwis didirikan berdasarkan aka notaris Zulfitri, SH.Mkn.
          No. 91 tanggal 31 Agustus 2013 di Indrapura kabupaten Batubara. Anggaran Dasar - Anggaran
          rumah Tangga Yayasan telah mendapat pengesahan dari menteri Hukum dan Hak Asasi Manusia
          Repubik Indonesia, dengan surat keputusannya Aka nomor 21 tertanggal 24 Mei 201 4 Nomor AHU-
          02054.50.10.2014. Yayasan Pendidikan Islam Hj.Djaidah Darwis berkedudukan di Desa Tanjunggading
          dan menjalankan usaha-usaha dibidang pendidikan anak usia din hingga Sekolah Dasar.
          <br>
          Susunan Pembina, Pengurus dan Pengawas Yayasan berdasarkan Akta Pendirian No.91 tahun 201 4
          sebagai berikut: <br>
          <table>
            <tr>
              <td width="50"></td>
              <td >Pembina Ketua</td>
              <td>:</td>
              <td>Rahmat Ramadhan Saragih, ST.MURP</td>
            </tr>
            <tr>
              <td width="50"></td>
              <td >Pengurus Ketua</td>
              <td>:</td>
              <td>H. Dazanul Fadhly Saragih, S.Ag.</td>
            </tr>
            <tr>
              <td width="50"></td>
              <td >Pengawas Ketua</td>
              <td>:</td>
              <td>Sanusi AR.</td>
            </tr>
          </table>
          <br>
          Unit Usaha Kegiatan dibawah naungan hukum yayasan adalah : Sekolah Dasar (SD), Raudathul
          Athfal (RA), dan Madrasah Dinah Takmilyah Awaliah (MDTA) <br>
          Pada tahun 2022 ini dibentuk unit non-profit Darn Najah Peduli Pendidikan Anak dengan Program
          Orang Tua Asuh.
        </p>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
@endsection

@section('js')

    <!--This page JavaScript -->
    {{-- <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script> --}}
    
@endsection
