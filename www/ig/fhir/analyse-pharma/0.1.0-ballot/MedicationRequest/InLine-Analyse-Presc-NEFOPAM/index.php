<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/MedicationRequest-InLine-Analyse-Presc-NEFOPAM.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/MedicationRequest-InLine-Analyse-Presc-NEFOPAM.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/MedicationRequest-InLine-Analyse-Presc-NEFOPAM.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/MedicationRequest-InLine-Analyse-Presc-NEFOPAM.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/MedicationRequest-InLine-Analyse-Presc-NEFOPAM.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/MedicationRequest-InLine-Analyse-Presc-NEFOPAM.html');
else 
  Redirect('https://hl7.fr/ig/fhir/analyse-pharma/0.1.0-ballot/MedicationRequest-InLine-Analyse-Presc-NEFOPAM.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
