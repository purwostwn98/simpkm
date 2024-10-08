<?= $this->extend("/template/modernize.php"); ?>
<?= $this->section("konten"); ?>
<div class="container-fluid">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Proposal Diajukan</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="../main/index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Proposal Diajukan</li>
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
    <!-- <div class="card card-body">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <form class="position-relative">
                    <select class="form-select" id="inputSelect1">
                        <option>Tahun</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                    </select>
                </form>
            </div>
            <div class="col-md-4 col-xl-3">
                <form class="position-relative">
                    <select class="form-select" id="inputSelect1">
                        <option>Jenis PKM</option>
                        <option>Pendanan</option>
                        <option>Karya Tulis</option>
                    </select>
                </form>
            </div>
            <div class="col-md-4 col-xl-3">
                <form class="position-relative">
                    <select class="form-select" id="inputSelect1">
                        <option>Category PKM</option>
                        <option>PKM KC</option>
                        <option>PKM RE</option>
                    </select>
                </form>
            </div>
            <div class="col-md-4 col-xl-3 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-primary d-flex align-items-center">
                    <i class="ti ti-search text-white me-1 fs-5"></i> Search
                </a>
            </div>
        </div>
    </div> -->
    <div class="datatables">
        <!-- start Zero Configuration -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Deskripsi</h4>
                <p class="card-subtitle mb-3">
                    Di dalam halaman ini memungkinkan mahasiswa untuk melihat proposal yang diajukan. Baik sebagai anggota dan kelompok.
                </p>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-sm table-striped table-bordered align-middle w-100">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th class="text-white" style="background-color: #2f3185;">Judul PKM</th>
                                <th class="text-white" style="background-color: #2f3185;">Jenis PKM</th>
                                <th class="text-white" style="background-color: #2f3185;">Sebagai</th>
                                <th class="text-white" style="background-color: #2f3185;">Pembimbing</th>
                                <th class="text-white" style="background-color: #2f3185;">Jumlah Reiewer</th>
                                <th class="text-white" style="background-color: #2f3185;">Status</th>
                                <th class="text-white" style="background-color: #2f3185;">Aksi</th>
                            </tr>
                            <!-- end row -->
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pemberdayaan UMKM Melalui Digital Marketing</td>
                                <td>PKM Pengabdian Masyarakat</td>
                                <td>Ketua</td>
                                <td>Dr. Budi Raharjo</td>
                                <td>2</td>
                                <td><span class="mb-1 badge rounded-pill bg-primary">Diajukan</span></td>
                                <td>
                                    <button style="border: 1px solid #fec14f;" class="btn bg-warning-subtle text-warning btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Atur
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="/mahasiswa/detail-proposal">Detail</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Pengembangan Aplikasi Edukasi Anak untuk Tumbuh Kembang yang Baik</td>
                                <td>PKM Kewirausahaan</td>
                                <td>Anggota</td>
                                <td>Prof. Susi Susanti</td>
                                <td>1</td>
                                <td><span class="mb-1 badge rounded-pill bg-success">Disetujui</span></td>
                                <td>
                                    <button style="border: 1px solid #fec14f;" class="btn bg-warning-subtle text-warning btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Atur
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="/mahasiswa/detail-proposal">Detail</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end Alternative Pagination -->
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section("js_section"); ?>
<script src="<?= base_url(); ?>/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/datatable/datatable-basic.init.js"></script>
<?= $this->endSection(); ?>