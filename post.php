<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);

    $name = $data["name"];
    $email = $data["email"];
    $checkbox = isset($data["checkbox"]) ? "tak" : "nie";

    $response = array(
        "name" => $name,
        "email" => $email,
        "checkbox" => $checkbox,
    );

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
