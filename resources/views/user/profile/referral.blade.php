  <section class="tf-section project_2" style="padding: 0 0 10px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="project-box-style3_wrapper">
                            <div class="project-box-style3 aos-init aos-animate" data-aos="fade-in"
                                data-aos-duration="800">
                                <div class="header_project">
                                    <div class="image" style="background: none!important;"><img class="mask"
                                            src="{{asset('')}}upnl/assets/images/emo4.png" alt=""></div>
                                    <h5 class="heading">Your Referral Link</h5>
                                </div>
                                <div class="content linkbox">
                                    <h6 class="reflinx" id="reflink">{{route('register')}}/?ref={{Auth::user()->username}}</h6>
                                    <div class="td td2"><i onclick="copyToClipboard('reflink')"
                                            class="fa fa-copy cicon"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tf-section FAQs mb-5 mb-xl-2 mb-lg-2">
            <div class="container">
                <div class="row">
                    <div class="content-tab mt40">
                        <div class="content-inner project-box-style6_wrapper">
                            <div class="project-box-style4 mobic">
                                <div class="image d-none d-sm-block">
                                    <div class="img_inner" style="background: none!important;"><img
                                            src="{{asset('')}}upnl/assets/images/ger8.png" alt=""></div>
                                </div>
                                <div class="content">
                                    <h5 class="heading mymob"><a><img class="d-inline d-sm-none"
                                                src="{{asset('')}}upnl/assets/images/ger8.png" style="width: 45px; margin-right: 5px;"
                                                alt="">Referral Statistics</a></h5>
                                    <ul style="width: 100%!important; min-width: 100%!important">
                                        <li class="summarx2 d-flex justify-content-start">
                                            <p class="me-2 mb-0"><i style="color: #fff;" class="fas fa-coins"></i></p>
                                            <p class="me-3 mb-0">Referral Earnings</p>
                                            <p class="mb-0 text-white">$0.00 USD</p>
                                        </li>
                                        <li class="summarx2 d-flex justify-content-start">
                                            <p class="me-2 mb-0"><i class="fa fa-user"></i></p>
                                            <p class="me-3 mb-0">Total Referrals</p>
                                            <p class="mb-0 text-white">{{$user_direct}}</p>
                                        </li>
                                        <li class="summarx2 d-flex justify-content-start">
                                            <p class="me-2 mb-0"><i style="color: #86FF00;" class="fa fa-user"></i></p>
                                            <p class="me-3 mb-0">Active Referrals</p>
                                            <p class="mb-0 text-white">{{$user_direct_active}}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="project-box-style4 mobic">
                                <div class="image d-none d-sm-block">
                                    <div class="img_inner" style="background: none!important;"><img
                                            src="{{asset('')}}upnl/assets/images/list.png" alt=""></div>
                                </div>
                                <div class="content">
                                    <h5 class="heading mymob"><a><img class="d-inline d-sm-none"
                                                src="{{asset('')}}upnl/assets/images/list.png" style="width: 45px; margin-right: 5px;"
                                                alt="">Your Referrals</a></h5>
                                    <ul style="width: 100%!important; min-width: 100%!important"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tf-section FAQs">
            <div class="container">
                <div class="row mt-xl-0 mt-lg-0 mt-md-0 mt-4">
                    <div class="project-info-form style">
                        <h6 class="title mb-3">Your Referrals</h6>

                        <div class="table-responsive">
                            Your upline is <a href="mailto:ads@hyipexplorer.com">HYIPexplorer</a><br><br>

                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </section>