@include('layouts.mainsite.header')
     <section class="form-section signin-form text-center">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-57.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-59.png);"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-60.png);"></div>
                <div class="pattern-4" style="background-image: url(assets/images/shape/shape-61.png);"></div>
                <div class="pattern-5" style="background-image: url(assets/images/shape/shape-62.png);"></div>
            </div>
            <div class="auto-container">  
                <div class="section-title"><span class="sub-title">Sign In</span>
                    <h2>Welcome To GENTIUS LTD</h2>
                </div>
                <div class="form-box">
                    <h4>Sign In to your account</h4>

                



                    <form method=post action="{{route('user.login')}}">
                        <!-- <input type="hidden" name="form_id" value="17486756755540"><input type="hidden" name="form_token" value="4ada214cc191e49babb7f908e37b6440"> -->
                        <!-- <input type=hidden name=a value='do_login'>
                        <input type=hidden name=follow value=''>
                        <input type=hidden name=follow_id value=''> -->
                        @csrf
                        <table cellspacing=0 cellpadding=2 border=0>
                            <div class="form-group">
                                <input type=text name=username value='' class=inpts size=30 autofocus="autofocus" placeholder="Your Username">
                            </div>
                            <div class="form-group">
                                <input type=password name=password value='' class=inpts size=30 placeholder="Your Password">
                            </div>

                            <div class="option-box">
                                <div class="check-box"><input name="Remember" id="checkbox" value="1" type="checkbox" class="check" /><label for="checkbox">Remember Me</label></div>
                                <div class="reset-btn"><a href="#">Forgot Password</a></div>
                            </div>
                            <div class="btn-box"><button type="submit"  class="theme-btn">Sign In</button></div>
                        </table>
                    </form>
                </div>
                <div class="text">Can’t login? <a href="">Sign up for new user?</a></div>
            </div>
        </section>
@include('layouts.mainsite.footer')
