
<?php
//Dumescu Monica
echo "Hello world!";
$txt = "Hello";
//$myGlobal;
define("SMART_VALUE", "Cool");
$var1=5;
$var2=10;
echo nl2br("\n"), $var1*$var2;
$var3="String 1";
$var4="String 2";
echo nl2br("\nVar3: "), $var3, " Var4: ", $var4;

//1
$integer_var= 2;
$float_var= 4.6;
$string_var="Helllooo";
$bool_var=true;
echo nl2br("\n1. "), var_dump($integer_var),var_dump($float_var), var_dump($string_var),  var_dump($bool_var);

//2
$a="Hennlloooo";
echo nl2br("\n2. "), strlen($a);

//3
$b=67;
echo nl2br("\n3. "), var_dump($b);

//4
$c=77.8;
echo nl2br("\n4. "), (String)$c;

//5
echo nl2br("\n5. "), 4/5;

//6
$i=5;
$i++;
$i++;
$i++;
$i++;
$i++;
echo  nl2br("\n6. "), $i;

//7
$a="2";
$b=2;
echo nl2br("\n7. a==b-> "), var_dump($a==$b), " a===b-> ", var_dump($a===$b);

//8
$t=7;
$t--;
echo nl2br("\n8. "), $t;

//9
$a=true;
$b=false;
$a || $b ? $a=true : $a=false;
echo nl2br("\n9. "), var_dump($a);

//10
$x="Ana ";
$y="are ";
$z="mere";
echo nl2br("\n10. "), $x.$y.$z;

//11
$p=true;
$q=6;
$p ? $q=1 : $q=-1;
echo nl2br("\n11. "), $q;

echo nl2br("\n");
function test($string_var)
{
    echo $status = (strlen($string_var)>10) ? "Greater than 10" : ((strlen($string_var)>6) ? "Greater than 6": ((strlen($string_var)>3) ? "Greater than 3": "Something else"));
}
/*
function test($string_var)
{
    echo $status = ((strlen($string_var)>3) ? "Greater than 3" : "Less than 3");
    echo $status = ((strlen($string_var)>6) ? "Greater than 6" : "Less than 6");
    echo $status = ((strlen($string_var)>10) ? "Greater than 10" : "Less than 10");
}*/
test("");
echo "</br>";
test("Ana ");
echo "</br>";
test("Ana are");
echo "</br>";
test("Ana are mere");
echo "</br>";

function piramida($x)
{
    for($i=1;$i<=$x;$i++)
    {
        for($j=1;$j<=$i;$j++)
            echo "*";
        echo "</br>";
    }
}
piramida(8);
echo "</br>";
$var = "10" + "2PHP";
echo $var;
echo "</br>";
$var_s="SmartValue";
$y=28;
$m=NULL;
var_dump($var_s);
echo "</br>";
print $var_s;
echo "</br>";
var_dump($y);
echo "</br>";
var_dump($m);

echo "</br>";
function prim($a) : int
{
    if($a<2 || ($a%2==0 && $a!=2))
        return 0;
    elseif($a==2)
        return 1;
    else
    {
        for($d=3;$d<=sqrt($a);$d++)
        {
            if($a%$d==0)
                return 0;
        }
        return 1;
    }
}
//Va afisa 1010
echo prim(2), prim(0), prim(7), prim(9);

echo "</br>";
function same($b)
{
    if($b[0]===$b[strlen($b)-2] && $b[1]===$b[strlen($b)-1])
        echo "YES";
    else
        echo "NO";
}
//Va afisa "YES"
same("algebral");
//Va afisa "NO"
same("algebrla");
echo isset($a);
?>