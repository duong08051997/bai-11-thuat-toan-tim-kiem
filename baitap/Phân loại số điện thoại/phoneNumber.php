<!doctype html>
<body lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
    <textarea name=" number"></textarea>
    <input name="submit" value="search" type="submit">
</form>

</body>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];
    $listNumber = explode(',', $number);
    $viettel = [];
    $vinaphone = [];
    $mobiphone = [];

    $vi = ['096', '097', '098', '086', '032', '033', '034', '035', '036', '037', '038', '039'];
    $mobi = ['090', '093', '089', '070', '079', '077', '076', '078'];
    $vina = ['081', '082', '083', '084', '085'];

    for ($i = 0; $i < count($listNumber); $i++) {
        $phone = str_split($listNumber[$i], 3);
        if (in_array($phone[0], $vi)) {
            array_push($viettel, $listNumber[$i]);
        } elseif (in_array($phone[0], $mobi)) {
            array_push($mobiphone, $listNumber[$i]);
        } elseif (in_array($phone[0], $vina)) {
            array_push($vinaphone, $listNumber[$i]);
        }
    }
    echo 'viettel: ' . '<pre>';
    var_dump($viettel);
    echo 'mobiphone: ' . '<pre>';
    var_dump($mobiphone);
    echo 'vinaphone: ' . '<pre>';
    var_dump($mobiphone);


}
?>
</body>
</html>