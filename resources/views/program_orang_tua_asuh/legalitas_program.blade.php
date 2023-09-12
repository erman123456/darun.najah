@extends('layouts.app',
[
'pageTitle'=>'Legalitas Program',
'mainPage'=> 'Legalitas Program',
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
<section class="wrapper bg-light mb-20">
  <div class="container py-14 py-md-18">
    <div class="row gx-lg-12 gx-xl-12">
      <div class="col-lg-10">
        <h3 class="h2 mb-4">Pelaksanaan Program</h3>
        <p>Dengan Payung Hukum Yayasan Pendidikan Islam Hj. Djaidah Darwis dibentuk unit non-profit Darun Najah Peduli Pendidikan Anak dengan Program Orang Tua Asuh SK PY No. ... .. .... ...  ... Tahun 2022 dengan susunan pelaksana sebagai berikut :</p>
      </div>
    </div>
    <div class="row gx-lg-12 gx-xl-12">
      <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="card lift">
          <div class="card-body">
            <p><b>Pelindung</b> : Yayasan Pendidikan Islam  Hj.Djaidah Darwis <br>
            <b>Penanggung Jawab</b> :  H. Dazanul Fadhly Saragih, S.Ag.</p>
            <h4>Penasehat</h4>
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
              <li><span><i class="uil uil-check"></i></span><span>Ir. H. Zahir, M.AP (Bupati Kabupaten Batubara).</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Amat Mukhtas (Ketua Komisi III DPRD Batubara).</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Ahmad Fahri Meliala, A.Md (Komisi I DPRD Batubara).</span></li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Sarianto Damanik, S.E (Komisi I DPRD Batubara).</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Ali Nardi (Kepala Desa Tanjung Gading).</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Susanto  (Pengusaha).</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>H. Achmad Cholili (Pengusaha).</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>H. Rusli (Pemuka Masyarakat).</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Anto Deko (Pengusaha).</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Mediansyah Hasibuan (Pengusaha).</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Salmiah Damansyah (Pemuka Masyarakat).</span>
              </li>
              <li class="mt-3"><span><i class="uil uil-check"></i></span>
                <span>Rangkuti (Pemuka Masyarakat).</span>
              </li>
            </ul>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="card lift">
          <div class="card-body">
            <h4>Pelaksana</h4>
            <table>
            <tr>
              <td >Ketua</td>
              <td>:</td>
              <td>Ir.	Muhammad Nuh, M.Si.</td>
            </tr>
            <tr>
              <td >Sekretaris</td>
              <td>:</td>
              <td>Solihah, S.Ag.</td>
            </tr>
            <tr>
              <td >Bendahara</td>
              <td>:</td>
              <td>Ir. Zaidar Laily Saragih.</td>
            </tr>
            <tr>
              <td >Kasi Kesiswaan</td>
              <td>:</td>
              <td>Muhammad Nurdin.</td>
            </tr>
            <tr>
              <td class="text-center">Anggota</td>
              <td>:</td>
              <td>1.	Elpida, S.Pd</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>2.	Ahmad Sofyan</td>
            </tr>
            <tr>
              <td>Kasi Donatur</td>
              <td>:</td>
              <td> Nurlela Husti, S.Pd.I</td>
            </tr>
            <tr>
              <td class="text-center">Anggota</td>
              <td>:</td>
              <td> 1.	Lena Kumala Sari, S.Pd</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>2.	Desi Nurhayani Siregar, S.Pd.I</td>
            </tr>
            <tr>
              <td>Kasi Pelapor</td>
              <td>:</td>
              <td> Yuliana Fitri Saragih, S.Pd</td>
            </tr>
            <tr>
              <td class="text-center">Anggota</td>
              <td>:</td>
              <td>Fahmi Khusaini, S.Pi </td>
            </tr>
            <tr>
              <td>Publikasi</td>
              <td>:</td>
              <td>1. Linda Yanti Saragih</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>2. Lady Audia, S.TR.P</td>
            </tr>
          </table>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
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
