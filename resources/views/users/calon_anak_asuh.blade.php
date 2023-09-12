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
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16 mb-lg-21 mb-xl-23">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18 mt-15">
        <div class="col-lg-6 position-relative">
          <div class="shape rounded bg-pale-yellow rellax d-block" data-rellax-speed="0" style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0"></div>
          <div class="row gx-md-5 gy-5 position-relative align-items-center">
            <div class="col-6">
                <figure class="hover-scale rounded cursor-dark" data-cue="fadeIn" data-delay="300"><a href="./assets/img/sponsor.png" data-glightbox="" data-gallery="post"> <img src="./assets/img/sponsor.png" alt="" /></a></figure>
            </div>
            <!-- /column -->
            <div class="col-6">
              <figure class="hover-scale rounded cursor-dark mb-5 shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="900"><a href="./assets/img/sponsor.png" data-glightbox=""> <img src="./assets/img/sponsor.png" alt="" /></a></figure>
              <figure class="hover-scale rounded cursor-dark mb-5 shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200"><a href="./assets/img/sponsor.png" data-glightbox=""> <img src="./assets/img/sponsor.png" alt="" /></a></figure>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <div class="table-responsive">
            <table id="editable-datatable" class="table table-striped table-bordered display"
                style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Calon Anak Asuh</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                </tfoot>
            </table>
        </div> 
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
@endsection

@section('js')
  <!-- This Page JS -->
  <script src="{{ asset('assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables/media/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/dist/js/pages/datatable/custom-datatable.js') }}"></script>
  <script src="{{ asset('assets/extra-libs/tiny-editable/mindmup-editabletable.js') }}"></script>
  <script src="{{ asset('assets/extra-libs/tiny-editable/numeric-input-example.js') }}"></script>

  <script>
      function previewImage() {
          document.getElementById("image-preview").style.display = "block";
          var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("foto").files[0]);
          oFReader.onload = function(oFREvent) {
              document.getElementById("image-preview").src = oFREvent.target.result;
          };
      };

      $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
      //   $(function() {
      //       $('#editable-datatable').DataTable();
      //   });

      $(function() {
          var oTable = $('#editable-datatable').DataTable({
              processing: false,
              serverSide: true,
              ajax: {
                  url: '{{ route('json.anak_asuh') }}'
              },
              columns: [{
                      "data": 'DT_RowIndex',
                      orderable: false,
                      searchable: false
                  },
                  {
                      data: 'nama',
                      name: 'nama',
                      orderable: true
                  },
                  {
                      data: 'action',
                      name: 'action',
                      orderable: true
                  },

              ],
          });
      });
  </script>
    
@endsection
