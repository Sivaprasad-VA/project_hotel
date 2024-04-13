@extends('index')  
@section("title")  
HomePage
@endssection

@section('page')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
   background: url('/images/purple.jpg')no-repeat;
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

<body>
    <section>
        <div class="form-box">
          <div class="form-value">
            <form action="" method="post">
                @csrf
                <h2><b>Login</b></h2>
                
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                </div>

                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="forget">
                    <label for="">
                 <input type="checkbox">Remember Me  <a href="">Forget Password</a></label>

                </div>
                <button>Log in</button>
                <div class="register">
                    <p>Dont have an account <a href="">register</a></p>
                </div>
            </form>
          </div>  
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
@endssection
