<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang="zh-TW">
<HEAD>
<TITLE> BUY SOMETHING </TITLE>
<META charset="big5" />
<link rel="stylesheet" type="text/css" href="reset.css">
<style>
.top {
margin:0 auto;
background-image:url(main.jpg);
background-repeat:no-repeat;
width:1220px;
height:200px;
}
.main {
background-color:#e3e3e3;
width:1220px;
height:0 auto;
margin:0 auto;   /*區塊置中*/
}
form{
margin:0 auto;
text-align:center;
}

	.font {
	background-color:#fff;
	font-family:impact;
	font-size:50px;
	padding:10px;
	}
	a:link {
	color:#fdb9b9;
	text-decoration:none;
	}
	a:visited {
	color:#fdb9b9;
	text-decoration:none;
	} 
	a:hover {
	font-size:20;
	color:#f98484;
	text-decoration:none;
	} 
	a:active {
	color:#f98484; 
	text-decoration:none;
	}

.table {
padding:10px;
}
</style>
</HEAD>

<BODY>
<div class="top" align="center">
</div>

<div class="main">
<div class="font">
<a href=index.html><font size="50px">HOME　</a>
<a href=member.php><font size="50px">　MEMBER　</a>
<a href=orders.php><font size="50px">　ORDERS</a>
　　　　　　<a href=cart.php><img src="cart.png" width="40px"></a>
<form action="Search.php" align="right">
<input type="text" name="s_text" />
<input type="image" src="magnifier.png" width="40px" />
</form>
</div>

<?php
echo "<br><br>";
echo "<center><font size=3><b>會員登入</b></font></center>";
echo "<form action=Search.php align=right>";
echo "<h1><font size=2>會員帳號：</font><input type=text name=m_id /></h1>";
echo "<h1><font size=2>會員密碼：</font><input type=text name=m_pass /></h1>";
echo "<input type=button name=login value='LOGIN'>";
echo "　<input type=button name=join value='JOIN' onclick=location.href='m_join.php'>";
echo "</form>";

$m_id=$_POST['m_id'];
$m_pass=$_POST['m_pass'];
$conn=mysql_connect('localhost','root','takming') or die("資料庫錯誤!");
mysql_select_db('D10116231');
$sql="select * from member where m_id='($m_id)'";
$res=mysql_query($sql) or die("會員帳號密碼錯誤!");
$row=mysql_fetch_array($res);
$loginSuccess = False;

if ($row && $row['password'])
{
	if (md5($m_pass)==$row['password'])
	{
		$loginSuccess=true;
	}
}

if ($loginSuccess)
{
	
}
else
{

}
?>

</div>

</BODY>

</HTML>