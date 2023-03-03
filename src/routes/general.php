<?php

\Tina4\Get::add("/login/login", function (Tina4\Response $response){
    return $response("This is the login page of the login module");
});