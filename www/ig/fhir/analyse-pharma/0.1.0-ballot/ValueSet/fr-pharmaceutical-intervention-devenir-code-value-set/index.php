<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ValueSet-fr-pharmaceutical-intervention-devenir-code-value-set.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ValueSet-fr-pharmaceutical-intervention-devenir-code-value-set.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ValueSet-fr-pharmaceutical-intervention-devenir-code-value-set.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ValueSet-fr-pharmaceutical-intervention-devenir-code-value-set.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ValueSet-fr-pharmaceutical-intervention-devenir-code-value-set.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ValueSet-fr-pharmaceutical-intervention-devenir-code-value-set.html');
else 
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ValueSet-fr-pharmaceutical-intervention-devenir-code-value-set.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
