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

      <style>
        select {
          width: 100%;
          padding: 10px;
          border-radius: 50px;
          font-size: 14px;
          /* Controls the font size of selected item */
          border: none;
          background: rgb(41, 41, 50);
          color: white;
        }

        select option {
          font-size: 12px;
          /* 👈 Controls dropdown options font size */
          color: #ccc;
          background: #1e1e1e;
        }
      </style>




      @if($errors->any())
      <div style="background: #ffdddd; border: 1px solid #ff5e5e; color: #a94442; padding: 10px 15px; border-radius: 5px; margin-bottom: 15px;">
        <strong>Error:</strong> {{ $errors->first() }}
      </div>
      @endif

      <form method=post action="{{route('registers')}}">
        @csrf
        <!-- <table cellspacing=0 cellpadding=2 border=0> -->
        <div class="form-group">
          <input type=text name=name value="" class=inpts size=30 placeholder="Your Full Name">
        </div>
        <div class="form-group">
          <input type=text name=sponsor value="" class=inpts size=30 placeholder="Your Username">
        </div>
        <div class="form-group">
          <input type=email name=email value="" class=inpts size=30 placeholder="Your email">
        </div>
        <div class="form-group" style="width: 100%; border-radius: 50px;font-size: 13px; background: rgb(41, 41, 50); padding-left: 10px;padding-top: 3px;padding-bottom: 3px;">
          <label for="position" style="color: white;"></label>
          <select name="position" id="position" required>
            <option value="">Select Position</option>
            <option value="left">Left</option>
            <option value="right">Right</option>
          </select>
        </div>
        <div class="form-group">
          <input type=password name=password value="" class=inpts size=30 placeholder="Define Password">
        </div>
        <div class="form-group">
          <input type=password name=password_confirmation value="" class=inpts size=30 placeholder="Retype Password">
        </div>


        <div class="form-group">
          <input type=checkbox name=agree value=1> I agree with <a href="#">Terms and
            conditions</a>
        </div>
        <div class="btn-box"><button type="submit" class="theme-btn">Register</button></div>
        <!-- </table> -->
      </form>
      <div class="text">Already have an account? <a href="{{route('login')}}">Log in</a></div>
    </div>
  </div>
</section>
@include('layouts.mainsite.footer')