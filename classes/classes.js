function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

var button = $('button');
var classes = $('.classes');

button.on("click", printResponse);

function printResponse(event){
  event.preventDefault();
  var name = $(`.name`).val();
  var time = $(`.time`).val();
  var description = $(`.description`).val();
  classes.append(`
    <div class = "oneevent">
    <p>${name}</p><br>
    <p>${time}</p><br>
    <p>${description}</p>
    </div>
    <br>
    <br>
    `);
  event.preventDefault();

  const inputs = document.querySelectorAll('#name, #time, #description');

  inputs.forEach(input => {
    input.value = '';
  });
}