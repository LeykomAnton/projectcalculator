<?php
If(($_POST["sum1"]) != null 
    and ($_POST["sum2"]) != null 
    and ($_POST["year"]) != null 
    and ($_POST["date"]) != null 
    and ($_POST["select"]) != null)
    {
        $summn=0;
        $annum=0;
        $month=0;
        $day=0;
        $daysy=0;
        $daysm=0;
        $leapannum=true;
        $resultat=0;

        $sum1=$_POST["sum1"];
        $sum2=$_POST["sum2"];
        $year=$_POST["year"];
        $date=$_POST["date"];
        $dateparse = explode ( '.' , $date );
        $day=$dateparse[0];
        $day=(int)$day;
        $month=$dateparse[1];
        $month=(int)$month;
        $annum=$dateparse[2];
        $annum=(int)$annum;
        $select=$_POST["select"];
        $summn=$sum1;

        function IsLeap($nextanyyear)
        {
            if (($nextanyyear % 4 != 0) or ($nextanyyear % 100 == 0) and ($nextanyyear % 400 != 0))
            {
            $leap=false;
            return $leap;
            }
        else
            {
            $leap=true;
            return $leap;
            }
        }
       
        function DaysMY($month, $annum, $daysmy){
                if(( $annum % 4 == 0 ) or (( $annum % 100 == 0 ) and ( $annum % 400 == 0 ))){
                    $daysy=366;         
                }             
                else{                 
                    $daysy=365;             
                }                            
                $daysm = cal_days_in_month(CAL_GREGORIAN, $month, $annum);
                $daysmy[0] = $daysm;
                $daysmy[1] = $daysy;
                return $daysmy;        
         }

    function Calculate($month, $annum, $daysmy, $select, $sum2, $summn){
    $daysmy=DaysMY($month, $annum, $daysmy);
    $daysm=$daysmy[0];
    $daysy=$daysmy[1];
        If ($select == "false"){
        $summn = $summn + $summn * $daysm * (0.1 / $daysy);
        }
        else{
        $summn=$summn+$sum2;
        $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
        }
        return $summn;
    }

    function Firstpart(){

    }

        $currmonth=0;
        $daysmy[0]=0;
        $daysmy[1]=0;

        switch($year)
        {
            case 1:
                $currmonth=$month;
                if ($month < 12){
                    for ($month+1; $month<13;$month++)
                    {
                        $summn=Calculate($month, $annum, $daysmy, $select, $sum2, $summn);
                    }
                    $annum=$annum+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $summn=Calculate($month, $annum, $daysmy, $select, $sum2, $summn);
                    }
                    $resultat=$summn; break;
                }
                else{
                    $annum=$annum+1;
                    for ($month=1; $month<13;$month++)
                    {
                        $summn=Calculate($month, $annum, $daysmy, $select, $sum2, $summn);
                    }
                    $resultat=$summn; break;

                }
            case 2:
                $currmonth=$month;
                if ($month < 12){
                    for ($month+1; $month<13;$month++)
                    {
                        $summn=Calculate($month, $annum, $daysmy, $select, $sum2, $summn);
                    }
                    $annum=$annum+1;
                    for ($month=1;$month<13;$month++)
                    {
                        $summn=Calculate($month, $annum, $daysmy, $select, $sum2, $summn);
                    }
                    $annum=$annum+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $summn=Calculate($month, $annum, $daysmy, $select, $sum2, $summn);
                    }
                    $resultat=$summn; break;
                }
                else{
                    for($i=1;$i<$year+1;$i++){
                    $annum=$annum+1;
                    for ($month=1; $month<13;$month++)
                    {
                        $summn=Calculate($month, $annum, $daysmy, $select, $sum2, $summn);
                    }
                    }
                    $resultat=$summn; break;
                }
            case 3:
            case 4:
            case 5:
                $currmonth=$month;
                if ($month < 12){
                    for ($month+1; $month<13;$month++)
                    {
                        $summn=Calculate($month, $annum, $daysmy, $select, $sum2, $summn);
                    }
                    for($i=1;$i<$year;$i++){
                    $annum=$annum+1;
                    for ($month=1;$month<13;$month++)
                    {
                        $summn=Calculate($month, $annum, $daysmy, $select, $sum2, $summn);
                    }
                    }
                    $annum=$annum+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $summn=Calculate($month, $annum, $daysmy, $select, $sum2, $summn);
                    }
                    $resultat=$summn; break;
                }
                else{
                    for($i=1;$i<$year+1;$i++){
                    $annum=$annum+1;
                    for ($month=1; $month<13;$month++)
                    {
                        $summn=Calculate($month, $annum, $daysmy, $select, $sum2, $summn);
                    }
                    }
                    $resultat=$summn; break;
                }
        }
        echo round($resultat,  $precision=2, $mode = PHP_ROUND_HALF_UP);
        echo (" руб");
    }
Else{
    echo("введите данные во все поля");
}