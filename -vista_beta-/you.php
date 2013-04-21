<?php
function get_code_youtube($cadena) { 
	if (strpos($cadena, "youtube") === FALSE AND strpos($cadena, "youtu.be") === FALSE AND strpos($cadena, "http://") === FALSE) {
		return FALSE; 
	} 
	if (strpos($cadena, "youtube.com") !== FALSE) { 
	    if (strpos($cadena, "?v=") !== FALSE) { 
	        $cadena = explode("?v=", $cadena); 
	        $cadena = $cadena[1]; 
	        if (strpos($cadena, "&") !== FALSE) { 
	            $cadena = explode("&", $cadena); 
	            $cadena = $cadena[0]; 
	        } 
	    } else { 
	        if (strpos($cadena, "&v=") !== FALSE) { 
	            $cadena = explode("&v=", $cadena); 
	            $cadena = $cadena[1]; 
	            if (strpos($cadena, "&") !== FALSE) { 
	                $cadena = explode("&", $cadena); 
	                $cadena = $cadena[0]; 
	            } 
	        } 
	    } 
	}
	if (strpos($cadena, "youtu.be") !== FALSE) { 
	    if (strpos($cadena, "http://") !== FALSE) { 
	        $cadena = str_replace("http://", "", $cadena); 
	    } 
	    if (strpos($cadena, "/") !== FALSE) { 
	        $cadena = explode("/", $cadena); 
	        $cadena = $cadena[1]; 
	    } 
	    if (strpos($cadena, "?") !== FALSE) { 
	        $cadena = explode("?", $cadena); 
	        $cadena = $cadena[0]; 
	    } 
	} 
	@$json = json_decode(file_get_contents("http://gdata.youtube.com/feeds/api/videos/" . $cadena . "?v=2&alt=jsonc"), true); 
	if (!is_array($json)) { 
	    return FALSE; 
	} else { 

	    return $cadena; 
	} 
} 




//ATENCION: Hay varias url posibles, acá hay una lista de ellas, OJO! puede haber más.. 

// $cadena = "http://www.youtube.com/watch?v=ClgJpUn4awk&feature=related"; 
 
// $cadena = "http://www.youtube.com/watch?v=ClgJpUn4awk&hd=1"; 
// $cadena = "http://youtu.be/ClgJpUn4awk"; 
// $cadena = "http://youtu.be/ClgJpUn4awk?hd=1"; 
$cadena = "http://www.youtube.com/embed/sCvhhBySYzE"; 

// ESTA URL NO EXISTE, POR LO TANTO DEVUELVE FALSE 
// $cadena = "http://www.youtube.com/watch?v=ClgJpUdfhfdhfgn4awk&feature=related"; 
 


echo get_code_youtube($cadena);  
?>