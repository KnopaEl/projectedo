function generateKey() {
    return new Promise(function(resolve, reject) {
        crypto.subtle.generateKey({
                name: 'AES-CBC',
                length: 256,
            },
            true, [
                'encrypt',
                'decrypt',
            ]
        ).then(function(key) {
            crypto.subtle.exportKey('raw', key).then(function(keydata) {
                resolve(arrayToHex(keydata));
            }).catch(e => reject(e));
        }).catch(e => reject(e));
    });
}

function encrypt(cryptoKeyHex, plainText) {
    return new Promise(function(resolve, reject) {
        const cryptoKey = arrayFromHex(cryptoKeyHex);
        const iv = crypto.getRandomValues(new Uint8Array(16)).buffer;
        const alg = { name: 'AES-CBC', iv: iv };
        crypto.subtle.importKey(
            'raw',
            cryptoKey,
            alg,
            true, [
                'encrypt',
                'decrypt',
            ]
        ).then(function(key) {
            crypto.subtle.encrypt(
                alg,
                key,
                new TextEncoder().encode(plainText)
            ).then(function(buffer) {
                resolve(arrayToHex(iv) + arrayToHex(buffer));
            }).catch(e => reject(e));
        }).catch(e => reject(e));
    });
}

function decrypt(cryptoKeyHex, encryptedTextHex) {
    return new Promise(function(resolve, reject) {
        const iv = arrayFromHex(encryptedTextHex.slice(0, 32));
        const alg = { name: 'AES-CBC', iv: iv };
        crypto.subtle.importKey(
            'raw',
            arrayFromHex(cryptoKeyHex),
            alg,
            true, [
                'encrypt',
                'decrypt',
            ]
        ).then(function(key) {
            crypto.subtle.decrypt(
                alg,
                key,
                arrayFromHex(encryptedTextHex.slice(32))
            ).then(function(buffer) {
                resolve(new TextDecoder().decode(buffer));
            }).catch(e => reject(e));
        }).catch(e => reject(e));
    });
}

function sha256(str) {
    var buffer = new TextEncoder().encode(str);
    return crypto.subtle.digest("SHA-256", buffer).then(function(hash) {
        return arrayToHex(hash);
    });
}

function arrayToHex(buffer) {
    const hashArray = Array.from(new Uint8Array(buffer));
    const hashHex = hashArray.map(b => ('00' + b.toString(16)).slice(-2).toUpperCase()).join('');
    return hashHex;
}

function arrayFromHex(hex) {
    str = new Uint8Array(hex.match(/[\da-f]{2}/gi).map(h => parseInt(h, 16)));
    return str;
}