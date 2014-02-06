<?php
/**
 * 
 * @authors OX(EoZenfung,OuTakashimine) (ox@ooxx.dk)
 * @date    2014-01-30 22:34:35
 * @version $Id$
 */
include "Snoopy.class.php";
$snoopy = new Snoopy;

if($snoopy->fetch("http://www.bilibili.tv/list/b--a2--t-0---d---1.html"))
{
	echo "response code: ".$snoopy->response_code."\n";
	while(list($key,$val) = each($snoopy->headers))
		echo $key.": ".$val."<br>\n";
	echo "<p>\n";
	
	echo "<PRE>".htmlspecialchars($snoopy->results)."</PRE>\n";
	$html_content = $snoopy->results
	eregi("target="_blank">(.*)</a>",$page_content,$res);
	echo $res;
}
else
	echo "error fetching document: ".$snoopy->error."\n";
