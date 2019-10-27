<?php
require BASE . '/vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

$db = new FirestoreClient([
    'keyFilePath' => BASE . '/config/firebase-service-account.json'
]);

//$collectionReference = $firestore->collection('Users');
//$documentReference = $collectionReference->document('TE77uYKAk9pRc8vCPKuZ');
//$snapshot = $documentReference->snapshot();
//echo "Hello " . $snapshot['city'];