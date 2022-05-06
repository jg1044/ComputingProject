window.onload=function(){
    
    
    
    console.log("True");
    
    var editSelector = document.querySelector("#user-edit-txt");
    
    editSelector.addEventListener("click", activate);
    
    editSelector.value = "OFF";
    
    function activate(){
        
        if(editSelector.value==="OFF"){
        
            editSelector.value="ON";
            
            var charOn = [];
            
            for(i = 1; i <= 8; i++){
        
            charOn[i] = document.querySelector("#char"+i);
        
        
             charOn[i].addEventListener("mouseover", hoverTrue);
             charOn[i].addEventListener("mouseout", hoverFalse);
            
            }
    
        } else if (editSelector.value==="ON"){
            
            editSelector.value="OFF";
            
            var charOff = [];
            
            for(i = 1; i <= 8; i++){
            
            charOff[i] = document.querySelector("#char"+i);
            
            charOff[i].removeEventListener("mouseover", hoverTrue);
            charOff[i].removeEventListener("mouseout", hoverFalse);

            }
            
            console.log("value set to OFF");
            
            
        }

    
        
    }
    
    function hoverTrue(){
        
        console.log("mouseover true");
        
            this.style.backgroundColor = "#F5F5F5";
        }
    
    function hoverFalse(){
        
        console.log("mouseout true");
                this.style.backgroundColor = "white";
    }
    
    
    const sub = document.querySelector("#test-submit");

    sub.addEventListener("click", click);
    
    function click(e){
        
        e.preventDefault();
        
        console.log("submit test confirm");        
        
    }
    
    
};
