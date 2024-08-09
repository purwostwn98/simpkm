<?= $this->extend("/template/modernize.php"); ?>
<?= $this->section("konten"); ?>
<div class="container-fluid">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Detail Permintaan Verifikasi Proposal</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="/pembimbing/proposal-verifikasi">Proposal</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Detail Proposal Diajukan</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="../assets/images/breadcrumb/ChatBc.png" alt="modernize-img" class="img-fluid mb-n4" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-warning fs-3 py-3" id="atur_reviewer-tab" data-bs-toggle="pill" data-bs-target="#atur_reviewer" type="button" role="tab" aria-controls="atur_reviewer" aria-selected="false">
                    <i class="ti ti-topology-star-3 me-2 fs-6"></i>
                    <span class="d-none d-md-block"><b>Verifikasi</b></span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                    <i class="ti ti-user-circle me-2 fs-6"></i>
                    <span class="d-none d-md-block">Detail Proposal</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-notifications-tab" data-bs-toggle="pill" data-bs-target="#pills-notifications" type="button" role="tab" aria-controls="pills-notifications" aria-selected="false">
                    <i class="ti ti-bell me-2 fs-6"></i>
                    <span class="d-none d-md-block">Pembimbing</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security" aria-selected="false">
                    <i class="ti ti-article me-2 fs-6"></i>
                    <span class="d-none d-md-block">Kelompok</span>
                </button>
            </li>
        </ul>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card w-100 border position-relative overflow-hidden mb-0">
                                <div class="card-body p-4">
                                    <h4 class="card-title">Detail Proposal</h4>
                                    <p class="card-subtitle mb-4"></p>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputtext" class="form-label">Judul Proposal</label>
                                                    <input type="text" class="form-control" id="exampleInputtext" value="Inovasi Pengolahan Limbah Plastik" disabled placeholder="Mathew Anderson">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputtext" class="form-label">Jenis PKM</label>
                                                    <input type="text" class="form-control" id="exampleInputtext" value="PKM Penelitian" disabled placeholder="Mathew Anderson">
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputtext" class="form-label">Fakultas</label>
                                                    <input type="text" class="form-control" id="exampleInputtext" value="Teknik" disabled placeholder="Mathew Anderson">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputtext" class="form-label">Prodi</label>
                                                    <input type="text" class="form-control" id="exampleInputtext" value="Teknik Mesin" disabled placeholder="Mathew Anderson">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div>
                                                    <label for="exampleInputtext4" class="form-label">Dokumen Proposal</label>
                                                </div>
                                                <div class="table-responsive mb-4 border rounded-1">
                                                    <table class="table text-nowrap mb-0 align-middle">
                                                        <thead class="text-dark fs-4">
                                                            <tr>
                                                                <th>
                                                                    <h6 class="fs-4 fw-semibold mb-0">No</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="fs-4 fw-semibold mb-0">Tanggal Unggah</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="fs-4 fw-semibold mb-0">Aksi</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-0 fw-normal">1</p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0 fw-normal">29 April 2024 23:01:54</p>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-primary-subtle text-primary">lihat dokumen</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-notifications" role="tabpanel" aria-labelledby="pills-notifications-tab" tabindex="0">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card border shadow-none">
                                <div class="card-body p-4">
                                    <h4 class="mb-3">Muhammad Al Fatih Hendrawan, S.T., M.T.</h4>
                                    <div class="vstack gap-3 mt-4">
                                        <div class="hstack gap-6">
                                            <i class="ti ti-briefcase text-dark fs-6"></i>
                                            <h6 class=" mb-0">Teknik Mesin</h6>
                                        </div>
                                        <div class="hstack gap-6">
                                            <i class="ti ti-mail text-dark fs-6"></i>
                                            <h6 class=" mb-0">mah246@ums.ac.id</h6>
                                        </div>
                                        <div class="hstack gap-6">
                                            <i class="ti ti-map-pin text-dark fs-6"></i>
                                            <h6 class=" mb-0">087635445356</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade  show active" id="atur_reviewer" role="tabpanel" aria-labelledby="atur_reviewer-tab" tabindex="0">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card border shadow-none">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-6 d-flex">
                                            <button class="btn btn-warning w-100">Tolak</button>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <button class="btn btn-primary w-100">Ajukan</button>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end gap-6">
                                <button class="btn btn-primary">Save</button>
                                <button class="btn bg-danger-subtle text-danger">Cancel</button>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border shadow-none">
                                <div class="card-body p-4">
                                    <h4 class="card-title mb-3">Ketua dan Anggota</h4>

                                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                                        <div>
                                            <h5 class="fs-4 fw-semibold mb-0">Budiono Siregar</h5>
                                            <p class="mb-0">l200170151@student.ums.ac.id</p>
                                        </div>
                                        <button class="btn btn-primary">Ketua</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                                        <div>
                                            <h5 class="fs-4 fw-semibold mb-0">Ucup Permadi</h5>
                                            <p class="mb-0">l200170158@student.ums.ac.id</p>
                                        </div>
                                        <button class="btn bg-primary-subtle text-primary">Anggota</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                                        <div>
                                            <h5 class="fs-4 fw-semibold mb-0">Merlin Anggita</h5>
                                            <p class="mb-0">l200170187@student.ums.ac.id</p>
                                        </div>
                                        <button class="btn bg-primary-subtle text-primary">Anggota</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                                        <div>
                                            <h5 class="fs-4 fw-semibold mb-0">Arter Tendu</h5>
                                            <p class="mb-0">1700831317@student.ums.ac.id</p>
                                        </div>
                                        <button class="btn bg-primary-subtle text-primary">Anggota</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section("js_section"); ?>
<script src="<?= base_url(); ?>/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/datatable/datatable-basic.init.js"></script>
<?= $this->endSection(); ?>