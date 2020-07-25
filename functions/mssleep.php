<?php

    function mssleep(int $miliseconds)
    {
        usleep($miliseconds * 1000);
    }