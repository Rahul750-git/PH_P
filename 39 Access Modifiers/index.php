<?php
class Teachers
{
     private function Questionpaper()
     {
          return "Important ";
     }
     function exam()
     {
          if ($this->Questionpaper()) {
               echo "do something";
          } else {
               echo "do else";
          }
     }

     protected function studentMarks()
     {
          echo "All Students Marks";
     }
}
class Management extends Teachers
{
     function reviewExam()
     {
          $this->studentMarks();
     }
}
$t1 = new Teachers();
$t1->exam();
echo "<br>";
$m1 = new Management();
$m1->reviewExam();
?>