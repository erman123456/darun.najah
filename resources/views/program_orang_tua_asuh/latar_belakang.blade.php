@extends('layouts.app',
[
'pageTitle'=>'Latar Belakang',
'mainPage'=> 'Latar Belakang',
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
        <h3 class="h2 mb-4">Latar Belakang</h3>
        <p class="justify">Darun najah berdiri tegak ditengah masyarakat mayoritas muslim, dengan tingkat perekonomian yang sangat bervarisasi, mulai dari yang bekerja hari ini untuk makan keesokan harinya, sampai dikategorikan sultan “istilah era milenial”, mulai Rumah bak istana hingga tak punya, numpang di samping atau emperan gudang, mulai dari orangtua yang penuh perhatian terhadap pendidikan anaknya, hingga yang tak memiliki waktu yang cukup untuk mendampinginya.
            Strategi Penanaman Nilai-nilai Agama pada Anak di Era Digital. Bagaimana secara bersamaan upaya kita dalam memasuki era digital tidak mengurangi kecintaan kita pada aspek kemanusiaan, nilai moral dan nilai religi beserta kebijaksanaanya terkalahkan dengan pandangan yang lebih menguntungkan secara materiil. 
            Moralitas sebagai hasil dari pendidikan, ternyata tidak bisa disebut membanggakan karena yang ada justru sangat jauh dari nilai-nilai normatif yang selama ini dijunjung tinggi. Semua itu sungguh sangat disayangkan dan telah mencoreng kredibilitas dunia pendidikan. Para pelajar yang seharusnya menunjukkan akhlak yang baik, justru malah menunjukkan tingkah laku yang buruk.
            Rasa ingin tahu yang begitu besar, keinginan untuk mencoba, mengikuti trend dan gaya hidup, serta keinginan untuk mendapatkan kesenangan.  Semuanya wajar, tetapi hal itu sangat rentan, resiko untuk terkucilkan dan jatuh kelembah kenistaan menanti didepannya.
            Apa yang terjadi pada anak kita pada 20 tahun ke depan 
            Jangan tunggu orang lain akan berbuat sesuatu, ayo bergandengan tangan, Apa yang bisa kita lakukan pada hari ini.
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
