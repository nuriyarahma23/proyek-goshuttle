<div class="row g-3">
            <div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 d-flex">
              <div class="info-box d-flex position-relative rounded flex-fill w-100 overflow-hidden gradient-five">
                <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l3 opacity-3"
                  style="width: 8rem; height: 8rem;"></div>
                <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l2 opacity-5"
                  style="width: 6.5rem; height: 6.5rem;"></div>
                <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l1 opacity-5"
                  style="width: 5rem; height: 5rem;"></div>
                <span class="info-box-icon d-flex align-self-center text-center">
                  
                  <img src="<?php echo base_url().'/public/image/icone/img/icon/png/supplier.png' ?>" alt="" height="64" width="64">
                </span>
                <div class="info-box-content d-flex flex-column justify-content-center">
                  <span class="info-box-text fw-bold fs-17px"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.trip") ?></span>
                  <span class="info-box-number d-block fw-black counter"><?php echo $todaytrip ?></span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <div class="progress-description fs-14"><i class="fa fa-caret-down"></i> <?php echo lang("Localize.today") ?></div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 d-flex">
              <div class="info-box d-flex position-relative rounded flex-fill w-100 overflow-hidden gradient-six"">
                          <div class=" position-br mb-n5 mr-n5 radius-round bgc-purple-l3 opacity-3"
                style="width: 8rem; height: 8rem;"></div>
              <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l2 opacity-5"
                style="width: 6.5rem; height: 6.5rem;"></div>
              <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l1 opacity-5"
                style="width: 5rem; height: 5rem;"></div>
              <span class="info-box-icon d-flex align-self-center text-center">
                <img src="<?php echo base_url().'/public/image/icone/img/icon/png/smartphone.png'?>" alt="" height="64" width="64">
                
              </span>
              <div class="info-box-content d-flex flex-column justify-content-center">
                <span class="info-box-text fw-bold fs-17px"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.ticket_booking") ?></span>
                <span class="info-box-number d-block fw-black counter"><?php echo $todaybooking; ?> </span>
                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <div class="progress-description fs-14"><i class="fa fa-caret-down"></i> <?php echo lang("Localize.today") ?></div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>




          <div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 d-flex">
            <div class="info-box d-flex position-relative rounded flex-fill w-100 overflow-hidden gradient-seven">
              <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l3 opacity-3"
                style="width: 8rem; height: 8rem;"></div>
              <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l2 opacity-5"
                style="width: 6.5rem; height: 6.5rem;"></div>
              <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l1 opacity-5"
                style="width: 5rem; height: 5rem;"></div>
              <span class="info-box-icon d-flex align-self-center text-center">
                <img src="<?php echo base_url().'/public/image/icone/img/icon/png/choices.png'?>" width="64">
                
              </span>
              <div class="info-box-content d-flex flex-column justify-content-center">
                <span class="info-box-text fw-bold fs-17px"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.booking") ?></span>
                <span class="info-box-number d-block fw-black counter"><?php echo $totalmoney; ?></span>
                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <div class="progress-description fs-14"><i class="fa fa-caret-down"></i> <?php echo lang("Localize.today") ?></div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-sm-6 col-md-12 col-lg-6 col-xl-3 d-flex">
            <div class="info-box d-flex position-relative rounded flex-fill w-100 overflow-hidden gradient-one">
              <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l3 opacity-3"
                style="width: 8rem; height: 8rem;"></div>
              <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l2 opacity-5"
                style="width: 6.5rem; height: 6.5rem;"></div>
              <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l1 opacity-5"
                style="width: 5rem; height: 5rem;"></div>
              <span class="info-box-icon d-flex align-self-center text-center">
                <img src=" <?php echo base_url().'/public/image/icone/img/icon/png/choices.png'?>" width="64">
               
              </span>
              <div class="info-box-content d-flex flex-column justify-content-center">
                <span class="info-box-text fw-bold fs-17px"><?php echo lang("Localize.total") ?> <?php echo lang("Localize.passanger") ?></span>
                <span class="info-box-number d-block fw-black counter"><?php echo $totalpassanger; ?></span>
                <div class="progress">
                  <div class="progress-bar w-75"></div>
                </div>
                <div class="progress-description fs-14"><i class="fa fa-caret-down"></i> <?php echo lang("Localize.today") ?></div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>






          <div class="col-xl-6 d-flex">
            <div class="card flex-fill w-100">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="fs-17 fw-semi-bold mb-0"> <?php echo lang("Localize.income_expense") ?> <?php echo lang("Localize.yearly") ?></h6>
                  </div> 
                </div>
              </div>
              <div class="card-body">
                <div id="apexMixedChart"></div>
              </div>
            </div>
          </div>




          <div class="col-xl-6 d-flex">
            <div class="card flex-fill w-100">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="fs-17 fw-semi-bold mb-0"> <?php echo lang("Localize.income_expense") ?> <?php echo lang("Localize.weekly") ?> </h6>
                  </div>
                 
                </div>
              </div>
              <div class="card-body">
                <div id="timelineChart"></div>
              </div>
            </div>
          </div>




          <div class="col-xl-4 d-flex">
            <div class="card flex-fill w-100">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="fs-17 fw-semi-bold mb-0"><?php echo lang("Localize.tranjection") ?> <?php echo lang("Localize.payment_gateway") ?> </h6>
                  </div>
                  
                </div>
              </div>
              <div class="card-body">
                <div id="monochromeChart"></div>
              </div>
            </div>
          </div>


          <div class="col-xl-8 d-flex">
            <div class="card flex-fill w-100">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="fs-17 fw-semi-bold mb-0"><?php echo lang("Localize.income_expense") ?> <?php echo lang("Localize.monthly") ?> </h6>
                  </div>
                  
                </div>
              </div>
              <div class="card-body">
                <div id="lineChart"></div>
              </div>
            </div>
          </div>

          <div class="col-xl-6 d-flex">
            <div class="card flex-fill w-100">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="fs-17 fw-semi-bold mb-0"><?php echo lang("Localize.ticket_booking") ?> <?php echo lang("Localize.monthly") ?> </h6>
                  </div>
                  
                </div>
              </div>
              <div class="card-body">
                <div id="gradientLineArea"></div>
              </div>
            </div>
          </div>



          <div class="col-xl-6 d-flex">
            <div class="card flex-fill w-100">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="fs-17 fw-semi-bold mb-0"> <?php echo lang("Localize.ticket_booking") ?> <?php echo lang("Localize.agent") ?> </h6>
                  </div>
                 
                </div>
              </div>
              <div class="card-body">
                <div id="barChart"></div>
              </div>
            </div>
          </div>




<input type="hidden" id="year" name="year"  value="<?php echo $year  ?>" >
<input type="hidden" id="yearincome" name="yearincome"  value="<?php echo $income  ?>" >
<input type="hidden" id="yearexpense" name="yearexpense"  value="<?php echo $expense  ?>" >

<input type="hidden" id="monthincome" name="monthincome"  value="<?php echo $monthincome  ?>" >
<input type="hidden" id="monthexpense" name="monthexpense"  value="<?php echo $monthexpense  ?>" >


<input type="hidden" id="weekincome" name="weekincome"  value="<?php echo $weekincome  ?>" >
<input type="hidden" id="weekexpense" name="weekexpense"  value="<?php echo $weekexpense  ?>" >

<input type="hidden" id="paylable" name="paylable"  value="<?php echo $paylable  ?>" >
<input type="hidden" id="paydata" name="paydata"  value="<?php echo $paydata  ?>" >

<input type="hidden" id="agentlable" name="agentlable"  value="<?php echo $agentLable  ?>" >
<input type="hidden" id="agentamount" name="agentamount"  value="<?php echo $agentAmount  ?>" >

<input type="hidden" id="ticketbook" name="ticketbook"  value="<?php echo $bookticket  ?>" >

