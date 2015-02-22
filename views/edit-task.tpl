<form id="timetableForm" name="timetableForm" action="prg/editTask.php" method="post">
    <label class="is-required" for="name">Name:</label>
    <input type="text" id="subject" name="subject" value="{$data->name}" required>
    <label for="day">Day:</label>
    <select name="day">
      <option {if $data->dayOfWeek eq 1} selected {/if} value="1">Monday</option>
      <option {if $data->dayOfWeek eq 2} selected {/if} value="2">Tuesday</option>
      <option {if $data->dayOfWeek eq 3} selected {/if} value="3">Wednesday</option>
      <option {if $data->dayOfWeek eq 4} selected {/if} value="4">Thursday</option>
      <option {if $data->dayOfWeek eq 5} selected {/if} value="5">Friday</option>
      <option {if $data->dayOfWeek eq 6} selected {/if} value="6">Saturday</option>
      <option {if $data->dayOfWeek eq 7} selected {/if} value="7">Sunday</option>
    </select>

  {foreach from=$dataTime item=obj key=key}
    {if $key eq timeFrom}
      <label for="{$key}" class="is-required">Time From:</label>
      <input type="time" id={$key} name="{$key}"  value="{$obj}" required>
    {else}
    <label for="{$key}" class="is-required">Time To:</label>
    <input type="time" id={$key} name="{$key}"   value="{$obj}" required>
    {/if}
  {/foreach}

    <textarea placeholder="Observations"  name="observations"
    id="observations" cols="100" rows="5">{$data->observations}</textarea>
  <input type="hidden" name="idTimetable" id="idTimetable" value="{$id}"/>
    <a  class="remove__button" href="deleteTask.php?id={$id}">Remove?</a>
    <input class="submit__edit" type="submit" value="Submit"/>

</form>
