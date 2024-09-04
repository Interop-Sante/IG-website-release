<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-organization-number-of-theorical-accomadation-space.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-organization-number-of-theorical-accomadation-space.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-organization-number-of-theorical-accomadation-space.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-organization-number-of-theorical-accomadation-space.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-organization-number-of-theorical-accomadation-space.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-organization-number-of-theorical-accomadation-space.html');
else 
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/StructureDefinition-fr-core-organization-number-of-theorical-accomadation-space.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
