<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Picshort Studio</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
                    <!-- AOS -->
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
    color: #000;
}
h1, h2, h3, h4, h5, h6, p{
    margin: 15px 0px;
    
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
img{
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


/******* Footer Styling *******/

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
/*changes*/
/*icons check*/
.checkicons{
    position: relative;
    top:-44px;
    left:530px;
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
                        <li><a href = "services.php">Services</a></li>
                        <li><a href = "gallery.php">Gallery</a></li>
                        <li><a href = "contact.php" class = "active">Contact</a></li>
                    </ul>
                </nav>
                <span class = "search-icon">
                    <i class = "fas fa-search"></i>
                </span>
            </div>
<img src="images/plogo.jpeg">
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

        <!-- main -->
        <section class = "section-five">
            <div class = "container">
                <div class = "contact-top">
                    <h3>CONTACT US</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nobis.</p>
                </div>

                <div class = "contact-middle"  data-aos="slide-left">
                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-map-signs"></i>
                        </span>
                        <span>Address</span>
                        <p>Patliputra Road, Patna 800001</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-phone"></i>
                        </span>
                        <span>Contact Number</span>
                        <p>9999999999</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-paper-plane"></i>
                        </span>
                        <span>Email Address</span>
                        <p>picshort1.0@gmail.com</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-globe"></i>
                        </span>
                        <span>Website</span>
                        <p>www.picshort.com</p>
                    </div>
                </div>

                <div class = "contact-bottom">
                    <form id="form" class="form" onsubmit="return validation()" method="POST">
                        <input type="text" placeholder="Your Name" id="name" name="cnm">
                        <span class="checkicons">
                        <i class="fas fa-check-circle" id="fa-check-circle1" class="erroricon"></i>
            </span>
            <span id="nameerror" style="color:red;" class="errorl"></span>
                        <input type="email" placeholder="Your Email Id" id="email"  name="cemail">
                        <span class="checkicons">
                        <i class="fas fa-check-circle" id="fa-check-circle2" class="erroricon"></i>
            </span>
            <span id="emailerror" class="errorl" style="color:red;"></span>
                        <input type="text" placeholder="Your Phone number" id="phone" name="cphn">
                        <span id="phoneerror" class="errorl" style="color:red;"></span>
                        <span class="checkicons">
            <i class="fas fa-check-circle" id="fa-check-circle3" class="erroricon"></i>
            </span>
                        <textarea  rows = "10" placeholder="your Message"  name="caddress" id="address" ></textarea>
                        <span id="addresserror" class="errorl" style="color:red;"></span>
                        <span class="checkicons">
            <i class="fas fa-check-circle" id="fa-check-circle5" class="erroricon"></i>
            </span>
                        <center><input type="submit" name="sumbit" value="SUBMIT" class="btn"></center>
                    </form>

                    <!-- Map -->
                    <div data-aos="zoom-out-up">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.1606599284733!2d85.1003510500909!3d25.6327928201011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed57d6a5ca4bc5%3A0xf13297437ad031f6!2sCIMAGE%20College%2C%20Patliputra!5e0!3m2!1sen!2sin!4v1607948744250!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati sapiente minima itaque nam modi libero optio vitae animi, praesentium quis commodi fugit quasi nostrum nihil veniam nisi suscipit cumque ducimus error doloribus est voluptatum at? Et aut mollitia quia.</p>
                </div>
                  <div class="contact">
        <h2>Contact Info</h2>
        <ul class="info">
          <li>
            <i class="fa fa-home" aria-hidden="true"></i>
            <h4>Kankarbagh patna 800020<br>Bihar</h4>
          </li>
          <li>
            <i class="fa fa-phone" aria-hidden="true"></i>
                <a href="tel:12345678900">  +919876543210</a></br>
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
        </footer></div>
        <!-- end of footer -->
        
<script type="text/javascript">
        window.onload=function(){
            document.getElementById('load_div').style.display="none";
            document.getElementById('load_disable').style.display="block";
        }
    </script>
        <script src="script.js"></script>
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

            var address=document.getElementById("address").value;
            var addresscheck =/^([\w\W ]{1,100})$/ ;

            if(addresscheck.test(address)){
                document.getElementById('addresserror').innerHTML = " ";
                document.getElementById('fa-check-circle5').style.color="#17c117";
                document.getElementById('address').style.borderColor="#17c117";
            }
            else{
                document.getElementById('addresserror').innerHTML = " **please enter valid address**";
                document.getElementById('address').style.borderColor="red";
                return false;
            }
        }
        </script>
    </body>
</html>


<?php
if(isset($_POST["sumbit"]))
{
    $name=$_POST["cnm"];
    $email=$_POST["cemail"];
    $phone=$_POST["cphn"];
    $address=$_POST["caddress"];

    echo"<table border='2px'>";
    echo"<tr><td>name</td><td>".$name."</td></tr>";
    echo"<tr><td>email</td><td>".$email."</td></tr>";
    echo"<tr><td>phone</td><td>".$phone."</td></tr>";
    echo"<tr><td>address</td><td>".$address."</td></tr>";
    echo"</table>";
    /*$con=mysqli_connect("localhost","root","","picshort_studio");
    $sql="insert into picshort_client_booking(Name,Email,Phone,Address)values('".$name."','".$email."','".$phone."','".$address."')";
    mysqli_query($con,$sql);
    mysqli_close($con);*/
}
?>