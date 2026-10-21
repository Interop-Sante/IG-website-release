<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/Encounter-encounter-irm-refused.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/Encounter-encounter-irm-refused.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/Encounter-encounter-irm-refused.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/Encounter-encounter-irm-refused.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/Encounter-encounter-irm-refused.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/Encounter-encounter-irm-refused.html');
else 
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/Encounter-encounter-irm-refused.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
