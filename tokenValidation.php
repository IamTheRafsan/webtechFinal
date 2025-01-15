<?php

function matchToken($token) {
    $filePath = 'token.json';
    if (!file_exists($filePath)) {
        echo "Error: Token file does not exist.";
        exit;
    }

    $jsonData = file_get_contents($filePath);
    $tokens = json_decode($jsonData, true);

    if (!is_array($tokens) || !isset($tokens['token'])) {
        echo "Error: Token data is invalid.";
        exit;
    }

    $tokenList = $tokens['token']; 


    if (in_array(strval($token), array_map('strval', $tokenList))) {
        echo "Token Exits.";
        return true;
    } else {
        echo "Error: Invalid token.";
        exit;
    }


    
}

function matchUsedToken($token){
    $conn = new mysqli("localhost", "root", "", "webtech");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("SELECT COUNT(*) FROM used_token WHERE used_token_number = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        $conn->close();
        echo "Error: Token already used.";
        exit;
    } else {
        $insertStmt = $conn->prepare("INSERT INTO used_token (used_token_number) VALUES (?)");
        $insertStmt->bind_param("s", $token);

        if ($insertStmt->execute()) {
            echo "Token successfully recorded.";
        } else {
            echo "Error: Unable to record token.";
        }
        
        $insertStmt->close();
        $conn->close();
        return false;
    }
}




