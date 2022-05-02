<?php

class DBConnection extends mysqli{

    function __construct(){
        parent::__construct("localhost", "root", "1234", "sem3_2021");
    }
}

