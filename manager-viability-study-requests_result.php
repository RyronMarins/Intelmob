<?php 

//======================================================================
// Funções
//======================================================================

//======================================================================
// Váriáveis recebidas
//======================================================================

$id = $_GET['id'];
?>


<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./assets/"
  data-template="vertical-menu-template">
  <head>
    <?php require('head.php'); ?>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php require('left_side_menu.php'); ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php require('navbar.php'); ?>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Content -->
            <!-- Content -->
            <!-- Content -->
            <!-- Content -->
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row invoice-preview">
                <!-- Invoice -->
                <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
                  <div class="card invoice-preview-card">
                    <div class="card-body">
                      <div
                        class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column m-sm-3 m-0">
                        <div class="mb-xl-0 mb-4">
                          <div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
                            <svg
                              width="32"
                              height="22"
                              viewBox="0 0 32 22"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                fill="#7367F0" />
                              <path
                                opacity="0.06"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                fill="#161616" />
                              <path
                                opacity="0.06"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                fill="#161616" />
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                fill="#7367F0" />
                            </svg>
                            <span class="app-brand-text fw-bold fs-4"> IntelMob </span>
                          </div>
                        </div>
                        <div>
                          <h4 class="fw-semibold mb-2">Solicitação #<?php echo $id; ?></h4>
                          <div class="mb-2 pt-1">
                            <span>Data de registro:</span>
                            <span class="fw-semibold">April 25, 2021</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <div class="row p-sm-3 p-0">
                        <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                          <h6 class="mb-3">Solicitante:</h6>
                          <p class="mb-1">[Dados do cliente]</p>
                          <p class="mb-1">[Dados do cliente]</p>
                          <p class="mb-1">[Dados do cliente]</p>
                          <p class="mb-1">[Dados do cliente]</p>
                          <p class="mb-0">[Dados do cliente]</p>
                        </div>
                      </div>
                    </div>

                    <hr class="my-0" />
                    <div class="card-body">
                      <div class="row p-sm-3 p-0">
                        <div class="col-xl-8 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                          <h6 class="mb-3">Dados da solicitação:</h6>

<p class="mb-1"><span>Área total do terreno:</span> <span class="fw-semibold">4000</span></p>
<p class="mb-1"><span>Preço do Terreno</span> <span class="fw-semibold">4000</span></p>
<p class="mb-1"><span>Custo médio de construção (por m2)</span> <span class="fw-semibold">4000</span></p>
<p class="mb-1"><span>Preço médio por metro quadrado</span> <span class="fw-semibold">4000</span></p>
<p class="mb-1"><span>Área Construída (em m2)</span> <span class="fw-semibold">4000</span></p>
<p class="mb-1"><span>Área Privativa Média (em m2)</span> <span class="fw-semibold">4000</span></p>
<p class="mb-1"><span>Preço de venda Médio por metro quadrado sugerido</span><span class="fw-semibold">4000</span></p>
<p class="mb-1"><span>Quantidade de Unidades Sugeridas</span> <span class="fw-semibold">4000</span></p>
<p class="mb-1"><span>Endereço completo</span> <span class="fw-semibold">4000</span></p>
<p class="mb-1"><span>Tipo</span> <span class="fw-semibold">4000</span></p>
<p class="mb-0"><span>Há permuta?</span> <span class="fw-semibold">4000</span></p>

                        </div>
                        <div class="col-xl-4 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                          <h6 class="mb-3">Resultado:</h6>
                          <p class="mb-1"><span>Preço de Venda Médio:</span> <span class="fw-semibold">4000</span></p>
                          <p class="mb-1"><span>VGV Estoque (Sem Juros):</span> <span class="fw-semibold">4000</span></p>
                        </div>

                      </div>
                    </div>

                    <div class="card-body mx-3">
                      <div class="row">
                        <div class="col-12">
                          <span class="fw-semibold">Note:</span>
                          <span
                            >It was a pleasure working with you and your team. We hope you will keep us in mind for
                            future freelance projects. Thank You!</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Invoice -->

                <!-- Invoice Actions -->
                <div class="col-xl-3 col-md-4 col-12 invoice-actions">
                  <div class="card">
                    <div class="card-body">
                      <button
                        class="btn btn-primary d-grid w-100 mb-2">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"
                          >Download PDF</span
                        >
                      </button>
                    </div>
                  </div>
                </div>
                <!-- /Invoice Actions -->
              </div>

              <!-- Offcanvas -->
              <!-- Send Invoice Sidebar -->
              <!-- /Send Invoice Sidebar -->

              <!-- Add Payment Sidebar -->
              <!-- /Add Payment Sidebar -->

              <!-- /Offcanvas -->
            </div>
            <!--/ Content -->
            <!-- / Content -->
            <!-- / Content -->
            <!-- / Content -->
            <!-- / Content -->

            <!-- Footer -->
            <?php require('footer.php'); ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="./assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="./assets/vendor/libs/hammer/hammer.js"></script>
    <script src="./assets/vendor/libs/i18n/i18n.js"></script>
    <script src="./assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="./assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="./assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="./assets/vendor/libs/swiper/swiper.js"></script>
    <script src="./assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="./assets/vendor/libs/select2/select2.js"></script>    

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="./assets/js/offcanvas-send-invoice.js"></script>
    <script src="./assets/js/forms-selects.js"></script>    
  </body>
</html>
