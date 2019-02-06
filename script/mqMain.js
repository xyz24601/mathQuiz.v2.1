
var dsAry = new Array("SS", "SD", "DS", "DD", "SSM", "SDM", "DSM", "DDM");

function changeType()
{
  for (i = 0; i < dsAry.length; i++)
  {
    document.getElementById("rDesc" + dsAry[i]).checked = false;
  }

  if (document.getElementById("rDescSS").disabled == true)
  {
    document.getElementById("hDesc").style.color = "#000000";

    for (i = 0; i < dsAry.length; i++)
    {
      document.getElementById("rDesc" + dsAry[i]).disabled = false;
      document.getElementById("tDesc" + dsAry[i]).style.color = "#000000";
    }
  }

  if ((document.getElementById("rAdd").checked == true) ||
      (document.getElementById("rMul").checked == true))
  {
    document.getElementById("rDescSD").disabled = false;
    document.getElementById("tDescSD").style.color = "#000000";
  }
  else
  {
    document.getElementById("rDescSD").disabled = true;
    document.getElementById("tDescSD").style.color = "#999999";
  }

  if ((document.getElementById("rAdd").checked == true) ||
      (document.getElementById("rSub").checked == true) ||
      (document.getElementById("rMul").checked == true))
  {
    document.getElementById("rDescSDM").disabled = false;
    document.getElementById("tDescSDM").style.color = "#000000";
  }
  else
  {
    document.getElementById("rDescSDM").disabled = true;
    document.getElementById("tDescSDM").style.color = "#999999";
  }

  disableNum();
  disableSubmit();
}

function changeDesc()
{
  enableNum();
}

function changeNum()
{
  enableSubmit();
}

function disableDesc()
{
  document.getElementById("hDesc").style.color = "#999999";

  for (i = 0; i < dsAry.length; i++)
  {
    document.getElementById("rDesc" + dsAry[i]).disabled = true;
    document.getElementById("tDesc" + dsAry[i]).style.color = "#999999";
  }
}

function disableNum()
{
  document.getElementById("hNum").style.color = "#999999";

  for (i = 0; i < 4; i++)
  {
    document.getElementById("rNum" + i).disabled = true;
    document.getElementById("tNum" + i).style.color = "#999999";
    document.getElementById("rNum" + i).checked = false;
  }
}

function enableNum()
{
  document.getElementById("hNum").style.color = "#000000";

  for (i = 0; i < 4; i++)
  {
    document.getElementById("rNum" + i).disabled = false;
    document.getElementById("tNum" + i).style.color = "#000000";
  }
}

function disableSubmit()
{
  document.getElementById("bSubmit").disabled = true;
}

function enableSubmit()
{
  document.getElementById("bSubmit").disabled = false;
}

function resetAll()
{
  disableDesc();
  disableNum();
  disableSubmit();
}


