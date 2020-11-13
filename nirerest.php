<html>
<body>
<?php

$res = json_decode( file_get_contents('http://localhost:4000/infocards/user1/'), true );
$encrypted = $res;
$pw = 'KeyMustBe16ByteOR24ByteOR32Byte!';
$decrypted = @openssl_decrypt($encrypted, 'aes-256-ecb', $pw);


//$ena = json_decode( file_get_contents('http://localhost:4000/infocards/enablecards'), true );
//$encryptedena = $ena;
//$decryptedena = @openssl_decrypt($encryptedena, 'aes-256-ecb', $pw);
//$ena = json_decode($decryptedena, true);



$res = json_decode($decrypted, true);

$ultvezeur=$res['lastactive_eur'];
$ultvezint=$res['lastactive_int'];
$cardnomeur=$res['card_europe'];
$cardnomint=$res['card_international'];
$cardactivo=$res['current_card'];


?>
</body>
</html>
