<div id="searchmodal" class="modalbox">
	<div class="search-wrap">
		<div class="input-group">
		<form action="#">
	       <input type="text" class="form-control" placeholder="Search for products, services and businesses.....">
	       <div class="input-group-append">
	       <button class="btn"><i class="flaticon-magnifying-glass-1"></i></button>
	   	   </div>
	    </form>
	</div>
	</div>
</div>

<script>
var modal = document.getElementById("searchmodal");
var btn = document.getElementById("search");
btn.onclick = function() {
  modal.style.display = "block";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>