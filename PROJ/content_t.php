<div class="container bg-info">
<div class=" row">
  <div class="col-1">
    <h4 class="">Klasa</h4>
  </div>

  <div class="col-5 text-center">
    <form class="form-control" action="index.html" method="post">
      <select name="unit">
        <option value="unit1">Dzial 1</option>
        <option value="unit2">Dzial 2</option>
      </select>
      <select name="lesson">
        <option value="lesson1">Lekcja 1</option>
        <option value="lesson2">Lekcja 2</option>
      </select>
      <select name="word">
        <option value="word1">Słowo 1</option>
        <option value="word2">Słowo 2</option>
        <option value="word3">Słowo 3</option>
      </select>
      <button class="btn btn-dark btn-sm" type="submit" name="button">Przejdź</button>
    </form>
  </div>
  <div class="col-1">
  </div>
  <a  class="col-2 bg-dark text-center text-decoration-none text-white" href="edit_t.php">Dodaj</a>
  <a  class="col-2 bg-dark text-center text-decoration-none text-white" href="edit_t.php">Zapisz</a>
</div>
<div class="container">
<div class="row">
  <h2 class="text-center col-8"id="word" id="word">
    Słowo</h2>
    <form class="form col-4" method="post">
      <input type="text" name="new_word" value="">
      <input type="submit" name="" value="Zamień">
    </form>
</div>
  <div class="container  justify-content-center">
  <p class="text-center">Tłumaczenia:</p>
  <ul class="bg-light">
    <li id="tr1">Tłumaczenie 1
      <form class="form" method="post">
        <input type="text" name="new_meaning" value="">
        <input type="submit" name="" value="Zamień">
      </form></li>
    <li id="tr2">Tłumaczenie 2 <form class="form" method="post">
      <input type="text" name="new_meaning" value="">
      <input type="submit" name="" value="Zamień">
    </form></li>
    <li id="tr3">Tłumaczenie 3 <form class="form" method="post">
      <input type="text" name="new_meaning" value="">
      <input type="submit" name="" value="Zamień">
    </form></li>
  </ul>
  </div>
  <div class="row text-center" >
    <div class="col-2">
      <button class="btn btn-dark" type="button" name="button">Wstecz</button>
    </div>
    <div class="col-8">

    </div>
    <div class="col-2">
      <button class="btn btn-dark" type="button" name="button">Dalej</button>
    </div>

  </div>
</div>
</div>
