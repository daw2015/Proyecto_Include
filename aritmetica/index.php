<?php
    if(isset($_GET["op1"])){
        $op1 = $_GET["op1"];
    }else{
        $op1 = 0;
    }
    
    if(isset($_GET["op2"])){
        $op2 = $_GET["op2"];
    }else{
        $op2 = 0;
    }
    
    if(isset($_GET["op"])){
        switch ($_GET["op"]){
            case "+":
                $resultado = $op1+$op2;
                break;
            case "-":
                 $resultado = $op1-$op2;
                break;
            case "*":
                 $resultado = $op1*$op2;
                break;
            case "/":
                 $resultado = $op1/$op2;
                break;
        }
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--Primera forma-->
        <form>
            <p>valor 1:</p>
            <input type="number" name="op1" value="<?php echo $op1; ?>"/><br />
            <p>valor 2:</p>
            <input type="number" name="op2" value="<?php echo $op2; ?>"/>
            <br /><br />
            <input type="submit" value="+" name="op"/>
            <input type="submit" value="-" name="op"/>
            <input type="submit" value="*" name="op"/>
            <input type="submit" value="/" name="op"/><br />
            <input type="number" name="" value="<?php echo $resultado; ?>" readonly="required"/>
        </form>   
        <br />
         <!--Segunda forma-->
        <form>
            <p>valor 1:</p>
            <input type="number" name="op1" value="<?php echo $op1; ?>"/><br />
            <p>valor 2:</p>
            <input type="number" name="o21" value="<?php echo $op2; ?>"/>
            <br /><br />
            <input type="submit" value="+" name="suma"/>
            <input type="submit" value="-" name="resta"/>
            <input type="submit" value="*" name="producto"/>
            <input type="submit" value="/" name="division"/><br />
            <input type="number" name="" value="<?php echo $resultado; ?>" readonly="required"/>
        </form>
         <a href="index.php?op1=10&op2=12&op=%2B">suma aqui 10 y 12</a>
    </body>
</html>
