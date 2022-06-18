<?php
    function length($dna)
    {
        return strlen($dna);
    }

    function reverse($dna) 
    {
        $dna = strtoupper($dna);
        $reverse = "";
        for ($i = strlen($dna)-1; $i >= 0; $i--)
        {
            $reverse = $reverse.$dna[$i];
        }
        return $reverse;
        
    }
    
    function reverse_complement($dna)
     {
        $dna = strtoupper($dna);
        $rev_complement = "";
        for ($i = strlen($dna)-1; $i >= 0; $i--) 
        {
          if ($dna[$i] === "G") 
          {
            $rev_complement = $rev_complement."C";
          } 
          else if ($dna[$i] === "C") 
          {
            $rev_complement = $rev_complement."G";
          }
           else if ($dna[$i] === "T") 
          {
            $rev_complement = $rev_complement."A";
          } 
          else if ($dna[$i] === "A") {
            $rev_complement = $rev_complement."T";
          }
        }
        return $rev_complement;
    }

    function complement($dna) 
    {
    
        $dna = strtoupper($dna);
        $complement = "";
        for ($i = 0; $i < strlen($dna); $i++)
         {
          if ($dna[$i] === "G") 
          {
            $complement = $complement."C";
          }
           else if ($dna[$i] === "C")
            {
                $complement = $complement."G";
            } 
        else if ($dna[$i] === "T")
        {
            $complement = $complement."A";
        } 
           else if ($dna[$i] === "A")
            {
            $complement = $complement."T";
          }
        }
        return $complement;
    }

    function GC($dna) 
    {
        $dna = strtoupper($dna);
        $c = 0;
        for ($i = 0; $i < strlen($dna); $i++)
         {
          if ($dna[$i] === "G" || $dna[$i] === "C")
           {
            $c = $c + 1;
          }
        }
        return ($c / strlen($dna)*100);
    }

    function CpG($dna) 
    {
        $dna = strtoupper($dna);
        $G = 0;
        $C = 0;
        for ($i = 0; $i < strlen($dna); $i++) 
        {
          if ($dna[$i] === "G") 
          {
            $G = $G + 1;
          }
          else if($dna[$i] === "C")
          {
              $C = $C + 1;
          }
        }
        return ($C*$G / strlen($dna));
    }

    function Transcribe($dna) 
    {
        $dna = strtoupper($dna);
        $rna = "";
        for ($i = 0; $i < strlen($dna); $i++) 
        {
            if ($dna[$i] == "T") 
            {
                $rna = $rna."U";
            }
            else
            {
                $rna = $rna.$dna[$i];
            }
        }
    
        return $rna;
    }

    function Translate($dna)
{
  $Ala = array("GCU", "GCC", "GCA", "GCG"); //A
  $Arg = array("CGU", "CGC", "CGA", "CGG", "AGA", "AGG"); //R
  $Asn = array("AAU", "AAC"); //N
  $Asp = array("GAU", "GAC"); //D
  $Cys = array("UGU", "UGC"); //C
  $Gln = array("CAA", "CAG"); //Q
  $Glu = array("GAA", "GAG"); //E
  $Gly = array("GGU", "GGC", "GGA", "GGG"); //G
  $His = array("CAU", "CAC"); //H
  $Ile = array("AUU", "AUC", "AUA"); //I
  $Leu = array("UUA", "UUG", "CUU", "CUC", "CUA", "CUG");  //L
  $Lys = array("AAA", "AAG"); //K
  $Met = array("AUG"); //M
  $Phe = array("UUU", "UUC"); //F
  $Pro = array("CCU", "CCC", "CCA", "CCG"); //P
  $Ser = array("UCU", "UCC", "UCA", "UCG", "AGU", "AGC"); //S
  $Thr = array("ACU", "ACC", "ACA", "ACG"); //T
  $Trp = array("UGG"); //W
  $Tyr = array("UAU", "UAC"); //Y
  $Val = array("GUU", "GUC", "GUA", "GUG"); //V
  $Stop = array("UAG", "UGA", "UAA"); 

  $table = array("A"=>$Ala, "R"=>$Arg, "N"=>$Asn, "D"=>$Asp, "C"=>$Cys, "Q"=>$Gln, "E"=>$Glu, "G"=>$Gly,
                 "H"=>$His, "I"=>$Ile, "L"=>$Leu, "K"=>$Lys, "M"=>$Met, "F"=>$Phe, "P"=>$Pro, "S"=>$Ser,
                 "T"=>$Thr, "W"=>$Trp,"Y"=>$Tyr, "V"=>$Val, "Stop"=>$Stop);


  $dna = Transcribe($dna);

  $trans = "";

  
  for ($i = 0; $i < strlen($dna); $i=$i+3)
    {
      
      $temp = substr($dna, $i, 3);
      foreach ($table as $amino=>$values)
      {
          foreach ($values as $pos=>$resdiue)
          {
              if ($resdiue === $temp)
              {
                $trans = $trans.$amino;
              }
          }
      }
    }
  return $trans;
}
    function result()
    {
        if (isset($_POST["opt"])) 
        {
   
            if ($_POST["opt"] === "Length") {
                $result = length($_POST["seq"]);
            } else if ($_POST["opt"] === "Reverse") {
                $result = reverse($_POST["seq"]);
            } else if ($_POST["opt"] === "Reverse Complement") {
                $result = reverse_complement($_POST["seq"]);
            } else if ($_POST["opt"] === "Reverse Complement") {
                $result = reverse_complement($_POST["seq"]);
            } else if ($_POST["opt"] === "Complement") {
                $result = complement($_POST["seq"]);
            } else if ($_POST["opt"] === "GC Content") {
                $result = GC($_POST["seq"]);
            } else if ($_POST["opt"] === "CpG Island Ratio") {
                $result = CpG($_POST["seq"]);
            } else if ($_POST["opt"] === "Transcribe") {
                $result = Transcribe($_POST["seq"]);
            } else if ($_POST["opt"] === "Translate") {
                $result = Translate($_POST["seq"]);
            }
        return $result;
      }
    }

   


?>