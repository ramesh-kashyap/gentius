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
        <div class="section-title"><span class="sub-title">Recovery</span>
            <h2>Confirm</h2>
        </div>
        <div class="form-box">

            <form method="post" action="{{route('verifyCode')}}">
                {{ csrf_field() }}

                <div class="form-group">
                    <input type=text name='code' value="" class=inpts size=30
                        placeholder="recovery code ">
                    <input type="hidden" value="{{$userID}}" class="form-control" name="userID">

                </div>

                <div class="btn-box"><button type="submit" value="" class="theme-btn">Submit
                        Code</button></div>
                <!-- </table> -->
            </form>
        </div>
    </div>
</section>
@include('layouts.mainsite.footer')