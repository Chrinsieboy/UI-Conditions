function renderTime(){
 


    // Date
    var mydate = new Date();
    
   var year = mydate.getYear();
    
    if(year < 1000){
      year += 1900
     }
    var day = mydate.getDay();
    var month = mydate.getMonth();

    if(month > 0) {
      month += 1
    }
    var daym = mydate.getDate();
    var dayarray = new Array("Zo","Ma","Di","Woe","Do", "Vr", "Za");
    
   var montharray = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
    
   
   
   
    // Time
    
   var currentTime = new Date();
    var h = currentTime.getHours();
    var m = currentTime.getMinutes();
    var s = currentTime.getSeconds();
    
   var ampm = currentTime.getHours() < 12 ? "AM" : "PM";
     
   if(h == 12){
     
    h = 0;    
    }
     
    
    if(h < 10){
     
    h = "0" + h;
    
    }
    
    if(m < 10){
     
    m = "0" + m;
    
    }
    
    if(s < 10){
     
    s = "0" + s;
    
    }
     
     
   var myClock = document.getElementById("clockDisplay");
   var myTimeclock = document.getElementById("datetime")
   myClock.innerHTML = dayarray[day] + "  " + "  " +daym+ "-" +month+ "-" +year;
   myTimeclock.innerHTML =  h+ ":" +m+ ":" +s;
  
     setTimeout("renderTime()", 1000);
   
   }
   
   renderTime();