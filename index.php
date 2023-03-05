<?php
    function caclucalte_savings_until($investment, $nb_year, $rate = 1) {

        $principal = $investment;
        $total_interest = 0;

        for($i = 0; $i < $nb_year; $i++){
            $time = 1;
            
            // Calculate compound interest
            // A = P(1 + r/n) ^ nt
            $A = $principal * (pow((1 + $rate / 100), $time));
            $CI = $A - $principal;
            $total_interest += $CI;
            
            $principal = $A;
            echo "Year $i : ".
                 " - Solde = ".round($principal,2).
                 " - Compoud interest : ".round($CI,2).
                 " - Cumulated Interest : ".round($total_interest,2).
                 "\r\n</br>";

        }
    }

    caclucalte_savings_until(200, 12);
?>