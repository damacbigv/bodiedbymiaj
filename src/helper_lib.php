<?php
/**
 * Created by PhpStorm.
 * User: volliver
 * Date: 6/24/17
 * Time: 2:14 PM
 */


/**
 * Indents a flat JSON string to make it more human-readable.
 *
 * @param string $json The original JSON string to process.
 *
 * @return string Indented version of the original JSON string.
 */
function indent($json)
{

    $result = '';
    $pos = 0;
    $strLen = strlen($json);
    $indentStr = '  ';
    $newLine = "\n";
    $prevChar = '';
    $outOfQuotes = true;

    for ($i = 0; $i <= $strLen; $i++) {

        // Grab the next character in the string.
        $char = substr($json, $i, 1);

        // Are we inside a quoted string?
        if ($char == '"' && $prevChar != '\\') {
            $outOfQuotes = !$outOfQuotes;

            // If this character is the end of an element,
            // output a new line and indent the next line.
        } else if (($char == '}' || $char == ']') && $outOfQuotes) {
            $result .= $newLine;
            $pos--;
            for ($j = 0; $j < $pos; $j++) {
                $result .= $indentStr;
            }
        }

        // Add the character to the result string.
        $result .= $char;

        // If the last character was the beginning of an element,
        // output a new line and indent the next line.
        if (($char == ',' || $char == '{' || $char == '[') && $outOfQuotes) {
            $result .= $newLine;
            if ($char == '{' || $char == '[') {
                $pos++;
            }

            for ($j = 0; $j < $pos; $j++) {
                $result .= $indentStr;
            }
        }

        $prevChar = $char;
    }

    return $result;
}

?>

<script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>
<script type=text/javascript>
    function getFirebaseConfig() {
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyBNz3IArqW7YJlIdkXkzlEpp2buYwAg8rE",
            authDomain: "bodiedbymiaj-5b075.firebaseapp.com",
            databaseURL: "https://bodiedbymiaj-5b075.firebaseio.com",
            projectId: "bodiedbymiaj-5b075",
            storageBucket: "bodiedbymiaj-5b075.appspot.com",
            messagingSenderId: "5930202534"
        };

        return config;
    }

    function getFirebaseDBref(config, collection_name) {
        firebase.initializeApp(config);


        database = firebase.database();

        var ref = database.ref(collection_name);
        return ref;
    }

    function writeToFirebase(config, collection_name, data) {

        firebase.initializeApp(config);
        firebase.auth().onAuthStateChanged(function (user) {
            if (user) {
                firebase.database().ref(collection_name).set(
                    Array.from(data)
                );
            }
            else {
                firebase.auth().signInAnonymously();
            }
            console.log(user);

        });
    }
    /**
     function Firebase_Login() {

        firebase.auth().signInAnonymously();
        firebase.auth().onAuthStateChanged(firebaseUser=>{
            console.log(firebaseUser);
            return
        });

    }
     // Fire_Login();
     **/


</script>