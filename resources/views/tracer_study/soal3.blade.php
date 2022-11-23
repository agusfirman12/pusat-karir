@extends('layouts/main')


@section('hero')
      <!-- Hero-->
  <section style="background-color: rgb(63, 63, 180);">
    <div class="container" style="padding-top: 200px;">
        <h1 style="color: white;">Question Moster</h1>
        <p style="color:wheat;">Ayo Persiapkan Tujuan Hidupmu, Masa Sekolah bukan Akhir segalahnya Semangat <br> Jadilah Orang Yang Bermanfaat</p>
      </div>
    </div>

</section><!-- End Hero -->
@endsection


@section('container')

<div class="container">


  <section id="about" class="about">
    <div class="container" data-aos="fade-up" style="padding: 20px;">

      <div class="section-title text-center">
        <h2>Pelacak Alumni</h2>
      </div>

      <div class="row justify-content-center " style="padding: 20px;">
        <form action="{{ route('soal3-process') }}" method="post">
            @csrf
            <div class="title pt-4">
                <h4>3. Apakah anda bekerja saat ini (termasuk sambilan / swasta) ?</h4>
               </div>
            <div class="container"> 
                  
              <div class="  label-background form-check border rounded" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo"   style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="biaya" id="from-AFIRMASI" value="Bekerja (Pegawai)" style="width: 20px;">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Bekerja (Pegawai)
                </label> 
              
                </button>
              </div>
       
              <div class="  label-background form-check border rounded" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo"  style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="biaya" id="from-AFIRMASI" value="Bekerja (Pegawai) dan wirausaha">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Bekerja (Pegawai) dan wirausaha
                </label> 
              
                </button>
              </div>
              
              <div class="  label-background form-check border rounded wirausaha"  data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo"  style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="biaya" id="from-AFIRMASI" value="wirausaha">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Berwirausaha
                </label> 
              
                </button>
               
              </div>
     
              <div class="label-background form-check border rounded yes-button" style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="biaya" id="from-AFIRMASI" value="Tidak Bekerja">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Tidak Bekerja
                </label> 
              
                </button>
              </div>
            
                <div class="  label-background form-check border rounded " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"  style="padding:5px; margin: 2px; ">
                  <button class="btn  button"  type="button">
                   <input type="radio" name="biaya" id="from-AFIRMASI" value="Melanjutkan Kuliah">
                   <label class="form-check-label" for="from-AFIRMASI" >
                   Melanjutkan Kuliah
                  </label> 
                
                  </button>
                </div>
                 
                 
           

         
            
            <div class="button d-flex justify-content-between" style="margin-top: 20px; margin-left:10px; margin-right:10px;">
                 <a href="{{ route('soal2') }}">
                   <button type="button" class="btn btn-primary">Back</button>
                </a>
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
            </div>
          </div>
        </form>
      </div>    
    </div>
  </section><!-- End About Us Section -->



</div>

<!-- Modal -->

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bekerja</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nama Perusahaan</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Posisi / Jabatan</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Jenis Perusahaan</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="Lokal">Lokal</option>
                <option value="Nasional">Nasional</option>
                <option value="Multinasional">Multinasional</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Kota</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">No Telpone Pimpinan Atasan Anda</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
          
          
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>

<!-- modal 2 --->

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bekerja</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="question">
            <p>Apakah Usaha Anda Memiliki Lesensi Hukum?</p>
            <div class="  label-background form-check border rounded wirausaha"   style="padding:7px; margin: 2px; ">
             <input type="radio" name="biaya" id="from-AFIRMASI" value="wirausaha" required>
             <label class="form-check-label" for="from-AFIRMASI" >
              Yes
            </label> 
           
          </div>
          <div class="  label-background form-check border rounded "  style="padding:7px; margin: 2px; margin-top:5px; ">
             <input type="radio" name="biaya" id="from-AFIRMASI" value="wirausaha" required>
             <label class="form-check-label" for="from-AFIRMASI"  >
              No
            </label> 
          </div>
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Perusahaan Anda Berjalan pada Bidang Apa ?</label>
            <input type="text" class="form-control" id="recipient-name" required>
          </div>

          <div class="question">
            <p>Apakah Perkerjaan Sesuai Dengan Bidang Kalian?</p>
            <div class="  label-background form-check border rounded wirausaha"   style="padding:7px; margin: 2px; ">
             <input type="radio" name="bidang-sesuai" id="from-hoby" value="ya" required>
             <label class="form-check-label" for="from-hoby" >
              Yes
            </label> 
           
          </div>
          <div class="  label-background form-check border rounded "  style="padding:7px; margin: 2px; margin-top:5px; ">
             <input type="radio" name="bidang-sesuai" id="from-hoby" value="tidak" required>
             <label class="form-check-label" for="from-hoby" >
              No
            </label> 
          </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        
        
        </form>
      </div>
    
    </div>
  </div>
</div>
@endsection