<div class="modal fade" id="chktmodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Select Your Order Options</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="minfo1">
            <p class="font-weight-bold">select your preferred delivery option</p>
            <div class="col-12 dbtn justify-content-center">
              <input id="delivery" class="btn-check rinput" type="radio" name="options">
              <label for="delivery" class="btn btn-dark px-3 py-3 sbtn"><i class="bi bi-truck"></i>&nbsp;Delivery</label>
              <input id="pickup" class="btn-check rinput" type="radio" name="options">
              <label for="pickup" class="btn btn-dark px-3 py-3 sbtn"><i class="bi bi-bag-check-fill"></i>&nbsp;Pickup</label>
              <input id="instore" class="btn-check rinput" type="radio" name="options">
              <label for="instore" class="btn btn-dark px-3 py-3 sbtn"><i class="bi bi-basket-fill"></i>&nbsp;Instore</label>
            </div>
          </div>
        <hr>
          <div class="minfo2">
            <p class="font-weight-bold">select one from 2 pickup locations</p>
            <div class="pbtn">
            <div class="col-12 pb-3">
              <input id="branch" class="btn-check rinput" type="radio" name="locate">
              <label for="branch" class="card cardo bg-light py-3 px-3">
                <h5 class=""><i class="bi bi-shop"></i>&nbsp;BRANCH OFFICE - OGOJA RD</h5>
                <p class="card-text">56 Ogoja Road, Abakaliki, Ebonyi State, Nigeria.</p>
                <div class="pbtn text-secondary">+234 090266765675</div>
              </label>
            </div>
            <div class="col-12">
              <input id="main" class="btn-check rinput" type="radio" name="locate">  
              <label for="main" class="card bg-light cardo py-3 px-3">
                <h5 class=""><i class="bi bi-shop"></i>&nbsp;MAIN OFFICE</h5>
                <p class="card-text">28 Waterworks Road, Abakaliki, Ebonyi State, Nigeria.</p>
                <div class="pbtn text-secondary">+234 090266765675</div>
              </label>
            </div>    
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark add_cart_btn"><a href="checkout.php">Proceed to Checkout</a></button>
      </div>
    </div>
  </div>
</div>
<style>
  .bactive{
    background-color: #000;
    color:#fff;
  }
</style>

<script>
$(function(){
  $(".sbtn").click(function(){
    $(this).toggleClass('bactive');
    });
});
</script>