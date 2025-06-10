

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
                <div class="section-title"><span class="sub-title">Reset Password</span>
                    <h2>Welcome To GENTIUS LTD</h2>
                </div>
                <div class="form-box">
                    
                    <form method=post action="{{route('submitResetPassword')}}">
                   
                        @csrf
                        <!-- <table cellspacing=0 cellpadding=2 border=0> -->
                            <div class="form-group">
                                <input type=password name="password" value='' class=inpts size=30 autofocus="autofocus" placeholder="new password">
                            </div>
                            <div class="form-group">
                                <input type=password name="password_confirmation" value='' class=inpts size=30 placeholder="confirm Password">
                            </div>

                            <div class="option-box">
                            </div>
                            <div class="btn-box"><button type="submit"  class="theme-btn">Reset Password</button></div>
                        <!-- </table> -->
                    </form>
                </div>
            </div>
        </section>
@include('layouts.mainsite.footer')
