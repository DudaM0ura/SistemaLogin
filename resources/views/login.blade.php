<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="layoutlogin.css">
    <title>Login</title>
</head>
<body>

        <div class="wrapper fadeInDown">
            <div id="formContent">
          
              <!-- Icon -->
              <div class="fadeIn first">
                <img src="imagens/logo_siscom.png" alt="logo_siscom">
              </div>
              <br>
              <!-- Login Form -->
              <form method="POST" action="{{route('login.auth')}}">
                @csrf
                <input type="text" id="login" class="fadeIn second" name="name" placeholder="usuário" required>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="senha" required>
                <button type="submit" class="buttonlogin fadeIn fourth">
                    Entrar
                </button>
                    
              </form>
          
            </div>
        </div>
    
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

