 <!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content card" style="border-radius: 1rem;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex justify-content-center mb-3 pb-3">
                    <img src="img/logo/logo.png">
                  </div>

                  <h5 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                    <input type="email" id="username" placeholder="email or username" class="form-control form-control-md" />
                  </div>

                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                    <input type="password" id="pass" placeholder="password" class="form-control form-control-md" />
                  </div>

                    <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="remember"
              />
              <label class="form-check-label" for="rpass"> Remember password </label>
            </div>
                  <a class=" text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2">Don't have an account? <a href='sign-up.php' style="color: #f7ba01;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
        </div>               
    </div>
  </div>
</div>