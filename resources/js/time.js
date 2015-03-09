(function() {
  "use strict";

  var subject = document.getElementById('subject');

  subject.focus();


  var currentdate = new Date();

  var hours   = currentdate.getHours();
  var minutes = currentdate.getMinutes();


  if(hours < 10){
    hours ="0"+currentdate.getHours();
  }

  if(minutes < 10){
    minutes = "0" + currentdate.getMinutes();
  }

  var datetime = hours + ":"
                +minutes;

  var timeFrom = document.getElementById('timeFrom');
  var timeTo   = document.getElementById('timeTo');

  timeFrom.value = datetime;
  timeTo.value   = datetime;

  var form = document.getElementById('timetableForm');

  form.addEventListener('submit',function(evt){
      evt.preventDefault();

      if(subject.value === ''){
        subject.className = "redBorder";
        var left = 0;
        var top  = 0;
        window.scrollTo(left,top);
      }
      else{
        form.submit();
      }
  });
}());
