<?php

require_once 'includes/function.php';


echo sendMail("coucou",
			["azatcia@hotmail.com", 
			"thibaud.lelu@hotmail.fr"],
			 ["html" => "<h1>coucou ceci est en html</h1>", "text" => "coucou ceci n'est pas en html"]
			);



