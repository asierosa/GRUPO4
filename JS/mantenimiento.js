"use strict"    
window.onload = function() {
   };

function calculate() {
    
    //Inicializamos las variables
    var Years = document.getElementById("years").value;
    var Months = document.getElementById("months").value; 
    //Damos valor 0 si los campos años y meses no han sido rellenados
    //if( Years==""){
    //     Years="0";      
    //} 
    //if( Months="" ) {
    //    Months="0";
    //}
    Years = parseFloat(Years);
    Months = parseFloat(Months);
    var costS = 0;
    var costDC = 0;
    var costDB = 0;
    if( document.getElementById('server').checked==true ){
        if (Years == 0) { 
        costS = 150 * Months;
        }
        else{
        costS = (1500 * Years) + (150 * Months);
        alert(costS);
        }
    }
    if(document.getElementById('DC').checked==true) {
        if (Years = 0){
        costDC = 75 * Months;
        }
        else{
        costDC = (750 * Years) + (75 * Months);    
        }
    }
    if(document.getElementById('DB').checked==true) {
       if (Years = 0){
        costDB = 100 * Months;
        }
        else{
        costDB = (1000 * Years) + (100 * Months);    
        }
    }
    var cost = costDB + costDC + costS;
    document.getElementById("price").value = cost;

}