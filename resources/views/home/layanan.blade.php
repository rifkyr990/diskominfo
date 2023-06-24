@extends('layouts.frontend.app',[
    'title' => 'Home',
])
@section('content')
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>


<main class="container">    

</main>



<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4 text-center">
    </div><!-- /.col-lg-4 -->
    
    
  </div><!-- /.row -->

  <!-- end pop up -->

  <!-- START THE FEATURETTES -->

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
<!--  pop up -->
<div class="container mb-5" id="pop-up">
  <div class="row gx-1" id="row">


    <div class="card" style="border-radius: 30px;width:10rem;" id="isi" onclick="loadJSON()">
      <center><img src="{{asset('pelayanan')}}/house.png" class="img-responsive" alt="..." width="100"></center>
      <div class="card-body">
        <p class="card-text text-center">call center</p>
      </div>
    </div>

    <div class="card" style="border-radius: 30px;width:10rem;" id="isi" onclick="loadCHART()">
      <center><img src="{{asset('pelayanan')}}/house.png" class="img-responsive" alt="..." width="100"></center>
      <div class="card-body">
        <p class="card-text text-center">statistik</p>
      </div>
    </div>

    <div class="card" style="border-radius: 30px;width:10rem;" id="isi" onclick="loadFAQ()">
      <center><img src="{{asset('pelayanan')}}/house.png" class="img-responsive" alt="..." width="100"></center>
      <div class="card-body">
        <p class="card-text text-center">faq</p>
      </div>
    </div>

    <div class="card" style="border-radius: 30px;width:10rem;" id="isi" onclick="loadFORM()">
      <center><img src="{{asset('pelayanan')}}/house.png" class="img-responsive" alt="..." width="100"></center>
      <div class="card-body">
        <p class="card-text text-center">perizinan</p>
      </div>
    </div>

    <div class="card" style="border-radius: 30px;width:10rem;" id="isi" onclick="loadLAYANAN()">
      <center><img src="{{asset('pelayanan')}}/house.png" class="img-responsive" alt="..." width="100"></center>
      <div class="card-body">
        <p class="card-text text-center">layanan pemerintah</p>
      </div>
    </div>

    <div class="card" style="border-radius: 30px;width:10rem;" id="isi" onclick="loadHUKUM()">
      <center><img src="{{asset('pelayanan')}}/house.png" class="img-responsive" alt="..." width="100"></center>
      <div class="card-body">
        <!-- <h5 class="card-title">Card title</h5> -->
        <p class="card-text text-center">hukum</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>

  </div>
</div>
<!-- isi pop up -->
<div class="pop-up-1" id="output">
  <div class="btn btn-success"><btn onclick="closeJSON()" id="btnjson">close</button></div>
  <div class="JSON"></div>

  <div class="row"style="margin: 10px;">
    <div class="col-6 mb-1">
     <button class="btn btn-success">
      <i class="fa fa-phone"></i>
      1223
    </button> 
    </div>
    <div class="col-6 mb-1">
      <button class="btn btn-success">
     <i class="fa fa-facebook-square"></i>
      Facebook
    </button>
    </div>
    <div class="col-6 mb-1">
      <button class="btn btn-success">
      <i class="fa fa-instagram"></i>
       Instagram
    </button>   
    </div>
    <div class="col-6 mb-1">
      <button class="btn btn-success">
      <i class="fa fa-youtube-square"></i>
      Youtube
    </button>
    </div>
    <div class="col-6 mb-1">
      <button class="btn btn-success">
      <i class="fa fa-twitter-square"></i>
       Twitter
    </button>  
    </div>
  </div>
</div>
</div>
    
<div class="pop-up-2" id="output2">
  <div class="btn btn-success"><btn onclick="closeCHART()" id="btnchart">close</button></div>
    <div id="chart">
      <img src="{{asset('pelayanan')}}/house.png" alt="" width="100px">
    </div>
</div>
</div>
<div class="pop-up-3" id="output3">
  <div class="btn btn-success"><btn onclick="closeFAQ()" id="btnfaq">close</button></div>
    <div class="container mt-5">
    <h1>FAQ</h1>
    <div id="accordion">

      <!-- Pertanyaan 1 -->
      <div class="card">
        <div class="card-header" id="heading1">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
              Apa itu Lorem Ipsum?
            </button>
          </h5>
        </div>

        <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
          <div class="card-body">
            Lorem Ipsum adalah contoh teks dummy yang sering digunakan dalam industri percetakan dan penataan huruf.
          </div>
        </div>
      </div>

      <!-- Pertanyaan 2 -->
      <div class="card">
        <div class="card-header" id="heading2">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
              Bagaimana cara menggunakan Bootstrap?
            </button>
          </h5>
        </div>
        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
          <div class="card-body">
            Untuk menggunakan Bootstrap, Anda perlu menyertakan file CSS dan JavaScript Bootstrap pada halaman HTML Anda.
          </div>
        </div>
      </div>

      <!-- Pertanyaan 3 -->
      <div class="card">
        <div class="card-header" id="heading3">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
              Apakah Bootstrap mendukung responsif?
            </button>
          </h5>
        </div>
        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
          <div class="card-body">
            Ya, Bootstrap dirancang untuk mendukung responsif dengan menggunakan grid system dan komponen-komponennya.
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="pop-up-4" id="output4">
  <div class="btn btn-success"><btn onclick="closeFORM()" id="btnform">close</button></div>
    <div class="col-6 mb-2">
    <form id="dataForm" onsubmit="saveData(event)">
    <label for="no_izin">No Izin:</label>
    <input type="text" id="no_izin" required><br>
    </div>

    <div class="col-6 mb-2">
    <label for="tgl_daftar">Tanggal Daftar:</label>
    <input type="date" id="tgl_daftar" required><br>
    </div>
    
    <div class="col-6 mb-2">
    <label for="nama_pemohon">Nama Pemohon:</label>
    <input type="text" id="nama_pemohon" required><br>
    </div>

    <div class="col-6 mb-2">
    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" required><br>
    </div>
    
    <div class="col-6 mb-2">
    <label for="status">Status:</label>
    <select id="status" required>
      <option value="Open">Open</option>
      <option value="Close">Close</option>
    </select><br>
  </div>
    
    <button type="submit">Simpan</button>
  </button>    
  </form>
</div>
<div class="pop-up-5" id="output5">
  <div class="btn btn-success"><btn onclick="closeLAYANAN()" id="btnform">close</button></div>
    <div class="lynan mt-5" style="margin: 10px;">
    <button class="btn btn-success">
          Sibaba
    </button>
    <button class="btn btn-success">
        Sukaku
    </button>
    <button class="btn btn-success">
         sibunge
    </button>
    </div>
</div>
<div class="pop-up-6" id="output6">
  <div class="btn btn success"><btn onclick="closeHUKUM()" id="btnhukum">close</button></div>
  <div class="hukum">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>Nama</td>
          <td>Deskripsi</td>
          <td></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nama Hukum 1</td>
          <td>Deskripsi Hukum 1</td>
          <td><a href="{{route('pagehukum')}}" class="btn btn-primary">Open</a></td>
        </tr>
        <tr>
          <td>Nama Hukum 1</td>
          <td>Deskripsi Hukum 1</td>
          <td><a href="{{route('pagehukum')}}" class="btn btn-primary">Open</a></td>
        </tr>
        <tr>
          <td>Nama Hukum 1</td>
          <td>Deskripsi Hukum 1</td>
          <td><a href="{{route('pagehukum')}}" class="btn btn-primary">Open</a></td>
        </tr>
        <tr>
          <td>Nama Hukum 1</td>
          <td>Deskripsi Hukum 1</td>
          <td><a href="{{route('pagehukum')}}" class="btn btn-primary">Open</a></td>
        </tr>
        <tr>
          <td>Nama Hukum 1</td>
          <td>Deskripsi Hukum 1</td>
          <td><a href="{{route('pagehukum')}}"class="btn btn-primary">Open</a></td>
        </tr>
        <tr>
          <td>Nama Hukum 1</td>
          <td>Deskripsi Hukum 1</td>
          <td><a href="{{route('pagehukum')}}" class="btn btn-primary">Open</a></td>
        </tr>
        <tr>
          <td>Nama Hukum 1</td>
          <td>Deskripsi Hukum 1</td>
          <td><a href="{{route('pagehukum')}}"class="btn btn-primary">Open</a></td>
        </tr>
      </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class= "pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>
@endsection