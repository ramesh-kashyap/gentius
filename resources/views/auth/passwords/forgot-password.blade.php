@include('layouts.mainsite.header')

<section class="form-section text-center">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-57.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-59.png);"></div>
        <div class="pattern-3" style="background-image: url(assets/images/shape/shape-60.png);"></div>
        <div class="pattern-4" style="background-image: url(assets/images/shape/shape-61.png);"></div>
        <div class="pattern-5" style="background-image: url(assets/images/shape/shape-62.png);"></div>
    </div>
    <div class="auto-container">
        <div class="section-title"><span class="sub-title">Forget Password</span>
            <h2>Recover Password</h2>
        </div>
        <div class="form-box">
            <h4>Send Reset Code</h4>

            <script language=javascript>
                function checkform() {
                    if (document.forgotform.email.value == '') {
                        alert("Please type your username or email!");
                        document.forgotform.email.focus();
                        return false;
                    }
                    return true;
                }
            </script>






            <form method=post action="{{route('forgot_submit')}}">
                @csrf
                <div class="form-group">
                    <input type=text name='email' value="" class=inpts size=30
                        placeholder="Type your username or e-mail">
                </div>

                <div class="login-text"><a href="{{route('login')}}">Login Here</a></div>
                <div class="btn-box"><button type="submit" value="" class="theme-btn">Send Submit
                        Code</button></div>
                <!-- </table> -->
            </form>
        </div>
    </div>
</section>
@include('layouts.mainsite.footer')