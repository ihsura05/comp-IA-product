function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function getData(){
  var baselocation = document.getElementById("baselocation").value;
  var basetime = document.getElementById("basetime").value;
  var targetlocation = document.getElementById("targetlocation").value;
  // alert(baselocation);
  // alert(basetime);
  // alert(targetlocation);

  const options = {
    // year: '2-digit', month: '2-digit', day: '2-digit',
    hour: '2-digit', minute: '2-digit', second: '2-digit',
    timeZone: targetlocation,
    timeZoneName: 'short'
  }
  const formatter = new Intl.DateTimeFormat('en-US', options)
  const startingDate = new Date("2023/08/20 "+basetime+baselocation)
  
//+0000 denotes the offset from UTC time of the base location
//+0530 denotes ist as the base time zone

  const dateInNewTimezone = formatter.format(startingDate) 
  alert(dateInNewTimezone)
}



