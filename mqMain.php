<?php
  include_once("common/const.php");
?>

<html>
<head>
<title> Math Quiz Generator v2.1 </title>
<link rel="stylesheet" href="./css/style.css" type="text/css">

<script language="javascript" src="script/mqMain.js"></script>

</head>

<body onLoad="resetAll()">

<pre>
    Math Quiz Generator v2.1
    Copyright (C) 2010  Shinji Umeki (shinji@umeki.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

    See the file, COPYING, for more details.
</pre>

<a href="COPYING" class="nav">see the file, COPYING</a>

<hr>

<table width="100%" border="0">

<form name="typeForm" action="mqTest.php" method="post">

  <tr>
    <td valign="top">
      <table width="100%" border="0">
        <tr>
          <td nowrap class="boldBodyLeft"> 1: Select Type </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_TYPE ?>" type="radio" id="rAdd"
             onChange="changeType()" value="<?php echo QT_ADD ?>">
            <span class="radioEnabled"> Addition </span>
          </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_TYPE ?>" type="radio" id="rSub"
             onChange="changeType()" value="<?php echo QT_SUB ?>">
            <span class="radioEnabled"> Subtraction </span>
          </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_TYPE ?>" type="radio" id="rMul"
             onChange="changeType()" value="<?php echo QT_MUL ?>">
            <span class="radioEnabled"> Multiplication </span>
          </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_TYPE ?>" type="radio" id="rDiv"
             onChange="changeType()" value="<?php echo QT_DIV ?>">
            <span class="radioEnabled"> Division </span>
          </td>
        </tr>
      </table>
    </td>
    <td>
      <table width="100%" border="0">
        <tr>
          <td nowrap class="boldBodyLeft">
            <span id="hDesc"> 2: Select Number of Digits and Signs</span>
          </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_DESC ?>" type="radio" id="rDescSS"
             onChange="changeDesc()" value="<?php echo QD_S_S ?>">
             <span id="tDescSS"> [Single Digit] ? [Single Digit]
               <sub> Both Positive </sub> </span>
          </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_DESC ?>" type="radio" id="rDescSD"
             onChange="changeDesc()" value="<?php echo QD_S_D ?>">
             <span id="tDescSD"> [Single Digit] ? [Double Digit]
               <sub> Both Positive </sub> </span>
          </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_DESC ?>" type="radio" id="rDescDS"
             onChange="changeDesc()" value="<?php echo QD_D_S ?>">
             <span id="tDescDS"> [Double Digit] ? [Single Digit]
               <sub> Both Positive </sub> </span>
          </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_DESC ?>" type="radio" id="rDescDD"
             onChange="changeDesc()" value="<?php echo QD_D_D ?>">
             <span id="tDescDD"> [Double Digit] ? [Double Digit]
               <sub> Both Positive </sub> </span>
          </td>
        </tr>
        <tr>
          <td> <hr> </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_DESC ?>" type="radio" id="rDescSSM"
             onChange="changeDesc()" value="<?php echo QD_S_S_M ?>">
             <span id="tDescSSM"> [Single Digit] ? [Single Digit]
               <sub> Mixed Signs </sub> </span>
          </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_DESC ?>" type="radio" id="rDescSDM"
             onChange="changeDesc()" value="<?php echo QD_S_D_M ?>">
             <span id="tDescSDM"> [Single Digit] ? [Double Digit]
               <sub> Mixed Signs </sub> </span>
          </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_DESC ?>" type="radio" id="rDescDSM"
             onChange="changeDesc()" value="<?php echo QD_D_S_M ?>">
             <span id="tDescDSM"> [Double Digit] ? [Single Digit]
               <sub> Mixed Signs </sub> </span>
          </td>
        </tr>
        <tr>
          <td>
            <input name="<?php echo QUIZ_DESC ?>" type="radio" id="rDescDDM"
             onChange="changeDesc()" value="<?php echo QD_D_D_M ?>">
             <span id="tDescDDM"> [Double Digit] ? [Double Digit]
               <sub> Mixed Signs </sub> </span>
          </td>
        </tr>
      </table>
    </td>
    <td valign="top">
      <table width="100%" border="0">
        <tr>
          <td nowrap class="boldBodyLeft">
            <span id="hNum"> 3: Select Number of Questions </span>
          </td>
        </tr>
        <tr>
          <td> 
            <input name="<?php echo QUIZ_NUM ?>" type="radio" id="rNum0"
             onChange="changeNum()" value="5"><span id="tNum0"> 25 </span>
          </td>
        </tr>
        <tr>
          <td> 
            <input name="<?php echo QUIZ_NUM ?>" type="radio" id="rNum1"
             onChange="changeNum()" value="6"><span id="tNum1"> 36 </span>
          </td>
        </tr>
        <tr>
          <td> 
            <input name="<?php echo QUIZ_NUM ?>" type="radio" id="rNum2"
             onChange="changeNum()" value="7"><span id="tNum2"> 49 </span>
          </td>
        </tr>
        <tr>
          <td> 
            <input name="<?php echo QUIZ_NUM ?>" type="radio" id="rNum3"
             onChange="changeNum()" value="8"><span id="tNum3"> 64 </span>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td> <input type="submit" id="bSubmit" value="Generate Quiz">
    </td>
  </tr>

</form>

</table>

<?php
  include("common/cr.php");
?>

</body>
</html>

