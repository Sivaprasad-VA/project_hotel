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
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:wght@100;300;400;500;700&display=swap');

*{
    margin: 0;
    padding: 0;
    font-family:'poppins',sans-serif;
}

section{
   display: flex;
   justify-content: center;
   align-items: center;
   min-height: 100vh;
   width: 100%;
   background: url('images/banner3.jpg')no-repeat;
   background-position: center;
   background-size: cover;


}

.form-box{
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid rgba(255,225,225,0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
}

h2{
    font-size:2rem;
    color: #fff;
    text-align: center;
    /* margin-top: 25px; */
  
}

.inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
}

.inputbox label{
    position:absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color:rgb(252, 252, 253);
    font-size: 1.5em;
    pointer-events: none;
    transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
    top: -5px;
}
.inputbox input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1.2em;
    padding:0 35px 0 5px;
     color: #fff;
}

.inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    top: 20px;
}

.forget{
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: center;
}

.forget label a{
    margin-right:3px;
}

.forget label a{
    color: #fff;
    text-decoration: none;
}

.forget label a:hover{
    text-decoration: underline;
}

button{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
}

.register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}

.register p a{
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}

.register p a:hover{
    text-decoration: underline;
}
</style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <section>
        <div class="form-box">
          <div class="form-value">
            <form action="" method="post">
                @csrf
                <h2><b>REGISTRATION </b></h2>

                <div class="inputbox">
                  <input type="name" name="name" required>
                  <label for="">NAME </label>
              </div>
                
                <div class="inputbox">
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                </div>
             
                <div class="inputbox">
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                
                <div class="inputbox">
                    
                    <input type="phone" name="phone" required>
                    <label for="">PHONE NO</label>
                </div>
               <button id="btn" name="submit">submit</button>
               
            </form>
          </div>  
        </div>
    </section>


    

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
