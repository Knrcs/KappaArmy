<html>
<head>
<title>Test</title>
<?php
define('COOKIE_FILE', 'cookie.txt');
define('BUNGIE_URL', 'https://www.bungie.net');
define('API_KEY', '9ab2bfd13ee147e6b97256efd9f8e2d8');
define('USER_AGENT', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1');
?>
</head>
<body>
<?php
with open('manifest.pickle', 'rb') as data:
     all_data = pickle.load(data)

 hash = 1274330687
 ghorn = all_data['DestinyInventoryItemDefinition'][hash]

 print 'Name: '+ghorn['itemName']
 print 'Type: '+ghorn['itemTypeName']
 print 'Tier: '+ghorn['tierTypeName']
 print ghorn['itemDescription']
?>
 </body>