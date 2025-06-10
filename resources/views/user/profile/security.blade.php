
        <section class="tf-section FAQs">
            <div class="container">
                <div class="row mt-xl-0 mt-lg-0 mt-md-0 mt-4">
                    <div class="project-info-form style">
                        <h6 class="title mb-3">Activate 2-Factor Authentication</h6>
                        <form method="post"><input type="hidden" name="form_id" value="17491239154724"><input
                                type="hidden" name="form_token" value="5e103a1aeacfba5a8875bc0ff8905347">
                            <input type="hidden" name="a" value="security">
                            <input type="hidden" name="action" value="save">
                            Detect IP Address Change Sensitivity<br><br>
                            <input type="radio" name="ip" value="disabled" checked=""> Disabled<br>
                            <input type="radio" name="ip" value="medium"> Medium<br>
                            <input type="radio" name="ip" value="high"> High<br>
                            <input type="radio" name="ip" value="always"> Paranoic<br><br>

                            Detect Browser Change<br><br>
                            <input type="radio" name="browser" value="disabled" checked=""> Disabled<br>
                            <input type="radio" name="browser" value="enabled"> Enabled<br><br>
                            <input type="submit" value="Set" class="tf-button style2">
                        </form>
                        <br>
                        <h3>Two Factor Authentication</h3><br>
                        <form method="post" name="mainform"><input type="hidden" name="form_id"
                                value="17491239154724"><input type="hidden" name="form_token"
                                value="5e103a1aeacfba5a8875bc0ff8905347">
                            <input type="hidden" name="a" value="security">
                            <input type="hidden" name="action" value="tfa_save">
                            <input type="hidden" name="time" value="1749123918287">

                            1. Install <a href="http://m.google.com/authenticator" targe="_blank">Google
                                Authenticator</a> on your mobile device.<br><br>
                            2. Your Secret Code is: <b>AXOPSBCIQ4AMDB55</b> <input type="hidden" name="tfa_secret"
                                value="AXOPSBCIQ4AMDB55"><br><br>
                            <img
                                src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&amp;data=otpauth%3A%2F%2Ftotp%2Fgentius.top%3Fsecret%3DAXOPSBCIQ4AMDB55"><br><br>
                            3. Please enter two factor token from Google Authenticator to verify correct setup:<br> <br>
                            <input type="text" name="code"><br> <input type="submit" value="Enable"
                                class="tf-button style2">
                        </form>


                        <script language="javascript">
                            document.mainform.time.value = (new Date()).getTime();

                            function checkform() {
                                if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
                                    alert("Please type code!");
                                    document.mainform.code.focus();
                                    return false;
                                }
                                return true;
                            }
                        </script>


                    </div>
                </div>
            </div>
        </section>