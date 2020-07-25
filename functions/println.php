<?php

    function println(String... $print)
    {
        foreach ($print as $key => $value) {
            ifdef('DEBUG_VERBOSE') ?  /* IF THE CONSTANT DEBUG_VERBOSE IS DEFINDED */
                /* THEN */ printf("[%s]::",$key)
                /* ELSE */ : skip();
            printf("%s\r\n",$value);
        }
    }