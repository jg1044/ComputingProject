<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    


        Class Conn{
        
            //possibly rename to HandleLogin()
            //make the login feature within this function 
            public function HandleRequest(){
                
                
                
                
                $servername = 'localhost';
                $username = 'jg1044_databaseCalc';
                $password = 'database9812';
                $dbname = "jg1044_databaseCalc";
                
              
                        
                if(isset($_POST['create'])){  
                if ( (isset( $_POST['username'])&&$_POST['username']!="" )&& (isset($_POST['password'])&&$_POST['password']!="" )&& (isset( $_POST['email'])&&$_POST['email']!="" )) {  //checks if all fields have been filled out 
                
            
               
                
                        
                        //will need to now connect to db to check for existing records, if no existing records exist then send to database but do not validate yet
                         
              
                    //$temp_objectID = $_POST['oid'];         
            
            
                    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){      

            
                        $userPreUrl = $_POST['username'];             //assigns input to variables 
                        $passPreUrl = $_POST['password'];
                        $emailPreUrl = $_POST['email']; 
                 
                 
                 
                        
                        $user = rawurlencode($userPreUrl);          //url encode input variables 
                        $pass = password_hash($passPreUrl, PASSWORD_DEFAULT);  
                        $email = rawurlencode($emailPreUrl);  

            
                        $conn = new mysqli($servername, $username, $password, $dbname);     //create connection to db 
            
             
    
                        if ($conn -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                                //$conn -> connect_error;           <--possinly add CHECK this 
                
                        } 
            
                        //check email in use then if not check if username in use if not then execute create else call error 
                    
                    //NEED TO PREPARE THESE FROM SQL INJECTION 
                    
                    
                        
                    if($email_check = $conn -> query("SELECT * FROM USERS WHERE EMAIL = '$email'")){
                            
                            if(mysqli_num_rows($email_check) > 0){
                                
                                
                                
                                header("HTTP/1.0 409 Email allready exists", http_response_code(409));
                            
                                $conn->close();
                            
                            } else {
                            
                                if($username_check = $conn -> query("SELECT * FROM USERS WHERE USERNAME = '$user'")) {
                            
                                if(mysqli_num_rows($username_check) > 0){
                                
                                    header("HTTP/1.0 422 Unporcessable Entity", http_response_code(422));
                                    $conn->close();
                                
                                
                                } else {
                                
                            
                         //where does this brace go  
                            
                            
                            
                            
                            //likely able to remove char inputs as for the account creation most initialising values will be 
                            //inputted via prepared sql statements anyway 
                            
                            $sqlUser = $conn->prepare("INSERT INTO USERS    
                            (USERNAME, PASSWORD, EMAIL,
                            CHAR1, CHAR2, CHAR3, CHAR4, CHAR5, CHAR6, CHAR7, CHAR8)
                            VALUES (?, ?, ?, 'CHARACTER1', 'CHARACTER2', 'CHARACTER3', 'CHARACTER4', 'CHARACTER5', 'CHARACTER6', 'CHARACTER7', 'CHARACTER8')");

                        //no birthsign currently in this 
                        //POISON TABLE MISSPELT 

                            $sqlUser->bind_param("sss", $u_final, $p_final, $e_final);
            
                            $u_final = $user;
                            $p_final = $pass;
                            $e_final = $email;
                
                
                            $sqlCharacter1a = $conn->prepare("INSERT INTO CHARACTER1 (ACC_ID, CHAR1)
                            SELECT ACC_ID, CHAR1 FROM USERS WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);");
                            
                            $sqlCharacter1b = $conn->prepare("
                            UPDATE CHARACTER1 
                            SET HEALTH = 0, MAGICKA = 0, FATIGUE = 0, ENCUMBRANCE = 0, STRENGTH = 0, INTELLIGENCE = 0, WILLPOWER = 0, AGILITY = 0, 
                            SPEED = 0, ENDURANCE = 0, PERSONALITY = 0, LUCK = 0, MMB = 0.0, HEAVY_ARMOR = 0, MEDIUM_ARMOR = 0, SPEAR = 0, ACROBATICS = 0, 
                            ARMORER = 0, AXE = 0, BLUNT_WEAPON = 0, LONG_BLADE = 0, BLOCK = 0, LIGHT_ARMOR = 0, MARKSMAN = 0, SNEAK = 0, ATHLETICS = 0, HAND_TO_HAND = 0, 
                            SHORT_BLADE = 0, UNARMORED = 0, ILLUSION = 0, MERCANTILE = 0, SPEECHCRAFT = 0, ALCHEMY = 0, CONJURATION = 0, ENCHANT = 0, XSECURITY = 0, ALTERATION = 0, 
                            DESTRUCTION = 0, MYSTICISM = 0, RESTORATION = 0, GENDER = 0, RACE = 0, BIRTHSIGN = 0, RESIST_MAGICKA = 0, RESIST_FIRE = 0, RESIST_FROST = 0, RESIST_SHOCK = 0, 
                            RESIST_POISON = 0, RESIST_COMMON_DISEASE = 0, CLASS = 0
                            WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);
                            ");
                
                            $sqlCharacter2a = $conn->prepare("INSERT INTO CHARACTER2 (ACC_ID, CHAR2)
                            SELECT ACC_ID, CHAR2 FROM USERS WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);");
                            
                            $sqlCharacter2b = $conn->prepare("
                            UPDATE CHARACTER2 
                            SET HEALTH = 0, MAGICKA = 0, FATIGUE = 0, ENCUMBRANCE = 0, STRENGTH = 0, INTELLIGENCE = 0, WILLPOWER = 0, AGILITY = 0, 
                            SPEED = 0, ENDURANCE = 0, PERSONALITY = 0, LUCK = 0, MMB = 0.0, HEAVY_ARMOR = 0, MEDIUM_ARMOR = 0, SPEAR = 0, ACROBATICS = 0, 
                            ARMORER = 0, AXE = 0, BLUNT_WEAPON = 0, LONG_BLADE = 0, BLOCK = 0, LIGHT_ARMOR = 0, MARKSMAN = 0, SNEAK = 0, ATHLETICS = 0, HAND_TO_HAND = 0, 
                            SHORT_BLADE = 0, UNARMORED = 0, ILLUSION = 0, MERCANTILE = 0, SPEECHCRAFT = 0, ALCHEMY = 0, CONJURATION = 0, ENCHANT = 0, XSECURITY = 0, ALTERATION = 0, 
                            DESTRUCTION = 0, MYSTICISM = 0, RESTORATION = 0, GENDER = 0, RACE = 0, BIRTHSIGN = 0, RESIST_MAGICKA = 0, RESIST_FIRE = 0, RESIST_FROST = 0, RESIST_SHOCK = 0, 
                            RESIST_POISON = 0, RESIST_COMMON_DISEASE = 0, CLASS = 0
                            WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);
                            ");
                            
                            $sqlCharacter3a = $conn->prepare("INSERT INTO CHARACTER3 (ACC_ID, CHAR3)
                            SELECT ACC_ID, CHAR3 FROM USERS WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);");
                            
                            $sqlCharacter3b = $conn->prepare("
                            UPDATE CHARACTER3 
                            SET HEALTH = 0, MAGICKA = 0, FATIGUE = 0, ENCUMBRANCE = 0, STRENGTH = 0, INTELLIGENCE = 0, WILLPOWER = 0, AGILITY = 0, 
                            SPEED = 0, ENDURANCE = 0, PERSONALITY = 0, LUCK = 0, MMB = 0.0, HEAVY_ARMOR = 0, MEDIUM_ARMOR = 0, SPEAR = 0, ACROBATICS = 0, 
                            ARMORER = 0, AXE = 0, BLUNT_WEAPON = 0, LONG_BLADE = 0, BLOCK = 0, LIGHT_ARMOR = 0, MARKSMAN = 0, SNEAK = 0, ATHLETICS = 0, HAND_TO_HAND = 0, 
                            SHORT_BLADE = 0, UNARMORED = 0, ILLUSION = 0, MERCANTILE = 0, SPEECHCRAFT = 0, ALCHEMY = 0, CONJURATION = 0, ENCHANT = 0, XSECURITY = 0, ALTERATION = 0, 
                            DESTRUCTION = 0, MYSTICISM = 0, RESTORATION = 0, GENDER = 0, RACE = 0, BIRTHSIGN = 0, RESIST_MAGICKA = 0, RESIST_FIRE = 0, RESIST_FROST = 0, RESIST_SHOCK = 0, 
                            RESIST_POISON = 0, RESIST_COMMON_DISEASE = 0, CLASS = 0
                            WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);
                            ");
                            
                            $sqlCharacter4a = $conn->prepare("INSERT INTO CHARACTER4 (ACC_ID, CHAR4)
                            SELECT ACC_ID, CHAR4 FROM USERS WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);");
                            
                            $sqlCharacter4b = $conn->prepare("
                            UPDATE CHARACTER4 
                            SET HEALTH = 0, MAGICKA = 0, FATIGUE = 0, ENCUMBRANCE = 0, STRENGTH = 0, INTELLIGENCE = 0, WILLPOWER = 0, AGILITY = 0, 
                            SPEED = 0, ENDURANCE = 0, PERSONALITY = 0, LUCK = 0, MMB = 0, HEAVY_ARMOR = 0, MEDIUM_ARMOR = 0, SPEAR = 0, ACROBATICS = 0, 
                            ARMORER = 0, AXE = 0, BLUNT_WEAPON = 0, LONG_BLADE = 0, BLOCK = 0, LIGHT_ARMOR = 0, MARKSMAN = 0, SNEAK = 0, ATHLETICS = 0, HAND_TO_HAND = 0, 
                            SHORT_BLADE = 0, UNARMORED = 0, ILLUSION = 0, MERCANTILE = 0, SPEECHCRAFT = 0, ALCHEMY = 0, CONJURATION = 0, ENCHANT = 0, XSECURITY = 0, ALTERATION = 0, 
                            DESTRUCTION = 0, MYSTICISM = 0, RESTORATION = 0, GENDER = 0, RACE = 0, BIRTHSIGN = 0, RESIST_MAGICKA = 0, RESIST_FIRE = 0, RESIST_FROST = 0, RESIST_SHOCK = 0, 
                            RESIST_POISON = 0, RESIST_COMMON_DISEASE = 0, CLASS = 0
                            WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);
                            ");
                            
                            $sqlCharacter5a = $conn->prepare("INSERT INTO CHARACTER5 (ACC_ID, CHAR5)
                            SELECT ACC_ID, CHAR5 FROM USERS WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);");
                            
                            $sqlCharacter5b = $conn->prepare("
                            UPDATE CHARACTER5 
                            SET HEALTH = 0, MAGICKA = 0, FATIGUE = 0, ENCUMBRANCE = 0, STRENGTH = 0, INTELLIGENCE = 0, WILLPOWER = 0, AGILITY = 0, 
                            SPEED = 0, ENDURANCE = 0, PERSONALITY = 0, LUCK = 0, MMB = 0.0, HEAVY_ARMOR = 0, MEDIUM_ARMOR = 0, SPEAR = 0, ACROBATICS = 0, 
                            ARMORER = 0, AXE = 0, BLUNT_WEAPON = 0, LONG_BLADE = 0, BLOCK = 0, LIGHT_ARMOR = 0, MARKSMAN = 0, SNEAK = 0, ATHLETICS = 0, HAND_TO_HAND = 0, 
                            SHORT_BLADE = 0, UNARMORED = 0, ILLUSION = 0, MERCANTILE = 0, SPEECHCRAFT = 0, ALCHEMY = 0, CONJURATION = 0, ENCHANT = 0, XSECURITY = 0, ALTERATION = 0, 
                            DESTRUCTION = 0, MYSTICISM = 0, RESTORATION = 0, GENDER = 0, RACE = 0, BIRTHSIGN = 0, RESIST_MAGICKA = 0, RESIST_FIRE = 0, RESIST_FROST = 0, RESIST_SHOCK = 0, 
                            RESIST_POISON = 0, RESIST_COMMON_DISEASE = 0, CLASS = 0
                            WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);
                            ");
                            
                            $sqlCharacter6a = $conn->prepare("INSERT INTO CHARACTER6 (ACC_ID, CHAR6)
                            SELECT ACC_ID, CHAR6 FROM USERS WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);");
                            
                            $sqlCharacter6b = $conn->prepare("
                            UPDATE CHARACTER6 
                            SET HEALTH = 0, MAGICKA = 0, FATIGUE = 0, ENCUMBRANCE = 0, STRENGTH = 0, INTELLIGENCE = 0, WILLPOWER = 0, AGILITY = 0, 
                            SPEED = 0, ENDURANCE = 0, PERSONALITY = 0, LUCK = 0, MMB = 0.0, HEAVY_ARMOR = 0, MEDIUM_ARMOR = 0, SPEAR = 0, ACROBATICS = 0, 
                            ARMORER = 0, AXE = 0, BLUNT_WEAPON = 0, LONG_BLADE = 0, BLOCK = 0, LIGHT_ARMOR = 0, MARKSMAN = 0, SNEAK = 0, ATHLETICS = 0, HAND_TO_HAND = 0, 
                            SHORT_BLADE = 0, UNARMORED = 0, ILLUSION = 0, MERCANTILE = 0, SPEECHCRAFT = 0, ALCHEMY = 0, CONJURATION = 0, ENCHANT = 0, XSECURITY = 0, ALTERATION = 0, 
                            DESTRUCTION = 0, MYSTICISM = 0, RESTORATION = 0, GENDER = 0, RACE = 0, BIRTHSIGN = 0, RESIST_MAGICKA = 0, RESIST_FIRE = 0, RESIST_FROST = 0, RESIST_SHOCK = 0, 
                            RESIST_POISON = 0, RESIST_COMMON_DISEASE = 0, CLASS = 0
                            WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);
                            ");
                            
                            $sqlCharacter7a = $conn->prepare("INSERT INTO CHARACTER7 (ACC_ID, CHAR7)
                            SELECT ACC_ID, CHAR7 FROM USERS WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);");
                            
                            $sqlCharacter7b = $conn->prepare("
                            UPDATE CHARACTER7 
                            SET HEALTH = 0, MAGICKA = 0, FATIGUE = 0, ENCUMBRANCE = 0, STRENGTH = 0, INTELLIGENCE = 0, WILLPOWER = 0, AGILITY = 0, 
                            SPEED = 0, ENDURANCE = 0, PERSONALITY = 0, LUCK = 0, MMB = 0.0, HEAVY_ARMOR = 0, MEDIUM_ARMOR = 0, SPEAR = 0, ACROBATICS = 0, 
                            ARMORER = 0, AXE = 0, BLUNT_WEAPON = 0, LONG_BLADE = 0, BLOCK = 0, LIGHT_ARMOR = 0, MARKSMAN = 0, SNEAK = 0, ATHLETICS = 0, HAND_TO_HAND = 0, 
                            SHORT_BLADE = 0, UNARMORED = 0, ILLUSION = 0, MERCANTILE = 0, SPEECHCRAFT = 0, ALCHEMY = 0, CONJURATION = 0, ENCHANT = 0, XSECURITY = 0, ALTERATION = 0, 
                            DESTRUCTION = 0, MYSTICISM = 0, RESTORATION = 0, GENDER = 0, RACE = 0, BIRTHSIGN = 0, RESIST_MAGICKA = 0, RESIST_FIRE = 0, RESIST_FROST = 0, RESIST_SHOCK = 0, 
                            RESIST_POISON = 0, RESIST_COMMON_DISEASE = 0, CLASS = 0
                            WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);
                            ");
                            
                            $sqlCharacter8a = $conn->prepare("INSERT INTO CHARACTER8 (ACC_ID, CHAR8)
                            SELECT ACC_ID, CHAR8 FROM USERS WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);");
                            
                            $sqlCharacter8b = $conn->prepare("
                            UPDATE CHARACTER8 
                            SET HEALTH = 0, MAGICKA = 0, FATIGUE = 0, ENCUMBRANCE = 0, STRENGTH = 0, INTELLIGENCE = 0, WILLPOWER = 0, AGILITY = 0, 
                            SPEED = 0, ENDURANCE = 0, PERSONALITY = 0, LUCK = 0, MMB = 0.0, HEAVY_ARMOR = 0, MEDIUM_ARMOR = 0, SPEAR = 0, ACROBATICS = 0, 
                            ARMORER = 0, AXE = 0, BLUNT_WEAPON = 0, LONG_BLADE = 0, BLOCK = 0, LIGHT_ARMOR = 0, MARKSMAN = 0, SNEAK = 0, ATHLETICS = 0, HAND_TO_HAND = 0, 
                            SHORT_BLADE = 0, UNARMORED = 0, ILLUSION = 0, MERCANTILE = 0, SPEECHCRAFT = 0, ALCHEMY = 0, CONJURATION = 0, ENCHANT = 0, XSECURITY = 0, ALTERATION = 0, 
                            DESTRUCTION = 0, MYSTICISM = 0, RESTORATION = 0, GENDER = 0, RACE = 0, BIRTHSIGN = 0, RESIST_MAGICKA = 0, RESIST_FIRE = 0, RESIST_FROST = 0, RESIST_SHOCK = 0, 
                            RESIST_POISON = 0, RESIST_COMMON_DISEASE = 0, CLASS = 0
                            WHERE ACC_ID = (SELECT MAX(ACC_ID) FROM USERS);
                            ");
                
                
                            $sqlUser->execute();                //execute sql 
                            $sqlUser->close();          //close sql
                            $sqlCharacter1a->execute();
                            $sqlCharacter1a->close();
                            $sqlCharacter1b->execute();
                            $sqlCharacter1b->close();
                            $sqlCharacter2a->execute();
                            $sqlCharacter2a->close();
                            $sqlCharacter2b->execute();
                            $sqlCharacter2b->close();
                            $sqlCharacter3a->execute();
                            $sqlCharacter3a->close();
                            $sqlCharacter3b->execute();
                            $sqlCharacter3b->close();
                            $sqlCharacter4a->execute();
                            $sqlCharacter4a->close();
                            $sqlCharacter4b->execute();
                            $sqlCharacter4b->close();
                            $sqlCharacter5a->execute();
                            $sqlCharacter5a->close();
                            $sqlCharacter5b->execute();
                            $sqlCharacter5b->close();
                            $sqlCharacter6a->execute();
                            $sqlCharacter6a->close();
                            $sqlCharacter6b->execute();
                            $sqlCharacter6b->close();
                            $sqlCharacter7a->execute();
                            $sqlCharacter7a->close();
                            $sqlCharacter7b->execute();
                            $sqlCharacter7b->close();
                            $sqlCharacter8a->execute();
                            $sqlCharacter8a->close();
                            $sqlCharacter8b->execute();
                            $sqlCharacter8b->close();           
                
                            header("HTTP/1.0 201 OK-Record created", http_response_code(201));      //sets response to 201 
            
               
                            $conn->close();         //close connection
                         
                         
                         
                            }   
                            
                        }
                         
                    }
                    
                    
                } 
               
                } else {
                        header("HTTP/1.0 400 Bad request; email invalid", http_response_code(400));  //error for alphanumeric input (make 400 error)
                        
                    }
            
            }  else {
                    header("HTTP/1.0 400 Bad request; parameter missing", http_response_code(400));   //error for missing parameter (makes 400 error)
                    
                }   
            
            } else if (isset($_POST['login'])){  
                
                
                if ( (isset( $_POST['usernameLogin'])&&$_POST['usernameLogin']!="" )&& (isset($_POST['passwordLogin'])&&$_POST['passwordLogin']!="" )) {  //checks if all fields have been filled out 
                
                         //echo "124";
                
                        
                        //will need to now connect to db to check for existing records, if no existing records exist then send to database but do not validate yet
                         
              
                    //$temp_objectID = $_POST['oid'];         
            
            
                        $innerArr = array();
                        $outerArr = array();
                        $idArr = array();


            
                        $userLoginPreUrl = $_POST['usernameLogin'];             //assigns input to variables 
                        $passLoginPreUrl = $_POST['passwordLogin'];

                 
                 
                 
                        
                        $userLogin = rawurlencode($userLoginPreUrl);          //url encode input variables 
                        $passLogin = rawurlencode($passLoginPreUrl);  

                       

            
                        $connLogin = new mysqli($servername, $username, $password, $dbname);     //create connection to db 
            
             
    
                        if ($connLogin -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                          
                
                        } 
            
                        //check email in use then if not check if username in use if not then execute create else call error 
                    
                        //need to prepare statement first 
                        
                        
                        
                        $prepareLoginStmt = $connLogin -> prepare("SELECT * FROM USERS WHERE USERNAME = ?");
                        
                        
                        $prepareLoginStmt -> bind_param("s", $userInput);
                        
                        $userInput = $userLogin;
                        
                        $prepareLoginStmt -> execute();
                        
                        $executedLoginStmt = $prepareLoginStmt->get_result();
                       
                        
                            //echo "t";
                            
                            //CANT USER MYSQLI_NUM_ROWS AS EXPECTS SQLI STMT 
                            
                            if($executedLoginStmt->num_rows > 0){
                                
                                //echo "i";
                                
                                
                                $row = $executedLoginStmt->fetch_row();      //retrieves result row to access for password check 
                                
                                
                                //echo $row[2];
                          
                                        
                                if((password_verify($passLogin, $row[2]))){         //verifies hashed password 
                                    
                                    
                                    
                                    //retrieve values here for acc_id 
                                    
                                    //------------------
                                    
                                    foreach($executedLoginStmt as $item)   {       //cycle through each result 
                    
                                    $idArr = [
                                            $item["ACC_ID"]     //create an array of id's for 'for' loop to cycle through 
                                            ];            
                    
                                    for ($i = 0; $i < count($idArr); $i++) {       //iterate through each id       
                        
                                        $innerArr['i'] = [      
                            
                                                        'acc_id' => $item["ACC_ID"],      //add name values and comment values to associative array  //POSSIBLY NO ENCODE THIS 
                                                        'username' => rawurldecode($item["USERNAME"]),
                                                        'password' => rawurldecode($item["PASSWORD"]),
                                                        'email' => rawurldecode($item['EMAIL']),
                                                        'email' => rawurldecode($item["EMAIL"]),                                                        
                                                        'char1' => rawurldecode($item["CHAR1"]),
                                                        'char2' => rawurldecode($item["CHAR2"]),
                                                        'char3' => rawurldecode($item["CHAR3"]),
                                                        'char4' => rawurldecode($item["CHAR4"]),
                                                        'char5' => rawurldecode($item["CHAR5"]),
                                                        'char6' => rawurldecode($item["CHAR6"]),
                                                        'char7' => rawurldecode($item["CHAR7"]),
                                                        'char8' => rawurldecode($item["CHAR8"]),
                                                        
                                                         ];
                            
                                        array_push($outerArr, $innerArr['i']);        //add comments array containing values to comments_super
                        
                                        }
                    
                                    }  


                                   //----------------------------------- 
                                    
                                    header("HTTP/1.0 200 OK-Login successfull", http_response_code(200)); 
                                    header("Content-Type: application/json; charset=UTF-8");
                                    
                                    
                                     
                                    
                                    //var_dump($executedPassStmt->fetch_all(MYSQLI_ASSOC));
                                    

                                 echo json_encode($outerArr, JSON_PRETTY_PRINT);
                            
                            
                            
                            
                                
                            $prepareLoginStmt->close();
                            $connLogin->close();

                                
                        }  else {
                            
                            //echo"pInc";
                            header("HTTP/1.1 403 Forbidden: password incorrect", http_response_code(403));
                            //echo "wrongpassword";    
                            $prepareLoginStmt->close();
                            $connLogin->close();

                        }
                        
                    
   
                            
                    } else {
                            
                            
                        header("HTTP/1.1 204 No Content: user does not exist", http_response_code(204));   
                        //echo "userdoesnotexist";
                        $prepareLoginStmt->close();
                        $connLogin->close();
                                
                    }
                           
                    

            } else {
                  
                header("HTTP/1.0 400 Bad request; parameter missing", http_response_code(400));
                //echo "inputmissing";  
                   //error for missing parameter (makes 400 error)
                   
                   
    } 
    
    } else if (isset($_GET['char1'])){  
                        
                        
                        $acc_id = $_GET['acc_id'];

                        $charPreUrl = $_GET['char1GET'];
                        
                        $char_name = rawurlencode($charPreUrl);       
       
                        $innerGETArr = array();
                        $outerGETArr = array();
                        $acc_idArr = array();

            
                        $conn = new mysqli($servername, $username, $password, $dbname);     //create connection to db 
            
             
    
                        if ($conn -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                          
                
                        } 
                        
                        
                        
                        $prepareIDStmt = $conn -> prepare("SELECT * FROM CHARACTER1 WHERE ACC_ID = ? AND CHAR1 = ?");
                        
                        $prepareIDStmt -> bind_param("ss", $acc_idFinal, $char_nameFinal);
                        
                        $acc_idFinal = $acc_id;
                        
                        $char_nameFinal = $char_name;
                        
                        $prepareIDStmt -> execute();
                        
                        $executedIDStmt = $prepareIDStmt->get_result();
                        
                        
                            if($executedIDStmt->num_rows > 0){
                                
                                foreach($executedIDStmt as $item){
                                    
                                    
                                    $acc_idArr = [
                                            $item["ACC_ID"]
                                        ];
                                    
                                    for ($i = 0; $i < count($acc_idArr); $i++)  {
                                    
                                    
                                    
                                        $innerGETArr['i'] = [      
                            
                                                        'acc_id' => $item["ACC_ID"],      //add name values and comment values to associative array 
                                                        'char1' => rawurldecode($item["CHAR1"]),
                                                        'health' => $item["HEALTH"],      
                                                        'magicka' => $item["MAGICKA"],                                                        
                                                        'fatigue' => $item["FATIGUE"],
                                                        'encumbrance' => $item["ENCUMBRANCE"],
                                                        'strength' => $item["STRENGTH"],
                                                        'intelligence' => $item["INTELLIGENCE"],
                                                        'willpower' => $item["WILLPOWER"],
                                                        'agility' => $item["AGILITY"],
                                                        'speed' => $item["SPEED"],
                                                        'endurance' => $item["ENDURANCE"],
                                                        'personality' => $item["PERSONALITY"],      
                                                        'luck' => $item["LUCK"],
                                                        'magickaMultiplierBonus' => $item["MMB"],
                                                        'heavyArmor' => $item["HEAVY_ARMOR"],
                                                        'mediumArmor' => $item["MEDIUM_ARMOR"],
                                                        'spear' => $item["SPEAR"],
                                                        'acrobatics' => $item["ACROBATICS"],
                                                        'armorer' => $item["ARMORER"],
                                                        'axe' => $item["AXE"],
                                                        'bluntWeapon' => $item["BLUNT_WEAPON"],
                                                        'longBlade' => $item["LONG_BLADE"],
                                                        'block' => $item["BLOCK"],
                                                        'lightArmor' => $item["LIGHT_ARMOR"],
                                                        'marksman' => $item["MARKSMAN"],
                                                        'sneak' => $item["SNEAK"],
                                                        'athletics' => $item["ATHLETICS"],
                                                        'handToHand' => $item["HAND_TO_HAND"],
                                                        'shortBlade' => $item["SHORT_BLADE"],
                                                        'unarmored' => $item["UNARMORED"],
                                                        'illusion' => $item["ILLUSION"],
                                                        'mercantile' => $item["MERCANTILE"],
                                                        'speechcraft' => $item["SPEECHCRAFT"],
                                                        'alchemy' => $item["ALCHEMY"],
                                                        'conjuration' => $item["CONJURATION"],
                                                        'enchant' => $item["ENCHANT"],
                                                        'xsecurity' => $item["XSECURITY"],
                                                        'alteration' => $item["ALTERATION"],
                                                        'destruction' => $item["DESTRUCTION"],
                                                        'mysticism' => $item["MYSTICISM"],
                                                        'restoration' => $item["RESTORATION"],
                                                        'gender' => $item["GENDER"],
                                                        'race' => $item["RACE"],
                                                        'birthsign' => $item["BIRTHSIGN"],
                                                        'resistMagicka' => $item["RESIST_MAGICKA"],
                                                        'resistFire' => $item["RESIST_FIRE"],
                                                        'resistFrost' => $item["RESIST_FROST"],
                                                        'resistShock' => $item["RESIST_SHOCK"],
                                                        'resistPoison' => $item["RESIST_POISON"],
                                                        'resistCommonDisease' => $item["RESIST_COMMON_DISEASE"],
                                                        'class' => $item['CLASS']
                                                         ];
                            
                            
                                        array_push($outerGETArr, $innerGETArr['i']);        //add comments array containing values to comments_super
                                    
                                    }
                                        
                                        
                                }
                                
                                
                                header("HTTP/1.0 200 OK-Content retrieved", http_response_code(200)); 
                                header("Content-Type: application/json; charset=UTF-8");
                                
                                echo json_encode($outerGETArr, JSON_PRETTY_PRINT);
                                
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                                
                            } else {
                                
                                header("HTTP/1.0 204 No content; required data missing", http_response_code(204));
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                            }
                        
                        
                        
                        
                        
                        
                } else if (isset($_GET['char2'])){  
                        
                        
                        $acc_id = $_GET['acc_id'];

                        
                        $charPreUrl = $_GET['char2GET'];
                        
                        $char_name = rawurlencode($charPreUrl);       
       
                        $innerGETArr = array();
                        $outerGETArr = array();
                        $acc_idArr = array();

            
                        $conn = new mysqli($servername, $username, $password, $dbname);     //create connection to db 
            
             
    
                        if ($conn -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                          
                
                        } 
                        
                        
                        
                        $prepareIDStmt = $conn -> prepare("SELECT * FROM CHARACTER2 WHERE ACC_ID = ? AND CHAR2 = ?");
                        
                        $prepareIDStmt -> bind_param("ss", $acc_idFinal, $char_nameFinal);
                        
                        $acc_idFinal = $acc_id;
                        
                        $char_nameFinal = $char_name;
                        
                        $prepareIDStmt -> execute();
                        
                        $executedIDStmt = $prepareIDStmt->get_result();
                        
                        
                            if($executedIDStmt->num_rows > 0){
                                
                                foreach($executedIDStmt as $item){
                                    
                                    
                                    $acc_idArr = [
                                            $item["ACC_ID"]
                                        ];
                                    
                                    for ($i = 0; $i < count($acc_idArr); $i++)  {
                                    
                                    
                                    
                                        $innerGETArr['i'] = [      
                            
                                                        'acc_id' => $item["ACC_ID"],      //add name values and comment values to associative array 
                                                        'char2' => rawurldecode($item["CHAR2"]),
                                                        'health' => $item["HEALTH"],      
                                                        'magicka' => $item["MAGICKA"],                                                        
                                                        'fatigue' => $item["FATIGUE"],
                                                        'encumbrance' => $item["ENCUMBRANCE"],
                                                        'strength' => $item["STRENGTH"],
                                                        'intelligence' => $item["INTELLIGENCE"],
                                                        'willpower' => $item["WILLPOWER"],
                                                        'agility' => $item["AGILITY"],
                                                        'speed' => $item["SPEED"],
                                                        'endurance' => $item["ENDURANCE"],
                                                        'personality' => $item["PERSONALITY"],      
                                                        'luck' => $item["LUCK"],
                                                        'magickaMultiplierBonus' => $item["MMB"],
                                                        'heavyArmor' => $item["HEAVY_ARMOR"],
                                                        'mediumArmor' => $item["MEDIUM_ARMOR"],
                                                        'spear' => $item["SPEAR"],
                                                        'acrobatics' => $item["ACROBATICS"],
                                                        'armorer' => $item["ARMORER"],
                                                        'axe' => $item["AXE"],
                                                        'bluntWeapon' => $item["BLUNT_WEAPON"],
                                                        'longBlade' => $item["LONG_BLADE"],
                                                        'block' => $item["BLOCK"],
                                                        'lightArmor' => $item["LIGHT_ARMOR"],
                                                        'marksman' => $item["MARKSMAN"],
                                                        'sneak' => $item["SNEAK"],
                                                        'athletics' => $item["ATHLETICS"],
                                                        'handToHand' => $item["HAND_TO_HAND"],
                                                        'shortBlade' => $item["SHORT_BLADE"],
                                                        'unarmored' => $item["UNARMORED"],
                                                        'illusion' => $item["ILLUSION"],
                                                        'mercantile' => $item["MERCANTILE"],
                                                        'speechcraft' => $item["SPEECHCRAFT"],
                                                        'alchemy' => $item["ALCHEMY"],
                                                        'conjuration' => $item["CONJURATION"],
                                                        'enchant' => $item["ENCHANT"],
                                                        'xsecurity' => $item["XSECURITY"],
                                                        'alteration' => $item["ALTERATION"],
                                                        'destruction' => $item["DESTRUCTION"],
                                                        'mysticism' => $item["MYSTICISM"],
                                                        'restoration' => $item["RESTORATION"],
                                                        'gender' => $item["GENDER"],
                                                        'race' => $item["RACE"],
                                                        'birthsign' => $item["BIRTHSIGN"],
                                                        'resistMagicka' => $item["RESIST_MAGICKA"],
                                                        'resistFire' => $item["RESIST_FIRE"],
                                                        'resistFrost' => $item["RESIST_FROST"],
                                                        'resistShock' => $item["RESIST_SHOCK"],
                                                        'resistPoison' => $item["RESIST_POISON"],
                                                        'resistCommonDisease' => $item["RESIST_COMMON_DISEASE"],
                                                        'class' => $item['CLASS']
                                                         ];
                            
                            
                                        array_push($outerGETArr, $innerGETArr['i']);        //add comments array containing values to comments_super
                                    
                                    }
                                        
                                        
                                }
                                
                                
                                header("HTTP/1.0 200 OK-Content retrieved", http_response_code(200)); 
                                header("Content-Type: application/json; charset=UTF-8");
                                
                                echo json_encode($outerGETArr, JSON_PRETTY_PRINT);
                                
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                                
                            } else {
                                
                                header("HTTP/1.0 204 No content; required data missing", http_response_code(204));
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                            }
                        
                        
                        
                        
                        
                        
                } else if(isset($_GET['char3'])){  
                        
                        
                        $acc_id = $_GET['acc_id'];

                        
                        $charPreUrl = $_GET['char3GET'];
                        
                        $char_name = rawurlencode($charPreUrl);       
       
                        $innerGETArr = array();
                        $outerGETArr = array();
                        $acc_idArr = array();

            
                        $conn = new mysqli($servername, $username, $password, $dbname);     //create connection to db 
            
             
    
                        if ($conn -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                          
                
                        } 
                        
                        
                        
                        $prepareIDStmt = $conn -> prepare("SELECT * FROM CHARACTER3 WHERE ACC_ID = ? AND CHAR3 = ?");
                        
                        $prepareIDStmt -> bind_param("ss", $acc_idFinal, $char_nameFinal);
                        
                        $acc_idFinal = $acc_id;
                        
                        $char_nameFinal = $char_name;
                        
                        $prepareIDStmt -> execute();
                        
                        $executedIDStmt = $prepareIDStmt->get_result();
                        
                        
                            if($executedIDStmt->num_rows > 0){
                                
                                foreach($executedIDStmt as $item){
                                    
                                    
                                    $acc_idArr = [
                                            $item["ACC_ID"]
                                        ];
                                    
                                    for ($i = 0; $i < count($acc_idArr); $i++)  {
                                    
                                    
                                    
                                        $innerGETArr['i'] = [      
                            
                                                        'acc_id' => $item["ACC_ID"],      //add name values and comment values to associative array 
                                                        'char3' => rawurldecode($item["CHAR3"]),
                                                        'health' => $item["HEALTH"],      
                                                        'magicka' => $item["MAGICKA"],                                                        
                                                        'fatigue' => $item["FATIGUE"],
                                                        'encumbrance' => $item["ENCUMBRANCE"],
                                                        'strength' => $item["STRENGTH"],
                                                        'intelligence' => $item["INTELLIGENCE"],
                                                        'willpower' => $item["WILLPOWER"],
                                                        'agility' => $item["AGILITY"],
                                                        'speed' => $item["SPEED"],
                                                        'endurance' => $item["ENDURANCE"],
                                                        'personality' => $item["PERSONALITY"],      
                                                        'luck' => $item["LUCK"],
                                                        'magickaMultiplierBonus' => $item["MMB"],
                                                        'heavyArmor' => $item["HEAVY_ARMOR"],
                                                        'mediumArmor' => $item["MEDIUM_ARMOR"],
                                                        'spear' => $item["SPEAR"],
                                                        'acrobatics' => $item["ACROBATICS"],
                                                        'armorer' => $item["ARMORER"],
                                                        'axe' => $item["AXE"],
                                                        'bluntWeapon' => $item["BLUNT_WEAPON"],
                                                        'longBlade' => $item["LONG_BLADE"],
                                                        'block' => $item["BLOCK"],
                                                        'lightArmor' => $item["LIGHT_ARMOR"],
                                                        'marksman' => $item["MARKSMAN"],
                                                        'sneak' => $item["SNEAK"],
                                                        'athletics' => $item["ATHLETICS"],
                                                        'handToHand' => $item["HAND_TO_HAND"],
                                                        'shortBlade' => $item["SHORT_BLADE"],
                                                        'unarmored' => $item["UNARMORED"],
                                                        'illusion' => $item["ILLUSION"],
                                                        'mercantile' => $item["MERCANTILE"],
                                                        'speechcraft' => $item["SPEECHCRAFT"],
                                                        'alchemy' => $item["ALCHEMY"],
                                                        'conjuration' => $item["CONJURATION"],
                                                        'enchant' => $item["ENCHANT"],
                                                        'xsecurity' => $item["XSECURITY"],
                                                        'alteration' => $item["ALTERATION"],
                                                        'destruction' => $item["DESTRUCTION"],
                                                        'mysticism' => $item["MYSTICISM"],
                                                        'restoration' => $item["RESTORATION"],
                                                        'gender' => $item["GENDER"],
                                                        'race' => $item["RACE"],
                                                        'birthsign' => $item["BIRTHSIGN"],
                                                        'resistMagicka' => $item["RESIST_MAGICKA"],
                                                        'resistFire' => $item["RESIST_FIRE"],
                                                        'resistFrost' => $item["RESIST_FROST"],
                                                        'resistShock' => $item["RESIST_SHOCK"],
                                                        'resistPoison' => $item["RESIST_POISON"],
                                                        'resistCommonDisease' => $item["RESIST_COMMON_DISEASE"],
                                                        'class' => $item['CLASS']
                                                         ];
                            
                            
                                        array_push($outerGETArr, $innerGETArr['i']);        //add comments array containing values to comments_super
                                    
                                    }
                                        
                                        
                                }
                                
                                
                                header("HTTP/1.0 200 OK-Content retrieved", http_response_code(200)); 
                                header("Content-Type: application/json; charset=UTF-8");
                                
                                echo json_encode($outerGETArr, JSON_PRETTY_PRINT);
                                
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                                
                            } else {
                                
                                header("HTTP/1.0 204 No content; required data missing", http_response_code(204));
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                            }
                        
                        
                        
                        
                        
                        
                } else if(isset($_GET['char4'])){  
                        
                        
                        $acc_id = $_GET['acc_id'];

                        
                        $charPreUrl = $_GET['char4GET'];
                        
                        $char_name = rawurlencode($charPreUrl);       
       
                        $innerGETArr = array();
                        $outerGETArr = array();
                        $acc_idArr = array();

            
                        $conn = new mysqli($servername, $username, $password, $dbname);     //create connection to db 
            
             
    
                        if ($conn -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                          
                
                        } 
                        
                        
                        
                        $prepareIDStmt = $conn -> prepare("SELECT * FROM CHARACTER4 WHERE ACC_ID = ? AND CHAR4 = ?");
                        
                        $prepareIDStmt -> bind_param("ss", $acc_idFinal, $char_nameFinal);
                        
                        $acc_idFinal = $acc_id;
                        
                        $char_nameFinal = $char_name;
                        
                        $prepareIDStmt -> execute();
                        
                        $executedIDStmt = $prepareIDStmt->get_result();
                        
                        
                            if($executedIDStmt->num_rows > 0){
                                
                                foreach($executedIDStmt as $item){
                                    
                                    
                                    $acc_idArr = [
                                            $item["ACC_ID"]
                                        ];
                                    
                                    for ($i = 0; $i < count($acc_idArr); $i++)  {
                                    
                                    
                                    
                                        $innerGETArr['i'] = [      
                            
                                                        'acc_id' => $item["ACC_ID"],      //add name values and comment values to associative array 
                                                        'char4' => rawurldecode($item["CHAR4"]),
                                                        'health' => $item["HEALTH"],      
                                                        'magicka' => $item["MAGICKA"],                                                        
                                                        'fatigue' => $item["FATIGUE"],
                                                        'encumbrance' => $item["ENCUMBRANCE"],
                                                        'strength' => $item["STRENGTH"],
                                                        'intelligence' => $item["INTELLIGENCE"],
                                                        'willpower' => $item["WILLPOWER"],
                                                        'agility' => $item["AGILITY"],
                                                        'speed' => $item["SPEED"],
                                                        'endurance' => $item["ENDURANCE"],
                                                        'personality' => $item["PERSONALITY"],      
                                                        'luck' => $item["LUCK"],
                                                        'magickaMultiplierBonus' => $item["MMB"],
                                                        'heavyArmor' => $item["HEAVY_ARMOR"],
                                                        'mediumArmor' => $item["MEDIUM_ARMOR"],
                                                        'spear' => $item["SPEAR"],
                                                        'acrobatics' => $item["ACROBATICS"],
                                                        'armorer' => $item["ARMORER"],
                                                        'axe' => $item["AXE"],
                                                        'bluntWeapon' => $item["BLUNT_WEAPON"],
                                                        'longBlade' => $item["LONG_BLADE"],
                                                        'block' => $item["BLOCK"],
                                                        'lightArmor' => $item["LIGHT_ARMOR"],
                                                        'marksman' => $item["MARKSMAN"],
                                                        'sneak' => $item["SNEAK"],
                                                        'athletics' => $item["ATHLETICS"],
                                                        'handToHand' => $item["HAND_TO_HAND"],
                                                        'shortBlade' => $item["SHORT_BLADE"],
                                                        'unarmored' => $item["UNARMORED"],
                                                        'illusion' => $item["ILLUSION"],
                                                        'mercantile' => $item["MERCANTILE"],
                                                        'speechcraft' => $item["SPEECHCRAFT"],
                                                        'alchemy' => $item["ALCHEMY"],
                                                        'conjuration' => $item["CONJURATION"],
                                                        'enchant' => $item["ENCHANT"],
                                                        'xsecurity' => $item["XSECURITY"],
                                                        'alteration' => $item["ALTERATION"],
                                                        'destruction' => $item["DESTRUCTION"],
                                                        'mysticism' => $item["MYSTICISM"],
                                                        'restoration' => $item["RESTORATION"],
                                                        'gender' => $item["GENDER"],
                                                        'race' => $item["RACE"],
                                                        'birthsign' => $item["BIRTHSIGN"],
                                                        'resistMagicka' => $item["RESIST_MAGICKA"],
                                                        'resistFire' => $item["RESIST_FIRE"],
                                                        'resistFrost' => $item["RESIST_FROST"],
                                                        'resistShock' => $item["RESIST_SHOCK"],
                                                        'resistPoison' => $item["RESIST_POISON"],
                                                        'resistCommonDisease' => $item["RESIST_COMMON_DISEASE"],
                                                        'class' => $item['CLASS']
                                                         ];
                            
                            
                                        array_push($outerGETArr, $innerGETArr['i']);        //add comments array containing values to comments_super
                                    
                                    }
                                        
                                        
                                }
                                
                                
                                header("HTTP/1.0 200 OK-Content retrieved", http_response_code(200)); 
                                header("Content-Type: application/json; charset=UTF-8");
                                
                                echo json_encode($outerGETArr, JSON_PRETTY_PRINT);
                                
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                                
                            } else {
                                
                                header("HTTP/1.0 204 No content; required data missing", http_response_code(204));
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                            }
                        
                        
                        
                        
                        
                        
                } else if(isset($_GET['char5'])){  
                        
                        
                        $acc_id = $_GET['acc_id'];

                        
                        $charPreUrl = $_GET['char5GET'];
                        
                        $char_name = rawurlencode($charPreUrl);       
       
                        $innerGETArr = array();
                        $outerGETArr = array();
                        $acc_idArr = array();

            
                        $conn = new mysqli($servername, $username, $password, $dbname);     //create connection to db 
            
             
    
                        if ($conn -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                          
                
                        } 
                        
                        
                        
                        $prepareIDStmt = $conn -> prepare("SELECT * FROM CHARACTER5 WHERE ACC_ID = ? AND CHAR5 = ?");
                        
                        $prepareIDStmt -> bind_param("ss", $acc_idFinal, $char_nameFinal);
                        
                        $acc_idFinal = $acc_id;
                        
                        $char_nameFinal = $char_name;
                        
                        $prepareIDStmt -> execute();
                        
                        $executedIDStmt = $prepareIDStmt->get_result();
                        
                        
                            if($executedIDStmt->num_rows > 0){
                                
                                foreach($executedIDStmt as $item){
                                    
                                    
                                    $acc_idArr = [
                                            $item["ACC_ID"]
                                        ];
                                    
                                    for ($i = 0; $i < count($acc_idArr); $i++)  {
                                    
                                    
                                    
                                        $innerGETArr['i'] = [      
                            
                                                        'acc_id' => $item["ACC_ID"],      //add name values and comment values to associative array 
                                                        'char5' => rawurldecode($item["CHAR5"]),
                                                        'health' => $item["HEALTH"],      
                                                        'magicka' => $item["MAGICKA"],                                                        
                                                        'fatigue' => $item["FATIGUE"],
                                                        'encumbrance' => $item["ENCUMBRANCE"],
                                                        'strength' => $item["STRENGTH"],
                                                        'intelligence' => $item["INTELLIGENCE"],
                                                        'willpower' => $item["WILLPOWER"],
                                                        'agility' => $item["AGILITY"],
                                                        'speed' => $item["SPEED"],
                                                        'endurance' => $item["ENDURANCE"],
                                                        'personality' => $item["PERSONALITY"],      
                                                        'luck' => $item["LUCK"],
                                                        'magickaMultiplierBonus' => $item["MMB"],
                                                        'heavyArmor' => $item["HEAVY_ARMOR"],
                                                        'mediumArmor' => $item["MEDIUM_ARMOR"],
                                                        'spear' => $item["SPEAR"],
                                                        'acrobatics' => $item["ACROBATICS"],
                                                        'armorer' => $item["ARMORER"],
                                                        'axe' => $item["AXE"],
                                                        'bluntWeapon' => $item["BLUNT_WEAPON"],
                                                        'longBlade' => $item["LONG_BLADE"],
                                                        'block' => $item["BLOCK"],
                                                        'lightArmor' => $item["LIGHT_ARMOR"],
                                                        'marksman' => $item["MARKSMAN"],
                                                        'sneak' => $item["SNEAK"],
                                                        'athletics' => $item["ATHLETICS"],
                                                        'handToHand' => $item["HAND_TO_HAND"],
                                                        'shortBlade' => $item["SHORT_BLADE"],
                                                        'unarmored' => $item["UNARMORED"],
                                                        'illusion' => $item["ILLUSION"],
                                                        'mercantile' => $item["MERCANTILE"],
                                                        'speechcraft' => $item["SPEECHCRAFT"],
                                                        'alchemy' => $item["ALCHEMY"],
                                                        'conjuration' => $item["CONJURATION"],
                                                        'enchant' => $item["ENCHANT"],
                                                        'xsecurity' => $item["XSECURITY"],
                                                        'alteration' => $item["ALTERATION"],
                                                        'destruction' => $item["DESTRUCTION"],
                                                        'mysticism' => $item["MYSTICISM"],
                                                        'restoration' => $item["RESTORATION"],
                                                        'gender' => $item["GENDER"],
                                                        'race' => $item["RACE"],
                                                        'birthsign' => $item["BIRTHSIGN"],
                                                        'resistMagicka' => $item["RESIST_MAGICKA"],
                                                        'resistFire' => $item["RESIST_FIRE"],
                                                        'resistFrost' => $item["RESIST_FROST"],
                                                        'resistShock' => $item["RESIST_SHOCK"],
                                                        'resistPoison' => $item["RESIST_POISON"],
                                                        'resistCommonDisease' => $item["RESIST_COMMON_DISEASE"],
                                                        'class' => $item['CLASS']
                                                         ];
                            
                            
                                        array_push($outerGETArr, $innerGETArr['i']);        //add comments array containing values to comments_super
                                    
                                    }
                                        
                                        
                                }
                                
                                
                                header("HTTP/1.0 200 OK-Content retrieved", http_response_code(200)); 
                                header("Content-Type: application/json; charset=UTF-8");
                                
                                echo json_encode($outerGETArr, JSON_PRETTY_PRINT);
                                
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                                
                            } else {
                                
                                header("HTTP/1.0 204 No content; required data missing", http_response_code(204));
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                            }
                        
                        
                        
                        
                        
                        
                } else if(isset($_GET['char6'])){  
                        
                        
                        $acc_id = $_GET['acc_id'];


                        $charPreUrl = $_GET['char6GET'];
                        
                        $char_name = rawurlencode($charPreUrl);
                        
       
       
                        $innerGETArr = array();
                        $outerGETArr = array();
                        $acc_idArr = array();

            
                        $conn = new mysqli($servername, $username, $password, $dbname);     //create connection to db 
            
             
    
                        if ($conn -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                          
                
                        } 
                        
                        
                        
                        $prepareIDStmt = $conn -> prepare("SELECT * FROM CHARACTER6 WHERE ACC_ID = ? AND CHAR6 = ?");
                        
                        $prepareIDStmt -> bind_param("ss", $acc_idFinal, $char_nameFinal);
                        
                        $acc_idFinal = $acc_id;
                        
                        $char_nameFinal = $char_name;
                        
                        $prepareIDStmt -> execute();
                        
                        $executedIDStmt = $prepareIDStmt->get_result();
                        
                        
                            if($executedIDStmt->num_rows > 0){
                                
                                foreach($executedIDStmt as $item){
                                    
                                    
                                    $acc_idArr = [
                                            $item["ACC_ID"]
                                        ];
                                    
                                    for ($i = 0; $i < count($acc_idArr); $i++)  {
                                    
                                    
                                    
                                        $innerGETArr['i'] = [      
                            
                                                        'acc_id' => $item["ACC_ID"],      //add name values and comment values to associative array 
                                                        'char6' => rawurldecode($item["CHAR6"]),
                                                        'health' => $item["HEALTH"],      
                                                        'magicka' => $item["MAGICKA"],                                                        
                                                        'fatigue' => $item["FATIGUE"],
                                                        'encumbrance' => $item["ENCUMBRANCE"],
                                                        'strength' => $item["STRENGTH"],
                                                        'intelligence' => $item["INTELLIGENCE"],
                                                        'willpower' => $item["WILLPOWER"],
                                                        'agility' => $item["AGILITY"],
                                                        'speed' => $item["SPEED"],
                                                        'endurance' => $item["ENDURANCE"],
                                                        'personality' => $item["PERSONALITY"],      
                                                        'luck' => $item["LUCK"],
                                                        'magickaMultiplierBonus' => $item["MMB"],
                                                        'heavyArmor' => $item["HEAVY_ARMOR"],
                                                        'mediumArmor' => $item["MEDIUM_ARMOR"],
                                                        'spear' => $item["SPEAR"],
                                                        'acrobatics' => $item["ACROBATICS"],
                                                        'armorer' => $item["ARMORER"],
                                                        'axe' => $item["AXE"],
                                                        'bluntWeapon' => $item["BLUNT_WEAPON"],
                                                        'longBlade' => $item["LONG_BLADE"],
                                                        'block' => $item["BLOCK"],
                                                        'lightArmor' => $item["LIGHT_ARMOR"],
                                                        'marksman' => $item["MARKSMAN"],
                                                        'sneak' => $item["SNEAK"],
                                                        'athletics' => $item["ATHLETICS"],
                                                        'handToHand' => $item["HAND_TO_HAND"],
                                                        'shortBlade' => $item["SHORT_BLADE"],
                                                        'unarmored' => $item["UNARMORED"],
                                                        'illusion' => $item["ILLUSION"],
                                                        'mercantile' => $item["MERCANTILE"],
                                                        'speechcraft' => $item["SPEECHCRAFT"],
                                                        'alchemy' => $item["ALCHEMY"],
                                                        'conjuration' => $item["CONJURATION"],
                                                        'enchant' => $item["ENCHANT"],
                                                        'xsecurity' => $item["XSECURITY"],
                                                        'alteration' => $item["ALTERATION"],
                                                        'destruction' => $item["DESTRUCTION"],
                                                        'mysticism' => $item["MYSTICISM"],
                                                        'restoration' => $item["RESTORATION"],
                                                        'gender' => $item["GENDER"],
                                                        'race' => $item["RACE"],
                                                        'birthsign' => $item["BIRTHSIGN"],
                                                        'resistMagicka' => $item["RESIST_MAGICKA"],
                                                        'resistFire' => $item["RESIST_FIRE"],
                                                        'resistFrost' => $item["RESIST_FROST"],
                                                        'resistShock' => $item["RESIST_SHOCK"],
                                                        'resistPoison' => $item["RESIST_POISON"],
                                                        'resistCommonDisease' => $item["RESIST_COMMON_DISEASE"],
                                                        'class' => $item['CLASS']
                                                         ];
                            
                            
                                        array_push($outerGETArr, $innerGETArr['i']);        //add comments array containing values to comments_super
                                    
                                    }
                                        
                                        
                                }
                                
                                
                                header("HTTP/1.0 200 OK-Content retrieved", http_response_code(200)); 
                                header("Content-Type: application/json; charset=UTF-8");
                                
                                echo json_encode($outerGETArr, JSON_PRETTY_PRINT);
                                
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                                
                            } else {
                                
                                header("HTTP/1.0 204 No content; required data missing", http_response_code(204));
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                            }
                        
                        
                        
                        
                        
                        
                } if(isset($_GET['char7'])){  
                        
                        
                        $acc_id = $_GET['acc_id'];
                        
                        
                        $charPreUrl = $_GET['char7GET'];
                        
                        $char_name = rawurlencode($charPreUrl);
                        
       
       
                        $innerGETArr = array();
                        $outerGETArr = array();
                        $acc_idArr = array();

            
                        $conn = new mysqli($servername, $username, $password, $dbname);     //create connection to db 
            
             
    
                        if ($conn -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                          
                
                        } 
                        
                        
                        
                        $prepareIDStmt = $conn -> prepare("SELECT * FROM CHARACTER7 WHERE ACC_ID = ? AND CHAR7 = ?");
                        
                        $prepareIDStmt -> bind_param("ss", $acc_idFinal, $char_nameFinal);
                        
                        $acc_idFinal = $acc_id;
                        
                        $char_nameFinal = $char_name;
                        
                        $prepareIDStmt -> execute();
                        
                        $executedIDStmt = $prepareIDStmt->get_result();
                        
                        
                            if($executedIDStmt->num_rows > 0){
                                
                                foreach($executedIDStmt as $item){
                                    
                                    
                                    $acc_idArr = [
                                            $item["ACC_ID"]
                                        ];
                                    
                                    for ($i = 0; $i < count($acc_idArr); $i++)  {
                                    
                                    
                                    
                                        $innerGETArr['i'] = [      
                            
                                                        'acc_id' => $item["ACC_ID"],      //add name values and comment values to associative array 
                                                        'char7' => rawurldecode($item["CHAR7"]),
                                                        'health' => $item["HEALTH"],      
                                                        'magicka' => $item["MAGICKA"],                                                        
                                                        'fatigue' => $item["FATIGUE"],
                                                        'encumbrance' => $item["ENCUMBRANCE"],
                                                        'strength' => $item["STRENGTH"],
                                                        'intelligence' => $item["INTELLIGENCE"],
                                                        'willpower' => $item["WILLPOWER"],
                                                        'agility' => $item["AGILITY"],
                                                        'speed' => $item["SPEED"],
                                                        'endurance' => $item["ENDURANCE"],
                                                        'personality' => $item["PERSONALITY"],      
                                                        'luck' => $item["LUCK"],
                                                        'magickaMultiplierBonus' => $item["MMB"],
                                                        'heavyArmor' => $item["HEAVY_ARMOR"],
                                                        'mediumArmor' => $item["MEDIUM_ARMOR"],
                                                        'spear' => $item["SPEAR"],
                                                        'acrobatics' => $item["ACROBATICS"],
                                                        'armorer' => $item["ARMORER"],
                                                        'axe' => $item["AXE"],
                                                        'bluntWeapon' => $item["BLUNT_WEAPON"],
                                                        'longBlade' => $item["LONG_BLADE"],
                                                        'block' => $item["BLOCK"],
                                                        'lightArmor' => $item["LIGHT_ARMOR"],
                                                        'marksman' => $item["MARKSMAN"],
                                                        'sneak' => $item["SNEAK"],
                                                        'athletics' => $item["ATHLETICS"],
                                                        'handToHand' => $item["HAND_TO_HAND"],
                                                        'shortBlade' => $item["SHORT_BLADE"],
                                                        'unarmored' => $item["UNARMORED"],
                                                        'illusion' => $item["ILLUSION"],
                                                        'mercantile' => $item["MERCANTILE"],
                                                        'speechcraft' => $item["SPEECHCRAFT"],
                                                        'alchemy' => $item["ALCHEMY"],
                                                        'conjuration' => $item["CONJURATION"],
                                                        'enchant' => $item["ENCHANT"],
                                                        'xsecurity' => $item["XSECURITY"],
                                                        'alteration' => $item["ALTERATION"],
                                                        'destruction' => $item["DESTRUCTION"],
                                                        'mysticism' => $item["MYSTICISM"],
                                                        'restoration' => $item["RESTORATION"],
                                                        'gender' => $item["GENDER"],
                                                        'race' => $item["RACE"],
                                                        'birthsign' => $item["BIRTHSIGN"],
                                                        'resistMagicka' => $item["RESIST_MAGICKA"],
                                                        'resistFire' => $item["RESIST_FIRE"],
                                                        'resistFrost' => $item["RESIST_FROST"],
                                                        'resistShock' => $item["RESIST_SHOCK"],
                                                        'resistPoison' => $item["RESIST_POISON"],
                                                        'resistCommonDisease' => $item["RESIST_COMMON_DISEASE"],
                                                        'class' => $item['CLASS']
                                                         ];
                            
                            
                                        array_push($outerGETArr, $innerGETArr['i']);        //add comments array containing values to comments_super
                                    
                                    }
                                        
                                        
                                }
                                
                                
                                header("HTTP/1.0 200 OK-Content retrieved", http_response_code(200)); 
                                header("Content-Type: application/json; charset=UTF-8");
                                
                                echo json_encode($outerGETArr, JSON_PRETTY_PRINT);
                                
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                                
                            } else {
                                
                                header("HTTP/1.0 204 No content; required data missing", http_response_code(204));
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                            }
                        
                        
                        
                        
                        
                        
                } else if(isset($_GET['char8'])){  
                        
                        
                        $acc_id = $_GET['acc_id'];
                        
                        $charPreUrl = $_GET['char8GET'];
                        
                        $char_name = rawurlencode($charPreUrl);
                        
                     
                        
                    
       
                        $innerGETArr = array();
                        $outerGETArr = array();
                        $acc_idArr = array();

            
                        $conn = new mysqli($servername, $username, $password, $dbname);     //create connection to db 
            
             
    
                        if ($conn -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                          
                
                        } 
                        
                        
                        
                        $prepareIDStmt = $conn -> prepare("SELECT * FROM CHARACTER8 WHERE ACC_ID = ? AND CHAR8 = ?");
                        
                        $prepareIDStmt -> bind_param("ss", $acc_idFinal, $char_nameFinal);
                        
                        $acc_idFinal = $acc_id;
                        
                        $char_nameFinal = $char_name;
                        
                        $prepareIDStmt -> execute();
                        
                        $executedIDStmt = $prepareIDStmt->get_result();
                        
                        
                            if($executedIDStmt->num_rows > 0){
                                
                                foreach($executedIDStmt as $item){
                                    
                                    
                                    $acc_idArr = [
                                            $item["ACC_ID"]
                                        ];
                                    
                                    for ($i = 0; $i < count($acc_idArr); $i++)  {
                                    
                                    
                                    
                                        $innerGETArr['i'] = [      
                            
                                                        'acc_id' => $item["ACC_ID"],      //add name values and comment values to associative array 
                                                        'char8' => urldecode($item["CHAR8"]),
                                                        'health' => $item["HEALTH"],      
                                                        'magicka' => $item["MAGICKA"],                                                        
                                                        'fatigue' => $item["FATIGUE"],
                                                        'encumbrance' => $item["ENCUMBRANCE"],
                                                        'strength' => $item["STRENGTH"],
                                                        'intelligence' => $item["INTELLIGENCE"],
                                                        'willpower' => $item["WILLPOWER"],
                                                        'agility' => $item["AGILITY"],
                                                        'speed' => $item["SPEED"],
                                                        'endurance' => $item["ENDURANCE"],
                                                        'personality' => $item["PERSONALITY"],      
                                                        'luck' => $item["LUCK"],
                                                        'magickaMultiplierBonus' => $item["MMB"],
                                                        'heavyArmor' => $item["HEAVY_ARMOR"],
                                                        'mediumArmor' => $item["MEDIUM_ARMOR"],
                                                        'spear' => $item["SPEAR"],
                                                        'acrobatics' => $item["ACROBATICS"],
                                                        'armorer' => $item["ARMORER"],
                                                        'axe' => $item["AXE"],
                                                        'bluntWeapon' => $item["BLUNT_WEAPON"],
                                                        'longBlade' => $item["LONG_BLADE"],
                                                        'block' => $item["BLOCK"],
                                                        'lightArmor' => $item["LIGHT_ARMOR"],
                                                        'marksman' => $item["MARKSMAN"],
                                                        'sneak' => $item["SNEAK"],
                                                        'athletics' => $item["ATHLETICS"],
                                                        'handToHand' => $item["HAND_TO_HAND"],
                                                        'shortBlade' => $item["SHORT_BLADE"],
                                                        'unarmored' => $item["UNARMORED"],
                                                        'illusion' => $item["ILLUSION"],
                                                        'mercantile' => $item["MERCANTILE"],
                                                        'speechcraft' => $item["SPEECHCRAFT"],
                                                        'alchemy' => $item["ALCHEMY"],
                                                        'conjuration' => $item["CONJURATION"],
                                                        'enchant' => $item["ENCHANT"],
                                                        'xsecurity' => $item["XSECURITY"],
                                                        'alteration' => $item["ALTERATION"],
                                                        'destruction' => $item["DESTRUCTION"],
                                                        'mysticism' => $item["MYSTICISM"],
                                                        'restoration' => $item["RESTORATION"],
                                                        'gender' => $item["GENDER"],
                                                        'race' => $item["RACE"],
                                                        'birthsign' => $item["BIRTHSIGN"],
                                                        'resistMagicka' => $item["RESIST_MAGICKA"],
                                                        'resistFire' => $item["RESIST_FIRE"],
                                                        'resistFrost' => $item["RESIST_FROST"],
                                                        'resistShock' => $item["RESIST_SHOCK"],
                                                        'resistPoison' => $item["RESIST_POISON"],
                                                        'resistCommonDisease' => $item["RESIST_COMMON_DISEASE"],
                                                        'class' => $item['CLASS']
                                                         ];
                            
                            
                                        array_push($outerGETArr, $innerGETArr['i']);        //add comments array containing values to comments_super
                                    
                                    }
                                    
                                    
                                        
                                        
                                }
                                
                                
                                header("HTTP/1.0 200 OK-Content retrieved", http_response_code(200)); 
                                header("Content-Type: application/json; charset=UTF-8");
                                
                                echo json_encode($outerGETArr, JSON_PRETTY_PRINT);
                                
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                                
                            } else {
                                
                                header("HTTP/1.0 204 No content; required data missing", http_response_code(204));
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                            }
                        
                        
                        
                        
                        
                        
                } 
                

                if(isset($_POST['save'])){
                    
        
                        
                        $charPreUrl = $_POST['char'];
                        
                        $char = rawurlencode($charPreUrl);

                        
                        $charTable = $_POST['charTable'];
                        $charColumn = $_POST['charColumn'];
                        $acc_id = $_POST['acc_idSave'];
                        $health = $_POST['health'];
                        $magicka = $_POST['magicka'];
                        $fatigue = $_POST['fatigue'];
                        $encumbrance = $_POST['encumbrance']; 
                        $strength = $_POST['strength'];
                        $intelligence = $_POST['intelligence']; 
                        $willpower = $_POST['willpower'];
                        $agility = $_POST['agility'];
                        $speed = $_POST['speed'];
                        $endurance = $_POST['endurance'];
                        $personality = $_POST['personality'];
                        $luck = $_POST['luck'];
                        $magickaMultiplierBonus = $_POST['magickaMultiplierBonus'];
                        $heavyArmor = $_POST['heavyArmor'];
                        $mediumArmor = $_POST['mediumArmor']; 
                        $spear = $_POST['spear'];
                        $acrobatics = $_POST['acrobatics']; 
                        $armorer = $_POST['armorer'];
                        $axe = $_POST['axe'];
                        $bluntWeapon = $_POST['bluntWeapon'];
                        $longBlade = $_POST['longBlade'];
                        $block = $_POST['block'];
                        $lightArmor = $_POST['lightArmor'];
                        $marksman = $_POST['marksman'];
                        $sneak = $_POST['sneak'];
                        $athletics = $_POST['athletics']; 
                        $handToHand = $_POST['handToHand'];
                        $shortBlade = $_POST['shortBlade'];
                        $unarmored = $_POST['unarmored'];
                        $illusion = $_POST['illusion'];
                        $mercantile = $_POST['mercantile'];
                        $speechcraft = $_POST['speechcraft'];
                        $alchemy = $_POST['alchemy'];
                        $conjuration = $_POST['conjuration'];
                        $enchant = $_POST['enchant'];
                        $xsecurity = $_POST['xsecurity'];
                        $alteration = $_POST['alteration'];
                        $destruction = $_POST['destruction'];
                        $mysticism = $_POST['mysticism'];
                        $restoration = $_POST['restoration'];
                        $gender = $_POST['gender'];
                        $race = $_POST['race'];
                        $birthsign = $_POST['birthsign']; 
                        $resistMagicka = $_POST['resistMagicka'];
                        $resistFire = $_POST['resistFire'];
                        $resistFrost = $_POST['resistFrost'];
                        $resistShock = $_POST['resistShock'];
                        $resistPoison = $_POST['resistPoison'];
                        $resistCommonDisease = $_POST['resistCommonDisease'];
                        $class = $_POST['xclass'];
                        
                        //echo $acc_id;
                    
                    
                        $connSave = new mysqli($servername, $username, $password, $dbname);
                    
                    
                        if($connSave -> connect_errno){
                            
                             header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 

                        }
                    
                        $prepareSaveStmtUsers = $connSave->prepare("
                            UPDATE USERS 
                            SET $charColumn = ?
                            WHERE ACC_ID = '$acc_id';
                        ");
                        
                        $prepareSaveStmtUsers -> bind_param("s", $characterName);
                
                        
                        $prepareSaveStmt = $connSave -> prepare("
                        UPDATE $charTable 
                        SET $charColumn = ?, HEALTH = '$health', MAGICKA = '$magicka', FATIGUE = '$fatigue', ENCUMBRANCE = '$encumbrance', STRENGTH = '$strength', INTELLIGENCE = '$intelligence',
                        WILLPOWER = '$willpower', AGILITY = '$agility', SPEED = '$speed', ENDURANCE = '$endurance', PERSONALITY = '$personality', LUCK = '$luck', MMB = '$magickaMultiplierBonus',
                        HEAVY_ARMOR = '$heavyArmor', MEDIUM_ARMOR = '$mediumArmor', SPEAR = '$spear', ACROBATICS = '$acrobatics', ARMORER = '$armorer', AXE = '$axe',
                        BLUNT_WEAPON = '$bluntWeapon', LONG_BLADE = '$longBlade', BLOCK = '$block', LIGHT_ARMOR = '$lightArmor', MARKSMAN = '$marksman', SNEAK = '$sneak',
                        ATHLETICS = '$athletics', HAND_TO_HAND = '$handToHand', SHORT_BLADE = '$shortBlade', UNARMORED = '$unarmored', ILLUSION = '$illusion', MERCANTILE = '$mercantile', 
                        SPEECHCRAFT = '$speechcraft', ALCHEMY = '$alchemy', CONJURATION = '$conjuration', ENCHANT = '$enchant', XSECURITY = '$xsecurity', ALTERATION = '$alteration',
                        DESTRUCTION = '$destruction', MYSTICISM = '$mysticism', RESTORATION = '$restoration', GENDER = '$gender', RACE = '$race', BIRTHSIGN = '$birthsign',
                        RESIST_MAGICKA = '$resistMagicka', RESIST_FIRE = '$resistFire', RESIST_FROST = '$resistFrost', RESIST_SHOCK = '$resistShock', RESIST_POISON = '$resistPoison',
                        RESIST_COMMON_DISEASE = '$resistCommonDisease', CLASS = '$class'
                        WHERE ACC_ID = '$acc_id';
                        ");
                    


                    
                        $prepareSaveStmt -> bind_param("s", $characterName);
                        
                        $characterName = $char;
                        
                        //echo $characterName;
                        
                        $prepareSaveStmtUsers -> execute();
                        $prepareSaveStmtUsers -> close();
                        
                        $prepareSaveStmt -> execute();
                        $prepareSaveStmt -> close();
                        
                        header("HTTP/1.0 204 OK-Resource updated successfully", http_response_code(204));      //sets response to 201 

                        $connSave->close();
                        
                        
       
                        
                        
                        
                        
                        
                        
                    
                    
                } else if(isset($_POST['delchar'])){
                    
              
                    
                    if(isset($_POST['accountID']) && isset($_POST['table']) && isset($_POST['column'])){
                        
                        

                        $acc_ID = $_POST['accountID'];
                        $table = $_POST['table'];       //subject to change var name 
                        $column = $_POST['column'];
                        
                        //possibly sanitise vals? does it need it as no user input? 
                        
                        
                        $connCharDel = new mysqli($servername, $username, $password, $dbname);
                        
                        if ($connCharDel -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                                //$conn -> connect_error;           <--possinly add CHECK this 
                
                        }
                    
                        $prepareLoginStmt = $connCharDel -> prepare("SELECT * FROM USERS WHERE ACC_ID = ?");
                        
                        
                        $prepareLoginStmt -> bind_param("s", $accountID);
                        
                        $accountID = $acc_ID;
                        
                        $prepareLoginStmt -> execute();
                        
                        $executedLoginStmt = $prepareLoginStmt->get_result();
                       
                        
                            //echo "t";
                            
                            //CANT USER MYSQLI_NUM_ROWS AS EXPECTS SQLI STMT 
                            
                            if($executedLoginStmt->num_rows > 0){
                                
                                //echo "i";

                        
                            $sqlCharacterDel = $connCharDel->prepare("
                            UPDATE $table 
                            SET $column = 'CHARNAME', HEALTH = 0, MAGICKA = 0, FATIGUE = 0, ENCUMBRANCE = 0, STRENGTH = 0, INTELLIGENCE = 0, WILLPOWER = 0, AGILITY = 0, 
                            SPEED = 0, ENDURANCE = 0, PERSONALITY = 0, LUCK = 0, MMB = 0.0, HEAVY_ARMOR = 0, MEDIUM_ARMOR = 0, SPEAR = 0, ACROBATICS = 0, 
                            ARMORER = 0, AXE = 0, BLUNT_WEAPON = 0, LONG_BLADE = 0, BLOCK = 0, LIGHT_ARMOR = 0, MARKSMAN = 0, SNEAK = 0, ATHLETICS = 0, HAND_TO_HAND = 0, 
                            SHORT_BLADE = 0, UNARMORED = 0, ILLUSION = 0, MERCANTILE = 0, SPEECHCRAFT = 0, ALCHEMY = 0, CONJURATION = 0, ENCHANT = 0, XSECURITY = 0, ALTERATION = 0, 
                            DESTRUCTION = 0, MYSTICISM = 0, RESTORATION = 0, GENDER = 0, RACE = 0, BIRTHSIGN = 0, RESIST_MAGICKA = 0, RESIST_FIRE = 0, RESIST_FROST = 0, RESIST_SHOCK = 0, 
                            RESIST_POISON = 0, RESIST_COMMON_DISEASE = 0, CLASS = 0
                            WHERE ACC_ID = '$acc_ID';
                            ");
                            
                            $sqlUserUpdate = $connCharDel->prepare("
                            UPDATE USERS
                            SET $column = 'CHARNAME'
                            WHERE ACC_ID = '$acc_ID'
                            ");
                        
                            $sqlCharacterDel->execute();
                            $sqlCharacterDel->close();
                            
                            $sqlUserUpdate->execute();
                            $sqlUserUpdate->close();
                        
                            header("HTTP/1.0 200 Success, record updated", http_response_code(200));
                    

                    

                    
            } else {
                header("HTTP/1.0 404 Account not found", http_response_code(404));
            }
        
        }        
        
        
    } else if ($_SERVER['REQUEST_METHOD'] === 'DELETE'){
                
            
                
                
                $accID = $_GET["accountID"];
                $pass = $_GET['password'];


                $connDEL = new mysqli($servername, $username, $password, $dbname);
                
                if($connDEL -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                          
                
                };
                
                
                
                if($accID_check = $connDEL -> query("SELECT * FROM USERS WHERE ACC_ID = '$accID'")){
                            
                        if(mysqli_num_rows($accID_check) <= 0){
                                
                                
                            header("HTTP/1.0 404 Record does not exist", http_response_code(404));
                            
                            $connDEL->close();
                            
                            
                        } else {
                            
                            $row = $accID_check->fetch_row();   
                            
                            if((password_verify($pass, $row[2]))){        


                            $deleteAccount  = $connDEL -> prepare("DELETE FROM USERS WHERE ACC_ID = ?");

                            $deleteAccount->bind_param("s", $USER_DEL);
                    
                            $USER_DEL = $accID;
                
                            $deleteCharacter1 = $connDEL -> prepare("DELETE FROM CHARACTER1 WHERE ACC_ID = '$accID'");  

                            $deleteAccount->bind_param("s", $CHAR1_DEL);
                    
                            $CHAR1_DEL = $accID;
                                              
                            $deleteCharacter2 = $connDEL -> prepare("DELETE FROM CHARACTER2 WHERE ACC_ID = '$accID'");  

                            $deleteAccount->bind_param("s", $CHAR2_DEL);
                    
                            $CHAR2_DEL = $accID;
                                            
                            $deleteCharacter3 = $connDEL -> prepare("DELETE FROM CHARACTER3 WHERE ACC_ID = '$accID'");  

                            $deleteAccount->bind_param("s", $CHAR3_DEL);
                    
                            $CHAR3_DEL = $accID;
                                            
                            $deleteCharacter4 = $connDEL -> prepare("DELETE FROM CHARACTER4 WHERE ACC_ID = '$accID'");  

                            $deleteAccount->bind_param("s", $CHAR4_DEL);
                    
                            $CHAR4_DEL = $accID;
                                            
                            $deleteCharacter5 = $connDEL -> prepare("DELETE FROM CHARACTER5 WHERE ACC_ID = '$accID'");  

                            $deleteAccount->bind_param("s", $CHAR5_DEL);
                    
                            $CHAR5_DEL = $accID;
                            
                            $deleteCharacter6 = $connDEL -> prepare("DELETE FROM CHARACTER6 WHERE ACC_ID = '$accID'");  

                            $deleteAccount->bind_param("s", $CHAR6_DEL);
                    
                            $CHAR6_DEL = $accID;
                                                                
                            $deleteCharacter7 = $connDEL -> prepare("DELETE FROM CHARACTER7 WHERE ACC_ID = '$accID'");  

                            $deleteAccount->bind_param("s", $CHAR7_DEL);
                    
                            $CHAR7_DEL = $accID;
            
                            $deleteCharacter8 = $connDEL -> prepare("DELETE FROM CHARACTER8 WHERE ACC_ID = '$accID'");  

                            $deleteAccount->bind_param("s", $CHAR8_DEL);
                    
                            $CHAR8_DEL = $accID;
                                  
                                                                            
                                    

                            $deleteAccount->execute();
                            $deleteAccount->close();                            
                            $deleteCharacter1->execute();
                            $deleteCharacter1->close();
                            $deleteCharacter2->execute(); 
                            $deleteCharacter2->close();
                            $deleteCharacter3->execute();
                            $deleteCharacter3->close();
                            $deleteCharacter4->execute();
                            $deleteCharacter4->close();
                            $deleteCharacter5->execute();
                            $deleteCharacter5->close();
                            $deleteCharacter6->execute();
                            $deleteCharacter6->close();
                            $deleteCharacter7->execute();
                            $deleteCharacter7->close();
                            $deleteCharacter8->execute();
                            $deleteCharacter8->close();
                            
                            $connDEL->close();
                            
                            
                            //response code here 
                            
                            header("HTTP/1.0 200 OK-Delete successfull", http_response_code(200)); 

                    } else {
                        header("HTTP/1.0 401 Unauthorized", http_response_code(401));
                    }    
                }
                
            } else {
                
                header("HTTP/1.0 404 Account not found", http_response_code(404));
                
            }
            
            
            
        } else if (isset($_GET['retrieve'])){  
                        
                       
                        
                        
                        $acc_id = $_GET['acc_id'];
                        

                        $innerGETArr = array();
                        $outerGETArr = array();
                        $acc_idArr = array();

            
                        $conn = new mysqli($servername, $username, $password, $dbname);     //create connection to db 
            
             
    
                        if ($conn -> connect_errno) {       //checks for error in connection throws 500 error if true 
                               
                                header("HTTP/1.0 500 Internal server error; database connection failed", http_response_code(500));                               //NEED TO ADD HEADER INFO 
                          
                
                        } 
                        
                        
                        
                        $prepareIDStmt = $conn -> prepare("SELECT * FROM USERS WHERE ACC_ID = ?");
                        
                        $prepareIDStmt -> bind_param("s", $acc_idFinal);
                        
                        $acc_idFinal = $acc_id;
                        
                        
                        $prepareIDStmt -> execute();
                        
                        $executedIDStmt = $prepareIDStmt->get_result();
                        
                        
                            if($executedIDStmt->num_rows > 0){
                                
                                foreach($executedIDStmt as $item){
                                    
                                    
                                    $acc_idArr = [
                                            $item["ACC_ID"]
                                        ];
                                    
                                    for ($i = 0; $i < count($acc_idArr); $i++)  {
                                    
                                    
                                    
                                        $innerGETArr['i'] = [      
                            
                                                        'acc_id' => $item["ACC_ID"],      //add name values and comment values to associative array  //POSSIBLY NO ENCODE THIS 
                                                        'username' => rawurldecode($item["USERNAME"]),
                                                        'password' => rawurldecode($item["PASSWORD"]),      
                                                        'email' => rawurldecode($item["EMAIL"]),                                                        
                                                        'char1' => rawurldecode($item["CHAR1"]),
                                                        'char2' => rawurldecode($item["CHAR2"]),
                                                        'char3' => rawurldecode($item["CHAR3"]),
                                                        'char4' => rawurldecode($item["CHAR4"]),
                                                        'char5' => rawurldecode($item["CHAR5"]),
                                                        'char6' => rawurldecode($item["CHAR6"]),
                                                        'char7' => rawurldecode($item["CHAR7"]),
                                                        'char8' => rawurldecode($item["CHAR8"]),
                                                        
                                                         ];
                            
                            
                                        array_push($outerGETArr, $innerGETArr['i']);        //add comments array containing values to comments_super
                                    
                                    }
                                    
                                    
                                        
                                        
                                }
                                
                                
                                header("HTTP/1.0 200 OK-Content retrieved", http_response_code(200)); 
                                header("Content-Type: application/json; charset=UTF-8");
                                
                                echo json_encode($outerGETArr, JSON_PRETTY_PRINT);
                                
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                                
                            } else {
                                
                                header("HTTP/1.0 204 No content; required data missing", http_response_code(204));
                                $prepareIDStmt->close();
                                $conn->close();
                                
                                
                            }
                        
                        
                        
                        
                        
                        
                }            
                
                
                
            }  
                
            
    
    }


    $api = new Conn();
    
    $api->HandleRequest();






?>