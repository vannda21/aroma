<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/menu.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700|Pattaya&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Sofia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Short+Stack&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('animate.css-master/animate.css-master/animate.css') }}">
   
    
    <script src="https://kit.fontawesome.com/19bbb30846.js" crossorigin="anonymous"></script>
    

    <title>Menu</title>
<style>
   #home{
      background-image: url("photo/men.jpeg");
   }
</style>
  </head>
  <body> 
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
         <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="photo/aroma_logo1.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/f">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/menu">Menu</a>
                
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/delivery">Delivery</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/join">Join Aroma</a>
                  
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/us">About us</a>
                
            </li>
              
              
            </ul>
            
          </div>
        </div>
         </div>
        </nav>

        <section id="home">
           <div class="landing-text">
              <h1 class="wow zoomIn" data-wow-delay="0.5s">AROMA COFFEE</h1>
              <h3 class="wow bounceInUp" data-wow-delay="0.7s">Drinks Beverage</h3>
           </div>
        </section>

        <div class="row">
         <div class="col-xl-12 mb-60">
            <div class="section-title text-center">
               <p class="wow zoomIn" data-wow-delay="0.5s">Famous for good Drink</p>
               <h4 class="wow bounceInUp" data-wow-delay="0.7s">our menu</h4>
            </div>
         </div>
      </div>

        <div class="container">
           
         <div class="stepwizard">
             <div class="stepwizard-row setup-panel">
               <div class="stepwizard-step col-xs-3"> 
                  <a href="{{url('/menu')}}" type="button" class="btn btn-default btn-circle mr-3" > 
                     <h4>1</h4>
                  </a>
                  <h4 class="mr-3"><small>Top Sell Beverage</small></h4>
              </div>
                 <div class="stepwizard-step col-xs-3"> 
                     <a href="{{url('/ice')}}" type="button" class="btn btn-default btn-circle mr-3" disabled="disabled"> 
                        <h4>2</h4>
                     </a>
                     <h4 class="mr-3"><small>Iced Beverage</small></h4>
                 </div>
                 <div class="stepwizard-step col-xs-3"> 
                     <a href="{{url('/hot')}}" type="button" class="btn btn-success btn-circle ml-3" disabled="disabled">
                        <h4>3</h4>
                     </a>
                     <h4 class="ml-3"><small>Hot Beverage</small></h4>
                 </div>
                 <div class="stepwizard-step col-xs-3"> 
                     <a href="{{url('/frappe')}}" type="button" class="btn btn-default btn-circle ml-3" disabled="disabled">
                        <h4>4</h4>
                     </a>
                     <h4 class="ml-3"><small>Frappe Beverage</small></h4>
                 </div>
                 
             </div>
         </div>
         
         
         <form role="form">
            <section class="about-area pt-60 setup-content" id="step-1">
               <div class="container">
                  <div class="row menu_style1">
                     @if(count($products)>0)
                        @foreach($products->all() as $products)
                            @if($products->type=="Hot")
                           <div class="col-md-4">
                              <div class="single_menu_list">
                                 <img src="{{asset('uploads/products/'.$products->image)}}" alt="">
                                 <div class="menu_content">
                                    <h4>{{ $products->title }} </h4>
                                    <h5>S <span>${{ $products->priceS }}</span></h5>
                                    <h5>M <span>${{ $products->priceM }}</span> </h5>
                                    <h5>L <span>${{ $products->pricel }}</span> </h5>
                                    
                                 </div>
                              </div>
                           </div>     
                            @endif
                        @endforeach
                  @endif
                  </div>
                </div>
            </section>                  
         </form>
     </div>
        
        
  
     <footer>
        <div class="container-fluid padding">
        <div class="row text-center">
          <div class="col-md-4">
            <hr class="light">
           <h5>AROMA COFFEE</h5>
            <hr class="light">
            <p>+885 - 962850059</p>
            <p>aroma_coffee222@gmail.com</p>
            <p>66 Great Titchfield st</p>
            <p>Fitzrovia, London.</p>
          </div>
          <div class="col-md-4">
            <hr class="light">
            <h5>Open Daily</h5>
            <hr class="light">
      
            <p>Monday - Friday: </p>
            <p>9:00am - 11:pm</p>
            <p>Saturday - Sunday: </p>
            <p>11:00am - 11:00pm</p>
          </div>
          <div class="col-md-4">
            <hr class="light">
            <h5>+885 - 962850059</h5>
            <hr class="light">
            <p>aroma_coffee222@gmail.com</p>
            <p>66 Great Titchfield st</p>
            <p>Fitzrovia, London.</p>
          </div>
          <div class="col-12">
            <hr class="light">
            <h5>&copy; aromacoffee.com</h5>
          </div>
        </div>
        </div>
      </footer>
              
        
      
      
          
      
          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
          <script src="{{ url('js/wow.min.js') }}"></script>
                    <script>
                    new WOW().init();
                    </script>



  </body>
  </html>