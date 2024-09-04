<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-observation-level-of-exertion.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-observation-level-of-exertion.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-observation-level-of-exertion.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-observation-level-of-exertion.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-observation-level-of-exertion.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-observation-level-of-exertion.html');
else 
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-observation-level-of-exertion.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
