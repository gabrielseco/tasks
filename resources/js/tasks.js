(function() {
  "use strict";

  var checkbox  = document.getElementsByClassName("is_checked");
  giveClass(checkbox,isDone);

  var buttonRemove = document.getElementsByClassName("remove__button");
  giveClass(buttonRemove,removeIt);

}());




function removeIt(){

  event.preventDefault();

  var clickEl = event.target;

  var element = clickEl.nextSibling.nextSibling.value;


  window.location.href = "deleteTask.php" + "?id="+element;

}


function isDone(){

  var list = this.parentNode.parentNode.parentNode;
  var value = list.getElementsByTagName('input');
  var value = value[1].value;

  window.location.href = "updateTimetable.php" + "?id="+value;

}


function giveClass(button,name){
  for(var i=0;i<button.length;i++){
    button[i].addEventListener('click',name, false);
  }
}
