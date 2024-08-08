<?= $this->extend("/template/modernize.php"); ?>
<?= $this->section("konten"); ?>

<!--  Row 1 -->
<div class="row">
    <div class="card">
        <form class="form-horizontal">
            <div class="form-body">
                <div class="card-body">
                    <h5 class="card-title mb-0">Data Diri Ketua</h5>
                </div>
                <hr class="m-0" />
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="form-label text-end col-md-3">Nama:</label>
                                <div class="col-md-9">
                                    <p>Ahmad Setiawan</p>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="form-label text-end col-md-3">NIM:</label>
                                <div class="col-md-9">
                                    <p>D600160125</p>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="form-label text-end col-md-3">Prodi:</label>
                                <div class="col-md-9">
                                    <p>Teknik Industri</p>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="form-label text-end col-md-3">Email:</label>
                                <div class="col-md-9">
                                    <p>d600160125@student.ums.ac.id</p>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="form-label text-end col-md-3">Telepon:</label>
                                <div class="col-md-9">
                                    <p>08566766661</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <hr class="m-0" />
                <div class="card-body text-bg-light">
                    <h4 class="card-title mt-2 pb-3">Data Pembimbing</h4>
                    <div class="form-group mb-0">
                        <div class="row align-items-center">
                            <label for="inputSelectPembimbing" class="col-3 text-end col-form-label">Pilih Pembimbing</label>
                            <div class="col-9 border-start pb-2 pt-2">
                                <select class="select2 form-control" id="inputSelectPembimbing">
                                    <option>Select</option>
                                    <option value="sh050">sh050 | Sri Hartini</option>
                                    <option value="sh050">jb711 | Joko budiyanto</option>
                                    <option value="sh050">sk147 | Septriyani Kaswindiarti</option>
                                    <option value="hs118">hs118 | Heru Supriyono</option>\
                                    <option value="mah246">mah246 | Muhammad Al Fatih Hendrawan</option>\
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row align-items-center">
                            <label for="emailPembimbing" class="col-3 text-end  col-form-label">Email</label>
                            <div class="col-9 border-start pb-2 pt-2">
                                <input type="text" class="form-control" id="emailPembimbing" placeholder="Otomatis terisi jika pembimbing sudah terpilih" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row align-items-center">
                            <label for="nidnPembimbing" class="col-3 text-end  col-form-label">NIDN</label>
                            <div class="col-9 border-start pb-2 pt-2">
                                <input type="text" class="form-control" id="nidnPembimbing" placeholder="Otomatis terisi jika pembimbing sudah terpilih" disabled>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body text-bg-light">
                    <h4 class="card-title mt-2 pb-3">Data Anggota</h4>
                    <div class="form-group mb-0">
                        <div class="row align-items-center">
                            <label for="inputSelectAnggota" class="col-3 text-end col-form-label">Pilih Anggota</label>
                            <div class="col-9 border-start pb-2 pt-2">
                                <select class="select2 form-control" multiple="multiple" id="inputSelectAnggota">
                                    <option value="D600160001">D600160001 | Alice Johnson</option>
                                    <option value="D600160002">D600160002 | Brian Smith</option>
                                    <option value="D600160003">D600160003 | Clara Williams</option>
                                    <option value="D600160004">D600160004 | David Brown</option>
                                    <option value="D600160005">D600160005 | Emma Davis</option>
                                    <option value="D600160006">D600160006 | Felix Garcia</option>
                                    <option value="D600160007">D600160007 | Grace Lee</option>
                                    <option value="D600160008">D600160008 | Henry Martinez</option>
                                    <option value="D600160009">D600160009 | Isabella Taylor</option>
                                    <option value="D600160010">D600160010 | Jack Anderson</option>
                                    <option value="D600160011">D600160011 | Karen Thomas</option>
                                    <option value="D600160012">D600160012 | Liam Wilson</option>
                                    <option value="D600160013">D600160013 | Mia Moore</option>
                                    <option value="D600160014">D600160014 | Noah Harris</option>
                                    <option value="D600160015">D600160015 | Olivia Clark</option>
                                    <option value="D600160016">D600160016 | Peter Lewis</option>
                                    <option value="D600160017">D600160017 | Quinn Walker</option>
                                    <option value="D600160018">D600160018 | Rachel Hall</option>
                                    <option value="D600160019">D600160019 | Samuel Young</option>
                                    <option value="D600160020">D600160020 | Tara Allen</option>
                                    <option value="D600160021">D600160021 | Ulysses Wright</option>
                                    <option value="D600160022">D600160022 | Vanessa King</option>
                                    <option value="D600160023">D600160023 | William Scott</option>
                                    <option value="D600160024">D600160024 | Xena Green</option>
                                    <option value="D600160025">D600160025 | Yvonne Adams</option>
                                    <option value="D600160026">D600160026 | Zachary Nelson</option>
                                    <option value="D600160027">D600160027 | Ava Carter</option>
                                    <option value="D600160028">D600160028 | Ben Robinson</option>
                                    <option value="D600160029">D600160029 | Chloe Turner</option>
                                    <option value="D600160030">D600160030 | Daniel Parker</option>
                                    <option value="D600160031">D600160031 | Ella Mitchell</option>
                                    <option value="D600160032">D600160032 | Fiona Perez</option>
                                    <option value="D600160033">D600160033 | George Thompson</option>
                                    <option value="D600160034">D600160034 | Hannah White</option>
                                    <option value="D600160035">D600160035 | Isaac Harris</option>
                                    <option value="D600160036">D600160036 | Julia Adams</option>
                                    <option value="D600160037">D600160037 | Kevin Lee</option>
                                    <option value="D600160038">D600160038 | Leah Scott</option>
                                    <option value="D600160039">D600160039 | Michael Allen</option>
                                    <option value="D600160040">D600160040 | Nora Wilson</option>
                                    <option value="D600160041">D600160041 | Oliver Young</option>
                                    <option value="D600160042">D600160042 | Penelope Garcia</option>
                                    <option value="D600160043">D600160043 | Quincy Davis</option>
                                    <option value="D600160044">D600160044 | Rachel Johnson</option>
                                    <option value="D600160045">D600160045 | Steven Roberts</option>
                                    <option value="D600160046">D600160046 | Tina Evans</option>
                                    <option value="D600160047">D600160047 | Uriel Martinez</option>
                                    <option value="D600160048">D600160048 | Vanessa Harris</option>
                                    <option value="D600160049">D600160049 | William Brown</option>
                                    <option value="D600160050">D600160050 | Zoe Wilson</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body text-bg-light">
                    <h4 class="card-title mt-2 pb-3">Data PKM</h4>
                    <div class="form-group mb-0">
                        <div class="row align-items-center">
                            <label for="inputSelect1" class="col-3 text-end  col-form-label">Kategori PKM</label>
                            <div class="col-9 border-start pb-2 pt-2">
                                <select class="form-select" id="inputSelect1">
                                    <option>PKM 8 Bidang Pendanaan 2024</option>
                                    <option>PKM Insentif 2024</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row align-items-center">
                            <label for="inputSelect2" class="col-3 text-end  col-form-label">Skema PKM</label>
                            <div class="col-9 border-start pb-2 pt-2">
                                <select class="form-select" id="inputSelect2">
                                    <option value="" selected disabled>Pilih Skema</option>
                                    <option>Riset Eksakta</option>
                                    <option>Riset Sosial Humaniora</option>
                                    <option>Pengabdian Masyarakat</option>
                                    <option>Kewirausahaan</option>
                                    <option>Penerapan IPTEK</option>
                                    <option>Karsa Cipta</option>
                                    <option>Karya Inovatif</option>
                                    <option>Video Gagasan Konstruktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row align-items-center">
                            <label for="inputText4" class="col-3 text-end  col-form-label">Judul</label>
                            <div class="col-9 border-start pb-2 pt-2">
                                <input type="text" class="form-control" id="inputText4" placeholder="Tulis judul PKM mu">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row align-items-center">
                            <label for="inputGroupFile01" class="col-3 text-end  col-form-label">File Proposal (pdf, max 10 mb)</label>
                            <div class="col-9 border-start pb-2 pt-2">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-center">
                        <div class="col-12 justify-content-center">
                            <p class="text-center">
                                <button type="button" class="btn bg-danger-subtle text-danger ms-6">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Submit Proposal
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $(".select2").select2();

        $('#inputSelectPembimbing').on('change', function() {
            $('#nidnPembimbing').val("0609126401");
            $('#emailPembimbing').val(this.value + "@ums.ac.id");
        });
    });
</script>
<?= $this->endSection(); ?>

<?= $this->section("js_section"); ?>
<script src="<?= base_url(); ?>/assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/select2/dist/js/select2.min.js"></script>
<?= $this->endSection(); ?>