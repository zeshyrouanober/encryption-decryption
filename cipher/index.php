<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encryption | Decryption</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="mystyle.css">  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> 
           
</head>
<style>
    #index{
        text-transform:uppercase;
    }
</style>
<body>
    <div class="my-container deep-purple darken-4">
        <div class="content-container deep-purple darken-4 z-depth-5">
            <div class="left-container">
               <div class="row">
                    <div class="col s12">
                        <ul class="tabs deep-purple darken-3 z-depth-3">
                            <li class="tab col s6"><a href="#test1" class=" white-text">Mono Alphabetic</a></li>
                            <li class="tab col s6"><a class="white-text" href="#test2">Atbash Cipher</a></li>
                        </ul>
                    </div>
                    <div id="test1" class="mono-form col s12">
                       <div class="encryp-container ">
                            <label>Mono Alphabetic Encryption</label><br><br>
                            <div class="col s12 z-depth-4 " style="padding:10px;">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix" style="color:#b388ff;">vpn_key</i>
                                        <input id="key" required class="white-text" type="number" class="validate">
                                        <label for="icon_prefix"  style="color:#b388ff;">Key</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"  style="color:#b388ff;">T</i>
                                        <input id="input" required class="white-text" type="text" class="validate">
                                        <label for="icon_telephone"  style="color:#b388ff;">Plain Text</label>
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light  deep-purple right" id="goBtn">Encryp</button>
                                <div class="encrypted-text white">
                                    <textarea disabled name="" id="index" class="deep-purle-text "style="border:none;"></textarea>
                                </div>
                            </div>
                        </div>
                       <div class="decryp-container ">
                            <label>Mono Alphabetic Decryption</label><br><br>
                            <div class="col s12 z-depth-4 " style="padding:10px;">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix" style="color:#b388ff;">vpn_key</i>
                                        <input id="keycipher" required class="white-text" type="number" class="validate">
                                        <label for="icon_prefix"  style="color:#b388ff;">Key</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"  style="color:#b388ff;">T</i>
                                        <input id="cipher" required class="white-text" type="text" class="validate">
                                        <label for="icon_telephone"  style="color:#b388ff;">Cipher Text</label>
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light  deep-purple right" id="decrypBtn">decryp</button>
                                <div class="encrypted-text white">
                                    <textarea disabled name="" id="plain" class="deep-purle-text "style="border:none;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="test2" class="affine-form col s12">
                       <div class="encryp-container ">
                            <label>Atbash Encryption</label><br><br>
                            <div class="col s12 z-depth-4 " style="padding:10px;">
                                <div class="row">
                                    <!-- <div class="input-field col s6">
                                        <i class="material-icons prefix" style="color:#b388ff;">vpn_key</i>
                                        <input id="firstkeyplain" required class="white-text" type="number" class="validate">
                                        <label for="icon_prefix"  style="color:#b388ff;">First key</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix" style="color:#b388ff;">vpn_key</i>
                                        <input id="secondkeyplain" required class="white-text" type="number" class="validate">
                                        <label for="icon_prefix"  style="color:#b388ff;">Second Key</label>
                                    </div> -->
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"  style="color:#b388ff;">T</i>
                                        <input id="affineinputplain" required class="white-text" type="text" class="validate">
                                        <label for="icon_telephone"  style="color:#b388ff;">Plain Text</label>
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light  deep-purple right" id="affineBtnPlain">Encryp</button>
                                <div class="encrypted-text white">
                                    <textarea disabled name="" id="indexAffineCipher" class="deep-purle-text "style="border:none;"></textarea>
                                </div>
                            </div>
                        </div>
                       <div class="decryp-container ">
                            <label>Atbash Decryption</label><br><br>
                            <div class="col s12 z-depth-4 " style="padding:10px;">
                                <div class="row">
                                   <!-- <div class="input-field col s6">
                                        <i class="material-icons prefix" style="color:#b388ff;">vpn_key</i>
                                        <input id="firstkeycipher" required class="white-text" type="number" class="validate">
                                        <label for="icon_prefix"  style="color:#b388ff;">Fisrt key</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix" style="color:#b388ff;">vpn_key</i>
                                        <input id="secondkeycipher" required class="white-text" type="number" class="validate">
                                        <label for="icon_prefix"  style="color:#b388ff;">Second Key</label>
                                    </div> -->
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix"  style="color:#b388ff;">T</i>
                                        <input id="affineinputcipher" required class="white-text" type="text" class="validate">
                                        <label for="icon_telephone"  style="color:#b388ff;">Cipher Text</label>
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light  deep-purple right" id="affineBtnCipher">decryp</button>
                                <div class="encrypted-text white">
                                    <textarea disabled name="" id="indexAffinePlain" class="deep-purle-text "style="border:none;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-container white">
                <div class="header deep-purple darken-4 z-depth-1 ">
                    <label>Group 1</label>
                </div>
                <div class="content">
                    <div class="content-content ">
                        <img src="images/sy.jpg" class="circle responsive-img" alt="">
                        <label for="">Zeshyrou B. Anober</label>
                    </div>
                    <div class="content-content ">
                        <img src="images/tonet.jpg" class="circle responsive-img" alt="">
                        <label for="">Antonette Bacalso</label>
                    </div>
                    <div class="content-content ">
                        <img src="images/min.jpg" class="circle responsive-img" alt="">
                        <label for="">Sharmine Babatuan</label>
                    </div>
                </div>
                <div class="footer">
                    <label for="" class="teacher">Mrs. Josefina J. Pangan</label><br>
                    <label for="">Teacher</label>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
            var alphabet = [
                "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s" ,"t","u","v","w","x","y","z"
            ];
            
            var alphabetCipher = [
                "A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S" ,"T","U","V","W","X","Y","Z"
            ];

            var atbashCipher =[
                "Z","Y","X","W","V","U","T","S","R","Q","P","O","N","M","L","K","J","I","H" ,"G","F","E","D","C","B","A"
            ];

            // Mono Alphabetic
           $(document).ready(function(){
             $("#goBtn").click(function(){
                var input = $("#input").val().toLowerCase().replace(/\s+/g, '');

                var crypted = [];
                for(var i=0; i<input.length; i++){
                    var res = input.charAt(i);
                    var index = parseInt(alphabet.indexOf(res));
                    var key = parseInt($("#key").val());
                    var sum = index + key;
                    if(sum >= 26){
                        var total = sum - 26;
                        var alpha = alphabet[total];
                        console.log(alpha);
                        crypted.push(alpha);
                    }else{
                        var alpha = alphabet[sum];
                        console.log(alpha);  
                        crypted.push(alpha);                                                    
                    }
                }
                $("#index").html(crypted);
            }); 

            $("#decrypBtn").click(function(){
                var input = $("#cipher").val().toUpperCase().replace(/\s+/g, '');
                var decrypted = [];

                for(var i=0; i<input.length; i++){
                    var res = input.charAt(i);
                    var index = parseInt(alphabetCipher.indexOf(res));
                    var key = parseInt($("#keycipher").val());
                    var sum = index - key;

                    if(sum <= -1){
                        var total = sum + 26;
                        var alpha = alphabet[total];
                        console.log(alpha);
                        decrypted.push(alpha);
                    }else{
                        var alpha = alphabet[sum];
                        console.log(alpha);  
                        decrypted.push(alpha);                                                    
                    }

                }
                $("#plain").html(decrypted);
            });

            // Affine Cipher

            $("#affineBtnPlain").click(function(){
                var input = $("#affineinputplain").val().toLowerCase().replace(/\s+/g, '');
                var encrypted = [];

                // var key1 = parseInt($("#firstkeyplain").val());
                // var key2 = parseInt($("#secondkeyplain").val());
                // var keys = [key1,key2];

                for( var i = 0; i<input.length; i++){
                    var res = input.charAt(i);
                    var index = parseInt(alphabet.indexOf(res));

                    var alpha = atbashCipher[index];
                    encrypted.push(alpha);
                //     var total = (key1 * index) + key2;
                    
                //     if(total>26){
                //         var dividend = parseInt(total/26);
                //         var times = dividend * 26;         
                //         var answer = total - times;
                //         var alpha = alphabet[answer];
                //         encrypted.push(alpha);          
                //     }else{
                //         var alpha = alphabet[total];
                //         encrypted.push(alpha);   
                //     }
                // }
                $("#indexAffineCipher").html(encrypted);      
                }
            });

            $("#affineBtnCipher").click(function(){
                var input = $("#affineinputcipher").val().toUpperCase().replace(/\s+/g, '');
                var decrypted = [];

                for( var i = 0; i<input.length; i++){
                    var res = input.charAt(i);
                    var index = parseInt(atbashCipher.indexOf(res));

                    var alpha = alphabet[index];
                    decrypted.push(alpha);
                // var key1 = parseInt($("#firstkeycipher").val());
                // var key2 = parseInt($("#secondkeycipher").val());

                //     var difference = index - key2;
                //     var product = key1 * difference;
                    
                //     if(product>26){
                //         var dividend = parseInt(product/26);
                //         var times = dividend * 26;         
                //         var answer = product - times;
                //         var alpha = alphabetCipher[answer];
                //         decrypted.push(alpha);          
                //     }else if(product < -1){
                //         var dividend = parseInt(product/26);
                //         var times = dividend * 26;         
                //         var answer = product - times;
                //         var total = (answer - -26);
                //         var alpha = alphabetCipher[total];
                //         decrypted.push(alpha);    
                //     }else{
                //         var alpha = alphabetCipher[product];
                //         decrypted.push(alpha);   
                //     }
                // }
                $("#indexAffinePlain").html(decrypted);
                }
            });
        });
    </script>
</body>
</html>