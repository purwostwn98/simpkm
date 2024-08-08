<?= $this->extend("/template/modernize.php"); ?>
<?= $this->section("konten"); ?>
<style>
    .alert-custom {
        font-size: 1.1em;
    }

    .progress {
        height: 30px;
    }

    .progress-bar {
        font-weight: bold;
    }
</style>

<div class="container-fluid">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Detail Proposal Diajukan</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="../main/index.html">Home</a>
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
                <button class="nav-link position-relative active rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security" aria-selected="true">
                    <i class="ti ti-article me-2 fs-6"></i>
                    <span class="d-none d-md-block">Kirim Review</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link position-relative rounded-0  d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account" aria-selected="false">
                    <i class="ti ti-user-circle me-2 fs-6"></i>
                    <span class="d-none d-md-block">Detail Proposal</span>
                </button>
            </li>
        </ul>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show " id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
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
                                                    <input type="text" class="form-control" id="exampleInputtext" value="FKI" disabled placeholder="Mathew Anderson">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputtext" class="form-label">Prodi</label>
                                                    <input type="text" class="form-control" id="exampleInputtext" value="Informatika" disabled placeholder="Mathew Anderson">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div>
                                                    <label for="exampleInputtext4" class="form-label">Dokument Proposal</label>
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
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-0 fw-normal">2</p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0 fw-normal">30 April 2024 21:01:54</p>
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

                <div class="tab-pane active fade show" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab" tabindex="0">
                    <div class="row">

                        <div class="card">
                            <div class="card-header text-bg-primary">
                                <h5 class="mb-0 text-white">Form Penilaian Proposal</h5>
                            </div>
                            <form class="form-horizontal">
                                <div class="form-body">
                                    <div class="card-body">
                                        <h5 class="card-title mb-0">Informasi pada Kontribusi</h5>
                                    </div>
                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group row">
                                                    <label class="form-label text-end col-md-3">Judul :</label>
                                                    <div class="col-md-9">
                                                        <p>Analisis Ergonomi Desain Meja Gerinda Tangan Pada Proses Finishing Departemen Foundry Dengan Antropometri dan Ergonomi (Studi Kasus : PT. Sinar Agung Selalu Sukses)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="form-label text-end col-md-3">ID Kontribusi:</label>
                                                    <div class="col-md-9">
                                                        <p>106</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="form-label text-end col-md-3">Bidang Ditunjuk:</label>
                                                    <div class="col-md-9">
                                                        <p>PKM 8 Bidang Pendanaan Tahun 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="form-label text-end col-md-3">Kata kunci:</label>
                                                    <div class="col-md-9">
                                                        <p>0601057501</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                    </div>
                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <h5 class="card-title mb-0">Kontribusi dari kiriman</h5>
                                    </div>
                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="form-label text-end col-md-3">Kontribusi dari kiriman:</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control p-7" name="" id="exampleInputText29" cols="20" rows="7" placeholder="Silahkan berikan garis besar secara singkat kontribusi utama dari kiriman ini."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <h5 class="card-title mb-0">Pemberian poin berdasarkan berbagai kriteria</h5>
                                    </div>
                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="form-label text-end col-md-3">* Kreativitas</label>
                                                    <div class="col-md-9">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1"> 10 - Sangat Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">08 - Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">06 - Cukup Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">04 - Kurang Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">02 - Tidak Baik</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-success" role="alert">
                                                            <h4 class="alert-heading">Penilaian Kreativitas PKM</h4>
                                                            <p>Berikut adalah kriteria penilaian untuk masing-masing jenis PKM:</p>
                                                            <ol>
                                                                <li><strong>PKM-RE dan PKM-RSH:</strong> Gagasan, Rumusan, Pustaka</li>
                                                                <li><strong>PKM-K:</strong> Unik, Unggul, Peluang Pasar</li>
                                                                <li><strong>PKM-PM:</strong> Rumusan, Solutif, Sasaran</li>
                                                                <li><strong>PKM-PI:</strong> Mutakhir, Solutif, Mitra</li>
                                                                <li><strong>PKM-KC:</strong> Orisinal, Mutakhir</li>
                                                                <li><strong>PKM-KI:</strong> Karya, Inovasi</li>
                                                                <li><strong>PKM-VGK:</strong> Video, Gagasan, Konstruksi</li>
                                                            </ol>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="form-label text-end col-md-3">* Potensi Program</label>
                                                    <div class="col-md-9">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1"> 10 - Sangat Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">08 - Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">06 - Cukup Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">04 - Kurang Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">02 - Tidak Baik</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-success" role="alert">
                                                            <h4 class="alert-heading">Penilaian Potensi Program PKM</h4>
                                                            <p>Berikut adalah kriteria penilaian untuk masing-masing jenis PKM:</p>
                                                            <ol>
                                                                <li><strong>PKM-R:</strong> Kontribusi IPTEK, potensi dan prediksi</li>
                                                                <li><strong>PKM-K:</strong> Peluang profit, kelayakan, keberlanjutan</li>
                                                                <li><strong>PKM-PM:</strong> Nilai tambah, keberlanjutan</li>
                                                                <li><strong>PKM-PI:</strong> Nilai tambah, keberlanjutan</li>
                                                                <li><strong>PKM-KC:</strong> Kontribusi Produk, potensi artikel/HKI</li>
                                                                <li><strong>PKM-KI:</strong> Manfaat keberlanjutan</li>
                                                                <li><strong>PKM-VGK:</strong> Peluang terwujudnya gagasan</li>
                                                            </ol>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="form-label text-end col-md-3">* Administrasi</label>
                                                    <div class="col-md-9">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1"> 10 - Sangat Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">08 - Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">06 - Cukup Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">04 - Kurang Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">02 - Tidak Baik</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-success" role="alert">
                                                            <h4 class="alert-heading">Penilaian Administrasi PKM</h4>
                                                            <p>Berikut adalah kriteria penilaian untuk masing-masing jenis PKM:</p>
                                                            <ol>
                                                                <li>(kelengkapan ketentuan umum, kelengkapan sistematika isi, tata tulis)
                                                                    20% </li>
                                                            </ol>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <h5 class="card-title mb-0">Komentar pada kiriman</h5>
                                    </div>
                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="form-label text-end col-md-3">Komentar untuk penulis:</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control p-7" name="" id="exampleInputText29" cols="20" rows="7" placeholder="Mohon diuraikan saran untuk penulis agar proposal PKM lebih sempurna dan bisa didanai."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <h5 class="card-title mb-0">Informasi untuk komisi program</h5>
                                    </div>
                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="form-label text-end col-md-3">* Kedekatan reviewer dengan bidang </label>
                                                    <div class="col-md-9">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="10">
                                                            <label class="form-check-label" for="inlineRadio1">10 - Sangat kenal dengan bidang, keahlian saya</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="8">
                                                            <label class="form-check-label" for="inlineRadio2">08 - Pengetahuan Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="6">
                                                            <label class="form-check-label" for="inlineRadio3">06 - Cukup familiar</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4">
                                                            <label class="form-check-label" for="inlineRadio4">04 - Kurang familiar</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="2">
                                                            <label class="form-check-label" for="inlineRadio5">02 - Tidak terlalu familiar</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="0">
                                                            <label class="form-check-label" for="inlineRadio6">00 - Merupakan hal baru bagi saya</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <hr class="m-0" />
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="form-label text-end col-md-3">Komentar internal :</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control p-7" name="" id="exampleInputText29" cols="20" rows="7" placeholder="Mohon diberikan rekomendasi terkait artikel (diterima tanpa perbaikan/diterima dengan perbaikan/ditolak).."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions border-top">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="ti ti-save fs-5"></i>
                                                                Save
                                                            </button>
                                                            <button type="button" class="btn bg-danger-subtle text-danger ms-6">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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