<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/AllergyIntolerance-FRCoreAllergyIntoleranceExampleIntolerance.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/AllergyIntolerance-FRCoreAllergyIntoleranceExampleIntolerance.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/AllergyIntolerance-FRCoreAllergyIntoleranceExampleIntolerance.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/AllergyIntolerance-FRCoreAllergyIntoleranceExampleIntolerance.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/AllergyIntolerance-FRCoreAllergyIntoleranceExampleIntolerance.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/AllergyIntolerance-FRCoreAllergyIntoleranceExampleIntolerance.html');
else 
  Redirect('https://hl7.fr/ig/fhir/core/3.0.0-ballot/AllergyIntolerance-FRCoreAllergyIntoleranceExampleIntolerance.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
