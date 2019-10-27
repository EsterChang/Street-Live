<?php
require '../vendor/autoload.php';

    $id = $_GET['id'];
use Google\Cloud\Firestore\FirestoreClient;

$firestore = new FirestoreClient([
    'keyFilePath' => '../config/firebase-service-account.json'
]);

try {
    $collectionReference = $firestore->collection('Users');
    $documentReference = $collectionReference->document($id);
    $snapshot = $documentReference->snapshot();
    echo json_encode($snapshot->data());
} catch(Exception $e) {
    echo "Error" . $e;
}
