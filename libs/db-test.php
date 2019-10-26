<?php
require '../vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

$firestore = new FirestoreClient([
    'keyFilePath' => '../config/firebase-service-account.json'
]);

$collectionReference = $firestore->collection('Users');
$documentReference = $collectionReference->document('TE77uYKAk9pRc8vCPKuZ');
$snapshot = $documentReference->snapshot();

echo "Hello " . $snapshot['city'];