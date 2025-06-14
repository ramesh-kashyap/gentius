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
    <div class="section-title"><span class="sub-title">Sign Up</span>
      <h2>Welcome To GENTIUS LTD</h2>
    </div>
    <div class="form-box">
      <h4>Sign Up to your account</h4>

      <form method="post" action="{{ route('registers') }}">
        @csrf

        <div class="form-group">
          <input type="text" name="name" value="" class="inpts" size="30" placeholder="Your Full Name">
        </div>

        <div class="form-group">
          <input type="text" name="sponsor" value="" class="inpts" size="30" placeholder="Your Username">
        </div>

        <div class="form-group">
          <input type="email" name="email" value="" class="inpts" size="30" placeholder="Your email">
        </div>
        <div class="form-group">
          <label class="d-block mb-1" style="margin-right: 235px;
                    font-size: medium;">Position:</label>
          <label><input type="radio" name="position" value="left" required style="
    margin-left: -156px;
"> Left</label> &nbsp;&nbsp;
          <label><input type="radio" name="position" value="right" required> Right</label>
        </div>

        <div class="form-group">
          <input type="password" name="password" value="" class="inpts" size="30" placeholder="Define Password">
        </div>

        <div class="form-group">
          <input type="password" name="password_confirmation" value="" class="inpts" size="30" placeholder="Retype Password">
        </div>

        <!-- 🚨 NEW: Position Selector (Left / Right) -->




        <div class="form-group">
          <label><input type="checkbox" name="agree" value="1"> I agree with <a href="#">Terms and conditions</a></label>
        </div>

        <div class="btn-box">
          <button type="submit" class="theme-btn">Register</button>
        </div>
      </form>

      <div class="text">Already have an account? <a href="{{route('login')}}">Log in</a></div>
    </div>
  </div>
</section>
@include('layouts.mainsite.footer')