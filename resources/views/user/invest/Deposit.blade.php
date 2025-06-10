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
                        <h6 class="title mb-3">Make a Deposit</h6>


                        <script language="javascript">< !-
                                function openCalculator(id) {

                                    w = 225; h = 400;
                                    t = (screen.height - h - 30) / 2;
                                    l = (screen.width - w - 30) / 2;
                                    window.open('?a=calendar&type=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" + w + ",height=" + h + ",resizable=1,scrollbars=0");



                                    for (i = 0; i < document.spendform.h_id.length; i++) {
                                        if (document.spendform.h_id[i].value == id) {
                                            document.spendform.h_id[i].checked = true;
                                        }
                                    }



                                }

                            function updateCompound() {
                                var id = 0;
                                var tt = document.spendform.h_id.type;
                                if (tt && tt.toLowerCase() == 'hidden') {
                                    id = document.spendform.h_id.value;
                                } else {
                                    for (i = 0; i < document.spendform.h_id.length; i++) {
                                        if (document.spendform.h_id[i].checked) {
                                            id = document.spendform.h_id[i].value;
                                        }
                                    }
                                }

                                var cpObj = document.getElementById('compound_percents');
                                if (cpObj) {
                                    while (cpObj.options.length != 0) {
                                        cpObj.options[0] = null;
                                    }
                                }

                                if (cps[id] && cps[id].length > 0) {
                                    document.getElementById('coumpond_block').style.display = '';

                                    for (i in cps[id]) {
                                        cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                                    }
                                } else {
                                    document.getElementById('coumpond_block').style.display = 'none';
                                }
                            }
                            var cps = {};
                            -></script>





                        <form method="post" name="spendform"><input type="hidden" name="form_id"
                                value="17490195733744"><input type="hidden" name="form_token"
                                value="75aa22721d3dec37c5ec0500f884d917">
                            <input type="hidden" name="a" value="deposit">
                            <label class="fz16 mb8">Choose Investment Plan</label>
                            <div class="row">
                                <div class="col-lg-12 col-6">
                                    <select name="h_id">
                                        <option name="type" value="1" checked="">1.1%-3.3% daily for 15 days</option>
                                        <option name="type" value="2" checked="">4.5%-6.5% daily for 30 days</option>
                                        <option name="type" value="3" checked="">8.2%-10% daily for 20 days</option>
                                    </select>
                                </div>
                            </div>
                            <label class="fz16 mb8 mt8">Choose Payment</label>
                            <div class="row">

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_51"
                                        id="process_51" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_51"><img
                                            src="images/51.gif" align="absmiddle" style="width: 32px;"> ePayCore</label>
                                </div>

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_48"
                                        id="process_48" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_48"><img
                                            src="images/48.gif" align="absmiddle" style="width: 32px;"> Bitcoin</label>
                                </div>

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_68"
                                        id="process_68" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_68"><img
                                            src="images/68.gif" align="absmiddle" style="width: 32px;"> Litecoin</label>
                                </div>

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_79"
                                        id="process_79" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_79"><img
                                            src="images/79.gif" align="absmiddle" style="width: 32px;"> Dogecoin</label>
                                </div>

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_69"
                                        id="process_69" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_69"><img
                                            src="images/69.gif" align="absmiddle" style="width: 32px;"> Ethereum</label>
                                </div>

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_72"
                                        id="process_72" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_72"><img
                                            src="images/72.gif" align="absmiddle" style="width: 32px;"> Ripple</label>
                                </div>

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_85"
                                        id="process_85" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_85"><img
                                            src="images/85.gif" align="absmiddle" style="width: 32px;"> Tron</label>
                                </div>

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_94"
                                        id="process_94" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_94"><img
                                            src="images/94.gif" align="absmiddle" style="width: 32px;"> BNB</label>
                                </div>

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_82"
                                        id="process_82" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_82"><img
                                            src="images/82.gif" align="absmiddle" style="width: 32px;"> Tether
                                        ERC20</label></div>

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_92"
                                        id="process_92" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_92"><img
                                            src="images/92.gif" align="absmiddle" style="width: 32px;"> Tether
                                        TRC20</label></div>

                                <div class="col-lg-4 col-6"><input type="radio" name="type" value="process_102"
                                        id="process_102" class="btn-check" checked=""><label
                                        class="btn btn-dark deposit-button mb-2" for="process_102"><img
                                            src="images/102.gif" align="absmiddle" style="width: 32px;"> Tether
                                        BEP20</label></div>

                            </div>
                            <label class="fz16 mb8 mt8">Choose Payment With Account Balance</label>
                            <div class="row">


                            </div>
                            <div class="form-inner">
                                <fieldset class="mb22"><label class="fz16 mb8" for="add_Sum">Amount ($)</label>
                                    <fieldset><input type="text" name="amount" value="20.00" class="pl14" required="">
                                    </fieldset>
                                </fieldset>
                                <div class="topup__info">
                                    <div class="deposit-error-message" style="color: #ff00009e;"></div>
                                </div><br>
                                <div class="wrap-btn d-flex justify-content-center"><button type="submit" value="Spend"
                                        class="tf-button style2">MAKE A TRANSFER</button></div>
                            </div>

                        </form>

                        <script language="javascript">
                                /*
                                for (i = 0; i<document.spendform.type.length; i++) {
                                  if ((document.spendform.type[i].value.match(/^process_/))) {
                                    document.spendform.type[i].checked = true;
                                    break;
                                  }
                                }
                                */
                                updateCompound();
                        </script>


                    </div>
                </div>
            </div>
        </section>