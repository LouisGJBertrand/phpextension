<?php

    function typeWritterPrint(int $period, String... $strings)
    {
        foreach ($strings as $key => $value) {
            for ($i=0; $i < strlen($value); $i++) { 
                print($value[$i]);
                mssleep($period);
            }
            println("");
        }
    }