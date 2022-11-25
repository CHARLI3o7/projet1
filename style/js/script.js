/*let date = new Date();
console.log(date);*/
// let d = document.getElementById('date_time').innerHTML=date; 



/*let jourActuel = date.getDate() + '/' + (date.getMonth() + 1)  + '/' + date.getFullYear();
let dateJour = document.getElementById('date_time').innerHTML = jourActuel; 

var span = document.getElementById('span');*/

function time() {
    let date = new Date();
    var s = date.getSeconds();
    var m = date.getMinutes();
    var h = date.getHours();
    span.textContent = ("0" + h).substr(-2) + ':' + ("0" +m).substr(-2) + ':' + ("0" + s).substr(-2);
}
setInterval(time, 1000);



var int2 =new Intl.DateTimeFormat("fr-FR", { 
    weekday: "long", 
    year:"numeric", 
    month:"long", 
    weekday:"long", 
    day:"numeric", 
    }
    );
var dt=new Date();
let dte = document.getElementById('date_time').innerHTML = int2.format(dt);