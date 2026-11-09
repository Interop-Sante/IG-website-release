<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-condition-code-medecine-ville.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-condition-code-medecine-ville.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-condition-code-medecine-ville.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-condition-code-medecine-ville.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-condition-code-medecine-ville.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-condition-code-medecine-ville.html');
else 
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-condition-code-medecine-ville.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
