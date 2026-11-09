<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-procedure-code-autre.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-procedure-code-autre.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-procedure-code-autre.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-procedure-code-autre.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-procedure-code-autre.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-procedure-code-autre.html');
else 
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/ValueSet-fr-core-vs-procedure-code-autre.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
