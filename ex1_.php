<?php
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<sss>Jani</sss>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml=new SimpleXMLElement($note);


header("Content-type: text/xml");
echo $xml->asXML();
?>