
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
     <!-- font awsome cdn limk -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

:root{
    --main-color:#d3ad7f;
    --black:#13131a;
    --bg:#010103;
    --border:.1rem solid rgba(255,255,255,.3);
}

*{
    font-family: 'Roboto', sans-serif;
    margin:0;padding:0;
    box-sizing:border-box;
    outline:none;border:none;
    text-decoration:none;
    text-transform:capitalize;
    transition:.2s linear;
}

html{
    font-size:62.5%;
    overflow-x:hidden;
    scroll-padding-top:9rem;
    scroll-behavior:smooth;
}
html::-webkit-scrollbar{
    width:.8rem;
}

html::-webkit-scrollbar-track{
    background: transparent;

}

html::-webkit-scrollbar-thumb{
    background: #fff;
    border-radius:5rem;

}

body{
    background: var(--bg);
}

.section{
    padding: 2rem 7%;
}

.heading{
    margin-top:100px;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    padding-bottom: 3.5rem;
    font-size: 4rem;
}

.heading span{
    color: var(--main-color);
    text-transform: uppercase;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding: .9rem 3rem;
    font-size: 1.7rem;
    color:#fff;
    background: var(--main-color);
    cursor:pointer;
}

.btn:hover{
    letter-spacing: .2rem;
    color:white;
    background: var(--main-color);

}


.header{
    background: var(--bg);
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:1.5rem 7%;
    border-bottom:var(--border);
    position:fixed;
    top: 0; left: 0;right: 0;
    z-index: 1000;
}

.header .logo img{
    height:5rem;

}

.header .navbar a{
 margin:0 1rem;
 font-size: 1.6rem;
 color:#fff;
}

.header .navbar a:hover{
   color:var(--main-color);
   border-bottom: .1rem solid var(--main-color);
   padding-bottom: .5rem; 
}

.header .icons div{
    color:#fff;
    cursor:pointer;
    font-size:2.5rem;
    margin-left: 2rem; 
    
}

.header .icons div:hover{
    color:var(--main-color);
 
}


/** banner section **/

.banner_main {
     position: relative;
    
}

.banner .carousel-indicators li {
     width: 20px;
     height: 20px;
     border-radius: 30px;
     background: transparent;
}

.banner .carousel-indicators .active {
     background-color: #fe0000;
}

.booking_ocline {
     position: absolute;
     width: 100%;
     top: 50%;
     transform: translateY(-50%);
}

.book_room {
     background-color: #000000c7;
     padding: 30px 35px;
     border-left: #ff0909 solid 5px;
}

.book_room h1 {
     font-weight: 500;
     font-size: 30px;
     line-height: 30px;
     color: #fff;
     padding-bottom: 20px;
     text-transform: uppercase;
     text-align: center;
}

.book_now span {
     display: block;
     color: #fff;
     font-size: 18px;
     padding-bottom: 5px;
}

.book_now .online_book {
     width: 100%;
     height: 50px;
     border: #fff solid 1px;
     background-color: transparent;
     color: #fff;
     padding: 0 10px;
     padding-right: 161px;
     margin-bottom: 25px;
     position: relative;
}



.book_btn {
     background-color: #fe0000;
     max-width: 189px;
     width: 100%;
     margin: 0 auto;
     padding: 10px 0;
     border-radius: 50px;
     color: #fff;
     font-size: 20px;
     transition: ease-in 0.5s;
     display: block;
}

.book_btn:hover {
     background-color: #fff;
     color: #fe0000;
     transition: ease-in 0.5s;
}

.carousel-control-next,
.carousel-control-prev {
     display: none;
}

.carousel-indicators {
     right: inherit;
     bottom: 53px;
     margin-left: 9%;
}


/** end banner section **/


#menu-btn{
    display:none;
}


  .home{
    min-height: 100vh;
    display:flex;
    align-items: center;
    background: url(back.jpg) no-repeat;
    background-size: cover;
    background-position: center;
  }

  .home .content{
    max-width: 60rem;
  }

  .home .content h3{
    font-size: 6rem;
    text-transform:uppercase;
    color:#fff;
  }

  .home .content p{
    font-size: 2rem;
    font-weight: medium;
    line-height: 1.8;
    padding: 1rem 0;
    color:#ccc;
  }

  .about .row{
    display: flex;
    align-items: center;
    background: var(--black);
    flex-wrap: wrap;
  }

  .about .row .image{
    flex: 1 1 45rem;
  }
  .about .row .image img{
    width: 100%;
  }
  .about .row .content{
    flex: 1 1 45rem;
    padding: 2rem;
  }

  .about .row .content h3{
    font-size: 3rem;
    color: #fff;
  }

  .about .row .content p{
    font-size: 1.6rem;
    color: #ccc;
    padding: 1rem 0;
    line-height: 1.8;
  }

  .menu .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit,minmax(40rem,2fr));
   gap:2.5rem; 
  }

  .menu .box-container .box{
    padding: 5rem;
    text-align: center;
    border: var(--border);
  }

  .menu .box-container .box img{
    height: 25rem;
  }

  .menu .box-container .box h3{
    color: #fff;
    font-size: 2rem;
    padding: 1rem 0;
  }

  .menu .box-container .box p{
    color: #fff;
    font-size: 2rem;
    padding: 1rem 0;
  }

  .menu .box-container .box .price{
    color: #fff;
    font-size: 2.5rem;
    padding: 5rem 0;
  }

  .menu .box-container .box .price span{
    font-size: 1.5rem;
    text-decoration: line-through;
  }

  .menu .box-container .box:hover{
    background: #fff;
  }

  .menu .box-container .box:hover > *{
    color: var(--black);
  }

  

.contact .row{
  display: flex;
  background: var(--black);
  flex-wrap: wrap;
  gap:1rem;
}

.contact .row .map{
  flex: 1 1 45rem;
  width:100%;
  object-fit: cover;
}

.contact .row form{

  flex: 1 1 45rem;
  padding: 5rem 2rem ;
  text-align: center;
}

.contact .row form h3{
  text-transform: uppercase;
  font-size: 3.5rem;
  color: #fff;
} 

.contact .row form .inputBox{
  display: flex;
  align-items: center;
  margin-top: 2rem;
  margin-bottom: 2rem;
  background: var(--bg);
  border: var(--border);
}

.contact .row form .inputBox span{
  color: #fff;
  font-size: 2rem;
  padding: 2rem;
}

.contact .row form .inputBox input{
  width: 100%;
  padding: 2rem;
  font-size: 1.7rem;
  color: #fff;
  text-transform: none;
  background: none;
}



.footer{
  background: var(--black);
  text-align: center;

}

.footer .share{
  padding: 1rem;

}
.footer .share a{
  height: 5rem;
  width: 5rem;
  line-height: 5rem;
  font-size: 2rem;
  color: #fff;
  border: var(--border);
  margin: 3rem;
  border-radius: 50%;
}

.footer .share a:hover{
  background-color: var(--main-color);
}

.footer .links{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  padding: 2rem 0;
  gap: 1rem;
}

.footer .links a{
padding: .7rem 2rem;
color: #fff;
border: var(--border);
font-size: 2rem;
}

.footer .links a:hover{
  background-color: var(--main-color);
}

.footer .credit{
  font-size: 2rem;
  color: #fff;
  font-weight: lighter;
  padding: 1.5rem;
}

.footer .credit span{
  color: var(--main-color);
}


    /* media queries */

@media(max-width:991px){

    html{
        font-size:55%;

    }
    .header{
        padding: 1.5rem;
    }
    section{
        padding: 2rem;
    }
}


@media(max-width:768px){


    #menu-btn{
        display:inline-block;
    }

    .header .navbar{
        position:absolute;
        top:100%; right:-100%;
        background: #fff;
        width:30rem;
        height:calc(100vh -9.5rem);
        display:grid;
    }

    .header .navbar.active{
        right: 0;
    }

    .header .navbar a{
        color:var(--black);
       display:block;
       margin:1.5rem;
       padding:.5rem;
       font-size:2rem; 
    }

    .header .search-form{
        width:90%;
        right:2rem;
    }
    .home{
    background-position: left;
    justify-content: center;
    text-align: center;
    }

    .home .content h3{
    font-size: 4.5rem;
    }

    .home .content p{
    font-size: 1.5rem;
    }

}


@media(max-width:450px){

    html{
        font-size:50%;

    }
    
}


    </style>
</head>
<body>
   
<!-- header section starts -->
<header class="header">
    <a href="#" class="logo">
        <img src="images\logo.png" width="150";height="50"; alt=""></a>
    
    <nav class="navbar">
        <a href="/home">home</a>
        <a href="/about">about</a>
        <a href="/rooms">Rooms</a>
        <a href="/contact">contact</a>
 </nav>

<div class="icons">
    <div class="fas fa-bars" id="menu-btn"></div>
</div>
</header>
<!-- header section ends -->

    <!-- about section start -->
<section class="about" id="about">
    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images\about.png" alt="">
            </div>
            <div class="content">
            
            <p class="margin_0">The passage experienced a surge in popularity during the 1960s when Letraset
                used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled 
                the text with their software. Today it's seen all around the web; on templates, websites, and
             stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum. </p>

           
             <p>The flavour–or taste–will perfectly
                balance acidity, sweetness, and bitterness, with a notable and pleasant aftertaste.</p>
             <a href="#" class="btn">learn more</a>
        
            </div>
    </div>
</section>

<!-- about section ends -->

<!-- footer section starts -->
<section class="footer">
    <div class="share">
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>
    <div class="links">
     <a href="/home">home</a>
     <a href="/about">about</a>
     <a href="/rooms">Rooms</a>
     <a href="/contact">contact</a>
     <a href="/login"><input type="submit" value="Login" class="btn"></a>

    

    </div>

    <div class="credit">created by <span>siva</span> | all rights reserved</div>
</section>

<!-- footer section ends -->

    <!-- custom js file link -->
    <script>
      let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active'); 
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active'); 
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}
    </script>

</body>
</html>

