<a href="?f=1.sql">1.sql</a>
<a href="?f=2.sql">2.sql</a><br/><hr/>
<?php
Header('Content-Type: Text/html; Charset=utf8');

$sql = @fopen ($_GET["f"],'r');

if($sql){
	while(!feof ($sql)){
		$data = fgets($sql,9999);
		if(trim($data) != ""){
      		$array[] = $data;
    	}
  	}
}
fclose($sql);

$array_number = array();
$top = -1;
foreach ($array as $datas){
	$top ++;
  	if(strstr($datas,"CREATE")){
    	$array_number["first"][] = $top;    
  	}
  	if(strstr($datas,") ENGINE=")){
    	$array_number["last"][] = $top; 
  	}
}

$ll = array_merge($array_number["first"],$array_number["last"]);

sort($ll);

$a = -1;
$b = -1;
foreach ($ll as $key => $value){
	$a ++;
    $b ++;
    @$bb["first"] = $ll[$a+$b];
    @$bb["last"] = $ll[$a+1+$b];
    if($bb["first"] != ""){
    	$as[] = $bb;
    }
}


foreach ($as as $sss){
	echo "<div style='float:left; border:2px solid #ddd; margin:5px; padding:5px;'>";
  	for($i=$sss["first"];$i<=$sss["last"];$i++){
  		if($i == $sss["first"]){
	      	$table_name =  explode('`', $array[$i]); 
	      	echo "<b>".$table_name[1]."</b></br>"; 
	    }elseif($i == $sss["last"]){
	    	$uc = $sss["last"]-3;
	      	echo "<ul style='list-style-type:none; padding:0px; margin:0px;'>";
	      	for($ii=$sss["first"]+1;$ii<=$uc;$ii++) {
	        	$field_name =  explode('`', $array[$ii]);
	        	if($ii%2==0){
	          		$co ="#d8d8d8";
	        	}else{
	          		$co = "#f4f4f4";
	        	}
	        	echo "<li style='background:".$co."; padding-left:3px;'>".$field_name[1]."</li>";
	      	}      
	    }
	}
  echo "</div>";
}
?>

<div style="clear:both"></div>

<br/><hr/>
<span style="float:right"><a href="http://www.mertcanekren.com" target="_blank">Blog</a> & <a href="http://www.notunburada.com" target="_blank">Notunburada.com</a></span>