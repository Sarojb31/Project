<head>
  <title>PustakSewa | @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('public/FrontEnd_asset/asset/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/FrontEnd_asset/asset/css/all.css')}}">



  <!-- Navbar CSS Starts Here -->
<style type="text/css">

	.nav-bar-sec-prt{
    justify-content: flex-end;
    
  }

      /*Margin set for menu items using media  */
      ul li{
        
        @media (min-width: 992px){
        .navbar li {
          margin-left : 1em;
          margin-right : 1em;
        }
      }
      }

      /*---------Navbar onScroll CSS-----------*/
      nav{
      font-family: "Roboto", sans-serif;
      top: 0;
      left: 0;
      box-sizing: border-box;
      
      transition: .5s;
      z-index: 99;
      background-color: rgba(255, 255, 255,1);

      }
      nav a{
          
        text-decoration: none;
        margin-right: 20px;
      }
      nav a:hover{
          
          text-decoration: none;
          color:rgb(101, 132, 62) !important;
          font-weight: bold;

      }
      nav a.snava{
          
          text-decoration: none;
          color:#BAB1AB !important;
          
      }

      nav.snav{
       
      
      background-color: rgb(101, 132, 62);
      color:rgb(101, 132, 62) !important;

      }
     
}
</style>

<style type="text/css">

    .footer-distributed{
      background-color: #292c2f;
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
      box-sizing: border-box;
      width: 100%;
      text-align: left;
      font: bold 16px sans-serif;
      padding: 55px 50px;
      margin-top: 80px;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right{
      display: inline-block;
      vertical-align: top;
    }

    /* Footer left */

    .footer-distributed .footer-left{
      width: 40%;
    }

    /* The company logo */

    .footer-distributed h3{
      color:  #ffffff;
      font: normal 36px 'Cookie', cursive;
      margin: 0;
    }

    .footer-distributed h3 span{
      color:  #5383d3;
    }

    /* Footer links */

    .footer-distributed .footer-links{
      color:  #ffffff;
      margin: 20px 0 12px;
      padding: 20px;
    }
    .footer-links li a{

      list-style-type: none;
      text-decoration: none;
      color: white;
    }

    .footer-distributed .footer-links a{
      display:inline-block;
      line-height: 1.8;
      text-decoration: none;
      color:  inherit;
    }
    .footer-distributed .footer-links a:hover{
      color:rgb(101, 132, 62);
    }
    .footer-distributed .footer-company-name{
      color:  #8f9296;
      font-size: 14px;
      font-weight: normal;
      margin: 0;
    }

    /* Footer Center */

    .footer-distributed .footer-center{
      width: 35%;
    }

    .footer-distributed .footer-center i{
      background-color:  #33383b;
      color: #ffffff;
      font-size: 25px;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      text-align: center;
      line-height: 42px;
      margin: 10px 15px;
      vertical-align: middle;
    }

    .footer-distributed .footer-center i.fa-envelope{
      font-size: 17px;
      line-height: 38px;
    }

    .footer-distributed .footer-center p{
      display: inline-block;
      color: #ffffff;
      vertical-align: middle;
      margin:0;
    }

    .footer-distributed .footer-center p span{
      display:block;
      font-weight: normal;
      font-size:14px;
      line-height:2;
    }

    .footer-distributed .footer-center p a{
      color:  #5383d3;
      text-decoration: none;;
    }
    /* Footer Right */

    .footer-distributed .footer-right{
      width: 20%;
    }

    .footer-distributed .footer-company-about{
      line-height: 20px;
      color:  #92999f;
      font-size: 13px;
      font-weight: normal;
      margin: 0;
    }

    .footer-distributed .footer-company-about span{
      display: block;
      color:  #ffffff;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .footer-distributed .footer-icons{
      margin-top: 25px;
    }

    .footer-distributed .footer-icons a{
      display: inline-block;
      width: 35px;
      height: 35px;
      cursor: pointer;
      background-color:  #33383b;
      border-radius: 2px;

      font-size: 20px;
      color: #ffffff;
      text-align: center;
      line-height: 35px;

      margin-right: 3px;
      margin-bottom: 5px;
    }

    /* If you don't want the footer to be responsive, remove these media queries */

    @media (max-width: 880px) {

      .footer-distributed{
        font: bold 14px sans-serif;
      }

      .footer-distributed .footer-left,
      .footer-distributed .footer-center,
      .footer-distributed .footer-right{
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
      }

      .footer-distributed .footer-center i{
        margin-left: 0;
      }

    }

    /* footer ends here */
</style>


 
 @yield('css')


  </head>