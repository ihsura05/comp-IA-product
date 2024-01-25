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


  const options = {
    hour: '2-digit', minute: '2-digit', second: '2-digit',
    timeZone: targetlocation,
    timeZoneName: 'short'
  }
  const formatter = new Intl.DateTimeFormat('en-US', options)
  const startingDate = new Date("2023/08/20 "+basetime+baselocation)

  const dateInNewTimezone = formatter.format(startingDate) 
  alert(dateInNewTimezone)
}



