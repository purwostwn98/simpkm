<?= $this->extend("/template/modernize.php"); ?>
<?= $this->section("konten"); ?>
<!--  Owl carousel -->
<div class="owl-carousel counter-carousel owl-theme">
  <div class="item">
    <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
      <div class="card-body">
        <div class="text-center">
          <img src="<?= base_url(); ?>/assets/images/svgs/icon-user-male.svg" width="50" height="50" class="mb-3" alt="modernize-img" />
          <p class="fw-semibold fs-3 text-primary mb-1">
            Proposal diajukan
          </p>
          <h5 class="fw-semibold text-primary mb-0">96</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card border-0 zoom-in bg-warning-subtle shadow-none">
      <div class="card-body">
        <div class="text-center">
          <img src="<?= base_url(); ?>/assets/images/svgs/icon-briefcase.svg" width="50" height="50" class="mb-3" alt="modernize-img" />
          <p class="fw-semibold fs-3 text-warning mb-1">Proposal lolos</p>
          <h5 class="fw-semibold text-warning mb-0">37</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card border-0 zoom-in bg-info-subtle shadow-none">
      <div class="card-body">
        <div class="text-center">
          <img src="<?= base_url(); ?>/assets/images/svgs/icon-mailbox.svg" width="50" height="50" class="mb-3" alt="modernize-img" />
          <p class="fw-semibold fs-3 text-info mb-1">Proposal tidak lolos</p>
          <h5 class="fw-semibold text-info mb-0">356</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  Row 1 -->
<div class="row">
  <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body">
        <div>
          <h5 class="card-title fw-semibold mb-1">
            Jumlah Proposal Perbulan
          </h5>
          <div id="salary" class="mb-7 pb-8 mx-n4"></div>
          <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <div class="bg-primary-subtle rounded me-8 p-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-grid-dots text-primary fs-6"></i>
              </div>
              <div>
                <p class="fs-3 mb-0 fw-normal">Tertinggi</p>
                <h6 class="fw-semibold text-dark fs-4 mb-0">
                  34342
                </h6>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="text-bg-light rounded me-8 p-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-grid-dots text-muted fs-6"></i>
              </div>
              <div>
                <p class="fs-3 mb-0 fw-normal">Terendah</p>
                <h6 class="fw-semibold text-dark fs-4 mb-0">
                  909
                </h6>
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
<script src="<?= base_url(); ?>/assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/dashboards/dashboard.js"></script>
<?= $this->endSection(); ?>