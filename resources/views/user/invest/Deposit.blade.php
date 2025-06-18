   <style>
            .deposit-button {
                background-color: #181818;
                border-color: #181818;
                text-align: left;
                width: 100%;
            }

            .btn-check:checked+.btn,
            .btn.active,
            .btn:first-child:active,
            :not(.btn-check)+.btn:active {
                background-color: #414433;
                border-color: #deff10;
            }
        </style>
        <section class="tf-section FAQs mb-5 mb-xl-2 mb-lg-2">
            <div class="container">
                <div class="row mt-xl-0 mt-lg-0 mt-4">
                    <div class="project-info-form style deposit">
                                          <div class="row justify-content-center align-items-center">

                       <div class="col-12 col-sm-6 col-lg-4 pt-5 pb-4">
                                            
                      <div class="qrcode text-center">
 <img src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data={{ urlencode($data['address_in']) }}" alt="QR Code" style="max-width: 200px;">                    </div>
<div class="mt-3 text-center text-muted">
    <strong>Minimum deposit:</strong> 100 USDT
  </div>                      </div>
                    </div>
                                        </div>



                    </div>
                </div>
            </div>
        </section>