
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer HTML & CSS</title>

    <link rel="stylesheet" href="style.css">
    
    <!----- FONT AWESOME CSS FOR ICONS FONTS ------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<style>

*{
    box-sizing: border-box;
    margin:0;
    padding:0;

}
body{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex-direction: column;
    min-height: 100vh;
}
footer{
     background-color: #000000ff;
     position: relative;
     width: 100%;
     min-height: 350px;
     padding: 3rem 1rem;
}
.container {
    max-width: 1140px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;


}
.row{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.col{
    min-width: 250px;
    color:#f2f2f2f2;
    font-family: poppins;
    padding:0 2rem;
}
.col .logo{
    width: 100px;
    margin-bottom:25px;
}
.col h3{
    color:#ff014fff;
    margin-bottom: 20px;
    position: relative;
    cursor: pointer;
}
.col h3::after{
    content: '';
    height:3px;
    width:0px;
    background-color: #ff014fff;
    position: absolute;
    bottom: 0;
    left:0;
    transition: 0.3s ease;

}
.col h3:hover::after{
    width:30px
}
.col .social a i{
    color:#ff014fff;
    margin-top:2rem;
    margin-right: 5px;
    transition: 0.3s ease;
}
.col .social a i:hover{
    transform: scale(1.5);
    filter:grayscale(25);
}
.col .links a{
    display: block;
    text-decoration: none;
    color:#f2f2f2;
    margin-bottom: 5px;
    position: relative;
    transition: 0.3s ease;
}
.col .links a::before{
    content:'';
    height: 16px;
    width:3px;
    position: absolute;
    top:5px;
    left:-10px;
    background-color: #ff014fff;
    transition: 0.5s ease;
    opacity: 0;
}
.col .links a:hover::before{
    opacity: 1;
}
.col .links a:hover{
    transform: translateX(-8px);
    color:#ff014fff;
}
.col .contact-details{
    display: inline-flex;
    justify-content: space-between;
}
.col .contact-details i{
    margin-right:15px;
}
.row .form{
    display: flex;
    justify-content: center;
    align-items: center;
    padding:2rem 0;
}
.row .form input{
    background-color: #1a1c20ff;
    border:0;
    outline:none;
    padding:14px 20px;
    border-radius: 6px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.form button{
    padding:14px 20px;
    border:0;
    border-radius: 6px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    background-color: #ff014fff;
}

/********** Responsive Design ********/
@media(max-width:900px)
{
  .row{
    flex-direction: column;
  }
  .col{
    width: 100%;
    text-align: left;
    margin-bottom: 25px;
  }
}
@media(max-width:768px)
{
  .row{
    flex-direction: column;
  }
  .col{
    width: 100%;
    text-align: left;
    margin-bottom: 20px;
  }
}
</style>

</head>
<body>
     <footer>
        <div class="container">
            <div class="row">
                  <div class="col" id="company">
                      <img src="images/logo.png" alt="" class="logo">
                      <p>
                        We are specialized in designings, make your business a brand.
                        Try our premium services.
                      </p>
                      <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                      </div>
                  </div>


                  <div class="col" id="services">
                     <h3>Services</h3>
                     <div class="links">
                        <a href="#">Illustration</a>
                        <a href="#">Creatives</a>
                        <a href="#">Poster Design</a>
                        <a href="#">Card Design</a>
                     </div>
                  </div>

                  <div class="col" id="useful-links">
                     <h3>Links</h3>
                     <div class="links">
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Our Policy</a>
                        <a href="#">Help</a>
                     </div>
                  </div>

                  <div class="col" id="contact">
                      <h3>Contact</h3>
                      <div class="contact-details">
                         <i class="fa fa-location"></i>
                         <p>FF-42, Procube Avenue, <br> NY, USA</p>
                      </div>
                      <div class="contact-details">
                         <i class="fa fa-phone"></i>
                         <p>+1-8755856858</p>
                      </div>
                  </div>
            </div>

            <div class="row">
                  <div class="form">
                    <form action="">
                        <input type="text" placeholder="Email here...">
                        <button><i class="fa fa-paper-plane"></i></button>
                    </form>
                  </div>
            </div>

        </div>
     </footer>
</body>
</html>