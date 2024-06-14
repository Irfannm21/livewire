<?php

function success($data, $message) {
    return response()->json([
        [
            "data" => $data,
            "status" => true,
            "message" => $message,
        ],
    ]);
}


function fails($error, $message) {
    return response()->json([
        "data" => Null,
        "status" => false,
        $message => $message
    ]);
}

?>
