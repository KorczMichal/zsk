
<div class="container bg-info">
<div class="row">
  <?php
  if(isset($_GET['class_id'])){
    $class_id=$_GET['class_id'];
    $sql="SELECT name from class where id_class='$class_id'";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
echo "<h4 class=\"col-1\">$row[name]</h4>";
$sql="SELECT * from word_eng
  join class_word on class_word.id_word=word_eng.id_eng
   join class on class_word.id_class=class.id_class
    where class.id_class=$_GET[class_id]";
$result=mysqli_query($connect,$sql);
?>
<form class="form-control col-3" method="post">
    <select name="word">
<?php
      while ($row = mysqli_fetch_assoc($result)) {
        echo <<<WORD
                echo "<option value=$row[id_eng]>$row[word]</option>";

      WORD;
    }
       ?>
    </select>
    <button type="submit" name="button">Przejdź</button>
  </form>
  <div class=" col-6">

  </div>
  <?php
echo "<a  class=\"col-2 bg-dark text-center text-decoration-none text-white\"href=\"q_page.php?class_id=$class_id \">Do quizu</a>";
  ?>
</div>
<div class="container">
  <?php

  echo $row['word'];
   ?>
  <h2 class="text-center">
<?php
    if(isset($_POST['word'])){
    $id_word=$_POST['word'];
    $sql="SELECT word from word_eng where id_eng='$id_word'";
    $result=mysqli_query($connect,$sql);
    $word=mysqli_fetch_assoc($result);
    echo $word['word'];

   ?></h2>
  <div class="container  justify-content-center">
  <p class="text-center">Tłumaczenia:</p>
  <p class="bg-light text-center">
    <?php
    $sql = "SELECT word_pol.id_pol,word_pol.word from word_pol\n"

    . "    join word_meaning on word_pol.id_pol=word_meaning.id_pol\n"

    . "    join word_eng on word_meaning.id_eng=word_eng.id_eng\n"

    . "    where word_meaning.id_eng=$id_word";
    $result=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_assoc($result)){
      echo  $row['word'];
      echo "<br>";
    }}
      ?>
  </p>
</div>
</div>
<?php }

mysqli_close($connect); ?>
