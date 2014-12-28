<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML lang="zh-TW">
<HEAD>
<TITLE> BUY SOMETHING </TITLE>
<META charset="big5" />
<link rel="stylesheet" type="text/css" href="main.css">
<style>

</style>
</HEAD>

<BODY>
<div class="top" align="center">
</div>

<div class="main">
<div class="font">
<a href=index.php><font size="30">HOME　</a>
<a href=member.php><font size="30">　MEMBER　</a>
<a href=orders.php><font size="30">　ORDERS</a>
　　　　　　<a href=cart.php><img src="cart.png" width="40px"></a>
<form action="Search.php" align="right">
<input type="text" name="s_text" />
<input type="image" src="magnifier.png" width="40px" />
</form>
</div>

<form action="member.php" align="center">
<font size=3 >
<br>
<br>
姓名：<input type="text" name="m_name"><br><br>
性別：<input type="text" name="m_sex"><br><br>
生日：<input type="text" name="m_birth_y">年<input type="text" name="m_birth_m">月<input type="text" name="m_birth_d">日<br><br>
電話：<input type="text" name="m_phone"><br><br>
地址：<input type="text" name="m_address"><br><br>
E-Mail：<input type="text" name="m_email"><br><br>
</font>
<input type="button" value="送出">
<input type="button" value="清除">
</form>

</div>

</BODY>

</HTML>
