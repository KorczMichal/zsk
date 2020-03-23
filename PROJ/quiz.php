<?php
$url=$_SERVER['REQUEST_URI'];
$sql="SELECT * from word_eng
join class_word on class_word.id_word=word_eng.id_eng
 join class on class_word.id_class=class.id_class
  where class.id_class=$_GET[class_id]";
$result=mysqli_query($connect,$sql);
$i=0;
      while ($row = mysqli_fetch_assoc($result)) {
        $words[$i]=$row['word'];
        $id_word[$i]=$row['id_eng'];
        $i++;
      }
       ?>
<div class="container bg-info">
  <div class=" row">
    <h4 class="col-10">
      <?php
      $class_id=$_GET['class_id'];
      $sql="SELECT name from class where id_class='$class_id'";
      $result=mysqli_query($connect,$sql);
      $row=mysqli_fetch_assoc($result);
    echo $row['name'];
    ?>
  </h4>
    <a  class="col-2 bg-dark text-center text-decoration-none text-white"href="home.php?class_id=<?php echo $class_id;?>">Do lekcji</a>
  </div>
<div class="container">
  <h2 class="text-center"id="word">
    <?php
    $i=rand(0,sizeof($words)-1);
    if(isset($_GET['i'])){$i=$_GET['i'];}
    echo $words[$i];
     ?>
  </h2>
  <div class="container  justify-content-center">
  <p class="text-center">Wpisz poprawne tłumaczenie:</p>
  <div class="d-flex-inline text-center">
    <?php

      $sql = "SELECT word_pol.id_pol,word_pol.word from word_pol\n"

      . "    join word_meaning on word_pol.id_pol=word_meaning.id_pol\n"

      . "    join word_eng on word_meaning.id_eng=word_eng.id_eng\n"

      . "    where word_meaning.id_eng=$id_word[$i]";
      $result=mysqli_query($connect,$sql);
      $number=mysqli_num_rows($result);
      echo "Liczba tłumaczeń: $number";
echo "<form action=q_page.php?class_id=".$class_id."&i=$i method=\"post\">";
for($index=0;$index<$number;$index++){
  echo "<input type=\"text\" name=\"tr$index\" value=\"\"><br>";
}
     ?>
  <button type="submit" name="check">Potwierdź</button>
</form>
<?php
if(!empty($_POST['tr0'])){
for($index=0;$index<$number;$index++){
  $tr[$index]=$_POST['tr'.$index];
}
$m=0;
while ($row=mysqli_fetch_assoc($result)) {
  $mean[$m]=$row['word'];
  $m++;
}
$check=0;
for($j=0;$j<$number;$j++){
for($m=0;$m<$number;$m++){
  if($tr[$j]==$mean[$m])$check++;
}}
if($check==$number){
  echo "Dobrze!";
}
else {
  echo "Źle<br>";
  echo "Poprawne tłumaczenia: <br>";
  for($m=0;$m<$number;$m++){
    echo "$mean[$m]<br>";
  }
}}
?>
  </div>
  <div class="row text-center" >
    <div class="col-10">

    </div>
    <div class="col-2">
      <button type="button" name="button"><a class="btn" href="<?php echo"q_page.php?class_id=".$class_id ?>">Losuj</a></button>

    </div>
  </div>
  <p></p>
</div>
</div>
