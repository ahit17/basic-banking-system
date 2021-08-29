
<style>

body{
    background: -webkit-linear-gradient(left, #4BDFFD, #50FED6);
}
.header{
    display:flex;
    justify-content:left;
    align-items:center;
    width: 100%;
    height: 80px;
    background-color: #b3ff40e7;
    position:absolute;
    top:0px;
    left:0px;
    right: 0px;
    opacity:90%;
    
    
  }
  h1{
    position: relative;
    left: 45px;
  }
  .logo{
    display: flex;
    width:20px;
    height: 80px;
  }
  .navbar ul{
    overflow: auto;
  margin-left: 700px;
  }
  .navbar li a:hover{
    background-position: 100% 0;
    background-color: rgb(29, 121, 240);
    color:white;
      -moz-transition: all .4s ease-in-out;
      -o-transition: all .4s ease-in-out;
      -webkit-transition: all .4s ease-in-out;
      transition: all .4s ease-in-out;
      padding: 6px;
  }
  .navbar li{
    float : left;
    list-style: none;
    padding: 6px 20px;
    margin-inline-end: auto;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }
  a{
    text-decoration:none;
  } 

.contact-form{
    background: #fff;
    position: relative;
    left:180px;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
    
}

.contact-form .form-control{
    border-radius:1rem;
    padding:5px;
}

.contact-image{
    text-align: center;
}

.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}

.contact-form form{
    padding: 10%;
}

.contact-form form .row{
    margin-bottom: -7%;
}

.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}

.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}

.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

</style>

<div class="header">
    <div class = "logo">
       <img src="images/spark logo.png">
    </div>
    <h1><b>SPARKS BANK OF INDIA</b></h1>
    <nav class="navbar">
      <ul>
        
          <li><a href= "index.html">Home</a></li>
          <li><a href= "about.html">About</a></li>
          <li><a href= "contact_me.php">Contact Me</a></li>
      </ul>
  </div>
</div>

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3><b>Drop a Message</b></h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                            
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                         <br>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <br>
                       <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
