<?= $this->extend("/template/modernize.php"); ?>
<?= $this->section("konten"); ?>
<div class="container-fluid">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Proposal Lolos</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="../main/index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">proposal Lolos</li>
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
    <div class="card card-body">
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
    </div>
    <div class="datatables">
        <!-- start Zero Configuration -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Proposal</h4>
                <p class="card-subtitle mb-3">
                </p>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered text-nowrap align-middle">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th>Judul PKM</th>
                                <th>Jenis PKM</th>
                                <th>Ketua</th>
                                <th>Pembimbing</th>
                                <th>Jumlah Reiewer</th>
                                <th>Aksi</th>
                            </tr>
                            <!-- end row -->
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pemberdayaan UMKM Melalui Digital Marketing</td>
                                <td>PKM Pengabdian Masyarakat</td>
                                <td>Andi Santoso</td>
                                <td>Dr. Budi Raharjo</td>
                                <td>2</td>
                                <td>
                                    <button style="border: 1px solid #fec14f;" class="btn bg-warning-subtle text-warning btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Atur
                                    </button>
                                    <ul class="dropdown-menu" style="">
                                        <li>
                                            <a class="dropdown-item" href="/admin/proposal-diajukan/detail">Detail</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">Hasil review</a>
                                        </li>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Pengembangan Aplikasi Edukasi Anak</td>
                                <td>PKM Kewirausahaan</td>
                                <td>Siti Nurhaliza</td>
                                <td>Prof. Susi Susanti</td>
                                <td>1</td>
                                <td>
                                    <button style="border: 1px solid #fec14f;" class="btn bg-warning-subtle text-warning btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Atur
                                    </button>
                                    <ul class="dropdown-menu" style="">
                                        <li>
                                            <a class="dropdown-item" href="/admin/proposal-diajukan/detail">Detail</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">Hasil review</a>
                                        </li>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Inovasi Pengolahan Limbah Plastik</td>
                                <td>PKM Penelitian</td>
                                <td>Rizki Pratama</td>
                                <td>Dr. Ahmad Yani</td>
                                <td>2</td>
                                <td>
                                    <button style="border: 1px solid #fec14f;" class="btn bg-warning-subtle text-warning btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Atur
                                    </button>
                                    <ul class="dropdown-menu" style="">
                                        <li>
                                            <a class="dropdown-item" href="/admin/proposal-diajukan/detail">Detail</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">Hasil review</a>
                                        </li>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Peningkatan Mutu Pendidikan di Desa</td>
                                <td>PKM Pengabdian Masyarakat</td>
                                <td>Dewi Lestari</td>
                                <td>Dr. Setyo Budi</td>
                                <td>1</td>
                                <td>
                                    <button style="border: 1px solid #fec14f;" class="btn bg-warning-subtle text-warning btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Atur
                                    </button>
                                    <ul class="dropdown-menu" style="">
                                        <li>
                                            <a class="dropdown-item" href="/admin/proposal-diajukan/detail">Detail</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">Hasil review</a>
                                        </li>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Pemberdayaan Ekonomi Kreatif</td>
                                <td>PKM Kewirausahaan</td>
                                <td>Ahmad Fauzi</td>
                                <td>Prof. Rina Suryani</td>
                                <td>2</td>
                                <td>
                                    <button style="border: 1px solid #fec14f;" class="btn bg-warning-subtle text-warning btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Atur
                                    </button>
                                    <ul class="dropdown-menu" style="">
                                        <li>
                                            <a class="dropdown-item" href="/admin/proposal-diajukan/detail">Detail</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">Hasil review</a>
                                        </li>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <!-- start row -->
                            <tr>
                                <th>Judul PKM</th>
                                <th>Jenis PKM</th>
                                <th>Ketua</th>
                                <th>Pembimbing</th>
                                <th>Jumlah Reiewer</th>
                                <th>Aksi</th>
                            </tr>
                            <!-- end row -->
                        </tfoot>
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