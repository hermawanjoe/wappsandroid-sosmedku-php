<?php
//nilai
$maine = "$sumber/adm/index.php";



//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<table bgcolor="#E4D6CC" width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
<td>';
//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//home //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<a href="'.$maine.'" title="Home" class="menuku"><strong>Home</strong></a>&nbsp;|&nbsp;';
//home //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//setting ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" data-flexmenu="flexmenu1" class="menuku"><strong>SETTING</strong></A>&nbsp;|&nbsp;
<UL id="flexmenu1" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/adm/s/pass.php" title="Ganti Password">Ganti Password</a>
</LI>
<LI>
<a href="'.$sumber.'/adm/s/reset_pass.php" title="Reset Password">Reset Password</a>
</LI>
</UL>';
//setting ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//data //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" data-flexmenu="flexmenu2" class="menuku"><strong>DATA</strong></A>&nbsp;|&nbsp;
<UL id="flexmenu2" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/adm/d/user.php" title="Data User">Data User</a>
</LI>
</UL>';
//data //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '</td>
<td align="right">
<font color="orange"><strong>***</strong></font>
<font color="red"><strong>ADMINISTRATOR</strong></font>
</td>';
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//logout ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<td width="10%" align="right">
<A href="'.$sumber.'/adm/logout.php" title="Logout / KELUAR"><strong>LogOut</strong></A>
</td>
</tr>
</table>';
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>