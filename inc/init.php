<?php
$tileTypes = array();
$tile = array();

function chars($r){
	$charSearch = array("/à|á|â|ã|ä|å|æ|À|Á|Â|Ã|Ä|Å|Æ/","/ç|Ç/","/è|é|ê|ë|È|É|Ê|Ë/","/ì|í|î|ï|Ì|Í|Î|Ï/","/ò|ó|ô|õ|ö|ð|ø|Ò|Ó|Ô|Õ|Ö|Ð|Ø/","/œ|Œ/","/ù|ú|û|ü|Ù|Ú|Û|Ü/","/ý|ÿ|Ý|Ÿ/","/š|Š/","/ž|Ž/","/Þ/","/ß/","/ƒ|Ƒ/");
	$charReplace = array("a","c","e","i","o","oe","u","y","s","z","b","ss","f");
	return preg_replace($charSearch, $charReplace, $r);
};


function stripSpaces($s){
	return str_replace(" ","-",$s);
}
function makeLinkHref($l){
	global $pageTitles, $bot, $nojsuser;
	if($l==""){
		return "";
	}
	if(substr($l,0,9) == 'external:'){
		return substr($l,9);
	}
	
	if(substr($l,0,7) == "http://" ||
	   substr($l,0,8) == "https://" ||
	   substr($l,0,1) == "/" ||
	   substr($l,0,1) == "#" ||
	   $l[strlen($l)-1] == "/")
	{
		return $l;
	}
	if(array_key_exists($l,$pageTitles)){
		$lu = strtolower(chars($pageTitles[$l]));
	}else{
		$lu = strtolower(chars("url=".$l));
	}
	
	if($bot && !$nojsuser){
		return "#!/".stripSpaces($lu);	
	}else{
		return "?p=".stripSpaces($lu);
	}
}
function makeLink($l){ // make valid links
	global $pageTitles, $bot, $nojsuser;
	$t = " ";
	if($l==""){
		return "";
	}
	if(substr($l,0,7) == 'newtab:'){
		$t = " target='_blank' ";
		$l = substr($l,7);
	}
	$l = makeLinkHref($l);
	
	if($bot && !$nojsuser){
		return $t."href='".stripSpaces($l)."'";	
	}else{
		return $t."href='".stripSpaces($l)."'";
	}
}
function passToJS(){
	global $passToJS;
	foreach($passToJS as $phpName=>$jsName){
		global ${$phpName};
		echo $jsName." = '".addslashes(${$phpName})."';";
	}
}
?>