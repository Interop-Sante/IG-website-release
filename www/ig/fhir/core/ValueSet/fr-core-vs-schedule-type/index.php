<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/ValueSet-fr-core-vs-schedule-type.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/ValueSet-fr-core-vs-schedule-type.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/ValueSet-fr-core-vs-schedule-type.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/ValueSet-fr-core-vs-schedule-type.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/ValueSet-fr-core-vs-schedule-type.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/ValueSet-fr-core-vs-schedule-type.html');
else 
  Redirect('https://hl7.fr/ig/fhir/core/2.1.0/ValueSet-fr-core-vs-schedule-type.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
