
window.onload=function(){


    
let level = 0;

let lvl = document.querySelector("#f1");

lvl.addEventListener("input", AssignLevel);


function AssignLevel(){
    
    level = lvl.value;
    console.log(Number.isInteger(level));
    lvlUp(level);
}

//do those need to be global? can i have variables in the function? 

 

function lvlUp(lvl){             //place level in this 
    
    //console.log("h");
    //console.log(level);
    //console.log(nextLevel);
    
    var oldLevel;

     // var initLevel = 0;
     // var lastLevel = initLevel;
     // var nextLevel;
    
    
    console.log("PRE-IF");
    
    if(level == 1){
        
        initLevel = 0;
        lastLevel = initLevel;
        nextLevel = initLevel + 2;                  //initialise with init level + 1 
    
        console.log("base health function");
        
        console.log("level: " + level);
        console.log("nextLevel:  " + nextLevel);
        console.log("lastLevel: " + lastLevel);
        console.log("initLevel: " + initLevel);
        console.log("-------------------------");
    
    } else if(level == nextLevel){

        console.log("nextlevel");
        
        

        funcCall();
        initLevel = initLevel + 1;
        lastLevel = initLevel;
        nextLevel = nextLevel + 1;
        console.log("level: " + level);
        console.log("nextLevel:  " + nextLevel);
        console.log("lastLevel: " + lastLevel);
        console.log("initLevel: " + initLevel);
        console.log("-------------------------");

            
    } else if (level == lastLevel){
        

        initLevel = initLevel - 1;
        lastLevel = initLevel;
        
        nextLevel = nextLevel-1;
        
        console.log("level: " + level);
        console.log("nextLevel:  " + nextLevel);
        console.log("lastLevel: " + lastLevel); 
        console.log("initLevel: " + initLevel);
        console.log("-------------------------");
        
    }
    
}


function funcCall(){
    
    console.log("called lvl " + level);
   // console.log("initLevel: " + initLevel);
//    console.log("level: " + level);
 //   console.log("nextLevel:  " + nextLevel);
  //  console.log("lastLevel: " + lastLevel);
         console.log("-------------------------");
 
   
}







//console.log("initLevel: " + initLevel);
//console.log("level: " + level);
//console.log("nextLevel:  " + nextLevel);





//if(level !== initLevel && level === nextLevel){

//for class minor/major select array 



const choiceArray = [];






function Instance1(){
    
    let inp1 = "choice1";
    let inp2 = "choice2";
    
   
   choiceArray.push(inp1);
   choiceArray.push(inp2);
   
   
   Instance2();
 
 
   EmptyArray();
     
}




function Instance2(){
    
    
    var inp1Final;
    var inp2Final;
    
    console.log(choiceArray);
    
    for(var i = 0; i < choiceArray.length; i++){
        
        if(choiceArray[i] === "choice1"){
            
            console.log("choice 1 found");
            inp1Final = choiceArray[i];
            
            
        } else if (choiceArray[i] === "choice1.5"){
            
            console.log("choice 1.5 found");
            
        } else if (choiceArray[i] === "choice2"){
            
            console.log("choice 2 found");
            inp2Final = choiceArray[i];
            
        } else {
            
            console.log("none");
            
            
        }

        
    }
    
    console.log(inp1Final);
    console.log(inp2Final);
    
    
}



function EmptyArray(){
    
    while(choiceArray.length){
        
        choiceArray.pop();
        
        
    }
    
    console.log(choiceArray);
    
}

Instance1();

//Instance2();
    
        var oldVarTest1 = 0;
        var oldVarTest2 = 0;
        var oldVarTest3 = 0;
        var oldVarTest4 = 0;
        var oldVarTest5 = 0;
        var oldVarTest6 = 0;
        var oldVarTest7 = 0;
        var oldVarTest8 = 0;
        var oldVarTest9 = 0;
        var oldVarTest10 = 0;
        var oldVarTest11 = 0;
        var oldVarTest12 = 0;
        var oldVarTest13 = 0;
        var oldVarTest14 = 0;
        var oldVarTest15 = 0;
        var oldVarTest16 = 0;
        var oldVarTest17 = 0;
        var oldVarTest18 = 0;
        var oldVarTest19 = 0;
        var oldVarTest20 = 0;   
        var oldVarTest21 = 0;
        var oldVarTest22 = 0;
        var oldVarTest23 = 0;
        var oldVarTest24 = 0;
        var oldVarTest25 = 0;
        var oldVarTest26 = 0;
        var oldVarTest27 = 0;
        var oldVarTest28 = 0;
        var oldVarTest29 = 0;
        var oldVarTest30 = 0;        
        var oldVarTest31 = 0;
        var oldVarTest32 = 0;
        var oldVarTest33 = 0;
        var oldVarTest34 = 0;
        var oldVarTest35 = 0;
        var oldVarTest36 = 0;
        var oldVarTest37 = 0;
        var oldVarTest38 = 0;
        var oldVarTest39 = 0;
        var oldVarTest40 = 0;  
        var oldVarTest41 = 0;
        var oldVarTest42 = 0;
        var oldVarTest43 = 0;
        var oldVarTest44 = 0;
        var oldVarTest45 = 0;
        var oldVarTest46 = 0;
        var oldVarTest47 = 0;
        var oldVarTest48 = 0;
        var oldVarTest49 = 0;
        var oldVarTest50 = 0;        
        var oldVarTest51 = 0;
        var oldVarTest52 = 0;
        var oldVarTest53 = 0;
        var oldVarTest54 = 0;
        var oldVarTest55 = 0;
        var oldVarTest56 = 0;
        var oldVarTest57 = 0;
        var oldVarTest58 = 0;
        var oldVarTest59 = 0;
        var oldVarTest60 = 0;
        var oldVarTest61 = 0; 
        
        
        //var newVarTest1 = 0;
        //var newVarTest2 = 0;
        //var newVarTest3 = 0;    
        //var newVarTest4 = 0;
        //var newVarTest5 = 0;    
    
    
    
    
    let changeTestA1 = 0;
    let changeTestA2 = 0;
    let changeTestA3 = 0;
    let changeTestA4 = 0;
    let changeTestA5 = 0;
    
    let changeTestB1 = 0;
    let changeTestB2 = 0;
    let changeTestB3 = 0;
    let changeTestB4 = 0;
    let changeTestB5 = 0;
    
    let changeTestC1 = 0;
    let changeTestC2 = 0;
    let changeTestC3 = 0;
    let changeTestC4 = 0;
    let changeTestC5 = 0;  
    
//optimised array test 

    const optimiseArray = [];

    const oldLocalArr = [];
    let splicedArr = [];

    function getArr(){
        
        const localArr = [];    //array to store local results from optimised array  
        
        var arrayGetVar;

        clearToZero();

        
        console.log(optimiseArray);
        
        
        for(var i = 0; i < optimiseArray.length; i++){
            
            localArr.push(optimiseArray[i]);
          
        }       
                    
        
       while(optimiseArray.length){
           
            optimiseArray.shift(); 
           
       }
               
            
        
    
        console.log("localArr: " + localArr);
        console.log("localArrLength: " + localArr.length);
        console.log("optimiseArray: " + optimiseArray);
        console.log("optimiseArrayLength: " + optimiseArray.length);        
    
    //    if(localArr.length > 0){
    
    
    if(splicedArr.length > 0){
        
        for(var s = 0; s < splicedArr.length; s++){
            
            if(splicedArr[s] === "strength"){               //checks against values to see which are selected 
                
                console.log(oldVarTest1);
                changeTestA1 = changeTestA1+1;
                oldVarTest1 = ("strength: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "intelligence"){
                
                changeTestA2 = changeTestA2+1;
                oldVarTest2 = ("intelligence: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "willpower"){
                
                changeTestA3 = changeTestA3+1;
                oldVarTest3 = ("willpower: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "agility"){
                
                changeTestA4 = changeTestA4+1;
                oldVarTest4 = ("agility: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "speed"){
                
                changeTestA5 = changeTestA5+1;
                oldVarTest5 = ("speed: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "endurance"){
                
                changeTestB1 = changeTestB1+1;
                oldVarTest6 = ("endurance: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "personality"){

                changeTestB2 = changeTestB2+1;
                oldVarTest7 = ("personality: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "heavy-armor"){
                
                changeTestB3 = changeTestB3+1;
                oldVarTest8 = ("heavy-armor: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "medium-armor"){
                
                changeTestB4 = changeTestB4+1;
                oldVarTest9 = ("medium-armor: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "spear"){
                
                changeTestB5 = changeTestB5+1;
                oldVarTest10 = ("spear " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "acrobatics"){
                
                changeTestC1 = changeTestC1+1;
                oldVarTest11 = ("acrobatics: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "armorer"){
                
                changeTestC2 = changeTestC2+1;
                oldVarTest12 = ("armorer: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "axe"){
                
                changeTestC3 = changeTestC3+1;
                oldVarTest13 = ("axe: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "blunt-weapon"){
                
                changeTestC4 = changeTestC4+1;
                oldVarTest14 = ("blunt-weapon: " + oldLocalArr[s]);
                
                
            } else if (splicedArr[s] === "long-blade"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest15 = ("long-blade: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "block"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest16 = ("block: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "light-armor"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest17 = ("light-armor: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "marksman"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest18 = ("marksman: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "sneak"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest19 = ("sneak: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "athletics"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest20 = ("athletics: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "hand-to-hand"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest21 = ("hand-to-hand: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "short-blade"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest22 = ("short-blade: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "unarmored"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest23 = ("unarmored: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "illusion"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest24 = ("illusion: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "mercantile"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest25 = ("mercantile: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "speechcraft"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest26 = ("speechcraft: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "alchemy"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest27 = ("alchemy: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "conjuration"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest28 = ("conjuration: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "enchant"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest29 = ("enchant: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "security"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest30 = ("security: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "alteration"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest31 = ("alteration: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "destruction"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest32 = ("destruction: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "mysticism"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest33 = ("mysticism: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "restoration"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest34 = ("restoration: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "heavy-armorSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest35 = ("heavy-armorS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "medium-armorSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest36 = ("medium-armorS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "spearSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest37 = ("spearS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "acrobaticsSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest38 = ("acrobaticsS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "armorerSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest39 = ("armorerS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "axeSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest40 = ("axeS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "blunt-weaponSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest41 = ("blunt-weaponS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "long-bladeSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest42 = ("long-bladeS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "blockSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest43 = ("blockS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "light-armorSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest44 = ("lightArmorS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "marksmanSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest45 = ("marksmanS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "sneakSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest46 = ("sneakS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "athleticsSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest47 = ("athleticsS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "hand-to-handSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest48 = ("hand-to-handS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "short-bladeSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest49 = ("short-bladeS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "unarmoredSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest50 = ("unarmoredS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "illusionSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest51 = ("illusionS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "mercantileSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest52 = ("mercantileS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "speechcraftSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest53 = ("speechcraftS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "alchemySpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest54 = ("alcehmyS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "conjurationSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest55 = ("conjurationS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "enchantSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest56 = ("enchantS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "securitySpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest57 = ("securityS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "alterationSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest58 = ("alterationS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "destructionSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest59 = ("destructionS: " + oldLocalArr[s]);
        
            } else if (splicedArr[s] === "mysticismSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest60 = ("mystyicismS: " + oldLocalArr[s]);
                
            } else if (splicedArr[s] === "restorationSpeciality"){
                
                changeTestC5 = changeTestC5+1;
                oldVarTest61 = ("restorationS: " + oldLocalArr[s]);
                
            }
            
            
            
            
        }       //end of for loop (spliced)
 
    }//end of splice check if 
    
    
    
    
            
        
        for(var n = 0; n < localArr.length; n++){
            
          
            
                console.log("here");
                
                if(localArr[n] === "strength"){
                    
                    //newVarTest1 = 1;
                    console.log("strength");
                    
                    //FOR SETTING OLD VAR 
                     oldLocalArr.push(10);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "intelligence"){
                    
                    //newVarTest2 = 2;
                    console.log("intelligence");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(10);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "willpower"){
                    
                    //newVarTest3 = 3;
                    console.log("willpower");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(10);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "agility"){
                    
                    //newVarTest4 = 4;
                    console.log("agility");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(10);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "speed"){
                    
                    //newVarTest5 = 5;
                    console.log("speed");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(10);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "endurance"){
                    
                    //newVarTest1 = 6;
                    console.log("endurance");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(10);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "personality"){
                    
                    //newVarTest2 = 7;
                    console.log("personality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(10);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "heavy-armor"){
                    
                    console.log("heavy-armor");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
    
                    
                } else if (localArr[n] === "medium-armor"){
                    
                    console.log("medium-armor");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "spear"){

                    console.log("spear");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "acrobatics"){

                    console.log("acrobatics");
                    
                    if(localArr[n] <= localArr[6]){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "armorer"){

                    console.log("armorer");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "axe"){

                    console.log("axe");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "blunt-weapon"){

                    console.log("blunt-weapon");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "long-blade"){

                    console.log("long-blade");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "block"){

                    console.log("block");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "light-armor"){
                    
                    console.log("light-armor");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "marksman"){
                    
                    console.log("marksman");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "sneak"){
                    

                    console.log("sneak");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                }  else if (localArr[n] === "athletics"){

                    console.log("athletics");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "hand-to-hand"){

                    console.log("hand-to-hand");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                }  else if (localArr[n] === "short-blade"){

                    console.log("short-blade");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "unarmored"){

                    console.log("unarmored");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                }  else if (localArr[n] === "illusion"){
                    

                    console.log("illusion");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "mercantile"){

                    console.log("mercantile");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                }  else if (localArr[n] === "speechcraft"){

                    console.log("speechcraft");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "alchemy"){

                    console.log("alchemy");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                }  else if (localArr[n] === "conjuration"){
                    
                    console.log("conjuration");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "enchant"){

                    console.log("enchant");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                }  else if (localArr[n] === "security"){

                    console.log("security");
                    
                    if(n <= 6){
                        
                       oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "alteration"){
                    
                    console.log("alteration");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                }  else if (localArr[n] === "destruction"){

                    console.log("destruction");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "mysticism"){

                    console.log("mysticism");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                }  else if (localArr[n] === "restoration"){

                    console.log("restoration");
                    
                    if(n <= 6){
                        
                        oldLocalArr.push(30);    //oldLocalArr.push(30);
                        
                    } else {
                        
                        oldLocalArr.push(15);    //oldLocalArr.push(15);
                        
                    }
                    
                } else if (localArr[n] === "heavy-armorSpeciality"){
                    
                    //newVarTest3 = 8;
                    console.log("heavy-armorSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "medium-armorSpeciality"){
                    
                    //newVarTest4 = 9;
                    console.log("medium-armorSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "spearSpeciality"){
                    
                    //newVarTest5 = 10;
                    console.log("spearSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "acrobaticsSpeciality"){
                    
                    //newVarTest1 = 11;
                    console.log("acrobaticsSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "armorerSpeciality"){
                    
                    //newVarTest2 = 12;
                    console.log("armorerSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "axeSpeciality"){
                    
                    //newVarTest3 = 13;
                    console.log("axeSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "blunt-weaponSpeciality"){
                    
                    //newVarTest4 = 14;
                    console.log("blunt-weaponSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "long-bladeSpeciality"){
                    
                    //newVarTest5 = 15;
                    console.log("long-bladeSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                } else if (localArr[n] === "blockSpeciality"){
                    
                    //newVarTest4 = 14;
                    console.log("blockSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "light-armorSpeciality"){
                    
                    //newVarTest5 = 15;
                    console.log("light-armorSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                } else if (localArr[n] === "marksmanSpeciality"){
                    
                    //newVarTest4 = 14;
                    console.log("marksmanSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "sneakSpeciality"){
                    
                    //newVarTest5 = 15;
                    console.log("sneakSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                }  else if (localArr[n] === "athleticsSpeciality"){
                    
                    //newVarTest4 = 14;
                    console.log("athleticsSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "hand-to-handSpeciality"){
                    
                    //newVarTest5 = 15;
                    console.log("hand-to-handSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                }  else if (localArr[n] === "short-bladeSpeciality"){
                    
                    //newVarTest4 = 14;
                    console.log("short-bladeSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "unarmoredSpeciality"){
                    
                    //newVarTest5 = 15;
                    console.log("unarmoredSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                }  else if (localArr[n] === "illusionSpeciality"){
                    
                    //newVarTest4 = 14;
                    console.log("illusionSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "mercantileSpeciality"){
                    
                    //newVarTest5 = 15;
                    console.log("mercantileSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                }  else if (localArr[n] === "speechcraftSpeciality"){
                    
                    //newVarTest4 = 14;
                    console.log("speechcraftSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "alchemySpeciality"){
                    
                    //newVarTest5 = 15;
                    console.log("alchemySpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                }  else if (localArr[n] === "conjurationSpeciality"){
                    
                    //newVarTest4 = 14;
                    console.log("conjurationSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "enchantSpeciality"){
                    
                    //newVarTest5 = 15;
                    console.log("enchantSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                }  else if (localArr[n] === "securitySpeciality"){
                    
                    //newVarTest4 = 14;
                    console.log("securitySpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "alterationSpeciality"){
                    
                    //newVarTest5 = 15;
                    console.log("alterationSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                }  else if (localArr[n] === "destructionSpeciality"){
                    
                    //newVarTest4 = 14;
                    console.log("destructionSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                } else if (localArr[n] === "mysticismSpeciality"){
                    
                    //newVarTest5 = 15;
                    console.log("mysticismSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                }  else if (localArr[n] === "restorationSpeciality"){
                    
                    //newVarTest4 = 5;
                    console.log("restorationSpeciality");
                    
                    //FOR SETTING OLD VAR 
                    oldLocalArr.push(5);        //number represents the final value used which will be inputted 
                    
                }     
            
                
            } 
                
        console.log(oldLocalArr);
                    
        //var preSpliceLocalArr = [];
        //preSpliceLocalArr = localArr;
       
       //var splicedArr = []; was here 
        
        
        console.log("local pre splice: " + localArr);
        
        splicedArr = localArr.splice(0, 21);                    //sets spliced array as local array values to iterate through 
        console.log(splicedArr);        
        console.log("local post splice: " + localArr);   
        
        console.log("old local arr: " + oldLocalArr);
        
        while(localArr.length){
            
            localArr.shift();           //clears local array 
            
        }
        
        //splice down here and use for statement at top if spliced length greater than 0
                

        
        console.log("*********************");
        console.log("local: " + localArr);
        console.log("old local: " + oldLocalArr);
        console.log("spliced: " + splicedArr);
        
        if(oldLocalArr.length > 21){        //removes unneeded oldLocal values 
            
            oldLocalArr.splice(0, 21);
            
        }
            
        //
        if(splicedArr.length > 21){
            
            splicedArr.splice(0, 21);
            
        }
        
    
                    
        console.log("----------------");
        console.log("local: " + localArr);
        console.log("old local: " + oldLocalArr);
        console.log("old local: " + oldLocalArr.legnth);
        console.log("spliced: " + splicedArr)
        console.log("spliced length: " + splicedArr.length);
                    
                  
                
                
            
        
        //localArr.shift();
        //oldLocalArr.shift();
 //       console.log(newVarTest1);
 //       console.log(newVarTest2);
 //       console.log(newVarTest3);
 //       console.log(newVarTest4);
 //       console.log(newVarTest5);
        
        console.log(oldVarTest1);
        console.log(oldVarTest2);
        console.log(oldVarTest3);    
        console.log(oldVarTest4);
        console.log(oldVarTest5);  
        console.log(oldVarTest6);
        console.log(oldVarTest7);
        console.log(oldVarTest8);    
        console.log(oldVarTest9);
        console.log(oldVarTest10);
        console.log(oldVarTest11);
        console.log(oldVarTest12);
        console.log(oldVarTest13);    
        console.log(oldVarTest14);
        console.log(oldVarTest15);  
        console.log(oldVarTest16);
        console.log(oldVarTest17);
        console.log(oldVarTest18);    
        console.log(oldVarTest19);
        console.log(oldVarTest20);        
        console.log(oldVarTest21);
        console.log(oldVarTest22);
        console.log(oldVarTest23);    
        console.log(oldVarTest24);
        console.log(oldVarTest25);  
        console.log(oldVarTest26);
        console.log(oldVarTest27);
        console.log(oldVarTest28);    
        console.log(oldVarTest29);
        console.log(oldVarTest30);  
        console.log(oldVarTest31);
        console.log(oldVarTest32);
        console.log(oldVarTest33);    
        console.log(oldVarTest34);
        console.log(oldVarTest35);  
        console.log(oldVarTest36);
        console.log(oldVarTest37);
        console.log(oldVarTest38);    
        console.log(oldVarTest39);
        console.log(oldVarTest40);        
        console.log(oldVarTest41);
        console.log(oldVarTest42);
        console.log(oldVarTest43);    
        console.log(oldVarTest44);
        console.log(oldVarTest45);  
        console.log(oldVarTest46);
        console.log(oldVarTest47);
        console.log(oldVarTest48);    
        console.log(oldVarTest49);
        console.log(oldVarTest50);
        console.log(oldVarTest51);
        console.log(oldVarTest52);
        console.log(oldVarTest53);    
        console.log(oldVarTest54);
        console.log(oldVarTest55);  
        console.log(oldVarTest56);
        console.log(oldVarTest57);
        console.log(oldVarTest58);    
        console.log(oldVarTest59);
        console.log(oldVarTest60);   
        console.log(oldVarTest61);
        
        
        
        //console.log("change test A--------")
        //console.log(changeTestA1);
        //console.log(changeTestA2);
        //console.log(changeTestA3);    
        //console.log(changeTestA4);
        //console.log(changeTestA5);        
        //console.log("change test B--------")
        //console.log(changeTestB1);
        //console.log(changeTestB2);
        //console.log(changeTestB3);    
        //console.log(changeTestB4);
        //console.log(changeTestB5);
        //console.log("change test C--------")        
        //console.log(changeTestC1);
        //console.log(changeTestC2);
        //console.log(changeTestC3);    
        //console.log(changeTestC4);
        //console.log(changeTestC5); 
        
         
    }


    var push = 0;

    const inp2 = document.querySelector("#f2");
    
    inp2.addEventListener("click", function(e){
        
        e.preventDefault();
        
        console.log(1);
            
            
            if(push === 0){
                
                optimiseArray.push("agility");
                optimiseArray.push("endurance");
                
                optimiseArray.push("acrobatics");
                optimiseArray.push("athletics");
                optimiseArray.push("marksman");
                optimiseArray.push("sneak");
                optimiseArray.push("unarmored");
                optimiseArray.push("speechcraft");
                optimiseArray.push("alteration");
                optimiseArray.push("spear");
                optimiseArray.push("hand-to-hand");
                optimiseArray.push("light-armor");
                
                optimiseArray.push("speechcraftSpeciality");
                optimiseArray.push("mercantileSpeciality");
                optimiseArray.push("hand-to-handSpeciality");
                optimiseArray.push("short-bladeSpeciality");
                optimiseArray.push("marksmanSpeciality");
                optimiseArray.push("light-armorSpeciality");
                optimiseArray.push("sneakSpeciality");
                optimiseArray.push("securitySpeciality");
                optimiseArray.push("acrobaticsSpeciality");

                
                getArr();
                
                push = push + 1;
                
                console.log("push1");
                
                
            } else if (push ===1){
                
                optimiseArray.push("personality");
                optimiseArray.push("agility");
                
                optimiseArray.push("speechcraft");
                optimiseArray.push("sneak");
                optimiseArray.push("acrobatics");
                optimiseArray.push("light-armor");
                optimiseArray.push("short-blade");
                optimiseArray.push("mercantile");
                optimiseArray.push("conjuration");
                optimiseArray.push("block");
                optimiseArray.push("unarmored");
                optimiseArray.push("illusion");
                
                optimiseArray.push("speechcraftSpeciality");
                optimiseArray.push("mercantileSpeciality");
                optimiseArray.push("hand-to-handSpeciality");
                optimiseArray.push("short-bladeSpeciality");
                optimiseArray.push("marksmanSpeciality");
                optimiseArray.push("light-armorSpeciality");
                optimiseArray.push("sneakSpeciality");
                optimiseArray.push("securitySpeciality");
                optimiseArray.push("acrobaticsSpeciality");
                
                getArr();
                
                push = push + 1;
                
                console.log("push2");
                    
            } else if (push === 2){
                
                optimiseArray.push("agility");
                optimiseArray.push("strength");
                
                optimiseArray.push("marksman");
                optimiseArray.push("long-blade");
                optimiseArray.push("block");
                optimiseArray.push("athletics");
                optimiseArray.push("light-armor");
                optimiseArray.push("unarmored");
                optimiseArray.push("spear");
                optimiseArray.push("restoration");
                optimiseArray.push("sneak");
                optimiseArray.push("medium-armor");
                
                optimiseArray.push("long-bladeSpeciality");
                optimiseArray.push("blunt-weaponSpeciality");
                optimiseArray.push("axeSpeciality");
                optimiseArray.push("armorerSpeciality");
                optimiseArray.push("medium-armorSpeciality");
                optimiseArray.push("heavy-armorSpeciality");
                optimiseArray.push("spearSpeciality");
                optimiseArray.push("blockSpeciality");
                optimiseArray.push("athleticsSpeciality");
                
                getArr();
                
                push = push + 1;
                
                console.log("push3");
                
            } else if (push === 3){
                
                optimiseArray.push("strength");
                optimiseArray.push("intelligence");
                
                optimiseArray.push("willpower");
                optimiseArray.push("agility");
                optimiseArray.push("speed");
                optimiseArray.push("endurance");
                optimiseArray.push("personality");
                optimiseArray.push("heavy-armor");
                optimiseArray.push("medium-armor");
                optimiseArray.push("spear");
                optimiseArray.push("acrobatics");
                optimiseArray.push("armorer");
                
                optimiseArray.push("axe");
                optimiseArray.push("blunt-weapon");
                optimiseArray.push("long-blade");
                optimiseArray.push("block");
                optimiseArray.push("light-armor");
                optimiseArray.push("marksman");
                optimiseArray.push("sneak");
                optimiseArray.push("athletics");
                optimiseArray.push("hand-to-hand");
                
                getArr();
                
                push = push + 1;
                
                console.log("1 test");                
                
                
                
                
            }  else if (push === 4){
                
                optimiseArray.push("short-blade");
                optimiseArray.push("unarmored");
                
                optimiseArray.push("illusion");
                optimiseArray.push("mercantile");
                optimiseArray.push("speechcraft");
                optimiseArray.push("alchemy");
                optimiseArray.push("conjuration");
                optimiseArray.push("enchant");
                optimiseArray.push("security");
                optimiseArray.push("alteration");
                optimiseArray.push("destruction");
                optimiseArray.push("mysticism");
                
                optimiseArray.push("restoration");
                optimiseArray.push("heavy-armorSpeciality");
                optimiseArray.push("medium-armorSpeciality");
                optimiseArray.push("spearSpeciality");
                optimiseArray.push("acrobaticsSpeciality");
                optimiseArray.push("armorerSpeciality");
                optimiseArray.push("axeSpeciality");
                optimiseArray.push("blunt-weaponSpeciality");
                optimiseArray.push("long-bladeSpeciality");
                
                getArr();
                
                push = push + 1;
                
                console.log("2 test");                
                
                
                
                
            }  else if (push === 5){
                
                optimiseArray.push("blockSpeciality");
                optimiseArray.push("light-armorSpeciality");
                
                optimiseArray.push("marksmanSpeciality");
                optimiseArray.push("sneakSpeciality");
                optimiseArray.push("athleticsSpeciality");
                optimiseArray.push("hand-to-handSpeciality");
                optimiseArray.push("short-bladeSpeciality");
                optimiseArray.push("unarmoredSpeciality");
                optimiseArray.push("illusionSpeciality");
                optimiseArray.push("mercantileSpeciality");
                optimiseArray.push("speechcraftSpeciality");
                optimiseArray.push("alchemySpeciality");
                
                optimiseArray.push("conjurationSpeciality");
                optimiseArray.push("enchantSpeciality");
                optimiseArray.push("securitySpeciality");
                optimiseArray.push("alterationSpeciality");
                optimiseArray.push("destructionSpeciality");
                optimiseArray.push("mysticismSpeciality");
                optimiseArray.push("restorationSpeciality");
                optimiseArray.push("strength");
                optimiseArray.push("personality");
                
                getArr();
                
                push = 0;
                
                console.log("3 test");                
                
                
                
                
            }
    
        
    });


     




let tempArr = [1,2,3,4,5];
console.log(tempArr);
tempArr.shift();
console.log(tempArr.indexOf(2));
console.log(tempArr);




function clearToZero(){
    
    oldVarTest1 = 0;
    oldVarTest2 = 0;
    oldVarTest3 = 0;
    oldVarTest4 = 0;
    oldVarTest5 = 0;
    oldVarTest6 = 0;
    oldVarTest7 = 0;
    oldVarTest8 = 0;
    oldVarTest9 = 0;
    oldVarTest10 = 0;
    oldVarTest11 = 0;
    oldVarTest12 = 0;
    oldVarTest13 = 0;
    oldVarTest14 = 0;
    oldVarTest15 = 0;
    oldVarTest16 = 0;
    oldVarTest17 = 0;
    oldVarTest18 = 0;
    oldVarTest19 = 0;
    oldVarTest20 = 0;   
    oldVarTest21 = 0;
    oldVarTest22 = 0;
    oldVarTest23 = 0;
    oldVarTest24 = 0;
    oldVarTest25 = 0;
    oldVarTest26 = 0;
    oldVarTest27 = 0;
    oldVarTest28 = 0;
    oldVarTest29 = 0;
    oldVarTest30 = 0;
    oldVarTest31 = 0;
    oldVarTest32 = 0;
    oldVarTest33 = 0;
    oldVarTest34 = 0;
    oldVarTest35 = 0;
    oldVarTest36 = 0;
    oldVarTest37 = 0;
    oldVarTest38 = 0;
    oldVarTest39 = 0;
    oldVarTest40 = 0;
    oldVarTest41 = 0;
    oldVarTest42 = 0;
    oldVarTest43 = 0;
    oldVarTest44 = 0;
    oldVarTest45 = 0;
    oldVarTest46 = 0;
    oldVarTest47 = 0;
    oldVarTest48 = 0;
    oldVarTest49 = 0;
    oldVarTest50 = 0;
    oldVarTest51 = 0;
    oldVarTest52 = 0;
    oldVarTest53 = 0;
    oldVarTest54 = 0;
    oldVarTest55 = 0;
    oldVarTest56 = 0;
    oldVarTest57 = 0;
    oldVarTest58 = 0;
    oldVarTest59 = 0;
    oldVarTest60 = 0;   
    oldVarTest61 = 0;
    
}

//--observer testing ------------------------

    var classFinal =  0;
    
    var sub1 = 10;
    var sub2 = 15;



            function Subject()
            {
              this.observers = [] // array of observer functions
            }
            
            Subject.prototype = {
              subscribe: function(fn)
              {
                this.observers.push(fn)
              },
              unsubscribe: function(fnToRemove)
              {
                this.observers = this.observers.filter( fn => {
                  if(fn != fnToRemove)
                    return fn
                })
              },
              fire: function()
              {
                this.observers.forEach( fn => {
                  fn.call()
                })
              }
            }
            
            const subject = new Subject()
            
            
            
            function Observer1()
            {
              console.log("Observer 1 Firing!")
              classFinal += sub1;
            }
            
            
            
            function Observer2()
            {
              console.log("Observer 2 Firing!")
              classFinal += sub2;
            }
            
            
            
            
            subject.subscribe(Observer1)
            subject.subscribe(Observer2)
            //subject.fire() 
            
            
            
            //subject.unsubscribe(Observer1)
            //subject.fire()
            
    
    function FireTesting(){
        
        classFinal = 0;
        
        subject.fire();
        
        
    }
    
    
    
    const obsTest = document.querySelector("#f3");
    
    obsTest.addEventListener("click", function(o){
        
        o.preventDefault();
        
        FireTesting();
        
        
        console.log(classFinal);
        
    });
            
            
            
            
                    
            


};