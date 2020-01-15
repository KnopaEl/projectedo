$(document).ready(function() {
    $('#generate').click(function() {
        generateKey()
            .then(cryptoKeyHex => {
                var elem = document.getElementById("aes");
                elem.value = cryptoKeyHex;
            })
            .catch(e => console.log(e));
    })
    $('#before').keypress(function() {
        var key = $('#aes').val();
        var plainText = $('#before').val();
        console.log(key);
        console.log(plainText);

        encrypt(key, plainText)
            .then(encryptedTextHex => {
                var text = document.getElementById("after");
                text.value = encryptedTextHex;
            })
            .catch(e => console.log(e));
        sha256(plainText).then(digest => {
            var sha = document.getElementById("sha");
            sha.value = digest;
        })
    })
    $('#decrypto').click(function() {
        var key = $('#aes').val();
        var encryptedTextHex = $('#after').val();
        decrypt(key, encryptedTextHex)
            .then(plainText => {
                var decr = document.getElementById("after");
                decr.value = encryptedTextHex;
            })
            .catch(e => console.log(e));
    })
    document.getElementById("clean").onclick = function() {
        document.getElementById("before").value = "";
    }
});