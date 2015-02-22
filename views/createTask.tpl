<form id="timetableForm" name="timetableForm" action="prg/createTask.php" method="post">
    <label class="is-required" for="name">Name:</label>
    <input  type="text" id="subject" name="subject" value="" required  >
    <label for="day">Day:</label>
    <select name="day">
        <option {if $day eq 1} selected{/if} value="1">Monday</option>
        <option {if $day eq 2} selected{/if} value="2">Tuesday</option>
        <option {if $day eq 3} selected{/if} value="3">Wednesday</option>
        <option {if $day eq 4} selected{/if} value="4">Thursday</option>
        <option {if $day eq 5} selected{/if} value="5">Friday</option>
        <option {if $day eq 6} selected{/if} value="6">Saturday</option>
        <option {if $day eq 7} selected{/if} value="7">Sunday</option>
    </select>
    <label class="is-required" for="timeFrom">Time From:</label>
    <input type="time" id="timeFrom" name="timeFrom" value="" required/>
    <label class="is-required" for="timeTo">Time To:</label>
    <input type="time" id="timeTo" name="timeTo" value="" required>
    <textarea placeholder="Observations" name="observations" id="observations" cols="100" rows="5"></textarea>
  <input type="submit" name="createTimetable" id="createTimetable" value="Submit"/>
  <script src="resources/js/time.js"></script>

</form>
