  <section class="tf-section FAQs">
            <div class="container">
                <div class="row mt-xl-0 mt-lg-0 mt-md-0 mt-4">
                    <div class="project-info-form style">
                        <h6 class="title mb-3">Personal Info
                        </h6>



                        <script language="javascript">
                            function IsNumeric(sText) {
                                var ValidChars = "0123456789.";
                                var IsNumber = true;
                                var Char;
                                if (sText == '') return false;
                                for (i = 0; i < sText.length && IsNumber == true; i++) {
                                    Char = sText.charAt(i);
                                    if (ValidChars.indexOf(Char) == -1) {
                                        IsNumber = false;
                                    }
                                }
                                return IsNumber;
                            }

                            function checkform() {
                                if (document.editform.fullname.value == '') {
                                    alert("Please type your full name!");
                                    document.editform.fullname.focus();
                                    return false;
                                }


                                if (document.editform.password.value != document.editform.password2.value) {
                                    alert("Please check your password!");
                                    document.editform.fullname.focus();
                                    return false;
                                }





                                for (i in document.editform.elements) {
                                    f = document.editform.elements[i];
                                    if (f.name && f.name.match(/^pay_account/)) {
                                        if (f.value == '') continue;
                                        var notice = f.getAttribute('data-validate-notice');
                                        var invalid = 0;
                                        if (f.getAttribute('data-validate') == 'regexp') {
                                            var re = new RegExp(f.getAttribute('data-validate-regexp'));
                                            if (!f.value.match(re)) {
                                                invalid = 1;
                                            }
                                        } else if (f.getAttribute('data-validate') == 'email') {
                                            var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                                            if (!f.value.match(re)) {
                                                invalid = 1;
                                            }
                                        }
                                        if (invalid) {
                                            alert('Invalid account format. Expected ' + notice);
                                            f.focus();
                                            return false;
                                        }
                                    }
                                }

                                return true;
                            }
                        </script>


                        <div class="table-responsive">
                            <form action="" method="post" onsubmit="return checkform()" name="editform"><input
                                    type="hidden" name="form_id" value="17491238506825"><input type="hidden"
                                    name="form_token" value="773c4a8dd61b5b46923125d412c770e3">
                                <input type="hidden" name="a" value="edit_account">
                                <input type="hidden" name="action" value="edit_account">
                                <input type="hidden" name="say" value="">


                                <table cellspacing="0" cellpadding="2" border="0"
                                    class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Account Name:</td>
                                            <td>rameshk036</td>
                                        </tr>
                                        <tr>
                                            <td>Registration date:</td>
                                            <td>May-31-2025 09:21:36 AM</td>
                                        </tr>
                                        <tr>
                                            <td>Your Full Name:</td>
                                            <td><input type="text" name="fullname" value="Ramesh Kashyap" class="pl14"
                                                    size="30">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>New Password:</td>
                                            <td><input type="password" name="password" value="" class="pl14" size="30">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Retype Password:</td>
                                            <td><input type="password" name="password2" value="" class="pl14" size="30">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Your ePayCore acc no:</td>
                                            <td><input type="text" class="pl14" size="30" name="pay_account[51]"
                                                    value="" data-validate="regexp" data-validate-regexp="^E\d{6,}$"
                                                    data-validate-notice="EXXXXXX"></td>
                                        </tr>
                                        <tr>
                                            <td>Your Bitcoin acc no:</td>
                                            <td><input type="text" class="pl14" size="30" name="pay_account[48]"
                                                    value="" data-validate="regexp"
                                                    data-validate-regexp="^(bc1|[13])[a-zA-HJ-NP-Z0-9]{25,39}$"
                                                    data-validate-notice="Bitcoin Address"></td>
                                        </tr>
                                        <tr>
                                            <td>Your Litecoin acc no:</td>
                                            <td><input type="text" class="pl14" size="30" name="pay_account[68]"
                                                    value="" data-validate="regexp"
                                                    data-validate-regexp="^ltc1|[LM3][a-km-zA-HJ-NP-Z1-9]{25,40}$"
                                                    data-validate-notice="Litecoin Address"></td>
                                        </tr>
                                        <tr>
                                            <td>Your Dogecoin acc no:</td>
                                            <td><input type="text" class="pl14" size="30" name="pay_account[79]"
                                                    value="" data-validate="regexp"
                                                    data-validate-regexp="^[DA9][a-km-zA-HJ-NP-Z1-9]{25,34}$"
                                                    data-validate-notice="Dogecoin Address"></td>
                                        </tr>
                                        <tr>
                                            <td>Your Ethereum acc no:</td>
                                            <td><input type="text" class="pl14" size="30" name="pay_account[69]"
                                                    value="" data-validate="regexp"
                                                    data-validate-regexp="^(0x)?[0-9a-fA-F]{40}$"
                                                    data-validate-notice="Ethereum Address"></td>
                                        </tr>
                                        <tr>
                                            <td>Your Ripple acc no:</td>
                                            <td><input type="text" class="pl14" size="30" name="pay_account[72]"
                                                    value="" data-validate="regexp"
                                                    data-validate-regexp="^r[a-zA-Z0-9]{25,35}{\:\d+}?$"
                                                    data-validate-notice="Ripple Address"></td>
                                        </tr>
                                        <tr>
                                            <td>Your Tron acc no:</td>
                                            <td><input type="text" class="pl14" size="30" name="pay_account[85]"
                                                    value="" data-validate="regexp"
                                                    data-validate-regexp="^T[a-km-zA-HJ-NP-Z1-9]{25,34}$"
                                                    data-validate-notice="Tron Address"></td>
                                        </tr>
                                        <tr>
                                            <td>Your BNB acc no:</td>
                                            <td><input type="text" class="pl14" size="30" name="pay_account[94]"
                                                    value="" data-validate="regexp"
                                                    data-validate-regexp="^(0x)?[0-9a-fA-F]{40}$"
                                                    data-validate-notice="BNB Address"></td>
                                        </tr>
                                        <tr>
                                            <td>Your Tether ERC20 acc no:</td>
                                            <td><input type="text" class="pl14" size="30" name="pay_account[82]"
                                                    value="" data-validate="regexp"
                                                    data-validate-regexp="^(0x)?[0-9a-fA-F]{40}$"
                                                    data-validate-notice="Tether Address"></td>
                                        </tr>
                                        <tr>
                                            <td>Your Tether TRC20 acc no:</td>
                                            <td><input type="text" class="pl14" size="30" name="pay_account[92]"
                                                    value="" data-validate="regexp"
                                                    data-validate-regexp="^T[a-km-zA-HJ-NP-Z1-9]{25,34}$"
                                                    data-validate-notice="Tether TRC20 Address"></td>
                                        </tr>
                                        <tr>
                                            <td>Your Tether BEP20 acc no:</td>
                                            <td><input type="text" class="pl14" size="30" name="pay_account[102]"
                                                    value="" data-validate="regexp"
                                                    data-validate-regexp="^(0x)?[0-9a-fA-F]{40}$"
                                                    data-validate-notice="Tether BEP20 Address"></td>
                                        </tr>
                                        <tr>
                                            <td>Your E-mail address:</td>
                                            <td>arkashyap1772@gmail.com</td>
                                        </tr>


                                        <tr>
                                            <td>&nbsp;</td>
                                            <td><input type="submit" value="Update" class="tf-button style2"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>