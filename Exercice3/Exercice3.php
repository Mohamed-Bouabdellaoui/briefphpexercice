<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</select>
    <form action="">

    <input type="number" name="nb1" id="">
<select name="chose">

  <option>+ </option>
  <option>-</option>
  <option>*</option>
    <option>/</option>
</select>
    <input type="number" name="nb2" id="">
    <button name="button"> calucle</button>

    </form>

    <?php
 function calul($a,$b,$op){
     

 switch($op){
      case "+" :
        return  $a+$b;
        break;
        case "-" :
            return $a-$b;
            break;
            case "*" :
                return $a*$b;
                break;
                case "/" :
                    return $a/$b;
                    break;
                    default:
                    return("blbla");
 }
}
$a=$_REQUEST["button"];
 if(isset($a)){
$nbr1=$_REQUEST["nb1"];
$nbr2=$_REQUEST["nb2"];
$chose=$_REQUEST["chose"];
echo calul($nbr1,$nbr2,$chose);
}
?>
</body>
</html>