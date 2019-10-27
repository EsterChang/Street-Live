<?php
require '../vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

$firestore = new FirestoreClient([
    'keyFilePath' => '../config/firebase-service-account.json'
]);

$citiesRef = $firestore->collection('Users');
$documents = $citiesRef->documents();

$jsonDocs = array();
foreach ($documents as $document) {
    if ($document->exists()) {
        array_push($jsonDocs, $document->data());
    } 
}

echo json_encode($jsonDocs);