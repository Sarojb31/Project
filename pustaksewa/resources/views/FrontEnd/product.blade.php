@section('title')

Product
@endsection

@section('content')

<div class="container">
  <div class="row text-center" style="height: 200px; padding: 30px 0; margin: 50px 0; ">
    <div class="col-12 align-middle  h-100">
        <h3 class="text-center">Pustak <span style="color:green">Product</span></h3>
        <p class="text-center ">Your Donation Might be more than enough for Readers.<br>
        	<h4><span style="color:green">PLEASE THINK ABOUT IT</span>!!!</h4></p>
  </div>
  </div>
</div>
<!-- New Product Text// -->

<div class="container">
	
<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
 
<div >
  <div class="align-self-center" style="max-width: 300;"> <a href="#"><center><img src="images/pd-3.jpg" style="width: 100%"></center></a></div>
</div> <!-- slider-product.// -->

		</aside>
		<aside class="col-sm-7">
            <article class="card-body p-5">
        	<h3 class="title mb-3" style="color:green">Original Version of Some product name</h3>

            <p class="price-detail-wrap"> 
	        <span class="price h3 text-warning"> 
		    <span class="currency">US $</span><span class="num">1299</span>
	</span> 
	</p> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>Description</dt>
  <dd><p>Here goes description consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco </p></dd>
</dl>
<dl class="param param-feature">
  <dt>ISBN</dt>
  <dd>12345611</dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>AURTHUR</dt>
  <dd>Ray</dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>LOCATION</dt>
  <dd>PATANDHOKA</dd>
</dl>  <!-- item-property-hor .// -->

<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="param param-inline">
			  <dt>Quantity: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" style="width:70px;">
			  		<option> 1 </option>
			  		<option> 2 </option>
			  		<option> 3 </option>
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
		
	</div> <!-- row.// -->
<hr>
	<a href="shoppingcart.html" class="btn btn-lg btn-primary text-uppercase"> <span>Buy now</span> </a>
	<a href="#" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Add to cart </a>
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->
</div>
<!--container.//-->


@endsection