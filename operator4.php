<?php
$var1 =$_POST["steven1"];
$var2 =$_POST["steven2"];
$var3 =$_POST["steven3"];

if($_POST['steven2']=='==')
{
    $operator='==';
    $hasil = $var1==$var3;
    if($hasil == 1)
{
	$final = "TRUE";
}
else
{
	$final = "FALSE";
}
    echo"$var1 == $var3 = ",$finalf;
}
elseif($_POST['steven2']=='<')
{
    $operator='<';
    $hasil = $var1<$var3;
    	if($hasil == 1)
	{
		$final = "TRUE";
	}
		else
	{
		$final = "FALSE";
	}
  echo"$var1 < $var3 = ",$final;
}
elseif($_POST['steven2']=='>')
{
    $operator='>';
    $hasil = $var1>$var3;
    if($hasil == 1)
{
	$final = "TRUE";
}
else
{
	$final = "FALSE";
}
    echo"$var1 > $var3 = ",$final;
}
elseif($_POST['steven2']=='<=')
{
    $operator='<=';
    $hasil = $var1<=$var3;
    if($hasil == 1)
{
	$final = "TRUE";
}
else
{
	$final = "FALSE";
}
    echo"$var1 <= $var3 = ",$final;
}
elseif($_POST['steven2']=='>=')
{
    $operator='>=';
    $hasil = $var1>=$var3;
    echo"$var1 >= $var3 = ",$final;
}
elseif($_POST['steven2']=='!=')
{
    $operator='!=';
    $hasil = $var1!=$var3;
    if($hasil == 1)
{
	$final = "TRUE";
}
else
{
	$final = "FALSE";
}
    echo"$var1 != $var3 = ",$final;
}