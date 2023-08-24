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
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row invoice-add">
                <!-- Invoice Add-->
                <div class="col-lg-9 col-12 mb-lg-0 mb-4">
                  <div class="card invoice-preview-card">
                    <div class="card-body">
                      <div class="row m-sm-4 m-0">
                        <div class="col-md-7 mb-md-0 mb-4 ps-0">
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
                          <p class="mb-2">[Dados do cliente]</p>
                          <p class="mb-2">[Dados do cliente]</p>
                          <p class="mb-3">[Dados do cliente]</p>
                        </div>
                        <div class="col-md-5">
                          <dl class="row mb-2">
                            <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                              <span class="h4 text-capitalize mb-0 text-nowrap">ID</span>
                            </dt>
                            <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                              <div class="input-group input-group-merge disabled w-px-150">
                                <span class="input-group-text">#</span>
                                <input
                                  type="text"
                                  class="form-control"
                                  disabled
                                  placeholder="3905"
                                  value="3905"
                                  id="invoiceId" />
                              </div>
                            </dd>
                            <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                              <span class="fw-normal">Date:</span>
                            </dt>
                            <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                              <input type="text" class="form-control w-px-150 date-picker" placeholder="YYYY-MM-DD" />
                            </dd>
                          </dl>
                        </div>
                      </div>

                      <hr class="my-3 mx-n4" />

                      <div class="row p-sm-4 p-0">
                        <div class="col-md-12 col-sm-12 col-12 mb-sm-0 mb-4">
                          <h6 class="mb-4">Instruções:</h6>
                          <p class="mb-1">1 - Preencha o formulário...</p>
                          <p class="mb-1">2 - Ao concluir, clique em Registrar Solicitação</p>
                        </div>
                      </div>

                      <hr class="my-3 mx-n4" />

                      <div class="row p-0 p-sm-4">
                  <div class="card mb-4">
                    <h5 class="card-header">Formulário de Solicitação de Estudo de Viabilidade</h5>
                    <div class="card-body">

                      <div class="mb-3 row">
                        <label for="html5-data1-input" class="col-md-3 col-form-label">Área total do terreno</label>
                        <div class="col-md-9">
                          <input class="form-control" type="number" id="html5-data1-input" required />
                        </div>
                      </div>


                      <div class="mb-3 row">
                        <label for="html5-data2-input" class="col-md-3 col-form-label">Preço do Terreno</label>
                        <div class="col-md-9">
                          <input class="form-control" type="number" min="1" step="any" id="html5-data2-input" required />
                        </div>
                      </div>


                      <div class="mb-3 row">
                        <label for="html5-data2-input" class="col-md-3 col-form-label">Custo médio de construção (por m2)</label>
                        <div class="col-md-9">
                          <input class="form-control" type="number" min="1" step="any" id="html5-data2-input" required />
                        </div>
                      </div>                      


                      <div class="mb-3 row">
                        <label for="html5-data3-input" class="col-md-3 col-form-label">Preço médio por metro quadrado</label>
                        <div class="col-md-9">
                          <input class="form-control" type="number" min="1" step="any" id="html5-data3-input" required />
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="html5-data7-input" class="col-md-3 col-form-label">Área Construída (em m2)</label>
                        <div class="col-md-9">
                          <input class="form-control" type="number" min="1" step="any" id="html5-data7-input" required />
                        </div>
                      </div>                      

                      <div class="mb-3 row">
                        <label for="html5-data4-input" class="col-md-3 col-form-label">Área Privativa Média (em m2)</label>
                        <div class="col-md-9">
                          <input class="form-control" type="number" min="1" step="any" id="html5-data4-input" required />
                        </div>
                      </div>


                      <div class="mb-3 row">
                        <label for="html5-data5-input" class="col-md-3 col-form-label">Preço de venda Médio por metro quadrado sugerido</label>
                        <div class="col-md-9">
                          <input class="form-control" type="number" min="1" step="any" id="html5-data5-input" required />
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="html5-data6-input" class="col-md-3 col-form-label">Quantidade de Unidades Sugeridas</label>
                        <div class="col-md-9">
                          <input class="form-control" type="number" id="html5-data6-input" required />
                        </div>
                      </div>




                      <div class="mb-3 row">
                        <label for="Textarea1" class="col-md-3 col-form-label">Endereço completo</label>
                        <div class="col-md-9">
                          <textarea class="form-control" id="Textarea1" rows="3"></textarea>
                        </div>
                      </div>


                      <div class="mb-3 row">
                        <label for="select2Basic" class="col-md-3 col-form-label">Tipo</label>
                        <div class="col-md-9">
                          <select id="select2Basic" class="select2 form-select form-select-lg" data-allow-clear="true" required>
                          <option value="Mall">Mall</option>
                          <option value="Hospital">Hospital</option>
                          <option value="Centro de Lojas">Centro de Lojas</option>
                          <option value="Centro de Serviços">Centro de Serviços</option>
                          <option value="Industrial">Industrial</option>
                          <option value="Logistico">Logistico</option>
                          <option value="Condomínio Horizontal">Condomínio Horizontal</option>
                          <option value="Condomínio Vertical">Condomínio Vertical</option>
                          <option value="Multipropriedade">Multipropriedade</option>
                          <option value="Hotel">Hotel</option>
                          </select>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="html5-data6-input" class="col-md-3 col-form-label">Há permuta?</label>
                        <div class="col-md-9">
                        <div class="form-check form-check-inline mt-3">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                          <label class="form-check-label" for="inlineCheckbox1">Física</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                          <label class="form-check-label" for="inlineCheckbox2">Financeira</label>
                        </div>
                        </div>
                      </div>                      




                    </div>
                  </div>


                  <!-- File input -->
                  <div class="card">
                    <h5 class="card-header">Anexos</h5>
                    <div class="card-body">

                      <div class="mb-3">
                        <label for="formFile" class="form-label">Arquivo do projeto</label>
                        <input class="form-control" type="file" id="formFile" />
                        <div id="defaultFormControlHelp" class="form-text">
                          Adicione o arquivo .pdf ou .zip do projeto.
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label">Localização do terreno</label>
                        <input class="form-control" type="file" id="formFile" />
                        <div id="defaultFormControlHelp" class="form-text">
                          Adicione um arquivo .zip contendo arquivo .KMZ com a localiação do terreno.
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Matrícula do Terreno</label>
                        <input class="form-control" type="file" id="formFile" />
                        <div id="defaultFormControlHelp" class="form-text">
                          Adicione o arquivo .pdf da matrícula do terreno.
                        </div>                        
                      </div>
                    </div>
                  </div>


                      </div>

                      <hr class="my-3 mx-n4" />

                      <div class="row px-0 px-sm-4">
                        <div class="col-12">
                        <div class="row">
                          <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registrar Solicitação</button>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Invoice Add-->

                <!-- Invoice Actions -->
                <div class="col-lg-3 col-12 invoice-actions">
                  <div class="card mb-4">
                    <div class="card-body">
                      <button
                        class="btn btn-primary d-grid w-100 mb-2"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"
                          >Registrar Solicitação</span
                        >
                      </button>
                    </div>
                  </div>

                </div>
                <!-- /Invoice Actions -->
              </div>

              <!-- Offcanvas -->
              <!-- Send Invoice Sidebar -->
              <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
                <div class="offcanvas-header my-1">
                  <h5 class="offcanvas-title">Send Invoice</h5>
                  <button
                    type="button"
                    class="btn-close text-reset"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 flex-grow-1">
                  <form>
                    <div class="mb-3">
                      <label for="invoice-from" class="form-label">From</label>
                      <input
                        type="text"
                        class="form-control"
                        id="invoice-from"
                        value="shelbyComapny@email.com"
                        placeholder="company@email.com" />
                    </div>
                    <div class="mb-3">
                      <label for="invoice-to" class="form-label">To</label>
                      <input
                        type="text"
                        class="form-control"
                        id="invoice-to"
                        value="qConsolidated@email.com"
                        placeholder="company@email.com" />
                    </div>
                    <div class="mb-3">
                      <label for="invoice-subject" class="form-label">Subject</label>
                      <input
                        type="text"
                        class="form-control"
                        id="invoice-subject"
                        value="Invoice of purchased Admin Templates"
                        placeholder="Invoice regarding goods" />
                    </div>
                    <div class="mb-3">
                      <label for="invoice-message" class="form-label">Message</label>
                      <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">
Dear Queen Consolidated,
          Thank you for your business, always a pleasure to work with you!
          We have generated a new invoice in the amount of $95.59
          We would appreciate payment of this invoice by 05/11/2021</textarea
                      >
                    </div>
                    <div class="mb-4">
                      <span class="badge bg-label-primary">
                        <i class="ti ti-link ti-xs"></i>
                        <span class="align-middle">Invoice Attached</span>
                      </span>
                    </div>
                    <div class="mb-3 d-flex flex-wrap">
                      <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
                      <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /Send Invoice Sidebar -->

              <!-- /Offcanvas -->


            </div>
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
