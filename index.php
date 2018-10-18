<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array();
    $errors = array();
    $id = $_POST['id'];

    $data['success'] = true;
    $data['id'] = $id;

    echo json_encode($data);
    exit(0);
}
?>
<!DOCTYPE html>
<html lang='en'>
<body>
<head>
    <title>Gamenite</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
    <link type="text/css" href="/resources/css/index.css" rel="stylesheet">
    <script type="text/javascript" src="/resources/js/functions.js"></script>
</head>
<?php
include 'admin/config.php';
include RESOURCES . TEMPLATES . 'header.php';

$sql = "SELECT * FROM player;";
$result = SelectSQL($sql, $conn);
if ($row = $result) {
    echo "Mysql connection success!\n" .  $row['name'];
}
echo "<div class='fight_button' id='fight_button'>Click Me!</div>";
?>

</body>
</html>