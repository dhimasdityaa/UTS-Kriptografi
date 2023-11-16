<?php

function Encrypt($plainText, $key) {
    $result = "";
    $keyLength = strlen($key);
    $keyIndex = 0;

    for ($i = 0; $i < strlen($plainText); $i++) {
        $char = $plainText[$i];

        if (ctype_alpha($char)) {
            $isUpperCase = ctype_upper($char);
            $char = strtoupper($char);

            $keyChar = $key[$keyIndex];
            $keyValue = ord(strtoupper($keyChar)) - ord('A');
            
            $encryptedChar = chr(((ord($char) - ord('A') + $keyValue) % 26) + ord('A'));

            if (!$isUpperCase) {
                $encryptedChar = strtolower($encryptedChar);
            }

            $result .= $encryptedChar;

            $keyIndex = ($keyIndex + 1) % $keyLength;
        } else {
            $result .= $char;
        }
    }

    return $result;
}

function Decrypt($cipherText, $key) {
    $result = "";
    $keyLength = strlen($key);
    $keyIndex = 0;

    for ($i = 0; $i < strlen($cipherText); $i++) {
        $char = $cipherText[$i];

        if (ctype_alpha($char)) {
            $isUpperCase = ctype_upper($char);
            $char = strtoupper($char);

            $keyChar = $key[$keyIndex];
            $keyValue = ord(strtoupper($keyChar)) - ord('A');
            
            $decryptedChar = chr(((ord($char) - ord('A') - $keyValue + 26) % 26) + ord('A'));

            if (!$isUpperCase) {
                $decryptedChar = strtolower($decryptedChar);
            }

            $result .= $decryptedChar;

            $keyIndex = ($keyIndex + 1) % $keyLength;
        } else {
            $result .= $char;
        }
    }

    return $result;
}

// Example usage:
//$plainText = "DHIMAS ADITYA";
//$key = "KEY";

//$cipherText = vigenereEncrypt($plainText, $key);
//echo "Encrypted: $cipherText\n";

//$decryptedText = vigenereDecrypt($cipherText, $key);
//echo "Decrypted: $decryptedText\n";

?>
