<?php

class question
{
  public $num1;
  public $num2;
  public $operCd;
  public $oper;
  public $digi;

  public function setOper($par, $par2)
  {
    $this->operCd = $par;

    if (QT_ADD == $par)
      $this->oper = "+";
    else if (QT_SUB == $par)
      $this->oper = "-";
    else if (QT_MUL == $par)
      $this->oper = "X";
    else if (QT_DIV == $par)
      $this->oper = "/";
    else
      $this->oper = "?";

    $this->digi = $par2;
  }

  public function generateNum()
  {
    if (QD_S_S == $this->digi)
      $this->genSS();
    else if (QD_S_D == $this->digi)
      $this->genSD();
    else if (QD_D_S == $this->digi)
      $this->genDS();
    else if (QD_D_D == $this->digi)
      $this->genDD();
    else if (QD_S_S_M == $this->digi)
      $this->genSSM();
    else if (QD_S_D_M == $this->digi)
      $this->genSDM();
    else if (QD_D_S_M == $this->digi)
      $this->genDSM();
    else if (QD_D_D_M == $this->digi)
     $this->genDDM();
  }

  private function genSS()
  {
    $n1 = rand(1, 9);
    $n2 = rand(1, 9);

    if (((QT_SUB == $this->operCd) || (QT_DIV == $this->operCd)) &&
        ($n1 >= $n2))
    {
      $this->num1 = $n1;
      $this->num2 = $n2;
    }
    else
    {
      $this->num1 = $n2;
      $this->num2 = $n1;
    }
  }

  private function genSSM()
  {
    $n1 = rand(-9, 9);
    $n2 = rand(-9, 9);

    if ((QT_DIV == $this->operCd))
    {
      while (0 == $n1)
        $n1 = rand(-9, 9);

      while (0 == $n2)
        $n2 = rand(-9, 9);
    }
    $this->num1 = $n1;
    $this->num2 = $n2;
  }

  private function genSD()
  {
    $this->num1 = rand(1, 9);
    $this->num2 = rand(10, 99);
  }

  private function genSDM()
  {
    $this->num1 = rand(-9, 9);
    $this->num2 = rand(-99, 99);
  }

  private function genDS()
  {
    $this->num1 = rand(10, 99);
    $this->num2 = rand(1, 9);
  }

  private function genDSM()
  {
    $this->num1 = rand(-99, 99);
    $this->num2 = rand(-9, 9);
  }

  private function genDD()
  {
    $n1 = rand(10, 99);
    $n2 = rand(10, 99);

    if (((QT_SUB == $this->operCd) || (QT_DIV == $this->operCd)) &&
        ($n1 >= $n2))
    {
      $this->num1 = $n1;
      $this->num2 = $n2;
    }
    else
    {
      $this->num1 = $n2;
      $this->num2 = $n1;
    }
  }

  private function genDDM()
  {
    $this->num1 = rand(-99, 99);
    $this->num2 = rand(-99, 99);
  }
}

?>

