<?php
include('./scripts/connect.php');
$id= $_SESSION['id'];
if(isset($_GET['class_id'])){
$sql="SELECT * from word_eng
  join class_word on class_word.id_word=word_eng.id_eng
   join class on class_word.id_class=class.id_class
    where class.id_class=$_GET[class_id]";
$result=mysqli_query($connect,$sql);
};
$url=$_SERVER['REQUEST_URI'];
 if (isset($_GET['update_id'])) {}
   ?>
<div class="container bg-info">
  <div class=" row">
    <div class="container">

    <form class="form-control" method="post">

        <select name="word">
  <?php
          while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value=\"$row[id_eng]\">$row[word]</option>";
          } ?>
        </select>
        <button type="submit" name="button">Przejdź</button>
      </form>

    </div>
    <div class="col-">
    </div>
  </div>
<div class="container">
<div class="row  p-2">
  <h2 class="text-left col-2"id="word" id="word">
  <?php
  if(isset($_POST['word'])){

    $id_word=$_POST['word'];
    $sql="SELECT word from word_eng where id_eng=$id_word";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
    echo $row['word'];
   ?>
  </h2>
  <?php
   echo"  <form class=\"form col-4 p-2 \" action=\"./scripts/edit_word.php?url=$url&id_word=$id_word\" method=\"post\">"
?>
      <input type="text" name="new_word" value="">
      <input type="submit" name="" value="Zamień">
    </form>
    <?php
echo "    <a href=\"./scripts/delete_word.php?url=$url&id_word=$id_word\" class=\"btn btn-sm btn-danger\" >Usuń</a>";
?>
</div>
  <div class="container  justify-content-center">
  <p class="text-left">Tłumaczenia:</p>
  <ul class="bg-light">
    <?php
    $sql = "SELECT word_pol.id_pol,word_pol.word from word_pol\n"

    . "    join word_meaning on word_pol.id_pol=word_meaning.id_pol\n"

    . "    join word_eng on word_meaning.id_eng=word_eng.id_eng\n"

    . "    where word_meaning.id_eng=$id_word";
    $result=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_assoc($result)){
      echo <<<MEANING
      <li class="d-flex-inline">$row[word]

        <form class="form d-inline" action="./scripts/edit_meaning.php?url=$url&id_word=$row[id_pol]" method="post">
          <input type="text" name="new_word" value="">
          <input type="submit" name="" value="Zamień">
        </form>
      <a href="./scripts/delete_meaning.php?url=$url&id_word=$row[id_pol]" class="btn btn-sm btn-danger" >Usuń</a>
      </li>
MEANING;
    }
      ?>
      <li>
        <?php
         echo"  <form class=\"form d-inline\" action=\"./scripts/add_meaning.php?url=$url&id_word=$id_word\" method=\"post\">"
         ?>
         <input type="text" name="new_meaning" value="">
        <input type="submit" name="" value="Dodaj tłumaczenie">
      </form>
    </li>
    </div>
  </ul>
  </div>
  <?php
  }
    mysqli_close($connect) ?>
  <div class="row text-center" >
    <?php
    if(isset($_GET['class_id'])){
    $class_id=$_GET['class_id'];
    echo <<<ADD
    <form class="form d-inline"action="./scripts/add_word.php?url=$url&class_id=$class_id" method="post">
      <input type="text" name="add_word" value="">
      <input type="submit" name="" value="Dodaj słowo">
    </form>
    ADD;
  }
    ?>
  </div>
</div>
</div>
