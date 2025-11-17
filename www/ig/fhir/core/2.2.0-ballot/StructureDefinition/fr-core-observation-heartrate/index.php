<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot/StructureDefinition-fr-core-observation-heartrate.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot/StructureDefinition-fr-core-observation-heartrate.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot/StructureDefinition-fr-core-observation-heartrate.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot/StructureDefinition-fr-core-observation-heartrate.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot/StructureDefinition-fr-core-observation-heartrate.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot/StructureDefinition-fr-core-observation-heartrate.html');
else 
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot/StructureDefinition-fr-core-observation-heartrate.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
