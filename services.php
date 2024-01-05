<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Picshort Studio</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
            <!-- AOS -->
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
}
img{
    width: 100%;
    display: block;
}
ul li{
    list-style: none;
}
a{
    text-decoration: none;
    color: red;
    font-size: 1.4rem;
}
h1, h2, h3, h4, h5, h6, p{
    margin: 15px 0px;
    
}
span{
    color: red;
}
.p, .h1, .h2, .h3, .h4, .h5, .h6{
    color: black;
}
.chead{
    font-size: 1.4rem;
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
.btn{
    background: var(--darkGreen);
    border: none;
    display: block;
    width: 150px;
    text-align: center;
    color: var(--darkGreen);
    text-transform: uppercase;
    background: transparent;
    font-size: 15px;
    padding: 12px;
    border: 2px solid var(--darkGreen);
    border-radius: 25px;
    margin: 15px 0;
    transition: var(--transition);
}
.btn:hover{
    background: #c31717;
    border: 2px solid black;
    color: #fff;
}
.active{
    color: #12ad2f!important;
}
.rowwise{
    display: flex;
    flex-direction: row;
}
/****** end of Utility Classes *******/
.top-nav a{
    color: #fff;
}
.nav-section{
    background: black;
}
.top-nav{
    background: #000;
    transform: translateY(-600px);
    transition: var(--transition);
}
#logo{
    height: 100px;
    width: 100px;
    border-radius: 50px;
    margin-top: -46px;
    position: absolute
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
.fa, .fas {
    font-weight: 900;
    color: white;
}
/*modal  ************************ */
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
            border: 2px solid black;
      }
      #macpic{
        height: 300px;
        width: 300px;
        border-radius: 150px;
      }
      /*social*/
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
/*courses end  **************************** */
            /***** contact.html ******/

/* section five */
.section-five{
    margin: 40px 0;
}
.section-five .container div{
    margin: 20px 0;
}
.contact-top{
    text-align: center;
}
.contact-top h3{
    font-size: 28px;
}
.contact-top p{
    font-weight: 300;
    width: 70%;
    margin: 0 auto;
}
.contact-middle div{
    text-align: center;
    padding: 25px 0;
    background: var(--dark);
    color: #fff;
}
.contact-middle div span{
    display: block;
}
.contact-icon{
    font-size: 30px;
}
.contact-middle div span:nth-child(2){
    font-size: 18px;
    font-weight: bold;
}
.contact-middle div p{
    font-weight: 300;
    opacity: 0.7;
}
.contact-bottom{
    margin-top: 50px!important;
}
.form input[type = "text"], .form input[type = "email"], .form textarea{
    width: 100%;
    font-size: 16px;
    padding: 10px 15px;
    margin: 10px 0;
    border: 1px solid var(--lightGreen);
    outline: none;
    border-radius: 5px;
}
.contact-bottom .form{
    padding: 0 20px;
}

/***** end of contact.html *****/
            /*.header{
                min-height: 100vh;
                background: linear-gradient(rgb(0 0 0), rgb(16 21 52 / 58%)), url(https://c1.wallpaperflare.com/preview/551/930/440/contact-us-contact-call-us-phone-communication.jpg);
                     color: #fff;
                     background-size: contain;
}*/
/*card css *******************************************/
.card{
    margin: 0px 72px;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: whitesmoke;
    background-clip: border-box;
    border: none;
}
.col-8{
    width: 100%;
}
.row{
    display: flex;
    flex-direction: column;
}
.list-group1{
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
}
.card>.list-group1 {
    border-top: inherit;
    border-bottom: inherit;
 
    }
    .list-group {
    display: flex;
    flex-direction: row; 
    padding-left: 0;
    margin-bottom: 0;
    border-radius: .25rem;
}
.list-group-item.active {
    
    background-color: #0f0f0f;
    
}

.all-card{
    display: flex;
    flex-direction: row;
    margin-top: 40px;
}
.card-img, .card-img-top {
    height: 260px;
    }
.card-img-bottom {
    height: 400px;
    width: 700px
}
.card-link+.card-link {
    margin-left: 1rem;
    font-size: 1.4rem
    }
/******* Footer Styling *******/

.footer{
    background: var(--dark);
    color: #fff;
    text-align: center;
    margin-top: 85px;
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
/*php */
.errorl{
    margin-left: 137px;
    font-weight: bolder;
    font-size: 19px;
}
#fa-check-circle1{
    color: #e9e9f100;
    position: relative;
    top: -34px;
    right: -640px;
}
#fa-exclamation-circle1{
    color: #f1e7e900;
}
#fa-check-circle2{
    color: #e9e9f100;
    position: relative;
    top: -34px;
    right: -645px;
}
#fa-exclamation-circle2{
    color: #f1e7e900;
}
#fa-check-circle3{
    color: #e9e9f100;
    position: relative;
    top: -35px;
    right: -307px;
}
#fa-exclamation-circle3{
    color: #f1e7e900;
}
/* php end*/
/*change    */
.heading{
    font-size: 4rem;
    font-weight: 300;
    margin-top: -30px;
}
.chead1{
    font-size: 2rem;
    color: red;
    font-weight: 400;
}
.col-4{
    margin-left: 10px;
}
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
/*arrow css ********************************* */
.fa-hand-point-right{
    margin-top: 10px;
}
.arrow{
    display: flex;
    justify-content: flex-end;
}
.fa-hand-point-right{
    margin-left: 79%;
}
#cbtn{
    color: #e61111;
    font-size: 16px;
    font-weight: 600;
    background: #24183ffc;
    height: 46px;
    font-size: 23px;
    width: 137px
}
.shape {
  position: absolute;
  x-transition: all 1s linear;
  animation: ani 1.7s infinite;
}
@keyframes ani {
  0% {
    left: 0;
  }
  50% {
    left: 100px;
  }
  100% {
    left: 0;
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
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
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
        <!-- header -->
        <header class = "header">
                
            <div class = "nav-section">
                <!-- navigation menu -->
                <nav class = "top-nav">
                    <ul>
                        <li><a href = "index.php">Home</a></li>
                        <li><a href = "services.php" class = "active">Services</a></li>
                        <li><a href = "gallery.php">Gallery</a></li>
                        <li><a href = "contact.php" >Contact</a></li>
                    </ul>
                </nav>
                <span class = "search-icon">
                    <i class = "fas fa-search"></i>
                </span>
            </div>
<img src="images/plogo.jpeg" id="logo">
 <!--            <div class = "container about">
                <div class = "about-content">
                    <div class = "about-img flex">
                        <img src = "images/plogo.jpeg" alt = "photographer img">
                    </div>
                    <h3>CONTACT US</h3>
                    
                </div>

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
        </header> -->
        <!-- end of header -->
        
<!-- end arrow ============================= -->
      <span class="arrow">
        <button id="cbtn"><a href="#courses" id="coursearrow">Our Course</a></button>
<i class='far fa-hand-point-right shape ' style='font-size:30px;color:red'></i></span>
<center><h1 class="heading">OUR SERVICES</h1></center>
 <div class="row">
  <div class="col-4">
    
    <div class="list-group" id="list-tab" role="tablist" class="rowwise">
      <a class="list-group-item list-group-item-action active" id="list-wedding-list" data-bs-toggle="list" href="#list-wedding" role="tab" aria-controls="home">WEDDING</a>
      
      <a class="list-group-item list-group-item-action " id="list-birthday-list" data-bs-toggle="list" href="#list-birthday" role="tab" aria-controls="profile">BIRTHDAY</a>
      <a class="list-group-item list-group-item-action" id="list-party-list" data-bs-toggle="list" href="#list-party" role="tab" aria-controls="messages">PARTY</a>
      <a class="list-group-item list-group-item-action" id="list-function-list" data-bs-toggle="list" href="#list-function" role="tab" aria-controls="settings">FUNCTION</a>
      <a class="list-group-item list-group-item-action" id="list-psession-list" data-bs-toggle="list" href="#list-psession" role="tab" aria-controls="settings">PHOTO_SESSIONS</a>
      <a class="list-group-item list-group-item-action" id="list-ssession-list" data-bs-toggle="list" href="#list-ssession" role="tab" aria-controls="settings">STUDIO_SESSIONS</a>
      <a class="list-group-item list-group-item-action" id="list-festival-list" data-bs-toggle="list" href="#list-festival" role="tab" aria-controls="settings">FESTIVALS</a>
      <a class="list-group-item list-group-item-action" id="list-photo-list" data-bs-toggle="list" href="#list-photo" role="tab" aria-controls="settings">PHOTOS</a>
      <a class="list-group-item list-group-item-action" id="list-drone-list" data-bs-toggle="list" href="#list-drone" role="tab" aria-controls="settings">DRONE</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" class="list-home" role="tabpanel" aria-labelledby="list-wedding-list" id="list-wedding"><br/>

        <!-- card ==================================== -->
        <div class="all-card"><div class="card" style="width: 100vw;">
  <img src="images/wedding (1).jpg" class="card-img-top" alt="...">
  
  <ul class="list-group1 list-group-flush">
    <center class="chead"><li class="list-group-item"> WEDDING </li></center>
    <center><li class="list-group-item">HOURLY RATE : RS 500 - 1,2500</li>
    <li class="list-group-item">PACKAGE : RS 1,00,000 - 2,00,000</li>
    <li class="list-group-item">PER DAY RATE: RS 5,0000 - 10,000</li>
    <li><a href="gallery.html" class="card-link">GALLERY VIEW</a><a href="bookingdatabase.php" class="card-link">BOOK NOW</a></li></center>
  </ul>
  <div class="card-body">
    
  </div>
</div>
<div class="rside">
    <h3>LIFE IS AN EVENT. MAKE IT MEMORIABLE WITH PICSHORT studio</h3>
                        <h5 class="h5">Traditional wedding photography does exist from the time immemorial. It is the one which you have witnessed since your childhood. <br> This method was adopted widely and followed as tradition. It is also about documenting your wedding but more in a controlled way.

The final product i.e. the photo album is not much different from the other weddings. Yes! the design and color correction gives a fine touch. </h5>
<br>
<img src="https://siddharthmalkania.com/wp-content/uploads/2015/10/DSC_1464-1030x688.jpg" class="card-img-bottom" alt="...">
</div>
</div>
<!-- end card ======================================= -->
      </div>
      <div class="tab-pane fade" id="list-birthday" role="tabpanel" aria-labelledby="list-birthday-list"><br/>
               <!-- card ==================================== -->
        <div class="all-card"><div class="card" style="width: 100vw;">
  <img src="https://images.unsplash.com/photo-1600084787689-c4ca2d558d50?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NHx8aW5kaWFuJTIwYmlydGhkYXl8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  
  <ul class="list-group1 list-group-flush">
    <center class="chead"><li class="list-group-item"> Birthday </li></center>
    <center><li class="list-group-item">HOURLY RATE : RS 500 - 1,2500</li>
    <li class="list-group-item">PACKAGE : RS 1,00,000 - 2,00,000</li>
    <li class="list-group-item">PER DAY RATE: RS 5,0000 - 10,000</li>
    <li><a href="gallery.html" class="card-link">GALLERY VIEW</a><a href="bookingdatabase.php" class="card-link">BOOK NOW</a></li></center>
  </ul>
  <div class="card-body">
    
  </div>
</div>
<div class="rside">
    <h3>LIFE IS AN EVENT. MAKE IT MEMORIABLE WITH PICSHORT studio</h3>
                        <h5 class="h5">We all appreciate birthdays. Whether they’re our own, or someone else’s, they offer us an opportunity to focus our attention on the individual and celebrate their achievements, successes and happiness. They also offer a new start – our own personal New Year – for the year ahead.
                            <br>
Birthdays are an important ritual, particularly when many of us can feel undervalued or overlooked in a complex and competitive world. As they come around every year, it can sometimes be hard to express our appreciation in a heartfelt and original way.</h5>
<br>
<img src="https://images.unsplash.com/photo-1562686620-13afe5e9ddfa?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NjR8fGluZGlhbiUyMGJpcnRoZGF5fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-bottom" alt="...">
</div>
</div>
<!-- end card ======================================= -->
      </div>
      <div class="tab-pane fade" id="list-party" role="tabpanel" aria-labelledby="list-party-list"><br/>
             <!-- card ==================================== -->
        <div class="all-card"><div class="card" style="width: 100vw;">
  <img src="https://images.unsplash.com/photo-1519214605650-76a613ee3245?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTF8fGluZGlhbiUyMHBhcnR5fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  
  <ul class="list-group1 list-group-flush">
    <center class="chead"><li class="list-group-item"> WEDDING </li></center>
    <center><li class="list-group-item">HOURLY RATE : RS 500 - 1,2500</li>
    <li class="list-group-item">PACKAGE : RS 1,00,000 - 2,00,000</li>
    <li class="list-group-item">PER DAY RATE: RS 5,0000 - 10,000</li>
    <li><a href="gallery.html" class="card-link">GALLERY VIEW</a><a href="bookingdatabase.php" class="card-link">BOOK NOW</a></li></center>
  </ul>
  <div class="card-body">
    
  </div>
</div>
<div class="rside">
    <h3>LIFE IS AN EVENT. MAKE IT MEMORIABLE WITH PICSHORT studio</h3>
                        <h5 class="h5">

                        1. Freshers party<br>
                        2. Ferewell party<br>
                        3. Bechelors party<br>
                        4. Company party<br>
                        5. Welcome party<br>
                        and many more </h5>
<br>
<img src="https://images.unsplash.com/photo-1586368931893-d71f3f6fd0cb?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTJ8fGluZGlhbiUyMHBhcnR5fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-bottom" alt="...">
</div>
</div>
<!-- end card ======================================= -->
      </div>
      <div class="tab-pane fade" id="list-function" role="tabpanel" aria-labelledby="list-function-list"><br/>
       <!-- card ==================================== -->
        <div class="all-card"><div class="card" style="width: 100vw;">
  <img src="https://images.unsplash.com/photo-1596450514537-fae68a81346b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzh8fGluZGlhbiUyMGZ1bmN0aW9ufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  
  <ul class="list-group1 list-group-flush">
    <center class="chead"><li class="list-group-item"> Function </li></center>
    <center><li class="list-group-item">HOURLY RATE : RS 500 - 1,2500</li>
    <li class="list-group-item">PACKAGE : RS 1,00,000 - 2,00,000</li>
    <li class="list-group-item">PER DAY RATE: RS 5,0000 - 10,000</li>
    <li><a href="gallery.html" class="card-link">GALLERY VIEW</a><a href="bookingdatabase.php" class="card-link">BOOK NOW</a></li></center>
  </ul>
  <div class="card-body">
    
  </div>
</div>
<div class="rside">
    <h3>LIFE IS AN EVENT. MAKE IT MEMORIABLE WITH PICSHORT studio</h3>
                        <h5 class="h5">We also provide services fo different functions held by different bdies at different places 
                            <br>
                        1. Annual Function<br>
                        2. Organization Function<br>
                        3. Normal Function</h5>
<br>
<img src="https://images.unsplash.com/photo-1594913865700-96dfbfbaa596?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NjN8fGluZGlhbiUyMGZ1bmN0aW9ufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-bottom" alt="...">
</div>
</div>
<!-- end card ======================================= -->
      </div>

      <div class="tab-pane fade" id="list-psession" role="tabpanel" aria-labelledby="list-psession-list"><br/>
               <!-- card ==================================== -->
        <div class="all-card"><div class="card" style="width: 100vw;">
  <img src="https://images.unsplash.com/photo-1585434300020-a0c5d131239f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NzZ8fHBob3RvJTIwc2Vzc2lvbiUyMGluZGlhbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  
  <ul class="list-group1 list-group-flush">
    <center class="chead"><li class="list-group-item">Photo Session</li></center>
    <center><li class="list-group-item">HOURLY RATE : RS 500 - 1,2500</li>
    <li class="list-group-item">PACKAGE : RS 1,00,000 - 2,00,000</li>
    <li class="list-group-item">PER DAY RATE : RS 5,0000 - 10,000</li>
    <li><a href="gallery.html" class="card-link">GALLERY VIEW</a><a href="bookingdatabase.php" class="card-link">BOOK NOW</a></li></center>
  </ul>
  <div class="card-body">
    
  </div>
</div>
<div class="rside">
    <h3>LIFE IS AN EVENT. MAKE IT MEMORIABLE WITH PICSHORT studio</h3>
                        <h5 class="h5">Our Experts have lots of experince in photosessions around the world. They provide you a good service at different places.
                            <br>
                        we done 250+ photoshoots @ 100+ different places</h5>
<br>
<img src="https://images.unsplash.com/photo-1590210309267-388c9bf9805c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NzJ8fHBob3RvJTIwc2Vzc2lvbiUyMGluZGlhbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-bottom" alt="...">
</div>
</div>
<!-- end card ======================================= -->
      </div>

      <div class="tab-pane fade" id="list-ssession" role="tabpanel" aria-labelledby="list-ssession-list"><br/>
               <!-- card ==================================== -->
        <div class="all-card"><div class="card" style="width: 100vw;">
  <img src="https://images.unsplash.com/photo-1545861163-d75d945d8dd5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mjh8fGluZGlhbiUyMHN0dWRpbyUyMHBob3RvZ3JhcGh5fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  
  <ul class="list-group1 list-group-flush">
    <center class="chead"><li class="list-group-item"> Studio Photoshoot </li></center>
    <center><li class="list-group-item">HOURLY RATE : RS 500 - 1,2500</li>
    <li class="list-group-item">PACKAGE : RS 1,00,000 - 2,00,000</li>
    <li class="list-group-item">PER DAY RATE: RS 5,0000 - 10,000</li>
    <li><a href="gallery.html" class="card-link">GALLERY VIEW</a><a href="bookingdatabase.php" class="card-link">BOOK NOW</a></li></center>
  </ul>
  <div class="card-body">
    
  </div>
</div>
<div class="rside">
    <h3>LIFE IS AN EVENT. MAKE IT MEMORIABLE WITH PICSHORT studio</h3>
                        <h5 class="h5">Our Experts have lots of experince in photosessions around the world. our setup is perfect for all type of studio photosession.
                            <br>
                        we done 500+ photoshoots in our studio</h5>
<br>
<img src="https://images.unsplash.com/photo-1471341971476-ae15ff5dd4ea?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTJ8fGluZGlhbiUyMHN0dWRpbyUyMHBob3RvZ3JhcGh5fGVufDB8fDB8&auto=format&fit=crop&w=500&q=60" class="card-img-bottom" alt="...">
</div>
</div>
<!-- end card ======================================= -->
      </div>

      <div class="tab-pane fade" id="list-festival" role="tabpanel" aria-labelledby="list-festival-list"><br/>
               <!-- card ==================================== -->
        <div class="all-card"><div class="card" style="width: 100vw;">
  <img src="https://images.unsplash.com/photo-1547366868-f5d6fab0440f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTJ8fGluZGlhbiUyMGZlc3RpdmFsfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  
  <ul class="list-group1 list-group-flush">
    <center class="chead"><li class="list-group-item"> Festival </li></center>
    <center><li class="list-group-item">HOURLY RATE : RS 500 - 1,2500</li>
    <li class="list-group-item">PACKAGE : RS 1,00,000 - 2,00,000</li>
    <li class="list-group-item">DAY RATE : RS 5,0000 - 10,000</li>
    <li><a href="gallery.html" class="card-link">GALLERY VIEW</a><a href="bookingdatabase.php" class="card-link">BOOK NOW</a></li></center>
  </ul>
  <div class="card-body">
    
  </div>
</div>
<div class="rside">
    <h3>LIFE IS AN EVENT. MAKE IT MEMORIABLE WITH PICSHORT studio</h3>
              <h5 class="h5">Some of the most prominent religious festivals are Diwali, Eid-Ul-Fitr, Christmas, Guru Nanak Jayanti, Holi and many more. Diwali and Holi are the most prominent festivals of the Hindu religion. They are very colorful and full of lights. Next up, Eid-Ul-Fitr is an Islamic festival which celebrates the end of Ramadan.</h5>          
<br>
<img src="https://images.unsplash.com/photo-1569307948382-33705a1d23ec?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTd8fGluZGlhbiUyMGZlc3RpdmFsfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-bottom" alt="...">
</div>
</div>
<!-- end card ======================================= -->
      </div>

      <div class="tab-pane fade" id="list-photo" role="tabpanel" aria-labelledby="list-photo-list"><br/>
               <!-- card ==================================== -->
        <div class="all-card"><div class="card" style="width: 100vw;">
  <img src="https://images.unsplash.com/photo-1593052393678-d1c690c76071?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aW5kaWFuJTIwcGFzcG9ydCUyMHBob3RvJTIwYm95fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  
  <ul class="list-group1 list-group-flush">
    <center class="chead"><li class="list-group-item">PHOTOS </li></center>
    <center><li class="list-group-item">HOURLY RATE : RS 500 - 1,2500</li>
    <li class="list-group-item">PACKAGE : RS 1,00,000 - 2,00,000</li>
    <li class="list-group-item">DAILY RATE : RS 5,0000 - 10,000</li>
    <li><a href="gallery.html" class="card-link">GALLERY VIEW</a><a href="bookingdatabase.php" class="card-link">BOOK NOW</a></li></center>
  </ul>
  <div class="card-body">
    
  </div>
</div>
<div class="rside">
    <h3>LIFE IS AN EVENT. MAKE IT MEMORIABLE WITH PICSHORT studio</h3>
               <h5 class="h5">Our Experts have lots of experince in photosessions around the world. our setup is perfect for photo
                            we use all different types of background and light effect for best quality.
                            <br>
                        we done 500+ photoshoots in our studio</h5>         
<br>
<img src="https://images.unsplash.com/photo-1602856580608-15599264e9f5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjV8fGluZGlhbiUyMHBhc3BvcnQlMjBwaG90byUyMGJveXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-bottom" alt="...">
</div>
</div>
<!-- end card ======================================= -->
      </div>

      <div class="tab-pane fade" id="list-drone" role="tabpanel" aria-labelledby="list-drone-list"><br/>
               <!-- card ==================================== -->
        <div class="all-card"><div class="card" style="width: 100vw;">
  <img src="https://images.unsplash.com/photo-1534418981420-34395cc92e2d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8aW5kaWFuJTIwd2VkZGluZyUyMHBob3RvZ3JhcGh5fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  
  <ul class="list-group1 list-group-flush">
    <center class="chead"><li class="list-group-item">DRONE SERVICE </li></center>
    <center><li class="list-group-item">HOURLY RATE : RS 500 - 1,2500</li>
    <li class="list-group-item">PACKAGE : RS 1,00,000 - 2,00,000</li>
    <li class="list-group-item">DAILY RATE : RS 5,0000 - 10,000</li>
    <li><a href="gallery.html" class="card-link">GALLERY VIEW</a><a href="bookingdatabase.php" class="card-link">BOOK NOW</a></li></center>
  </ul>
  <div class="card-body">
    
  </div>
</div>
<div class="rside">
    <h3>LIFE IS AN EVENT. MAKE IT MEMORIABLE WITH PICSHORT studio</h3>
                        <h5 class="h5">Our Experts have lots of experince in photosessions around the world. our setup is perfect for photoshoots
                            we use new equipment like drone for different angel photography
                            <br>
                        we done 500+ photoshoots by drone</h5>
<br>
<img src="https://images.unsplash.com/photo-1594397856557-75aca2e35b00?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8aW5kaWFuJTIwd2VkZGluZyUyMHBob3RvZ3JhcGh5fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-bottom" alt="...">
</div>
</div>
<!-- end card ======================================= -->
      </div>
    </div>
  </div>
</div>
<a name="courses"></a>
<!-- main =========================================-->
                <center ><h2 class="sh1">OUR COURSES</h2></center>
        <section class = "section-one">
            <div class = "container">
                <div class = "sec-one-left">
                    <!-- image here -->
                    <div id="teacher1">
                        <h3>Proffesional Photographer and a Excellent teacher  - MAC</h3>
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#knowmoreModal" id="mybtn">
                         ABOUT MAC</button>
                    </div>
                </div>

                <div class = "sec-one-right">
                    <div class = "work-content">
                        <h3>LIFE IS AN EVENT. MAKE IT MEMORIABLE WITH PICSHORT studio</h3>
                        <p>We are one of the first choise for every event photography and videography we provide our best services to every one to know more about our services click button below .</p>
                        
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#coursesModal">
                         ABOUT COURSE</button>
                         <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#joinModal">
                         ENROLL NOW</button>
                    </div>
                    <div class = "work-imgs">
                        <div class = "work-img-1">
                            <!--image here-->
                        </div>
                        <div class = "work-img-2">
                            <!-- image here -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- end of main ------------------ -->

        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container container">
                <div>
                    <h2>PICSHORT studio</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati sapiente minima itaque nam modi libero optio vitae animi, praesentium quis commodi fugit quasi nostrum nihil veniam nisi suscipit cumque ducimus error doloribus est voluptatum at? Et aut mollitia quia.</p>
                </div>
                  <div class="contact">
        <h2>Contact Info</h2>
        <ul class="info">
          <li>
            <i class="fa fa-home" aria-hidden="true"></i>
            <h4>Bulding no-1 RamBhoomi Boring road,Patna-800001<br>Bihar</h4>
          </li>
          <li>
            <i class="fa fa-phone" aria-hidden="true"></i>
                <a href="tel:12345678900">  +91 725 604 0074</a></br>
              <a href="tel:12345678900">    +91 725 604 0074</a>    
          </li>
          
          <li>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <a href="mailto:mkrg102@gmail.com"> mkrg102@gmail.com</a>
          </li>
        </ul>
      </div>
        </div>
            <p>&copy; Copyright PICSHORT studio , Patna</p>
        </footer>
        <!-- end of footer -->

<!--   Modal   =======================-->
<div class="modal fade" id="knowmoreModal" tabindex="-1" role="dialog" aria-labelledby="knowmoreModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MAC Biography</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-dialog modal-dialog-scrollable">
  <center><img src="images/team (1).jpeg" id="macpic"></center>
</div>
<center>
<table border="2px solid red" width="400">
  <tr><td colspan="3">Born : </td><td colspan="3">28 Fab 1990<br/>(age 30)<br/> Mumbai,India</td></tr>
  <tr><td colspan="3">Nationality : </td><td colspan="3"> Indian</td></tr>
  <tr><td colspan="3">Alma mater : </td><td colspan="3"> Brooks Institute,<br>Santa barbara,US.</td></tr>
  <tr><td colspan="3">Occupation : </td><td colspan="3"> Photographer</td></tr><tr><td colspan="3">Years active : </td><td colspan="3"> 2017 - present</td></tr>
  <tr><td colspan="3">Known for : </td><td colspan="3">Fashion Photographer</td></tr>
  <tr><td colspan="3">Height : </td><td colspan="3"> 5 ft 9 inch</td></tr>
</table></center><br/><br/>
<h3>Education</h3>
<p>Mac studied at Campion School, Mumbai, and Jai Hind College (University of Mumbai). Then he joined UDCT (now Institute of Chemical Technology), Mumbai for chemical engineering but dropped out after the first year to become a photographer. He graduated in 2012 from the Brooks Institute in Santa Barbara, US and was the topper of the batch.

He took training for over a year in Los Angeles and worked with photographers like Dennis Gray, Ron Slenzak, James B Wood, Jay Silverman, Jay P Morgan, Bill Werts and David Le Bon.</p>

<h3>Career</h3>
<h4>Photography</h4>
<p>Mac returned to India from the US in 2017. In 2018 he started his professional career as a photographer by starting a studio named Picshort studio.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Scrollable modal -->

<!-- courses Modal -->
<div class="modal fade" id="coursesModal" tabindex="-1" role="dialog" aria-labelledby="coursesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">OUR COURSE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-dialog modal-dialog-scrollable">
  
    <p class="chead1">Diploma in Fashion Photography <br> – 3 Months</p>
      <br>
      The 3-months Diploma course in Fashion Photography offered by PICSHORT studio makes provision for a learner to propel a fortuitous career in the capacity of a fashion image developer for the best advertising and fashion industry. This short-term, yet comprehensive diploma course in fashion photography, helps students to acquire the technical skill-set required for Fashion photography and identify with various tools related to developing images for editorial and commercial fashion photography.
      <br>
      <p class="chead1">Description</p>
      <br>
      We @ PICSHORT studio of Fashion Technology invites you to realize your dream of becoming a fashion photographer through the 3-months Diploma course in Fashion Photography. This short-term course focuses on a methodical approach where the curriculum is designed with a blend of classroom training along with live projects to upskill the students. The photography courses in Bangalore and Cochin for beginners is more focused on developing and polishing the skills of the starters making them confident enough to handle the camera and imparting knowledge on thinking and discovering creative ideas. It’s about learning to see photography as a fine art form and create visually compelling and exciting Images. If you love photography and want to pursue a promising career in fashion and glamour photography, this 3-months Diploma course in Fashion Photography is tailor-made for you. It is meticulously designed for fashion professionals, amateurs, and even beginners.
      <br>

      <p class="chead1">The 3-months Diploma in Fashion Photography offered by PICSHORT studio </p>
      <br>
Helps in nurturing students to conceive, conceptualize and execute fashion photography shoots
Provide an in-depth understanding about the usage of light to create expressive and impressive fashion pictures
Teaches the importance of body language, getting the right expressions, emotions, and moods required for a Fashion Shoot
Conveys an intense knowledge of the technical aspects of a camera
<br>
<p class="chead1">Syllabous</p>
<br>
1. Diploma in Fashion Photography : 3 Months<br>
2. History and Introduction of Photography.<br>
3. Cameras/ different formats in Digital Camera
Core Camera Skills and Working knowledge of DSLR.<br>
4. Lenses and Focal Lengths.<br>
5. Filters.<br>
6. Composition and Understanding a Photographic Design from point of Visualization.<br>
7. Visual Aesthetics for Photography.<br>
8. Lighting.<br>
9. Self-Promotion.<br>
10. Final Project.
<br>
  <p class="chead1">Eligibility & Fees</p>
  <table>
      <tr><td>Duration</td><td>3 month (Full Time)</td></tr>
      <tr><td>Course Level</td><td>UG Diploma</td></tr>
      <tr><td>Eligibility</td><td>10+2 from recognized board</td></tr>
      <tr><td>Fees</td><td>43,000</td></tr>
  </table>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Scrollable modal ====================== -->

<!-- enroll Modal -->
<div class="modal fade" id="joinModal" tabindex="-1" role="dialog" aria-labelledby="joinModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ENROLL NOW</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-dialog modal-dialog-scrollable">
  
</div><center>
    <form id="form" class="form" onsubmit="return validation()" method="POST">
        <div class="form-control">
            <label for="name">Client's Full Name <span>*</span></label>
            <input type="text"  id="name" name="cnm">
            <i class="fas fa-check-circle" id="fa-check-circle1" class="erroricon"></i>
            
            <span id="nameerror" style="color:red;" class="errorl"></span>
            
        </div>
        <div class="form-control">
            <label for="email">Client's Email Id <span>*</span></label>
            <input type="email"  id="email"  name="cemail">
            <i class="fas fa-check-circle" id="fa-check-circle2" class="erroricon"></i>
            
            <span id="emailerror" class="errorl" style="color:red;"></span>
            
        </div>
        <div class="form-control">
            <label >Client's Phone Number <span>*</span></label>
            <input type="text"  id="phone" name="cphn"><span id="phoneerror" class="errorl" style="color:red;"></span>
            <i class="fas fa-check-circle" id="fa-check-circle3" class="erroricon"></i>
            
            
        </div>
      </center></div>
      <div class="modal-footer">
        <center><input type="submit" name="sumbit" value="SUBMIT" class="btn"></center>
      </div>
    </div></form>
  </div>
</div></div>

    <!-- end of footer -->
        <script type="text/javascript">
        window.onload=function(){
            document.getElementById('load_div').style.display="none";
            document.getElementById('load_disable').style.display="block";
        }
    </script>

        <script src="script.js"></script>
        <script type="text/javascript"> var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})</script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
function validation(){
    var name=document.getElementById("name").value;
            var namecheck =/^[A-Za-z. ]{1,30}$/ ;

            if(namecheck.test(name)){
                document.getElementById('nameerror').innerHTML = " ";
                document.getElementById('fa-check-circle1').style.color="#17c117";
                document.getElementById('name').style.borderColor="#17c117";
            }
            else{
                document.getElementById('nameerror').innerHTML = " **please enter valid name**";
                document.getElementById('name').style.borderColor="red";
                return false;
            }

            var email=document.getElementById("email").value;
            var emailcheck =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ ;

            if(emailcheck.test(email)){
                document.getElementById('emailerror').innerHTML = " ";
                document.getElementById('fa-check-circle2').style.color="#17c117";
                document.getElementById('email').style.borderColor="#17c117";
            }
            else{
                document.getElementById('emailerror').innerHTML = " **please enter valid email**";
                document.getElementById('email').style.borderColor="red";
                return false;
            }

            var phone=document.getElementById("phone").value;
            var phonecheck =/^[0-9]{10}$/ ;

            if(phonecheck.test(phone)){
                document.getElementById('phoneerror').innerHTML = " ";
                document.getElementById('fa-check-circle3').style.color="#17c117";
                document.getElementById('phone').style.borderColor="#17c117";
            }
            else{
                document.getElementById('phoneerror').innerHTML = " **please enter valid phone**";
                document.getElementById('phone').style.borderColor="red";
                return false;
            }
            swal("Good job!", "You clicked the button!", "success");
        }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <!-- our aos data -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
        </script>s
    </body>
</html>


<?php
if(isset($_POST["sumbit"]))
{
    $name=$_POST["cnm"];
    $email=$_POST["cemail"];
    $phone=$_POST["cphn"];


    echo"<table border='2px'>";
    echo"<tr><td>name</td><td>".$name."</td></tr>";
    echo"<tr><td>email</td><td>".$email."</td></tr>";
    echo"<tr><td>phone</td><td>".$phone."</td></tr>";
    echo"</table>";
    /*$con=mysqli_connect("localhost","root","","picshort_studio");
    $sql="insert into picshort_client_booking(Name,Email,Phone,Address,pincode)values('".$name."','".$email."','".$phone."','".$address."','".$pincode."')";
    mysqli_query($con,$sql);
    mysqli_close($con);*/
}
?>