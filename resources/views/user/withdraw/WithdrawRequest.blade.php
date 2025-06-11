
        <section class="tf-section FAQs">
            <div class="container">
                <div class="row mt-xl-0 mt-lg-0 mt-md-0 mt-4">
                    <div class="project-info-form style">
                        <h6 class="title mb-3">Withdraw Fund</h6>
                        <div class="table-responsive">



                        <form method="post" action="" style="padding: 5px;">
                               
                            <label class="fz16 mb8 mt8">Choose Payment</label>

                            <div class="row">
                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_92"
                                        id="process_92" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_92"><img
                                            src="{{asset('')}}upnl/images/92.gif" align="absmiddle" style="width: 32px;"> Tether
                                        TRC20</label></div>

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_102"
                                        id="process_102" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_102"><img
                                            src="{{asset('')}}upnl/images/102.gif" align="absmiddle" style="width: 32px;"> Tether
                                        BEP20</label></div>
                            </div>

                            <div class="form-inner">
                                <fieldset class="mb22"><label class="fz16 mb8" for="add_Sum">Amount ($)</label>
                                    <fieldset><input type="text" name="amount" value=""placeholder="enter amount" class="pl14" required="">
                                    </fieldset>
                                </fieldset>
                                 <fieldset class="mb22"><label class="fz16 mb8" for="add_Sum">TRX Password</label>
                                    <fieldset><input type="password" name="trxpass" value="" placeholder="enter trx password" class="pl14" required="">
                                    </fieldset>
                                </fieldset>
                                <div class="topup__info">
                                    <div class="deposit-error-message" style="color: #ff00009e;"></div>
                                </div><br>
                                <div class="wrap-btn d-flex justify-content-center"><button type="submit" value="Spend"
                                        class="tf-button style2" style="margin-bottom: 30px;">MAKE A TRANSFER</button></div>
                            </div>

                        </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>
       