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
  <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body">
        <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
          <div class="mb-3 mb-sm-0">
            <h4 class="card-title fw-semibold">Top Reviewer
            </h4>
          </div>
          <div>
            <select class="form-select">
              <option value="1">March 2024</option>
              <option value="2">April 2024</option>
              <option value="3">May 2024</option>
              <option value="4">June 2024</option>
            </select>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table align-middle text-nowrap mb-0">
            <thead>
              <tr class="text-muted fw-semibold">
                <th scope="col" class="ps-0">Nama</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Jumlah Proposal Review</th>
              </tr>
            </thead>
            <tbody class="border-top">
              <tr>
                <td class="ps-0">
                  <div class="d-flex align-items-center">
                    <div class="me-2 pe-1">
                      <img src="<?= base_url(); ?>/assets/images/profile/user-3.jpg" class="rounded-circle" width="40" height="40" alt="modernize-img" />
                    </div>
                    <div>
                      <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                      <p class="fs-2 mb-0 text-muted">
                        NIDN: 829137131
                      </p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="mb-0 fs-3">Elite Admin</p>
                </td>
                <td>
                  <span class="badge fw-semibold py-1 bg-primary-subtle text-primary">213131</span>
                </td>
              </tr>
              <tr>
                <td class="ps-0">
                  <div class="d-flex align-items-center">
                    <div class="me-2 pe-1">
                      <img src="<?= base_url(); ?>/assets/images/profile/user-5.jpg" class="rounded-circle" width="40" height="40" alt="modernize-img" />
                    </div>
                    <div>
                      <h6 class="fw-semibold mb-1">John Deo</h6>
                      <p class="fs-2 mb-0 text-muted">
                        NIDN: 8219313131
                      </p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="mb-0 fs-3">Flexy Admin</p>
                </td>
                <td>
                  <span class="badge fw-semibold py-1 bg-warning-subtle text-warning">13141</span>
                </td>
              </tr>
              <tr>
                <td class="ps-0">
                  <div class="d-flex align-items-center">
                    <div class="me-2 pe-1">
                      <img src="<?= base_url(); ?>/assets/images/profile/user-6.jpg" class="rounded-circle" width="40" height="40" alt="modernize-img" />
                    </div>
                    <div>
                      <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                      <p class="fs-2 mb-0 text-muted">
                        NIDN: 83938131
                      </p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="mb-0 fs-3">Material Pro</p>
                </td>
                <td>
                  <span class="badge fw-semibold py-1 bg-info-subtle text-info">43435</span>
                </td>
              </tr>
              <tr>
                <td class="ps-0">
                  <div class="d-flex align-items-center">
                    <div class="me-2 pe-1">
                      <img src="<?= base_url(); ?>/assets/images/profile/user-7.jpg" class="rounded-circle" width="40" height="40" alt="modernize-img" />
                    </div>
                    <div>
                      <h6 class="fw-semibold mb-1">Yuvraj Sheth</h6>
                      <p class="fs-2 mb-0 text-muted">
                        NIDN: 831903131
                      </p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="mb-0 fs-3">Xtreme Admin</p>
                </td>
                <td>
                  <span class="badge fw-semibold py-1 bg-success-subtle text-success">11223</span>
                </td>
              </tr>
              <tr>
                <td class="border-0 ps-0">
                  <div class="d-flex align-items-center">
                    <div class="me-2 pe-1">
                      <img src="<?= base_url(); ?>/assets/images/profile/user-8.jpg" class="rounded-circle" width="40" height="40" alt="modernize-img" />
                    </div>
                    <div>
                      <h6 class="fw-semibold mb-1">Micheal Doe</h6>
                      <p class="fs-2 mb-0 text-muted">
                        NIDN: i2103131
                      </p>
                    </div>
                  </div>
                </td>
                <td class="border-0">
                  <p class="mb-0 fs-3">Helping Hands WP Theme</p>
                </td>
                <td class="border-0">
                  <span class="badge fw-semibold py-1 bg-danger-subtle text-danger">443</span>
                </td>
              </tr>
            </tbody>
          </table>
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