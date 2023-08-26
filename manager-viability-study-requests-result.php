<?php 

if($_POST){

  //$nextDays = $_POST['nextDays'];

}else{


}

/////////////////////////////////////////////////
$numContracts = 0; // Variable to store the sum
$sumContracts = 0; // Variable to store the sum
$numPrevContracts = 0; // Variable to store the sum
$sumPrevContracts = 0; // Variable to store the sum
$numClients = 0; // Variable to store the sum
$numPrevClients = 0; // Variable to store the sum
$sumDespesas = 0; // Variable to store the sum


?>

<!DOCTYPE html>

<html
  lang="en"
  class="dark-style layout-navbar-fixed layout-menu-fixed"
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

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">PREVISÃO DE </span> RESULTADOS</h4>



              <!-- DataTable with Buttons -->
              <div class="card mb-4">
                <h5 class="card-header">DESCRIÇÃO DO EMPREENDIMENTO - 100% VENDA</h5>



                <div class="card-datatable table-responsive">
                  <table class="table table-striped" style="width:100%">
                    <thead>
                      <tr>
                        <th>Área Privativa Média</th>
                        <th>x</th>
                        <th>Preço Médio/m²</th>
                        <th>=</th>
                        <th>Preço de Venda Médio</th>
                        <th>X</th>
                        <th>Unid. Estoque</th>
                        <th>+</th>
                        <th>Vagas Extras</th>
                        <th>=</th>
                        <th>VGV Estoque (Sem Juros)</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php

                      $celldata = 'test';
                      
                      echo '

                      <tr>
                        <td>1.044,18</td>
                        <td>x</td>
                        <td>16.000</td>
                        <td>=</td>
                        <td>16.706.816</td>
                        <td>X</td>
                        <td>13</td>
                        <td>+</td>
                        <td>0</td>
                        <td>=</td>
                        <td>217.188.605</td>
                      </tr>
                      ';
                      ?>


                    </tbody>

                  </table>
                </div>



              </div>
              <!-- Modal to add new record -->
              <!--/ DataTable with Buttons -->




              <!-- DataTable with Buttons -->
              <div class="card mb-4">
                <h5 class="card-header">RESULTADO</h5>
                <div class="card-datatable table-responsive pt-0">
                  <table class="table table-striped" style="width:100%">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php

                      $celldata = 'test';

                      echo '

                      <tr>
                      <td>Participação</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Custo Raso da Unidade</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Períodos de Venda (meses)</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Valor Pago no Terreno</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Custo Efetivo Terreno (Obra)</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Custo Efetivo Terreno (Venda)</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Investimento Máximo (Saldo)</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Investimento Total (Saldo)</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>EBITDA</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Margem Resultado Bruto</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Margem EBITDA</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>VPL (0,00%)</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Exposição Máxima (14º mês)</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Exposição Média (16º meses)</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Ponto de Equilíbrio (5 Unid.)</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>VPL / Receita</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>VPL / Terreno</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>VPL / Exp. Máxima</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>VPL / Inv. Máximo</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>VPL / Inv. Total</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>TIR Inv. x Ret. (a.a.)</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>TIR Inv. x Ret. (a.m.)</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Pay-Back</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>% taxa de juros do Fundo</td>
                      <td>0000</td>
                      <td></td>
                      </tr>
                      <tr>
                      <td>Ganho do Terrenista</td>
                      <td>0000</td>
                      <td></td>
                      </tr>



                      ';




                      ?>


                    </tbody>

                  </table>
                </div>
              </div>
              <!-- Modal to add new record -->
              <!--/ DataTable with Buttons -->


              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Receita c/ Vendas</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>Receita c/ Vendas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->



              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Receita Bruta</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Receita Bruta</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->



              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Impostos</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>IBTI, Escritura, Registro, Iptu (Obra), Advogado</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>                      
                      <tr>
                        <th>Comissão de Vendas Terreno</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->




              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Comissão</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Comissão s/ Venda</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->




              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Receita Líquida</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Receita Líquida</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->




              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>LandBank</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Pagamento á Vista Terreno Cidade Jardim</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->


              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Obra</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Custo de Obra Raso</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                      <tr>
                        <th>Taxa Administração Obra</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                      <tr>
                        <th>Custos Eventuais Obra</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>                      

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->





              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Gerenciamento</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Gestão Imobiliária</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                      <tr>
                        <th>Taxa Desenvolvimento imobi</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>
             
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->



              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Incorporação</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Taxa de Administração s/ Carteira</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                      <tr>
                        <th>Arquitetura e Engenharia</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>
             
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->


              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Resultado Bruto</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Resultado Bruto</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->


              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Despesas Comerciais</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Propaganda (% Propaganda)</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>
                      <tr>
                        <th>Casa Modelo In House</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>
                      <tr>
                        <th>Marketing</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>                      
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->


              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>EBITDA</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>EBITDA</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->


              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Funding</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Retorno Funding (Juros)</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->



              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Resultado Operacional</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Resultado Operacional</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->


              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Impostos</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>RET (4%)</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->


              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Saldo</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Saldo</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->



              <!-- Hoverable Table rows -->
              <div class="card mb-4">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>Saldo pós-Juros</th>
                        <th>Encargos</th>
                        <th>%</th>
                        <th>A Realizar</th>
                        <th>Inflação</th>
                        <th>%</th>
                        <th>Total Nominal</th>
                        <th>Total Indexado</th>
                        <th>Total VP</th>
                        <th>% VGV</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <th>Saldo pós-Juros</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>217.189</td>
                        <td></td>
                        <td>100%</td>
                        <td>217.189</td>
                        <td>217.189</td>
                        <td>100%</td>    
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->



            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="fw-semibold">Pixinvent</a>
                  </div>
                  <div>
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
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
    <script src="./assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="./assets/vendor/libs/select2/select2.js"></script>    
    <script src="./assets/vendor/libs/sweetalert2/sweetalert2.js"></script>           
    <!-- Flat Picker -->
    <script src="./assets/vendor/libs/moment/moment.js"></script>
    <script src="./assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <!-- Form Validation -->
    <script src="./assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="./assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="./assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->


<script type="text/javascript">

/**
 * DataTables Basic
 */

$(document).ready(function () {
    $('#table').DataTable({
      
      dom: 'Bfrtip',
      dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      displayLength: 25,
      lengthMenu: [25, 50, 75, 100],     
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-label-primary dropdown-toggle me-2',
          text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Exportar</span>',
          buttons: [

          ]
        },
        {
          text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Novo Cliente</span>',
          className: 'create-new btn btn-primary',
          action: function () {
            // Open the PHP file when the button is clicked
            window.location.href = 'client_new.php';
          }          
        }        
      ]
        });
$('div.head-label').html('<h5 class="card-title mb-0">Clientes</h5>');
});


</script>








<script type="text/javascript">

var groupColumn = 0;
var table = $('#row-grouping-table').DataTable({
    columnDefs: [{ visible: false, targets: groupColumn }],
    ordering: false, // Disable ordering
    displayLength: 25,
    drawCallback: function (settings) {
        var api = this.api();
        var rows = api.rows({ page: 'current' }).nodes();
        var last = null;
 
        api
            .column(groupColumn, { page: 'current' })
            .data()
            .each(function (group, i) {
                if (last !== group) {
                    $(rows)
                        .eq(i)
                        .before('<tr class="group"><td colspan="10">' + group + '</td></tr>');
 
                    last = group;
                }
            });
    },
});
 
// Order by the grouping
$('#row-grouping-table tbody').on('click', 'tr.group', function () {
    var currentOrder = table.order()[0];
    if (currentOrder[0] === groupColumn && currentOrder[1] === 'asc') {
        table.order([groupColumn, 'desc']).draw();
    } else {
        table.order([groupColumn, 'asc']).draw();
    }
});



</script>





        <?php
            //Dispara as mensagens via sweetAlert
            if (isset($_SESSION['mensagem'])) {
                echo $_SESSION['mensagem'];
                unset($_SESSION['mensagem']);
            }
        ?> 

  </body>
</html>
