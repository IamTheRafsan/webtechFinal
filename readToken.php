<?php

function readUnusedTokens($filePath = 'token.json'){
    if (file_exists($filePath)) {
        $json = file_get_contents($filePath);
        $data = json_decode($json, true);

        if (isset($data['token']) && is_array($data['token'])) {
            return $data['token'];
        }
    }
    return [];
}

function readUsedTokens($filePath = 'usedToken.json'){
    if (file_exists($filePath)) {
        $json = file_get_contents($filePath);
        $data = json_decode($json, true);

        if (isset($data['usedToken']) && is_array($data['usedToken'])) {
            return $data['usedToken'];
        }
    }
    return [];
}

?>