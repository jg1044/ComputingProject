window.onload=function(){
    
    //currently testing variables and all set to 0 real variables will be taken and set to whatever user inputs them as 
    //currently used purely for login and establishment tests 
    
    
    let characterName = "";
    
    let charTable = "";
    let charColumn = "";
    
    let char = "";
    
    //character names for link to character table 
    var char1 = "";
    var char2 = "";
    var char3 = "";
    var char4 = "";
    var char5 = "";
    var char6 = "";
    var char7 = "";
    var char8 = "";

    let username = "";
    let password = "";
    let acc_id = 0;

    //main
    var health = 10;
    var magicka = 10;
    var fatigue = 10;
    
    //sub-main
    var encumbrance = 10;
    
    //attributes 
    var strength = 10;
    var intelligence = 10;
    var willpower = 10;
    var agility = 10;
    var speed = 10;
    var endurance = 10;
    var personality = 0;
    var luck = 0;
    var magickaMultiplierBonus = 0.0;
    
    //skills
    //endurance 
    var heavyArmor = 10;
    var mediumArmor = 10;
    var spear = 10;
    //strength 
    var acrobatics = 10;
    var armorer =  10;
    var axe = 10;
    var bluntWeapon = 10;
    var longBlade = 10;
    //agility 
    var block = 10;
    var lightArmor = 10;
    var marksman = 10;
    var sneak = 10;
    //speed 
    var athletics = 10;
    var handToHand = 10;
    var shortBlade = 10;
    var unarmored = 10;
    //personality
    var illusion = 10;
    var mercantile = 10;
    var speechcraft = 10;
    //intelligence
    var alchemy = 10;
    var conjuration = 0;
    var enchant = 0;
    var xsecurity = 0;
    //willpower
    var alteration = 0;
    var destruction = 0;
    var mysticism = 0;
    var restoration = 0;
    
    //https://en.uesp.net/wiki/Morrowind:Races <-- return to if needed for information on resists  
    
    //variables for birthsign related calculations
    
    
    
    //gender boolean storage (0 = male, 1 = female)
    var gender = 0;
    var race = 1;
    
    //race value storage (1=argonian, 2=)
    
    //-----BIRTHSIGN CURRENTLY UNIMPLEMENTED BUT NEEDED FOR DB
    var birthsign = 0;
    
    
    //----RESISTS NOT CURRENTLY IMPLEMENTED BUT NEEDED FOR DB [MAY NOT EVEN NEED TO BE IMPLEMENTED AT ALL COULD POSSIBLY BE CALCULATED THROUGH SELECTIONS OF USER? ]
    
    var resistMagicka = 0;
    var resistFire = 0;
    var resistFrost = 0;
    var resistShock = 0;
    var resistPoison = 0;
    var resistCommonDisease = 0;
    

    //need to set the elements before submit event 
    

    var healthValue = (document.querySelector("#health").value = health);
    var magickaValue = (document.querySelector("#magicka").value = magicka);
    var fatigueValue = (document.querySelector("#fatigue").value = fatigue);
    var encumbranceValue = (document.querySelector("#encumbrance").value = encumbrance);
    var strengthValue = (document.querySelector("#strength").value = strength);
    var intelligenceValue = (document.querySelector("#intelligence").value = intelligence);
    var willpowerValue = (document.querySelector("#willpower").value = willpower);
    var agilityValue = (document.querySelector("#agility").value = agility);
    var speedValue = (document.querySelector("#speed").value = speed);
    var enduranceValue = (document.querySelector("#endurance").value = endurance);
    var personalityValue = (document.querySelector("#personality").value = personality);
    var luckValue = (document.querySelector("#luck").value = luck);
    var magickaMultiplierBonusValue = (document.querySelector("#magickaMultiplierBonus").value = magickaMultiplierBonus);
    var heavyArmorValue = (document.querySelector("#heavyArmor").value = heavyArmor);
    var mediumArmorValue = (document.querySelector("#mediumArmor").value = mediumArmor);
    var spearValue = (document.querySelector("#spear").value = spear);
    var acrobaticsValue = (document.querySelector("#acrobatics").value = acrobatics);
    var armorerValue = (document.querySelector("#armorer").value = armorer);
    var axeValue = (document.querySelector("#axe").value = axe);
    var bluntWeaponValue = (document.querySelector("#bluntWeapon").value = bluntWeapon);
    var longBladeValue = (document.querySelector("#longBlade").value = longBlade);
    var blockValue = (document.querySelector("#block").value = block);
    var lightArmorValue = (document.querySelector("#lightArmor").value = lightArmor);
    var marksmanValue = (document.querySelector("#marksman").value = marksman);
    var sneakValue = (document.querySelector("#sneak").value = sneak);
    var athleticsValue = (document.querySelector("#athletics").value = athletics);
    var handToHandValue = (document.querySelector("#handToHand").value = handToHand);
    var shortBladeValue = (document.querySelector("#shortBlade").value = shortBlade);
    var unarmoredValue = (document.querySelector("#unarmored").value = unarmored);
    var illusionValue = (document.querySelector("#illusion").value = illusion);
    var mercantileValue = (document.querySelector("#mercantile").value = mercantile);
    var speechcraftValue = (document.querySelector("#speechcraft").value = speechcraft);
    var alchemyValue = (document.querySelector("#alchemy").value = alchemy);
    var conjurationValue = (document.querySelector("#conjuration").value = conjuration);
    var enchantValue = (document.querySelector("#enchant").value = enchant);
    var securityValue = (document.querySelector("#security").value = xsecurity);
    var alterationValue = (document.querySelector("#alteration").value = alteration);
    var destructionValue = (document.querySelector("#destruction").value = destruction);
    var mysticismValue = (document.querySelector("#mysticism").value = mysticism);
    var restorationValue = (document.querySelector("#restoration").value = restoration);
    var genderValue = (document.querySelector("#gender").value = gender);
    var raceValue = (document.querySelector("#race").value = race);
    var birthsignValue = (document.querySelector("#birthsign").value = birthsign);
    var resistMagickaValue = (document.querySelector("#resistMagicka").value = resistMagicka);
    var resistFireValue = (document.querySelector("#resistFire").value = resistFire);
    var resistFrostValue = (document.querySelector("#resistFrost").value = resistFrost);
    var resistShockValue = (document.querySelector("#resistShock").value = resistShock);
    var resistPoisonValue = (document.querySelector("#resistPoison").value = resistPoison);
    var resistCommonDiseaseValue = (document.querySelector("#resistCommonDisease").value = resistCommonDisease);
    

    //inp4 = (inp4.value = "bat");      [how to change the value];
    
    
    document.querySelector("#submit").addEventListener("click", (event) => {
    
    event.preventDefault();
    
    var inp1 = document.querySelector("#username").value;       //these should be const
    var inp2 = document.querySelector("#password").value;
    var inp3 = document.querySelector("#email").value;
    
    

    
    var inpX = "&create=submit";
    
    console.log(inp1);
    console.log(inp2);
    console.log(inp3);

    //likely will change this to have no calc values except chars 
    
    var inpNext = new URLSearchParams({         //takes input and creates a query string assigned to var inpNext
    
        username: inp1,
        password: inp2,
        email: inp3,


    });  
    
    
    
    
   console.log(inpNext);
   console.log(inpNext.toString());
   
   var inpFinal = inpNext.toString();
   var data = inpFinal+inpX;
   console.log(data);
   
   var xml = new XMLHttpRequest();
   var url = "https://jg1044.brighton.domains/GridTest/user-create.php";
   
   xml.open("POST", url, true);
   xml.setRequestHeader("content-type", 
                                        "application/x-www-form-urlencoded");
   
   xml.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 201){
           console.log("success");
           console.log(xml.status);
       } else if ((this.readyState == 4 && this.status ==400)&&(inp1 === "" || inp2 === "" || inp3 === "")){            
           
           console.log("missing input value");
        
       } else if ((this.readyState == 4 && this.status ==422)&&(inp1 !== "" && inp2 !== "" && inp3 !== "")){
        
            console.log("username taken");
           
           
       } else if ((this.readyState == 4 && this.status ==409)&&(inp1 !== "" && inp2 !== "" && inp3 !== "")){
       
            console.log("email taken");
       
       
       } else if ((this.readyState == 4 && this.status ==400)&&(inp1 !== "" && inp2 !== "" && inp3 !== "")){
           
           console.log("email input incorrect");
           
       } else if (this.readyState == 4 && this.status == 500){
           
           console.log("Could not connect to database");
           
           
       }
           
       
   };
   
   xml.send(data);
   
});
   
//--------------   
   
      document.querySelector("#login").addEventListener("click", (event) => { 
   
       event.preventDefault();
    
    var usernameLogin = document.querySelector("#username-login").value;       //these should be const
    var passwordLogin = document.querySelector("#password-login").value;

    
    

    
    var submitLogin = "&login=Submit";
    
    console.log(usernameLogin);
    console.log(passwordLogin);



    
    var inpLogin = new URLSearchParams({         //takes input and creates a query string assigned to var inpNext
    
        usernameLogin: usernameLogin,
        passwordLogin: passwordLogin,

    });  
    
    
    
    
   console.log(inpLogin);
   console.log(inpLogin.toString());
   
   var inpFinalLogin = inpLogin.toString();
   var dataLogin = inpFinalLogin+submitLogin;
   console.log(dataLogin);
   
   var xmlLogin = new XMLHttpRequest();
   var urlLogin = "https://jg1044.brighton.domains/GridTest/user-create.php";
   
   xmlLogin.open("POST", urlLogin, true);
   xmlLogin.setRequestHeader("content-type", 
                                        "application/x-www-form-urlencoded");
   
   xmlLogin.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200){
           console.log("Login success");
           console.log(xmlLogin.status);
           
            var loginResponseData = JSON.parse(this.response);
            var loginResponse = JSON.parse(this.responseText);
            
            console.log(loginResponse);
            
            console.log(loginResponseData[0].char1);        //working response retrieval 
                
            acc_id = loginResponseData[0].acc_id;
            username = loginResponseData[0].username;
            password = loginResponseData[0].password;
            char1 = loginResponseData[0].char1;
            char2 = loginResponseData[0].char2;
            char3 = loginResponseData[0].char3;
            char4 = loginResponseData[0].char4;
            char5 = loginResponseData[0].char5;
            char6 = loginResponseData[0].char6;
            char7 = loginResponseData[0].char7;
            char8 = loginResponseData[0].char8;

        console.log(acc_id);            //this controls all future requests to server after being logged in 
        console.log(username);        
        console.log(password);
        console.log(char1);
        console.log(char2);
        console.log(char3);
        console.log(char4);
        console.log(char5);        
        console.log(char6);        
        console.log(char7);        
        console.log(char8);        
           
       } else if ((this.readyState == 4 && this.status ==400)&&(usernameLogin === "" || passwordLogin === "")){            
           
           console.log("missing input value");
        
       } else if ((this.readyState == 4 && this.status ==403)&&(usernameLogin !== "" && passwordLogin !== "")){
        
            console.log("password incorrect");
           
           
       } else if ((this.readyState == 4 && this.status ==204)&&(usernameLogin !== "" && passwordLogin !== "")){
       
            console.log("username not registered");
       
       } else if (this.readyState == 4 && this.status == 500){
           
           console.log("Could not connect to database");
           
           
       }
           
       
   };
   
   xmlLogin.send(dataLogin);
        
});


    
 //-----GET REQUEST FOR CHAR1 ---------------------------------------------------------------





document.querySelector("#char1Select").addEventListener("click", (event) => {
    
    
   event.preventDefault();
   
   charTable = "CHARACTER1";        //SETS TABLE VARIABLE FOR USE IN SAVE FUNCTION
   charColumn = "CHAR1";            //SETS COLUMN VARIABLE FOR USE IN SAVE FUNCTION 
   char = char1;

   
   //set value of hidden input to account id 
   let c1a = document.querySelector("#acc_id").value = acc_id;
   console.log(c1a);
   let c1b = document.querySelector("#char1GET").value = char1;
   console.log(c1b);
   
    console.log("success1");
   
    var xmlhttp = new XMLHttpRequest();
    var endpoint = "https://jg1044.brighton.domains/GridTest/user-handle.php?";

    var inp1 = acc_id;
    var inp2 = char1;
    
    console.log(inp1);
    console.log(inp2);
    var inpNext = new URLSearchParams({         //takes input and creates a query string assigned to var inpNext
        acc_id: inp1,
        char1GET: inp2
    });   
    
    console.log(inp1);
    
    var end = "&char1=Submit";
    var query = inpNext.toString();
    var url = endpoint+query+end;   
        
    console.log(url);     
        

    xmlhttp.open("GET", url, true);
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("success2");

        var responseDataGET = this.responseText;
        
        var responseDataGET = JSON.parse(this.response);
        var loginResponseGET = JSON.parse(this.responseText);
        
        characterName = responseDataGET[0].char1;   //sets character name of selection to global variable 
        console.log(characterName);
        
        //set variables here 
        
        
        
        char1 = responseDataGET[0].char1;
    
    health = responseDataGET[0].health;
    magicka = responseDataGET[0].magicka;
    fatigue = responseDataGET[0].fatigue;
    
    //sub-main
    encumbrance = responseDataGET[0]. encumbrance;
    
    //attributes 
    strength = 10;
    intelligence = 10;
    willpower = 10;
    agility = 10;
    speed = 10;
    endurance = 10;
    personality = 0;
    luck = 0;
    magickaMultiplierBonus = 0.0;
    
    //skills
    //endurance 
    var heavyArmor = 10;
    var mediumArmor = 10;
    var spear = 10;
    //strength 
    var acrobatics = 10;
    var armorer =  10;
    var axe = 10;
    var bluntWeapon = 10;
    var longBlade = 10;
    //agility 
    var block = 10;
    var lightArmor = 10;
    var marksman = 10;
    var sneak = 10;
    //speed 
    var athletics = 10;
    var handToHand = 10;
    var shortBlade = 10;
    var unarmored = 10;
    //personality
    var illusion = 10;
    var mercantile = 10;
    var speechcraft = 10;
    //intelligence
    var alchemy = 10;
    var conjuration = 0;
    var enchant = 0;
    var xsecurity = 0;
    //willpower
    var alteration = 0;
    var destruction = 0;
    var mysticism = 0;
    var restoration = 0;
    
    //https://en.uesp.net/wiki/Morrowind:Races <-- return to if needed for information on resists  
    
    //variables for birthsign related calculations
    
    
    
    //gender boolean storage (0 = male, 1 = female)
    var gender = 0;
    var race = 1;
    
    //race value storage (1=argonian, 2=)
    
    //-----BIRTHSIGN CURRENTLY UNIMPLEMENTED BUT NEEDED FOR DB
    var birthsign = 0;
    
    
    //----RESISTS NOT CURRENTLY IMPLEMENTED BUT NEEDED FOR DB [MAY NOT EVEN NEED TO BE IMPLEMENTED AT ALL COULD POSSIBLY BE CALCULATED THROUGH SELECTIONS OF USER? ]
    
    var resistMagicka = 0;
    var resistFire = 0;
    var resistFrost = 0;
    var resistShock = 0;
    var resistPoison = 0;
    var resistCommonDisease = 0;
    
    
    
    
    
    
    
    
    
    


    } else if (this.readyState==4 && this.status == 204)  {
        
        console.log("ERROR: VALUES NOT RETRIEVED");
        throw "error";
        
    } else if (this.readyState == 4 && this.status == 500){
           
           console.log("Could not connect to database");
           
           
       }
    
    
    
    };
    xmlhttp.send(); 
   
   
   
});

//-----GET REQUEST FOR CHAR2 ---------------------------------------------------------------





document.querySelector("#char2Select").addEventListener("click", (event) => {
    
    
   event.preventDefault();
   
   charTable = "CHARACTER2";
   charColumn = "CHAR2";
   char = char2;

   
   //set value of hidden input to account id 
   let c1a = document.querySelector("#acc_id").value = acc_id;
   console.log(c1a);
   let c1b = document.querySelector("#char2GET").value = char2;
   console.log(c1b);
   
    console.log("success2");
   
    var xmlhttp = new XMLHttpRequest();
    var endpoint = "https://jg1044.brighton.domains/GridTest/user-handle.php?";

    var inp1 = acc_id;
    var inp2 = char2;
    
    console.log(inp1);
    console.log(inp2);
    var inpNext = new URLSearchParams({         //takes input and creates a query string assigned to var inpNext
        acc_id: inp1,
        char2GET: inp2
    });   
    
    console.log(inp1);
    
    var end = "&char2=Submit";
    var query = inpNext.toString();
    var url = endpoint+query+end;   
        
    console.log(url);     
        

    xmlhttp.open("GET", url, true);
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("success2");

        var responseDataGET = this.responseText;
        
        var responseDataGET = JSON.parse(this.response);
        var loginResponseGET = JSON.parse(this.responseText);
        
        characterName = responseDataGET[0].char2;   //sets character name of selection to global variable 
        console.log(characterName);
    


    } else if (this.readyState==4 && this.status == 204)  {
        
        console.log("ERROR: VALUES NOT RETRIEVED");
        throw "error";
        
    } else if (this.readyState == 4 && this.status == 500){
           
           console.log("Could not connect to database");
           
           
       }
    
    
    
    };
    xmlhttp.send(); 
   
   
   
});

//-----GET REQUEST FOR CHAR3 ---------------------------------------------------------------





document.querySelector("#char3Select").addEventListener("click", (event) => {
    
    
   event.preventDefault();
   
   charTable = "CHARACTER3";   
   charColumn = "CHAR3";
    char = char3;
   
   //set value of hidden input to account id 
   let c1a = document.querySelector("#acc_id").value = acc_id;
   console.log(c1a);
   let c1b = document.querySelector("#char3GET").value = char1;
   console.log(c1b);
   
    console.log("success3");
   
    var xmlhttp = new XMLHttpRequest();
    var endpoint = "https://jg1044.brighton.domains/GridTest/user-handle.php?";

    var inp1 = acc_id;
    var inp2 = char3;
    
    console.log(inp1);
    console.log(inp2);
    var inpNext = new URLSearchParams({         //takes input and creates a query string assigned to var inpNext
        acc_id: inp1,
        char3GET: inp2
    });   
    
    console.log(inp1);
    
    var end = "&char3=Submit";
    var query = inpNext.toString();
    var url = endpoint+query+end;   
        
    console.log(url);     
        

    xmlhttp.open("GET", url, true);
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("success2");

        var responseDataGET = this.responseText;
        
        var responseDataGET = JSON.parse(this.response);
        var loginResponseGET = JSON.parse(this.responseText);
        
        characterName = responseDataGET[0].char3;   //sets character name of selection to global variable 
        console.log(characterName);
    


    } else if (this.readyState==4 && this.status == 204)  {
        
        console.log("ERROR: VALUES NOT RETRIEVED");
        throw "error";
        
    } else if (this.readyState == 4 && this.status == 500){
           
           console.log("Could not connect to database");
           
           
       }
    
    
    
    };
    xmlhttp.send(); 
   
   
   
});

//-----GET REQUEST FOR CHAR4 ---------------------------------------------------------------





document.querySelector("#char4Select").addEventListener("click", (event) => {
    
    
   event.preventDefault();
   
   charTable = "CHARACTER4";  
   charColumn = "CHAR4";
   char = char4;
   
   //set value of hidden input to account id 
   let c1a = document.querySelector("#acc_id").value = acc_id;
   console.log(c1a);
   let c1b = document.querySelector("#char4GET").value = char1;
   console.log(c1b);
   
    console.log("success4");
   
    var xmlhttp = new XMLHttpRequest();
    var endpoint = "https://jg1044.brighton.domains/GridTest/user-handle.php?";

    var inp1 = acc_id;
    var inp2 = char4;
    
    console.log(inp1);
    console.log(inp2);
    var inpNext = new URLSearchParams({         //takes input and creates a query string assigned to var inpNext
        acc_id: inp1,
        char4GET: inp2
    });   
    
    console.log(inp1);
    
    var end = "&char4=Submit";
    var query = inpNext.toString();
    var url = endpoint+query+end;   
        
    console.log(url);     
        

    xmlhttp.open("GET", url, true);
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("success4");

        var responseDataGET = this.responseText;
        
        var responseDataGET = JSON.parse(this.response);
        var loginResponseGET = JSON.parse(this.responseText);
        
        characterName = responseDataGET[0].char4;   //sets character name of selection to global variable 
        console.log(characterName);
    


    } else if (this.readyState==4 && this.status == 204)  {
        
        console.log("ERROR: VALUES NOT RETRIEVED");
        throw "error";
        
    } else if (this.readyState == 4 && this.status == 500){
           
           console.log("Could not connect to database");
           
           
       }
    
    
    
    };
    xmlhttp.send(); 
   
   
   
});

//-----GET REQUEST FOR CHAR5 ---------------------------------------------------------------





document.querySelector("#char5Select").addEventListener("click", (event) => {
    
    
   event.preventDefault();
   
   charTable = "CHARACTER5";   
   charColumn = "CHAR5";
   char = char5
   
   //set value of hidden input to account id 
   let c1a = document.querySelector("#acc_id").value = acc_id;
   console.log(c1a);
   let c1b = document.querySelector("#char5GET").value = char1;
   console.log(c1b);
   
    console.log("success5");
   
    var xmlhttp = new XMLHttpRequest();
    var endpoint = "https://jg1044.brighton.domains/GridTest/user-handle.php?";

    var inp1 = acc_id;
    var inp2 = char5;
    
    console.log(inp1);
    console.log(inp2);
    var inpNext = new URLSearchParams({         //takes input and creates a query string assigned to var inpNext
        acc_id: inp1,
        char5GET: inp2
    });   
    
    console.log(inp1);
    
    var end = "&char5=Submit";
    var query = inpNext.toString();
    var url = endpoint+query+end;   
        
    console.log(url);     
        

    xmlhttp.open("GET", url, true);
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("success5");

        var responseDataGET = this.responseText;
        
        var responseDataGET = JSON.parse(this.response);
        var loginResponseGET = JSON.parse(this.responseText);
        
        characterName = responseDataGET[0].char5;   //sets character name of selection to global variable 
        console.log(characterName);
    


    } else if (this.readyState==4 && this.status == 204)  {
        
        console.log("ERROR: VALUES NOT RETRIEVED");
        throw "error";
        
    } else if (this.readyState == 4 && this.status == 500){
           
           console.log("Could not connect to database");
           
           
       }
    
    
    
    };
    xmlhttp.send(); 
   
   
   
});

//-----GET REQUEST FOR CHAR6 ---------------------------------------------------------------





document.querySelector("#char6Select").addEventListener("click", (event) => {
    
    
   event.preventDefault();

   charTable = "CHARACTER6";
   charColumn = "CHAR6";
   char = char6;
   
   //set value of hidden input to account id 
   let c1a = document.querySelector("#acc_id").value = acc_id;
   console.log(c1a);
   let c1b = document.querySelector("#char6GET").value = char1;
   console.log(c1b);
   
    console.log("success6");
   
    var xmlhttp = new XMLHttpRequest();
    var endpoint = "https://jg1044.brighton.domains/GridTest/user-handle.php?";

    var inp1 = acc_id;
    var inp2 = char6;
    
    console.log(inp1);
    console.log(inp2);
    var inpNext = new URLSearchParams({         //takes input and creates a query string assigned to var inpNext
        acc_id: inp1,
        char6GET: inp2
    });   
    
    console.log(inp1);
    
    var end = "&char6=Submit";
    var query = inpNext.toString();
    var url = endpoint+query+end;   
        
    console.log(url);     
        

    xmlhttp.open("GET", url, true);
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("success2");

        var responseDataGET = this.responseText;
        
        var responseDataGET = JSON.parse(this.response);
        var loginResponseGET = JSON.parse(this.responseText);
        
        characterName = responseDataGET[0].char6;   //sets character name of selection to global variable 
        console.log(characterName);
    


    } else if (this.readyState==4 && this.status == 204)  {
        
        console.log("ERROR: VALUES NOT RETRIEVED");
        throw "error";
        
    } else if (this.readyState == 4 && this.status == 500){
           
           console.log("Could not connect to database");
           
           
       }
    
    
    
    };
    xmlhttp.send(); 
   
   
   
});

//-----GET REQUEST FOR CHAR7 ---------------------------------------------------------------





document.querySelector("#char7Select").addEventListener("click", (event) => {
    
    
   event.preventDefault();
   
   charTable = "CHARACTER7";
   charColumn = "CHAR7";
   char = char7;
   
   
   //set value of hidden input to account id 
   let c1a = document.querySelector("#acc_id").value = acc_id;
   console.log(c1a);
   let c1b = document.querySelector("#char7GET").value = char1;
   console.log(c1b);
   
    console.log("success7");
   
    var xmlhttp = new XMLHttpRequest();
    var endpoint = "https://jg1044.brighton.domains/GridTest/user-handle.php?";

    var inp1 = acc_id;
    var inp2 = char7;
    
    console.log(inp1);
    console.log(inp2);
    var inpNext = new URLSearchParams({         //takes input and creates a query string assigned to var inpNext
        acc_id: inp1,
        char7GET: inp2
    });   
    
    console.log(inp1);
    
    var end = "&char7=Submit";
    var query = inpNext.toString();
    var url = endpoint+query+end;   
        
    console.log(url);     
        

    xmlhttp.open("GET", url, true);
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("success7");

        var responseDataGET = this.responseText;
        
        var responseDataGET = JSON.parse(this.response);
        var loginResponseGET = JSON.parse(this.responseText);
        
        characterName = responseDataGET[0].char7;   //sets character name of selection to global variable 
        console.log(characterName);
    


    } else if (this.readyState==4 && this.status == 204)  {
        
        console.log("ERROR: VALUES NOT RETRIEVED");
        throw "error";
        
    } else if (this.readyState == 4 && this.status == 500){
           
           console.log("Could not connect to database");
           
           
       }
    
    
    
    };
    xmlhttp.send(); 
   
   
   
});

//-----GET REQUEST FOR CHAR8 ---------------------------------------------------------------





document.querySelector("#char8Select").addEventListener("click", (event) => {
    
    
   event.preventDefault();
   
   charTable = "CHARACTER8";
   charColumn = "CHAR8";
   char = char8;
   
   //set value of hidden input to account id 
   let c1a = document.querySelector("#acc_id").value = acc_id;
   console.log(c1a);
   let c1b = document.querySelector("#char8GET").value = char1;
   console.log(c1b);
   
    console.log("success8");
   
    var xmlhttp = new XMLHttpRequest();
    var endpoint = "https://jg1044.brighton.domains/GridTest/user-handle.php?";

    var inp1 = acc_id;
    var inp2 = char8;
    
    console.log(inp1);
    console.log(inp2);
    var inpNext = new URLSearchParams({         //takes input and creates a query string assigned to var inpNext
        acc_id: inp1,
        char8GET: inp2
    });   
    
    console.log(inp1);
    
    var end = "&char8=Submit";
    var query = inpNext.toString();
    var url = endpoint+query+end;   
        
    console.log(url);     
        

    xmlhttp.open("GET", url, true);
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("success8");

        var responseDataGET = this.responseText;
        
        var responseDataGET = JSON.parse(this.response);
        var loginResponseGET = JSON.parse(this.responseText);
        
        characterName = responseDataGET[0].char8;   //sets character name of selection to global variable 
        console.log(characterName);
    


    } else if (this.readyState==4 && this.status == 204)  {
        
        console.log("ERROR: VALUES NOT RETRIEVED");
        throw "error";
        
    } else if (this.readyState == 4 && this.status == 500){
           
           console.log("Could not connect to database");
           
           
       }
    
    
    
    };
    xmlhttp.send(); 
   
   
   
});



//--------------POST VALUES [SAVE FUNCTION]
   
      document.querySelector("#save").addEventListener("click", (event) => { 
   
       event.preventDefault();
    

    //POSSIBLY CANT BE UNIVERSAL AS CHARACTER NAME IS SET VIA CHAR1..2..3 ETC MEANING REGARDLESS EACH POST REQUEST NEEDS TO ACCOUNT FOR THAT SPECACIFITY  
    //this can be universal just nee to make this take from universal character name variable which is made when char selected 
   // let characterName = document.querySelector("#characterName").value = char1; 

       
    

    
    var submitSave = "&save=Submit";
    
        console.log(acc_idSave);
        console.log(agilityValue);
        
        console.log(healthValue);


    
    var inpSave = new URLSearchParams({         //takes input and creates a query string assigned to var inpNext
        
        charTable: charTable,
        charColumn: charColumn,
        acc_idSave: acc_id,
        char: char,
        health: healthValue,
        magicka: magickaValue,
        fatigue: fatigueValue,
        encumbrance: encumbranceValue,
        strength: strengthValue,
        intelligence: intelligenceValue,
        willpower: willpowerValue,
        agility: agilityValue,
        speed: speedValue,
        endurance: enduranceValue,
        personality: personalityValue,
        luck: luckValue,
        magickaMultiplierBonus: magickaMultiplierBonusValue,
        heavyArmor: heavyArmorValue,
        mediumArmor: mediumArmorValue,
        spear: spearValue,
        acrobatics: acrobaticsValue,
        armorer: armorerValue,
        axe: axeValue,
        bluntWeapon: bluntWeaponValue,
        longBlade: longBladeValue,
        block: blockValue,
        lightArmor: lightArmorValue,
        marksman: marksmanValue,
        sneak: sneakValue,
        athletics: athleticsValue,
        handToHand: handToHandValue,
        shortBlade: shortBladeValue,
        unarmored: unarmoredValue,
        illusion: illusionValue,
        mercantile: mercantileValue,
        speechcraft: speechcraftValue,
        alchemy: alchemyValue,
        conjuration: conjurationValue,
        enchant: enchantValue,
        security: securityValue,
        alteration: alterationValue,
        destruction: destructionValue,
        mysticism: mysticismValue,
        restoration: restorationValue,
        gender: genderValue,
        race: raceValue,
        birthsign: birthsignValue,
        resistMagicka: resistMagickaValue,
        resistFire: resistFireValue,
        resistFrost: resistFrostValue,
        resistShock: resistShockValue,
        resistPoison: resistPoisonValue, 
        resistCommonDisease: resistCommonDiseaseValue
    });  
    
    
    
    
   console.log(inpSave);
   console.log(inpSave.toString());
   
   var inpFinalSave = inpSave.toString();
   var dataSave = inpFinalSave+submitSave;
   console.log(dataSave);
   
   var xmlSave = new XMLHttpRequest();
   var urlSave = "https://jg1044.brighton.domains/GridTest/user-handle.php";
   
   xmlSave.open("POST", urlSave, true);
   xmlSave.setRequestHeader("content-type", 
                                        "application/x-www-form-urlencoded");
   
   xmlSave.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200){
           console.log("Login success");
           console.log(xmlSave.status);

       } else if (this.readyState == 4 && this.status == 500){
           
           console.log("Could not connect to database");
           
           
       }
   };
   
   xmlSave.send(dataSave);
        
});










};