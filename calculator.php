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
        $nextyear=0;
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
        $nextyear = $annum+1;
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

        function DaysMY($month, $leapannum, $nextyear, $daysmy){
        switch($month)
        {
            case 1: $daysm=31;
                    if($leapannum==false && $nextyear==false){
                         $daysy=365; 
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
                    else if($leapannum==true || $nextyear==true) {
                         $daysy=366;
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
            case 2: if($leapannum==false && $nextyear==false){
                        $daysm=28; 
                        $daysy=365;
                        $daysmy[0]=$daysm;
                        $daysmy[1]=$daysy;
                        return $daysmy;
                        break;
                    }
                    else if ($leapannum==true && $nextyear==false){
                        $daysm=29;
                        $daysy=366;
                        $daysmy[0]=$daysm;
                        $daysmy[1]=$daysy;
                        return $daysmy;
                        break;
                    }
                    else if ($leapannum==false && $nextyear==true){
                        $daysm=28;
                        $daysy=365;
                        $daysmy[0]=$daysm;
                        $daysmy[1]=$daysy;
                        return $daysmy;
                        break;
                    }
            case 3: $daysm=31;
                    if($leapannum==false && $nextyear==false || $leapannum==true){
                         $daysy=365; 
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
                    else if($nextyear==true) {
                         $daysy=366;
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
            case 4: $daysm=30;
                    if($leapannum==false && $nextyear==false || $leapannum==true){
                         $daysy=365; 
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
                    else if($nextyear==true) {
                         $daysy=366;
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }          
            case 5: $daysm=31;
                    if($leapannum==false && $nextyear==false || $leapannum==true){
                         $daysy=365; 
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
                    else if($nextyear==true) {
                         $daysy=366;
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
            case 6: $daysm=30;
                    if($leapannum==false && $nextyear==false || $leapannum==true){
                         $daysy=365; 
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
                    else if($nextyear==true) {
                         $daysy=366;
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
            case 7: $daysm=31; 
                    if($leapannum==false && $nextyear==false || $leapannum==true){
                         $daysy=365; 
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
                    else if($nextyear==true) {
                         $daysy=366;
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
            case 8: $daysm=31;
                    if($leapannum==false && $nextyear==false || $leapannum==true){
                         $daysy=365; 
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
                    else if($nextyear==true) {
                         $daysy=366;
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
            case 9: $daysm=30;
                    if($leapannum==false && $nextyear==false || $leapannum==true){
                         $daysy=365; 
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
                    else if($nextyear==true) {
                         $daysy=366;
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }  
            case 10: $daysm=31;
                    if($leapannum==false && $nextyear==false || $leapannum==true){
                         $daysy=365; 
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
                    else if($nextyear==true) {
                         $daysy=366;
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }   
            case 11: $daysm=30;
                    if($leapannum==false && $nextyear==false || $leapannum==true){
                         $daysy=365; 
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
                    else if($nextyear==true) {
                         $daysy=366;
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    } 
            case 12: $daysm=31;
                    if($leapannum==false && $nextyear==false || $leapannum==true){
                         $daysy=365; 
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }
                    else if($nextyear==true) {
                         $daysy=366;
                         $daysmy[0]=$daysm;
                         $daysmy[1]=$daysy;
                         return $daysmy;
                         break;
                    }                 
        }
    }

        $currmonth=0;
        $daysmy[0]=0;
        $daysmy[1]=1;
        
        switch($year)
        {
            case 1:
                $currmonth=$month;
                if ($month < 12){
                    for ($month+1; $month<13;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    $resultat=$summn; break;
                }
                else{
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1; $month<13;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    $resultat=$summn; break;

                }
            case 2:
                $currmonth=$month;
                if ($month < 12){
                    for ($month+1; $month<13;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;    
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    for ($month=$currmonth;$month<13;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    $resultat=$summn; break;
                }
                else{
                    for($i=1;$i<3;$i++){
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1; $month<13;$month++)
                    {
                        $daysmy=DaysMY($month,IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    }
                    $resultat=$summn; break;

                }
            case 3:
                $currmonth=$month;
                if ($month < 12){
                    for ($month+1; $month<13;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    for($i=1;$i<3;$i++){
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    for ($month=$currmonth;$month<13;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    }
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    $resultat=$summn; break;
                }
                else{
                    for($i=1;$i<4;$i++){
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1; $month<13;$month++)
                    {
                        $daysmy=DaysMY($month,IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    }
                    $resultat=$summn; break;
                }
            case 4:
                $currmonth=$month;
                if ($month < 12){
                    for ($month+1; $month<13;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    for($i=1;$i<4;$i++){
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    for ($month=$currmonth;$month<13;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    }
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    $resultat=$summn; break;
                }
                else{
                    for($i=1;$i<5;$i++){
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1; $month<13;$month++)
                    {
                        $daysmy=DaysMY($month,IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    }
                    $resultat=$summn; break;
                }
            case 5:
                $currmonth=$month;
                if ($month < 12){
                    for ($month+1; $month<13;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    for($i=1;$i<5;$i++){
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    for ($month=$currmonth;$month<13;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    }
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1;$month<$currmonth;$month++)
                    {
                        $daysmy=DaysMY($month, IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
                    }
                    $resultat=$summn; break;
                }
                else{
                    for($i=1;$i<6;$i++){
                    $annum=$annum+1;
                    $nextyear=$nextyear+1;
                    for ($month=1; $month<13;$month++)
                    {
                        $daysmy=DaysMY($month,IsLeap($annum), IsLeap($nextyear), $daysmy);
                        $daysm=$daysmy[0];
                        $daysy=$daysmy[1];
                        If ($select == "false"){
                            $summn = $summn + $summn * $daysm * (0.1 / $daysy);
                            }
                            If ($select == "true") {
                            $summn=$summn+$sum2;
                            $summn = $summn + ($summn + $sum2) * $daysm * (0.1 / $daysy); 
                            }
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
