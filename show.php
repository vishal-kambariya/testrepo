<!-- <html>
  <head>
    <title></title>
  </head>
  <body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
      <input type="text"  name="name" placeholder="Enter Your Name">
      <br>
      <input type="submit" value="submit" name="submit">
    </form>
  </body>
</html>
-->
<p id="demo"></p>
<?php
/*if(isset($_POST['submit']))
{
  echo $_SERVER['HTTP_ORIGIN'];
  echo  header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

}*/

$array1=["apple","banana"];
$array2=["mango","kiwi"];
$array3=array_merge($array1,$array2);
//echo var_dump($array3);

function generateRandomString($length = 4) {
  $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
echo "hello";
echo "<br>";
$a=10;
// if($a != 20)
// {
//   exit(0);
// }
echo generateRandomString(10);
$date="2017-03-22";
echo "<br>";

$date1=date_create($date);
echo date_format($date1,"d/m/Y");
$str=["hello", "world"];
echo var_dump(implode($str));
//$array=[[[$key=>$value],[$key=>$value]],[$key=>$value]];
$str1="R3cjDbt2ruSHESyb074G";
//echo strlen($str1);
$store='';
for($i=1;$i<=20;$i++){
$store.=$str1[rand(1,20)];
}
echo $store;
$n="1323535353";
echo rand($n);
?> 
<script>
let data=(function()
{
  let i=0;
  return function(){
    i+=1;
    $demo=document.getElementById("demo");
    $demo.innerHTML=i;
    $demo.style.color="green";
    $demo.style.fontSize=25+"px";
    $demo.style.display="none";
  }
})();
data();
data();

</script>
