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


                      <table cellspacing="0" cellpadding="2" border="0"
                          class="table table-striped table-bordered">
                          <tbody>
                              <form action="{{ route('user.update-profile') }}" method="POST">
                                  @csrf

                                  <tr>
                                      <td style="color: white;">Account Name:</td>
                                      <td style="color: #9d9d9d;">{{ Auth::user()->name ?? '' }}</td>
                                  </tr>
                                  <tr>
                                      <td style="color: #fff;">Registration date:</td>
                                      <td style="color: #9d9d9d;">{{ Auth::user()->created_at->format('M-d-Y h:i:s A') }}</td>
                                  </tr>
                                  <tr>
                                      <td style="color: white;">Your Full Name:</td>
                                      <td><input type="text" name="name" value="{{ Auth::user()->name }}" class="pl14" size="30"></td>
                                  </tr>
                                  <tr>
                                      <td style="color: white;">Your E-mail Address :</td>
                                      <td><input type="email" name="email" value="{{ Auth::user()->email }}" class="pl14" size="30"></td>
                                  </tr>
                                  <tr>
                                      <td style="color: white;">New Password:</td>
                                      <td><input type="password" name="password" class="pl14" size="30"></td>
                                  </tr>
                                  <tr>
                                      <td style="color: white;">Retype Password:</td>
                                      <td><input type="password" name="password_confirmation" class="pl14" size="30"></td>
                                  </tr>
                                  <tr>
                                      <td>&nbsp;</td>
                                      <td><input type="submit" value="Update" class="tf-button style2"></td>
                                  </tr>
                              </form>


                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </section>