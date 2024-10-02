<?php

$xml=new SimpleXMLElement("note.xml", 0, TRUE);


header("Content-type: text/xml");
echo $xml->asXML();

?>