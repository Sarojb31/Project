
@extends('FrontEnd.home')

@section('title')

Shop
@endsection

@section('css')

<style type="text/css">
 /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
      /*New product*/
    .img-wrap {
    position: relative;
    border-radius: 0.25rem 0 0 0.25rem; }

    .img-wrap {
    border-radius: 0.2rem 0.2rem 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    width: 100%;
    text-align: center; }

    .img-wrap img {
      max-height: 100%;
      max-width: 100%;
      width: auto;
      align-content: center;
      display: inline-block;
      -o-object-fit: cover;
         object-fit: cover; }

     .img-wrap {
       height: 180px; }

    .img-wrap {
      overflow: hidden;
      }

      .card-product {
  margin-bottom: 1rem;
  width: 100%;
  /* btn-overlay-bottom */ }
  .card-product:after {
    content: "";
    display: table;
    clear: both;
    visibility: hidden; }
  .card-product .img-wrap {
    border-radius: 0.2rem 0.2rem 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center; }
    .card-product .img-wrap img {
      max-height: 100%;
      max-width: 100%;
      width: auto;
      display: inline-block;
      -o-object-fit: cover;
         object-fit: cover; }
  .card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee; }
  .card-product .action-wrap {
    padding-top: 4px;
    margin-top: 4px; }
  .card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee; }
  .card-product .title {
    margin-top: 0; }
  .card-product .btn-overlay {
    -webkit-transition: .5s;
    transition: .5s;
    opacity: 0;
    left: 0;
    bottom: 0;
    color: #fff;
    width: 100%;
    padding: 5px 0;
    font-size: 12px;
    text-align: center;
    position: absolute;
    text-transform: uppercase;
    background: rgba(0, 0, 0, 0.5); }
  .card-product:hover .btn-overlay {
    opacity: 1; }
  .card-product:hover {
    -webkit-box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
            box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
    -webkit-transition: .5s;
    transition: .5s; }





    </style>

@endSection

@section('content')


<!-- New Products-->
<div class="container">
  <div class="row text-center" style="height: 200px; padding: 30px 0; margin: 50px 0; ">
    <div class="col-12 align-middle  h-100">
        <h3 class="text-center">Featured <span style="color:green">Product</span></h3>
        <p class="text-center " >ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dcommodoor incididunt ut labore et dcommodo
        consequat. Duis a
        consequat. Duis a.</p>
  </div>
  </div>
</div>
<!-- New Product Text// -->
<hr>
<!-- Product slider-->
<div class="container">
  <div class="row " >
              <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>             

                 <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>               
               
                <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>    

                <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>    

  </div>
  <div class="row">
              <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>             

                 <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>             
               
              <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>

                <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div> 
  </div><!--Row COmpleted-->
</div><!--Conatainer-->



<!-- New Products-->
<div class="container">
  <div class="row text-center" style="height: 200px; padding: 30px 0; margin: 50px 0; ">
    <div class="col-12 align-middle  h-100">
        <h3 class="text-center">New <span style="color:green">Product</span></h3>
        <p class="text-center " >ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dcommodoor incididunt ut labore et dcommodo
        consequat. Duis a
        consequat. Duis a.</p>
  </div>
  </div>
</div>
<!-- New Product Text// -->
<hr>
<!-- Product slider-->
<div class="container">
  <div class="row " >
              <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>             

                 <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>               
               
                <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>    

                <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>    

  </div>
  <div class="row">
              <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>             

                 <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>             
               
              <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div>

                <div class="col-sm-6 col-md-3 col- " >
                <figure class="card card-product "  >
                    <div class="img-wrap imgcontainer ">
                     <a href="product1.html">
                        <img src="images/pd-2.jpg" alt="Everything is fucked" class="image" ></a>
                        <div class="middle">
                         <i class="fas fa-shopping-cart fa-3x text"></i>
                         </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="product1.html" class="title">Everything is Fucked</a>
                        <p>A story about how to enjoy life in your life</p>
                          <div class="price-wrap">
                              <span class="price-new">$280</span>
                          </div> <!-- price-wrap.// -->
                          

                    </figcaption>
                </figure> <!-- card // -->
              </div> 
  </div><!--Row COmpleted-->
</div><!--Conatainer-->







@endsection

