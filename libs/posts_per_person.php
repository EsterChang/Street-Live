<?php
require '../vendor/autoload.php';

$id = $_GET['id'];
use Google\Cloud\Firestore\FirestoreClient;

$firestore = new FirestoreClient([
    'keyFilePath' => '../config/firebase-service-account.json'
]);

$usersRef = $firestore->collection('Users');
$document = $usersRef->document($id);
$postRef = $document->collection('Posts');
$documents = $postRef->documents();

$jsonDocs = array();
foreach ($documents as $document) {
    if ($document->exists()) {
        array_push($jsonDocs, $document->data());
    } 
}

echo json_encode($jsonDocs);