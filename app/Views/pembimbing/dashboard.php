<?= $this->extend("/template/modernize.php"); ?>
<?= $this->section("konten"); ?>
<!--  Owl carousel -->
<!--  Row 1 -->
<div class="row">
  <div class="col-lg-7 d-flex align-items-stretch">
    <div class="card w-100 bg-primary-subtle overflow-hidden shadow-none">
      <div class="card-body position-relative">
        <div class="row">
          <div class="col-sm-12">
            <div class="d-flex align-items-center mb-7">
              <div class="rounded-circle overflow-hidden me-6">
                <img src="<?= base_url(); ?>/assets/images/profile/user-1.jpg" alt="modernize-img" width="40" height="40">
              </div>
              <h5 class="fw-semibold mb-0 fs-5">Assalamu'alaikuum, <span style="color: #2f3184;">Muhammad Al Fatih Hendrawan, S.T., M.T.</span></h5>
            </div>
            <div class="d-flex align-items-center">
              <div class="border-end pe-4 border-muted border-opacity-10">
                <h3 class="mb-1 fw-semibold fs-8  align-content-center text-center text-white" style="background-color: #2f3184;"> 8
                </h3>
                <p class="mb-0 text-dark">Permintaan Verifikasi</p>
              </div>
              <div class="ps-4">
                <h3 class="mb-1 fw-semibold fs-8 text-center text-white align-content-center bg-success"> 4
                </h3>
                <p class="mb-0 text-dark">Proposal diterima</p>
              </div>
              <div class="ps-4">
                <h3 class="mb-1 fw-semibold fs-8 text-center text-white align-content-center bg-secondary"> 3
                </h3>
                <p class="mb-0 text-dark">Proposal ditolak</p>
              </div>

            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-7 col-sm-12">
            <!-- <h5 class="card-title fw-semibold">
              <button type="button" class="btn mb-1 bg-primary-subtle text-primary px-4 fs-4 " data-bs-toggle="modal" data-bs-target="#bg-primary-header-modal">
                <i class="ti ti-login"></i> Kirim (Upload) Proposal
              </button>
            </h5> -->
            <!-- <span>Anda dapat mengunggah proposal PKM di sini</span> -->
          </div>
          <div class="col-sm-5">
            <div class="welcome-bg-img mb-n7 text-end">
              <img src="<?= base_url(); ?>/assets/images/backgrounds/welcome-bg.svg" alt="modernize-img" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5 d-flex align-items-stretch flex-column">
    <!-- Yearly Breakup -->
    <div class="card w-100">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-12">
            <h5 class="card-title fw-semibold">
              <a href="#" style="color: #2f3184;"><i class="ti ti-user"></i> Profil Dosen</a> | <button class="btn btn-sm btn-warning"><i class="ti ti-edit"></i> Edit</button>
            </h5>
            <table class="table table-striped table-responsive w-100 table-sm mt-3">
              <tbody>
                <tr>
                  <td>Nama</td>
                  <td><b>Muhammad Al Fatih Hendrawan, S.T., M.T.</b></td>
                </tr>
                <tr>
                  <td>NIDN</td>
                  <td><b>0620067601</b></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><b>mah246@ums.ac.id</b></td>
                </tr>
                <tr>
                  <td>Telepon</td>
                  <td><b>08566766661</b></td>
                </tr>
                <tr>
                  <td>Homebase</td>
                  <td><b>Teknik Mesin</b></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Primary Header Modal -->
<div id="bg-primary-header-modal" class="modal fade" tabindex="-1" aria-labelledby="bg-primary-header-modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header modal-colored-header text-white" style="background-color: #2f3184;  border-bottom: 3px solid #fec14f;">
        <h4 class="modal-title text-white" id="bg-primary-header-modalLabel">
          Kirim (Upload) Proposal PKM (Data Diri)
        </h4>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="mt-0 mb-3">Pastikan data diri kamu sudah benar..</h5>
        <form action="">
          <div class="mb-2">
            <label for="recipient-name" class="">Nama (NIM):</label>
            <input type="text" class="form-control" id="recipient-name1" value="Ahmad Setiawan (D600160125)" disabled />
          </div>
          <div class="mb-2">
            <label for="recipient-name2" class="">Program Studi:</label>
            <input type="text" class="form-control" id="recipient-name2" value="Teknik Industri" disabled />
          </div>
          <div class="mb-2">
            <label for="recipient-name4" class="">Email:</label>
            <input type="text" class="form-control" id="recipient-name4" value="d600160125@student.ums.ac.id" disabled />
          </div>
          <div class="mb-2">
            <label for="recipient-name3" class="fw-bold" style="color: #2f3184;">No <i>Handphone</i>:</label>
            <input type="text" class="form-control" id="recipient-name3" value="08566766661" required />
          </div>
          <!-- <div class="mb-3">
            <label for="message-text" class="">Program Studi:</label>
            <textarea class="form-control" id="message-text1"></textarea>
          </div> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
          Batal
        </button>
        <a href="/mahasiswa/formulir-unggah" type="button" class="btn text-white" style="background-color: #2f3184;">
          Simpan & Lanjut
        </a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>



<?= $this->endSection(); ?>