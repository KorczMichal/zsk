<div class="container bg-info">
<div class="row align-content-center p-2 d-flex">
  <img class="mx-auto" src="logo.png" alt="Logo">
</div>
  <form action="scripts/log_in.php" class="form align-items-center" method="post">
    <div class="form-row flexbox col-auto p-2 m-2">
    <input class="form-control p-2" type="text" name="login" value="" placeholder="Podaj login" >
    <input class="form-control p-2" type="password" name="password" value="" placeholder="Podaj hasło">
  </div>
  <div class="text-center text-white">
    <button class="btn btn-success p-2 m-2 " type="submit" name="button">Zaloguj</button>
    <button class="btn btn-success p-2 m-2 " type="button" name="button"><a class="text-light" href="register.php">Przejdź do tworzenia konta</a></button>
    <button class="btn btn-success p-2 m-2 " type="button" name="button"><a class="text-light" href="q_page.php">Do strony ucznia</a></button>
    <button class="btn btn-success p-2 m-2 " type="button" name="button"><a class="text-light" href="teacher.php">Do strony nauczyciela</a></button>
    <button class="btn btn-success p-2 m-2 " type="button" name="button"><a class="text-light" href="user_a.php">Do strony admina</a></button>
      </div>
  </form>
</div>
