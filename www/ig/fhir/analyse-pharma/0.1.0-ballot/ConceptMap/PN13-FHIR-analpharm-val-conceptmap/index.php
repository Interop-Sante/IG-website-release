<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ConceptMap-PN13-FHIR-analpharm-val-conceptmap.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ConceptMap-PN13-FHIR-analpharm-val-conceptmap.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ConceptMap-PN13-FHIR-analpharm-val-conceptmap.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ConceptMap-PN13-FHIR-analpharm-val-conceptmap.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ConceptMap-PN13-FHIR-analpharm-val-conceptmap.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ConceptMap-PN13-FHIR-analpharm-val-conceptmap.html');
else 
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/ConceptMap-PN13-FHIR-analpharm-val-conceptmap.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
