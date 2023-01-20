<?php

use App\Entities\Outlet;

if (!function_exists('count_target_monthly_visits')) {
    

function count_target_monthly_visits($fos) {
    $tab_nom_jour = array('Monday' => 2, 'Tuesday' => 3, 'Wednesday' => 4, 'Thursday' => 5, 'Friday' => 6, 'Saturday' => 7, 'Sunday' => 1);
    $total = 0;
    $days[] = array();

    foreach ($fos as $fo) {
        //tt les outlets d'un fo 

        $outlets = Outlet::where('admin_id', '=', $fo->id)->get();
        $target_meurch = 0;
        foreach ($outlets as $outlet) {

            $days = (json_decode($outlet->visit_day));

            if (!empty($days)) {
                $s = 0;
                foreach ($days as $day) {
                    $numeroJour = $tab_nom_jour[$day];

                    $J1 = 1;
                    $M1 = date('n');
                    $A1 = date('Y');

                    $J2 = date('t', mktime(0, 0, 0, $M1, 1, $A1));
                    $M2 = date('n');
                    $A2 = date('Y');

                    $nbJour = 0;
                    $Date1 = mktime(0, 0, 0, $M1, $J1, $A1);
                    $Date2 = mktime(0, 0, 0, $M2, $J2, $A2);
                    $nbJourDiff = ($Date2 - $Date1) / (60 * 60 * 24);
                    for ($i = 0; $i < $nbJourDiff + 1; $i++) {
                        $Date1 = mktime(0, 0, 0, $M1, $J1 + $i, $A1);
                        if (date("w", $Date1) == $numeroJour - 1)
                            $nbJour++;
                    }
                    //echo $nbJour;
                    //chaque meurch chaque outlet
                    $s = $s + $nbJour;

                    //chaque meurch ces outlet
                    $target_meurch = $target_meurch + $nbJour;

                    //tt les meurch 
                    $total = $total + $nbJour;
                }
            }
        }
    }


    return $total;
}
}