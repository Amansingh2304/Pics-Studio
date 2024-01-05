<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- aos plugin-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
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
.img-fluid {
    height: 300px;
    width: 500px;
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
    z-index: 2;
    position: absolute
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

.active{
    color: #12ad2f!important;
}

/****** end of Utility Classes *******/

/******** Header styling *******/

.nav-section{
    background-color: black;
}
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
        <header class = "header">
            <div class = "nav-section">
                  

<!-- navigation menu ===============================-->
                <nav class = "top-nav">
                    <ul>
                        <li><a href = "index.php">Home</a></li>
                        <li><a href = "services.php">Services</a></li>
                        <li><a href = "gallery.php" class = "active">Gallery</a></li>
                        <li><a href = "contact.php">Contact</a></li>
                    </ul>
                </nav>
                <span class = "search-icon">
                    <i class = "fas fa-search"></i>
                </span>
            </div>
<img src="images/plogo.jpeg" id="logo">
<div class="container">
 <div class="py-5">
  <h1 class="text-center display-3"> MY GALLERY </h1>
 
 </div>
 <div class="row no-gutters gallerys">
  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-in-down"> 
   <a href="https://images.unsplash.com/photo-1594397856557-75aca2e35b00?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8aW5kaWFuJTIwd2VkZGluZyUyMHBob3RvZ3JhcGh5fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1594397856557-75aca2e35b00?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8aW5kaWFuJTIwd2VkZGluZyUyMHBob3RvZ3JhcGh5fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-out-up"> 
   <a href="https://images.unsplash.com/photo-1587271636175-90d58cdad458?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aW5kaWFuJTIwd2VkZGluZyUyMGNvdXBsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1587271636175-90d58cdad458?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aW5kaWFuJTIwd2VkZGluZyUyMGNvdXBsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-out-down"> 
   <a href="https://images.unsplash.com/photo-1594397856557-75aca2e35b00?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8aW5kaWFuJTIwd2VkZGluZyUyMGNvdXBsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1594397856557-75aca2e35b00?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8aW5kaWFuJTIwd2VkZGluZyUyMGNvdXBsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-out-up"> 
   <a href="https://images.unsplash.com/photo-1587271657147-703d69f97161?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGluZGlhbiUyMHdlZGRpbmclMjBjb3VwbGV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1587271657147-703d69f97161?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGluZGlhbiUyMHdlZGRpbmclMjBjb3VwbGV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-in-down"> 
   <a href="https://images.unsplash.com/photo-1606038165764-1af3e31be6d5?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTJ8fGluZGlhbiUyMHdlZGRpbmclMjBjb3VwbGV8ZW58MHx8MHw%3D&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1606038165764-1af3e31be6d5?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTJ8fGluZGlhbiUyMHdlZGRpbmclMjBjb3VwbGV8ZW58MHx8MHw%3D&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-out-up"> 
   <a href="https://images.unsplash.com/photo-1595231712627-1998d9408161?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8aW5kaWFuJTIwd2VkZGluZyUyMHRyYWRpdGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1595231712627-1998d9408161?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8aW5kaWFuJTIwd2VkZGluZyUyMHRyYWRpdGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-in-down"> 
   <a href="https://images.unsplash.com/photo-1493728695749-5a3603bd6908?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTR8fGluZGlhbiUyMHdlZGRpbmclMjB0cmFkaXRpb258ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1493728695749-5a3603bd6908?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTR8fGluZGlhbiUyMHdlZGRpbmclMjB0cmFkaXRpb258ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-out-up"> 
   <a href="https://images.unsplash.com/photo-1598194809294-d11b06def00f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTF8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1598194809294-d11b06def00f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTF8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-in-down"> 
   <a href="https://images.unsplash.com/photo-1607095932579-7b78c3bef128?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjN8fGluZGlhbiUyMHdlZGRpbmclMjB0cmFkaXRpb258ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1607095932579-7b78c3bef128?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjN8fGluZGlhbiUyMHdlZGRpbmclMjB0cmFkaXRpb258ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-out-up"> 
   <a href="https://images.unsplash.com/photo-1439539698758-ba2680ecadb9?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTR8fGluZGlhbiUyMHdlZGRpbmclMjB0cmFkaXRpb258ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1439539698758-ba2680ecadb9?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTR8fGluZGlhbiUyMHdlZGRpbmclMjB0cmFkaXRpb258ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-in-down"> 
   <a href="https://images.unsplash.com/photo-1555725305-0406b7607be0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8aW5kaWFuJTIwZnVuY3Rpb25zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1555725305-0406b7607be0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8aW5kaWFuJTIwZnVuY3Rpb25zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-out-up"> 
   <a href="https://images.unsplash.com/photo-1605292356183-a77d0a9c9d1d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTR8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1605292356183-a77d0a9c9d1d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTR8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-out-up"> 
   <a href="https://images.unsplash.com/photo-1597256789826-62934d3ab943?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzB8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1597256789826-62934d3ab943?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzB8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-in-down"> 
   <a href="https://images.unsplash.com/photo-1596450514537-fae68a81346b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzh8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1596450514537-fae68a81346b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzh8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-out-up"> 
   <a href="https://images.unsplash.com/photo-1594135356513-14291e55162a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzZ8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1594135356513-14291e55162a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzZ8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-out-up"> 
   <a href="https://images.unsplash.com/photo-1486174070967-b0f1610f76de?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzR8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1486174070967-b0f1610f76de?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzR8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-in-down"> 
   <a href="https://images.unsplash.com/photo-1532375810709-75b1da00537c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzd8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1532375810709-75b1da00537c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzd8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-out-up"> 
   <a href="https://images.unsplash.com/photo-1546079469-2ce495e53399?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDJ8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" target="_blank">
    <img src="https://images.unsplash.com/photo-1546079469-2ce495e53399?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDJ8fGluZGlhbiUyMGZ1bmN0aW9uc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid">
   </a>
  </div>

 
 </div>
</div>

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
        </footer></div>
        <!-- end of footer -->
<script type="text/javascript">
        window.onload=function(){
            document.getElementById('load_div').style.display="none";
            document.getElementById('load_disable').style.display="block";
        }
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- aos  -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <!-- our aos data -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
        </script>
  <script>
   $(document).ready(function(){
    $('.gallerys').magnificPopup({
     type: 'image',
     delegate: 'a',
     gallery: {
      enabled : true
     }
    });
   });
  </script>

</body>
</hphp