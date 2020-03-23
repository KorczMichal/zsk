<div class="container bg-info">
<div class="row align-content-center p-2 d-flex">
<a class="mx-auto" href="index.php">  <img  src="logo.png" alt="Logo"></a>
</div>
  <form action="scripts/registration.php" method="post">
    <div class="form align-items-center">
    <div class="form-row flexbox col-auto p-2 m-2">
    <input class="form-control p-2" type="text" name="login" value="" placeholder="Podaj login" >
    <input class="form-control p-2" type="password" name="password1" value="" placeholder="Podaj hasło">
    <input class="form-control p-2" type="password" name="password2" value="" placeholder="Powtórz hasło">
    <input class="form-control p-2" type="text" name="name" value="" placeholder="Podaj imię" >
    <input class="form-control p-2" type="text" name="surname" value="" placeholder="Podaj nazwisko" >
    </div>
    </div>

    <div class="form-row flexbox col-auto bg-white" >
      <p>Wybierz typ</p><br>
    <input  type="radio" name="acc_type" value="student"><span>Uczen</span>
    <input  type="radio" name="acc_type" value="teacher"><span>Nauczyciel</span>
  </div>
  <div class="text-center text-white">
    <button class="btn btn-success p-2 m-2  " type="submit" name="reg">Utwórz konto</button>
      </div>
  </form>
</div>
