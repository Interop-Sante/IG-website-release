<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-allergy-code.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-allergy-code.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-allergy-code.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-allergy-code.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-allergy-code.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-allergy-code.html');
else 
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-allergy-code.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
