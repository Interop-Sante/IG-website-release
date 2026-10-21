<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/ImplementationGuide-hl7.fhir.fr.preadmission.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/ImplementationGuide-hl7.fhir.fr.preadmission.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/ImplementationGuide-hl7.fhir.fr.preadmission.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/ImplementationGuide-hl7.fhir.fr.preadmission.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/ImplementationGuide-hl7.fhir.fr.preadmission.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/index.html');
else 
  Redirect('https://hl7.fr/ig/fhir/preadmission/1.0.0-ballot/ImplementationGuide-hl7.fhir.fr.preadmission.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
