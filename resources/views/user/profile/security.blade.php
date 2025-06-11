
        <section class="tf-section FAQs">
            <div class="container">
                <div class="row mt-xl-0 mt-lg-0 mt-md-0 mt-4">
                    <div class="project-info-form style">
                        <h6 class="title mb-3">Activate 2-Factor Authentication</h6>
                      
                     <div class="table-responsive">


                      <table 
                          class="table table-striped ">
                          <tbody>
                              <form action="{{ route('user.update-password') }}" method="POST">
                                  @csrf

                               
                                
                                  <tr>
                                      <td style="color: white;">New Password:</td>
                                      <td><input type="password" name="password" placeholder="enter password" class="pl14" size="30"></td>
                                  </tr>
                                  <tr>
                                      <td style="color: white;">Retype Password:</td>
                                      <td><input type="password" name="password_confirmation"placeholder="enter confirm password" class="pl14" size="30"></td>
                                  </tr>
                                  <tr>
                                      <td>&nbsp;</td>
                                      <td><input type="submit" value="Change Password" class="tf-button style2"></td>
                                  </tr>
                              </form>


                          </tbody>
                      </table>
                  </div>


                    </div>
                </div>
            </div>
        </section>