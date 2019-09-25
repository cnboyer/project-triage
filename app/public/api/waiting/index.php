<?php

// Step 1: Get a datase connection from our help class; :: means static function
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare('SELECT * FROM Patient p, PatientVisit pv WHERE p.patientGuid = pv.patientGuid'); //first step of retrival; repeated quickly
$stmt->execute(); //executes the function
$patients = $stmt->fetchAll(); //fetches results of the query

// patientGuid VARCHAR(64) PRIMARY KEY,
// firstName VARCHAR(64),
// lastName VARCHAR(64),
// dob DATE DEFAULT NULL,
// sexAtBirth CHAR(1) DEFAULT ''

// Step 3: Convert to JSON; pretty print is constant (caps) and is for formatting
$json = json_encode($patients, JSON_PRETTY_PRINT);

// Step 4: Output
header('Content-Type: application/json'); //communicates to browser that json is incoming
echo $json;
