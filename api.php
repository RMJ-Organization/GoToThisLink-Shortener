<!-- Add to PHP Code for Link Shortening

<?php
        if(array_key_exists("submit", $_POST)) { 
            write(); 
        } 
        function write() { 
            $ser1 = $_POST["link"];
            $serv2 = $_POST["shlink"];
            if(strpos($serv2, "fuck") !== false){
                swear();
            } else if(strpos($serv2, "shit") !== false){
                swear();
            } else if(strpos($serv2, "porn") !== false){
                swear();
            } else if(strpos($serv2, "bitch") !== false){
                swear();
            } else if(strpos($serv2, "nigger") !== false){
                swear();
            } else if(strpos($serv2, "fuc") !== false){
                swear();
            } else if(strpos($serv2, "cunt") !== false){
                swear();
            } else if(strpos($serv2, "bit.ly") !== false){
                olsd();
            } else if(strpos($serv2, "cutt.ly") !== false){
                olsd();
            } else if(strpos($serv2, "goo.gl") !== false){
                olsd();
            } else if(strpos($serv2, "shorturl.at") !== false){
                olsd();
            } else if(strpos($serv2, "bitly.ws") !== false){
                olsd();
            } else if(strpos($serv2, "rb.gy") !== false){
                olsd();
            } else {
                $ser2 = $serv2 . ".php";
                $jic = $serv2 . ".html";
                // $txt = '<!DOCTYPE html><html><head><title>Redirecting</title><meta http-equiv="refresh" content="1;' . $ser1 . '" /></head><body><script>window.location.href = "' . $ser1 . '";</script></body></html>';
                $txt = "<?php header('Location: "  . $ser1 . "'); ?>";
                if(file_exists($ser2) == true){
                    taken();
                } else if(file_exists($jic) == true){
                    taken();
                } else if(file_exists($ser2) == true){
                    taken();
                } else {
                    $file = fopen($ser2, "w") or die("Link Shortening Failed :(");
                    fwrite($file, $txt);
                    echo "Link Shortening Success, your link is <a href='https://gotothislink.xyz/" . $serv2 . "' target='_blank'>https://gotothislink.xyz/" . $serv2 . "</a>"; 
                }
            }
        }
        function swear() {
            echo "Your shortlink ending contains a dirty word, Please do not put dirty words into the textbox as it is rude. Thanks and choose another shortlink."; 
        }
        function taken() {
            echo "Your shortlink has been taken by another person, please choose another shortlink. ";
        }
        function olsd() {
            echo "You have created a shortlink that points to another shortlink website. We do not want double linking so we banned it. ";
        }
      ?>
