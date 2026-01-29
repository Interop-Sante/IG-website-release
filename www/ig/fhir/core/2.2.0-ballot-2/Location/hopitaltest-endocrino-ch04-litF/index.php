<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot-2/Location-hopitaltest-endocrino-ch04-litF.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot-2/Location-hopitaltest-endocrino-ch04-litF.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot-2/Location-hopitaltest-endocrino-ch04-litF.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot-2/Location-hopitaltest-endocrino-ch04-litF.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot-2/Location-hopitaltest-endocrino-ch04-litF.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot-2/Location-hopitaltest-endocrino-ch04-litF.html');
else 
  Redirect('https://hl7.fr/ig/fhir/core/2.2.0-ballot-2/Location-hopitaltest-endocrino-ch04-litF.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
