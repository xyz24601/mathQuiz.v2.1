<?php
  include_once("common/const.php");
  include_once("common/util.php");
  include_once("obj/question.php");
?>

<html>
<head>
<title> Math Quiz Generator v2.1 </title>
<link rel="stylesheet" href="./css/style.css" type="text/css">
</head>


<body>

<?php
  $qType = $_POST[QUIZ_TYPE];
  if (!checkExist($qType, QUIZ_TYPE_LEN))
  {
    echo 'No quiz type field was passed';
    exit(-69);
  }

  $qDesc = $_POST[QUIZ_DESC];
  if (!checkExist($qDesc, QUIZ_DESC_LEN))
  {
    echo 'No quiz description field was passed';
    exit(-69);
  }

  $qNum = $_POST[QUIZ_NUM];
  if (!checkExist($qNum, 1))
  {
    echo 'No quiz number field was passed';
    exit(-69);
  }

  $objQuestion = new question();
  $objQuestion->setOper($_POST[QUIZ_TYPE], $_POST[QUIZ_DESC]);
?>

<table width="100%" border="0">

<?php
  for ($j = 0; $j < $qNum; $j++)
  {
?>
  <tr><td> &nbsp; </td></tr>
  <tr>
    <td width="3%"> &nbsp; </td>

<?php
  for ($i = 0; $i < $qNum; $i++)
  {
    $objQuestion->generateNum();
?>
    <td>
<?php
    if (QT_DIV == $objQuestion->operCd)
    {
?>
      <table width="50" border="0">
        <tr><td></td></td>
        <tr>
          <td></td>
          <td></td>
          <td colspan="2" valign="bottom"> ___ </td>
        </tr>
        <tr>
          <td class="boldBody"> <?php echo $objQuestion->num2 ?> </td>
          <td class="boldBody"> ) </td>
          <td class="boldBody"> <?php echo $objQuestion->num1 ?> </td>
        </tr>
      </table>
<?php
    }
    else
    {
?>
      <table width="50" border="0">
        <tr>
          <td></td>
          <td class="boldBody"> <?php echo $objQuestion->num1 ?> </td>
        </tr>
        <tr>
          <td class="boldBody"> <?php echo $objQuestion->oper ?> </td>
          <td class="boldBody"> <?php echo $objQuestion->num2 ?> </td>
        </tr>
        <tr height="2">
          <td colspan="2"> <hr> </td>
        </tr>
        <tr>
          <td colspan="2"> </td>
        </tr>
      </table>
<?php
    }
?>
    </td>
<?php
  }  // end $i loop
?>

    <td width="3%"> &nbsp; </td>
  </tr>
<?php
  }  // end $j loop
?>

  <tr><td> &nbsp; </td></tr>
  <tr><td> &nbsp; </td></tr>
  <tr><td> &nbsp; </td></tr>
  <tr><td> &nbsp; </td></tr>
</table>

<?php
  include("common/cr.php");
?>

</body>
</html>

