<?

$varemail = $_GET["name"];

if (!filter_var($varemail, FILTER_VALIDATE_EMAIL)) {
    echo "EmailID: $varemail is invalid";
}
?>