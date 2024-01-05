<!DOCTYPE html>
<html>
  <head>
    <title>PICSHORT studio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

:root{
    --white: #ddd;
    --dark: #111;
    --darkGrey: #474b4f;
    --lightGrey: #6b6e70;
    --lightGreen: #86c232;
    --darkGreen: #61892f;
    --transition: all 0.5s ease;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
body{
    line-height: 1.6;
    background: whitesmoke;
    color: black;
    
}
.instaimg img{
    width: 100%;
    display: block;
}
ul li{
    list-style: none;
}
a{
    text-decoration: none;
    color: #000;
}
h1, h2, h3, h4, h5, h6, p{
    margin: 15px 0px;
    
}
#logo{
    height: 100px;
    width: 100px;
    border-radius: 50px;
    z-index: 1;
    position: absolute
}
        #loadname{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
            /*background-image: linear-gradient(45deg,orange,white,green);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;*/
        }

       /*loader css   ****************************** */
#load_div{
            height: 100vh;
            width: 100vw;
            background-color: black;
            display: grid;
            place-items: center;
        }
        .center_div{
            width: 20rem;
            height: 20rem;
            /*background-color: white;*/
            
            
        }
        .rotate{
            width: 20rem;
            height: 20rem;
            position: absolute;
            border-right: 0.5rem solid #255;
            border-radius: 50%;
            animation: rotate 2s linear infinite;
        }
        @keyframes rotate{
            0%{
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(360deg);
            }
        }

/******** Utility Classes *******/
.flex{
    display: flex;
    justify-content: center;
    align-items: center;
}
.container{
    width: 90vw;
    margin: 0 auto;
}

.active{
    color: #12ad2f!important;
}

/****** end of Utility Classes *******/

/******** Header styling *******/


.top-nav a{
    color: #fff;
}
.brand-and-navBtn{
    background: #000;
    position: relative;
    z-index: 999;
    height: 90px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 500;
    font-size: 24px;
    padding: 15px 25px;
    color: var(--white);
}
.brand-name{
    letter-spacing: 5px;
    cursor: pointer;
    color: tomato;
    margin-left: 80px;
}
.navBtn{
    width: 40px;
    height: 40px;
    border: 1px solid var(--white);
    cursor: pointer;
}
.navBtn:hover{
    background: #fff;
    color: #000;
    transition: var(--transition);
}
.top-nav{
    background: #000;
    transform: translateY(-600px);
    transition: var(--transition);
}
.showNav{
    transform: translateY(0);
}
.search-icon{
    display: none;
}
.top-nav ul li{
    padding: 10px 0;
}
.top-nav ul a{
    position: relative;
    font-weight: 500;
    font-size: 22px;
    text-align: center;
    display: block;
    text-decoration: none;
}
.top-nav ul a::after{
    content: "";
    height: 2px;
    background: var(--lightGreen);
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    transition: var(--transition);
}
.top-nav ul a:hover::after{
    width: 100px;
}

.nav-section{
                    position: absolute;
                    z-index: 2;
                    width: 100vw;
            }
            .carousel-item img{
             width: 100%;
             height: 90vh;
      } 
    .search-icon{
            color: whitesmoke;
    }
.about{
    margin-top: -160px;
}
.about-content img{
    width: 140px;
    height: 140px;
    border-radius: 50%;
}
.about-img{
    background: #fff;
    width: 150px;
    height: 150px;
    margin: 0 auto;
    border-radius: 50%;
}
.about-content h2{
    font-size: 48px;
    text-align: center;
    margin-bottom: 35px;
    color: var(--lightGreen);
}

.about-content h3{
    color: #fff;
    font-size: 35px;
    font-weight: 700;
    background: rgba(255, 255, 255, 0.1);
    width: 300px;
    margin: 35px auto;
    text-align: center;
}
.social-icons{
    width: 100%;
    background: #04020ff7;
}
.social-icons ul a {
    color: #f2efef;
    font-size: 30px;
    display: block;
    width: 50px;
    height: 50px;
    border: 1px solid #171717;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration-line: none;
    transition: var(--transition)
}
.social-icons ul{
    display: flex;
    justify-content: space-evenly;
}
.social-icons ul a:hover{
    background: white;
    color: black;
} 
input{
                height: 50px;
                width: 400px;
                border-top: none;
                border-right: none;
                border-left: none;
            }
      td{
            width: -webkit-fill-available;
            text-align: center;
      }
      #macpic{
        height: 300px;
        width: 300px;
        border-radius: 150px;
      }
      /*social*/
      

    /****** index.html ====================================*****/
/*services     =================================*/
    .sh1{
        font-size: 3rem;
        margin: 40px 0px 40px 0px;
    }
    .simg{
            position: relative;
    width: 249px;
    height: 153px;
    /* margin-top: -87px; */
    margin: -80px 0 0 75px;
    z-index: 2;
        }
        .Scontainer{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .Scontainer .Sbox{
            position: relative;
            width: 360px;
            background: #6510e82b;
            padding: 100px 40px 60px;
            box-shadow: 0 15px 45px rgba(0,0,0,.1);
        }
        .Scontainer .Sbox:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ff226d;
            transform: scaleY(0);
            transform-origin: top;
            transition: transform 0.5s;
        }
        .Scontainer .Sbox:hover:before{
            transform: scaleY(1);
            transform-origin: bottom;
            transition: transform 0.5s;
        }
        .Scontainer .Sbox h2{
            position: absolute;
            left: 40px;
            top: 60px;
            font-size: 4rem;
            font-weight: 800;
            z-index: 1;
            opacity: 0.1;
            transition: 0.5s;
        }
        .Scontainer .Sbox:hover h2{
            opacity: 1;
            color: #fff;
            transform: translateY(-40px);
        }
        .Scontainer .Sbox h3{
            position: relative;
            font-size: 1.5rem;
            z-index: 2;
            color: #333;
            transition: 0.5s;
        }
        .Scontainer .Sbox p{
            position: relative;
            z-index: 2;
            color: #555;
            transition: 0.5s;
        }
        .Scontainer .Sbox:hover h3,
        .Scontainer .Sbox:hover p{
            color: #fff;
        }
        /*end services*/

/*     join btn ==========================================*/

/* section one */
.section-one{
    margin: 40px 0;
    min-height: 100vh;
}
.sec-one-left{
    height: 100vh;
    background: url("images/team (1).jpeg") center/cover no-repeat;
    box-shadow: 0px 0px 14px -1px rgba(0, 0, 0, 0.75);
    -webkit-box-shadow: 0px 0px 14px -1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 0px 14px -1px rgba(0, 0, 0, 0.75);
}
.sec-one-left div{
    color: #fff;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 30px;
}
.sec-one-left div h3{
    font-size: 28px;
    opacity: 0.9;
        color: yellowgreen;
}
.sec-one-left div p{
    font-weight: 300;
    opacity: 0.8;
}
.sec-one-right h3{
    color: var(--lightGrey);
}
.sec-one-right >h3{
    text-align: center;
}
.sec-one-right p{
    opacity: 0.9;
    font-weight: 300;
}
#sbtn{
    text-decoration: none;
}
#sbtn:hover{
    color: black;
}
.work-content{
    margin: 50px 0;
}
.work-imgs{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-column-gap: 20px;
}
.work-img-1{
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6)), url("https://c0.wallpaperflare.com/preview/764/183/823/adult-camera-equipment-hoodie.jpg") center/cover no-repeat;
    height: 400px;
    transition: var(--transition);
}
.work-img-2{
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6)), url("https://c0.wallpaperflare.com/preview/568/837/170/human-person-photographer-camera.jpg") center/cover no-repeat;
    height: 400px;
    transition: var(--transition);
}
.work-imgs div:hover{
    box-shadow: 0 0 8px #000;
    -webkit-box-shadow: 0 0 8px #000;
    -moz-box-shadow: 0 0 8px #000;
}


/* section two =========================================*/
.section-two{
    margin: 40px 0;
}
.section-two h2{
    text-align: center;
    font-size: 40px;
}
.section-two span{
    color: var(--darkGrey);
    text-align: center;
    display: block;
    font-size: 20px;
    margin-bottom: 30px;
}
.insta-imgs{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}
.insta-imgs > div{
    position: relative;
    margin: 0px 10px;
}
.icon-overlay{
    position: absolute;
    color: #fff;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    font-size: 50px;
    background: rgba(134, 194, 50, 0.4);
    opacity: 0;
    transition: var(--transition);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.icon-overlay a{
    text-decoration: none;
}
.icon-overlay a:hover{
    color: black;
}
.insta-imgs > div:hover .icon-overlay{
    opacity: 1;
}

/*why me ************************************* */
.ccontainer{
            height: auto;
            display: flex;
            flex-direction: column;

        }
        .dir1{
            display: flex;
            justify-content: space-evenly;
        }
        .dir2{
            display: flex;
            justify-content: space-evenly;
        }
        .ccontainer img{
            height: 100px;
            margin-left: 50px;  
        }
        .ccontainer h2{
            font-size: 1rem;
        }
/*why me end ********************************* */
/*achivements*/
.acontainer{
            height: auto;
            display: flex;
            justify-content: space-around;
}
.acontainer h1{
    font-size: 3rem;
    font-weight: 800;
    
}
/*achivements end*/
/*testimonial =================================*/
#blog{
      display: flex;
    }
    
    .card{
      margin: 0px 30px;
      background: whitesmoke;
    }
    .card img{
      height: 220px;
    }
    .testimonial{
      display: flex;
      justify-content: center;
    }
    .blog-content{
    padding: 25px;
    background: #f7f7f7;
}
.p{
    color: black;
}
.badge{
    background: #c30ee28a;
    width: 140px;
    border-radius: 5px;
    padding: 5px 0;
    color: black;
    text-align: center;
    margin-bottom: 8px;
}
.carousel-indicators .active {
    background-color: red;
}

.carousel-indicators li {
    background: black;
}
.blog-text,.blog-title{
    color: black;
}
/*end*/
/******* Footer Styling **************************/

.footer{
    background: var(--dark);
    color: #fff;
    text-align: center;
}
.footer-container{
    display: flex;
}
.footer-container > div{
    width: 50%;
}
.footer-container h2{
    color: var(--lightGreen);
    font-size: 36px;
    font-weight: 500;
    letter-spacing: 7px;
}
.footer-container p{
    opacity: 0.7;
}
.subs{
    background: #000;
    width: 350px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 30px auto;
}
.subs i{
    font-size: 26px;
    flex: 10%;
    display: block;
}
.subs input{
    flex: 60%;
    background: transparent;
    border: none;
    font-size: 16px;
    padding: 0 5px;
    outline: 0;
    color: #fff;
}
.subs button{
    flex: 30%;
    font-size: 16px;
    padding: 15px 0;
    font-weight: bold;
    background: var(--lightGreen);
    border: none;
    transition: var(--transition);
    cursor: pointer;
}
.subs button:hover{
    color: #fff;
}
.footer > p{
    text-align: center;
    font-size: 14px;
}

.info a{
           /* display: inline-block; */
    /* width: 40px; */
    /* height: 249px; */
    color: white;
    background: #222;
    font-size: larger;
    /* display: flex; */
    /* justify-content: center; */
    /* align-items: center; */
    /* margin-right: 10px; */
    text-decoration: none;
    border-radius: 4px;
}
.info a:hover{
    background: #f00;
}
.footp{
    color: white;
}
/******* end of footer ******/
/****** Media Queries ******/

@media screen and (min-width: 678px){
    /* section five */
    .contact-middle{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 20px;
    }
    

}

@media screen and (min-width: 800px){
    /* section two */
    .insta-imgs{
        grid-template-columns: repeat(4, 1fr);
    }

    /* section three */
    .gallery{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    /* section four */
    .blog-wrapper-sm{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }

    
}

@media screen and (min-width: 992px){
    /* header & footer */
    .nav-section{
        display: flex;
        justify-content: space-between;
    }
    .navBtn{
        display: none;
    }
    .brand-and-navBtn{
        flex: 0 0 10%;
        background: none;
    }
    .top-nav{
        flex: 0 1 80%;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        transition: transform 0s ease;
        transform: translateY(0);
        background: transparent;
    }
    .top-nav ul{
        display: flex;
    }
    .top-nav ul li{
        margin-right: 30px;
        margin-left: 30px;
    }
    .about{
        margin-top: 0;
    }
    .search-icon{
        flex: 0 0 10%;
        display: block;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        cursor: pointer;
        transition: var(--transition);
    }
    .search-icon i:hover{
        transform: scale(1.2);
    }

    /* section five */
    .contact-middle{
        grid-template-columns: repeat(4, 1fr);
    }
    .contact-bottom{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 40px;
    }
}


@media screen and (min-width: 1000px){
    /* section one */
    .section-one .container{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 50px;
    }
    .sec-one-left{
        align-self: center;
    }
    .work-content{
        margin-top: 0;
    }
    .sec-one-left{
        height: 100%;
    }

    /* section four */
    .blog-wrapper-lg{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }

    /* footer */
    .footer-container{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }
}

@media screen and (min-width: 1200px){
    /* footer */
    .footer-container > div{
        width: 60%;
        margin-left: auto;
        margin-right: auto;
    }

    /* section three */
    .gallery{
        grid-template-columns: repeat(3, 1fr);
    }
}

@media screen and (min-width: 1400px){
    /* section four */
    .blog-wrapper-sm{
        grid-template-columns: repeat(4, 1fr);
    }
}

/***** extra small sized screen ******/

@media screen and (max-width: 500px){
    /* overall styling */
    .header{
        padding-bottom: 30px;
    }
    .social-icons{
        display: none;
    }
    .about-content h3{
        width: 100%;
    }
    .about-content blockquote{
        font-size: 16px;
        width: 100%;
    }
    .subs{
        width: 280px;
    }
    .subs i{
        display: none;
    }
    .subs input{
        width: 100%;
    }
    .subs button{
        padding-left: 8px;
        padding-right: 8px;
    }
    h2{
        font-size: 30px!important;
    }
    h3{
        font-size: 20px!important;
    }
    p{
        font-size: 15px;
    }
    .btn{
        font-size: 14px;
        padding: 8px 0;
    }
    .work-imgs{
        grid-template-columns: 1fr;
        grid-row-gap: 20px;
    }
    .footer{
        overflow: scroll;
    }
    .footer-container{
        flex-direction: column-reverse;
        align-items: center;
    }    
    #mybtn{
        display: flex;
        flex-direction: column;
    }
    #teacher1{
        display: flex;
        flex-direction: column-reverse;
    }

    </style>
    
  </head>
  <body>
        <!-- loader     -->
    <div id="load_div">
    <div class="center_div">
        <div class="rotate"></div>
        <h1 id="loadname">PICSHORT Studio</h1>
    </div>
</div>
<!-- loader disable ===================== -->
<div id="load_disable">
<!-- header ========================================-->
        <header class = "header"  data-aos="fade">
            <div class = "nav-section">
                  

<!-- navigation menu ===============================-->
                <nav class = "top-nav">
                    <ul>
                        <li><a href = "index.php" class = "active">Home</a></li>
                        <li><a href = "services.php">Services</a></li>
                        <li><a href = "gallery.php">Gallery</a></li>
                        <li><a href = "contact.php">Contact</a></li>
                    </ul>
                </nav>
                <span class = "search-icon">
                    <i class = "fas fa-search"></i>
                </span>
            </div>
<img src="images/plogo.jpeg" id="logo">
<!-- slider =====================================-->

<div id="carouselExampleCaptions" class=" carousel-fade carousel " data-bs-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="https://c1.wallpaperflare.com/preview/89/851/708/ring-hastmelap-wedding-marriage-indian-hindu.jpg" class="d-block " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>WEDDING'S</h1>
        <p></p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="https://c1.wallpaperflare.com/preview/369/512/932/catering-food-trencaclosques-birthday.jpg" class="d-block " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>BIRTHDAY'S</h1>
        <p></p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="https://c1.wallpaperflare.com/preview/628/647/578/rakshabandhan-rakhi-indian-festival-indian.jpg" class="d-block " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>HOME FUNCTION'S</h1>
        <p></p>
      </div>
    </div>
  </div>
  
</div>
<!-- social icons ============================ ===-->
                <div class = "social-icons">
                    <ul>
                        <li>
                            <a href = "http://www.facebook.com"><i class = "fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href = "http://www.twitter.com"><i class = "fab fa-twitter"></i></a>
                        </li>
                        <li>
                              <a href = "http://www.instagram.com"><i class = "fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href = "http://www.pinterest.com"><i class = "fab fa-pinterest"></i></a>
                        </li>
                    </ul>

                </div>

            </div>
        </header>
<!-- end of header ===============================-->
<!-- our services =============================== -->
<center><h2 class="sh1"   data-aos="zoom-in">OUR SERVICES </h2></center>
<div class="Scontainer"  >
    <div class="Sbox" data-aos="zoom-out-up">
        <img src="images/svideo.svg" class="simg">
        <h2>01</h2>
        <h3>PHOTOGRAPHY & VIDEOGRAPHY FOR ANY FUNCTIONS</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="Sbox" data-aos="zoom-out-down">
        <img src="images/scourse.svg" class="simg">
        <h2>02</h2>
        <h3>PHOTOGRAPHY & VIDEOGRAPHY COURSES ONLINE / OFFLINE</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="Sbox" data-aos="zoom-out-up">
        <img src="images/szoom.svg" class="simg">
        <h2>03</h2>
        <h3> LIVE FUNCTION BRODCAST ON ZOOM <br>@ AFFORDABLE PRICE</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
</div>
<!-- end of services============================== -->

<!-- why me =================================== -->

<center><h2 class="sh1" data-aos="zoom-out">WHY CHOOSE US </h2></center>
<br>
<div class="ccontainer">
<div class="dir1"  data-aos="zoom-out-up">
<div class="cone">
    <img src="images/why me (6).svg">
    <h2>PERFECT EQUIPMENTS</h2>
</div>
<div class="ctwo" data-aos="zoom-out-down">
    <img src="images/why me (2).svg">
    <h2>UNIQUE VISION</h2>
</div>
<div class="cthree" data-aos="zoom-out-up">
    <img src="images/why me (4).svg">
    <h2>LIGHT COMPOSURE</h2>
</div>
</div>
<br><br>
<div class="dir2">
    <div class="cfour" data-aos="zoom-out-down">
    <img src="images/why me (3).svg">
    <h2>ULTRA HD IMAGES</h2>
</div>
<div class="cfive" data-aos="zoom-out-up">
    <img src="images/why me (5).svg">
    <h2>PROFESSIONAL SKILLS</h2>
</div>
<div class="csix" data-aos="zoom-out-down">
    <img src="images/why me (1).svg">
    <h2>FOCUSING KNOWLEDGES</h2>
</div>
</div>    
</div>
<br>
<!-- end why me =============================== -->
<!-- achivements ============================== -->
<center><h2 class="sh1" data-aos="zoom-out">OUR ACHIVEMENTS</h2></center>
<div class="acontainer">
<div class="aone" data-aos="zoom-out-up">
    <h1>200 +</h1>
    <h2>FINISHED <br/>PHOTOSESSION</h2>
</div>
<div class="atwo" data-aos="zoom-out-down">
    <h1>150 +</h1>
    <h2>STUDIO <br>SESSION</h2>
</div>
<div class="athree" data-aos="zoom-out-up">
    <h1>200 +</h1>
    <h2>FUNCTIONS </h2>
</div>
    <div class="afour" data-aos="zoom-out-down">
    <h1>500 +</h1>
    <h2>HAPPY <br> CUSTOMERS</h2>
</div>
</div>
<!-- end achivements ========================= -->
<!-- TESTIMONIAL =============================== -->
<center><h2 class="sh1" data-aos="zoom-out">TESTIMONIALS</h2>
<h2><b>Our dear customers said about us</b></h2></center>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" id="tone">
      <div class="testimonial" >
        <div class="card" style="width: 22rem;">
  <img src="https://c0.wallpaperflare.com/preview/417/895/759/beautiful-beauty-costume-fashion.jpg" class="card-img-top" alt="...">
  <div class = "blog-content">
                                <span class = "badge">WEDDING</span>
                                
                                <h3 class = "blog-title">
                                   MR & MRS SHARMA
                                </h3>
                                <p class = "blog-text">
                                    MARRIAGE POINT, PATNA 
                                </p>
                                <button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#blog1Modal">
                         READ MORE</button>
                            </div>
</div>
<!-- 2 -->
<div class="card" style="width: 22rem;">
  <img src="https://c0.wallpaperflare.com/preview/536/922/383/adult-bridal-bride-celebration.jpg" class="card-img-top" alt="...">
  
  <div class = "blog-content">
                                <span class = "badge">ENGAGEMENT</span>
                                
                                <h3 class = "blog-title">
                                  MR & MRS TRIPATHI
                                </h3>
                                <p class = "blog-text">
                                    GOAL PARK SAGUNA MORE ,PATNA
                                </p>
                                <button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#blog2Modal">
                         READ MORE</button>
                            </div>
</div>
<!-- 3 -->
<div class="card" style="width: 22rem;">
  <img src="https://c0.wallpaperflare.com/preview/811/935/645/adults-analysis-brainstorming-collaboration.jpg" class="card-img-top" alt="...">
  <div class = "blog-content">
                                <span class = "badge">EVENT</span>
                                
                                <h3 class = "blog-title">
                                    MR TYAGI
                                </h3>
                                <p class = "blog-text">
                                    MAHARAJA HALL, BIHTA
                                </p>
                                <button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#blog3Modal">
                         READ MORE</button>
                            </div>
</div>
      </div><br><br><br>
      <!-- testimonial -->
      
    </div>
    <div class="carousel-item" id="ttwo">
      <div class="testimonial" >
        <div class="card" style="width: 22rem;">
  <img src="https://c4.wallpaperflare.com/wallpaper/740/654/427/1920x1080-px-beautiful-christmas-gift-holiday-merry-santa-snow-tree-winter-animals-bears-hd-art-wallpaper-preview.jpg" class="card-img-top" alt="...">
  <div class = "blog-content">
                                <span class = "badge">Holiday Session</span>
                                
                                <h3 class = "blog-title">
                                    MR & MRS KUMAR
                                </h3>
                                <p class = "blog-text">
                                    MANALI
                                </p>
                                <button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#blog4Modal">
                         READ MORE</button>
                            </div>
</div>
<!-- 2 -->
<div class="card" style="width: 22rem;">
  <img src="https://c4.wallpaperflare.com/wallpaper/377/800/833/ethnic-indian-bride-wedding-jewellery-traditional-wallpaper-preview.jpg" class="card-img-top" alt="...">
  
  <div class = "blog-content">
                                <span class = "badge">Engagement/Wedding</span>
                                
                                <h3 class = "blog-title">
                                    MR & MRS GANDHI
                                </h3>
                                <p class = "blog-text">
                                    PATNA CLUB HALL ,PATNA
                                </p>
                                <button type="submit"class="btn btn-outline-primary" data-toggle="modal" data-target="#blog5Modal">
                         READ MORE</button>
                            </div>
</div>
<!-- 3 -->
<div class="card" style="width: 22rem;">
  <img src="https://c4.wallpaperflare.com/wallpaper/859/252/899/sonakshi-sinha-new-photoshot-wallpaper-preview.jpg" class="card-img-top" alt="...">
 <div class = "blog-content">
                                <span class = "badge">PHOTOSHOOT</span>
                                
                                <h3 class = "blog-title">
                                    NEHA JOSHI
                                </h3>
                                <p class = "blog-text">
                                    PICSHORT studio ,PATNA
                                </p>
                                <button type="submit"class="btn btn-outline-primary" data-toggle="modal" data-target="#blog6Modal">
                         READ MORE</button>
                            </div>
</div>
      </div><br><br><br>
      <!-- testimonial -->
      
    </div>


    <div class="carousel-item" id="tthree">
      <div class="testimonial" >
        <div class="card" style="width: 22rem;">
  <img src="https://c4.wallpaperflare.com/wallpaper/832/165/83/festivals-holidays-ganesh-chaturthi-wallpaper-preview.jpg" class="card-img-top" alt="...">
  <div class = "blog-content">
                                <span class = "badge">PHOTOSHOOT</span>
                                
                                <h3 class = "blog-title">
                                    TINA AGARWAL
                                </h3>
                                <p class = "blog-text">
                                    PICSHORT studio ,PATNA
                                </p>
                                <button type="submit"class="btn btn-outline-primary" data-toggle="modal" data-target="#blog6Modal">
                         READ MORE</button>
                            </div>
</div>
<!-- 2 -->
<div class="card" style="width: 22rem;">
  <img src="https://c4.wallpaperflare.com/wallpaper/120/406/430/holiday-birthday-cake-colors-wallpaper-preview.jpg" class="card-img-top" alt="...">
  
  <div class = "blog-content">
                                <span class = "badge">BIRTHDAY</span>
                                
                                <h3 class = "blog-title">
                                    MR CHAUDHARY
                                </h3>
                                <p class = "blog-text">
                                    PICSHORT studio ,PATNA
                                </p>
                                <button type="submit"class="btn btn-outline-primary" data-toggle="modal" data-target="#blog6Modal">
                         READ MORE</button>
                            </div>
</div>
<!-- 3 -->
<div class="card" style="width: 22rem;">
  <img src="https://c4.wallpaperflare.com/wallpaper/640/1018/370/happy-new-year-fireplace-wallpaper-preview.jpg" class="card-img-top" alt="...">
  <div class = "blog-content">
                                <span class = "badge">PARTY</span>
                                
                                <h3 class = "blog-title">
                                    PREM JOSHI
                                </h3>
                                <p class = "blog-text">
                                    PICSHORT studio ,PATNA
                                </p>
                                <button type="submit"class="btn btn-outline-primary" data-toggle="modal" data-target="#blog6Modal">
                         READ MORE</button>
                            </div>
</div>
      </div><br><br><br>
      <!-- testimonial -->
      
    </div>
  </div>

</div>
</div>

<!-- end testimonial -->

<section class = "section-two">
            <div class = "container">
                <h2>FOLLOW ON INSTAGRAM</h2>
                <span><a href="https://www.instagram.com/picshort_studio/" target="_blank">@PICSHORT_STUDIO </a></span>
                <div class = "insta-imgs">
                    <div class="instaimg">
                        <img src="https://instagram.fpat1-1.fna.fbcdn.net/v/t51.2885-15/e35/131898170_430449358333355_8648194289287381031_n.jpg?_nc_ht=instagram.fpat1-1.fna.fbcdn.net&amp;_nc_cat=111&amp;_nc_ohc=VYm186adQlAAX_2PkjI&amp;tp=1&amp;oh=9a9fa7ec7ee4bba6481d3326db85cfcb&amp;oe=600753F9" >
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                            <a href="https://www.instagram.com/manish_mac_02/" target="_blank"><h3>MANISH KUMAR</h3></a>
                        </div>
                    </div>
                    <div class="instaimg">
                        <img src = "images/insta-4.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                            <a href="https://www.instagram.com/mackumar02/"  target="_blank"><h3>MONA</h3></a>
                        </div>
                    </div>
                    <div class="instaimg">
                        <img src = "images/team (3).jpeg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                            <a href="https://www.instagram.com/nmn__singh/" target="_blank"><h3>NAMAN</h3></a>
                        </div>
                    </div>
                    <div class="instaimg">
                        <a href="http://www.instagram.com"><img src = "images/team (4).jpeg"></a>
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                            <a href="https://www.instagram.com/amankrsingh23/"  target="_blank"><h3>AMAN KUMAR</h3></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of main -->

  <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container container">
                <div>
                    <h2>PICSHORT studio</h2>
                    <p class="footp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati sapiente minima itaque nam modi libero optio vitae animi, praesentium quis commodi fugit quasi nostrum nihil veniam nisi suscipit cumque ducimus error doloribus est voluptatum at? Et aut mollitia quia.</p>
                </div>
                  <div class="contact">
        <h2>Contact Info</h2>
        <ul class="info">
          <li>
            <i class="fa fa-home" aria-hidden="true"></i>
            <h6>Bulding no-1 RamBhoomi Boring road,Patna-800001<br>Bihar</h6>
          </li>
          <li>
            <i class="fa fa-phone" aria-hidden="true"></i>
                <a href="tel:12345678900">  +91 725 604 0074</a></br>
              <a href="tel:12345678900">    +91 725 604 0074</a>    
          </li>
          
          <li>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <a href="mailto:mkrg102@gmail.com"> picshort1.0@gmail.com</a>
          </li>
        </ul>
      </div>
        </div>
            <p class="footp">&copy; Copyright PICSHORT studio , Patna</p>
        </footer>
        <!-- end of footer -->




<!--  BLOG1 Modal   =======================-->
<div class="modal fade" id="blog1Modal" tabindex="-1" role="dialog" aria-labelledby="blog1ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TESTIMONIAL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-dialog modal-dialog-scrollable">
  
</div>
<P>"Working with Mac was one of the most pleasant experiences of planning our wedding. He has so much personality and is an amazing photographer. He is able to capture lovely candid moments that show emotion and love. I would recommend him to anyone looking for a talented wedding photographer. Thank you Mac for the lovely memories!"</P>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!-- Scrollable modal -->
<!--  BLOG2 Modal   =======================-->
<div class="modal fade" id="blog2Modal" tabindex="-1" role="dialog" aria-labelledby="blog2ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TESTIMONIAL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-dialog modal-dialog-scrollable">
  
</div>
<P>"I found Mac through a mutual photographer friend who couldn't say enough good things about her! & I was more than impressed; My fiancé and I don't have a lot pictures together that are not selfies and we aren't fans of the sappy engagement photo shoots but Mac made it fun and she was able to include our little dog Paco as well. We now have lots of fun pictures that really capture who we are and the fun we had during that the day. The one hour session felt like 10 minutes and the pictures turned out amazing. I recommend her to everyone! He is amazing! & thank you Mac for the amazing pictures you captured of us."</P>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!-- Scrollable modal -->
<!--  BLOG3 Modal   =======================-->
<div class="modal fade" id="blog3Modal" tabindex="-1" role="dialog" aria-labelledby="blog3ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TESTIMONIAL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-dialog modal-dialog-scrollable">
  
</div>
<P>"Absolutely one of the best photographers I have ever worked with. Talented, affordable, organized and stress free. I highly recommend to anyone looking for a photographer, that you hire Mac Woodbury Photography. You will not regret it!"</P>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!-- Scrollable modal -->
<!--  BLOG4 Modal   =======================-->
<div class="modal fade" id="blog4Modal" tabindex="-1" role="dialog" aria-labelledby="blog4ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TESTIMONIAL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-dialog modal-dialog-scrollable">
  
</div>
<P>Mac is a amazing, we hired her not only for him photographic talent but also for him easy-going personality. Mac is more than just a wedding photographer, he helped us structure our big day to guarantee the best photo opportunities. When the wedding is in full swing we could count on Mac to remember where everyone was supposed to be, what to do, and where to go because he's on top of it all. Can't recommend her enough, truly a great friend and photographer!”</P>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!-- Scrollable modal -->
<!--  BLOG5 Modal   =======================-->
<div class="modal fade" id="blog5Modal" tabindex="-1" role="dialog" aria-labelledby="blog5ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TESTIMONIAL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-dialog modal-dialog-scrollable">
</div>
<P>"He was absolutely amazing! Not only did our engagement photos rock, she made our wedding day go so smooth. He really helped us keep schedule and have fun the entire time.

Best part was she made my wife smile and feel beautiful all day long. I highly recommend him to everyone!"</P>
      </div>
      
      </div>
    </div>
  </div>
</div>
<!-- Scrollable modal -->
<!--  BLOG6 Modal   =======================-->
<div class="modal fade" id="blog6Modal" tabindex="-1" role="dialog" aria-labelledby="blog6ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TESTIMONIAL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-dialog modal-dialog-scrollable">
</div>
<P>"Working with Mac has been an absolute pleasure from consultation to finish product. He was attentive and instantly made me feel comfortable. I would absolutely recommend Mac to my friends and family. The photos were incredible and the turn around was quick. Thank you so much for the beautiful experience.</P>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div></div>
<script type="text/javascript">
        window.onload=function(){
            document.getElementById('load_div').style.display="none";
            document.getElementById('load_disable').style.display="block";
        }
    </script>
<!-- Scrollable modal -->
<!-- Scrollable modal ====================== -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <!-- our aos data -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
        </script>
  </body>
</html>