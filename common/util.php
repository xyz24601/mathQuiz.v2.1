<?

function checkExist($par, $len)
{
  if (strlen(trim($par)) == 0)
    return false;

  if (strlen(trim($par)) > $len)
    return false;

  return true;
}

?>
