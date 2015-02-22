
{if ! $data}
<div class="no__content">
  <h3>WE DON'T HAVE DATA FOR THIS WEEK</h3>

</div>
{else}
<section id="table" class="row">
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Time</th>
                <th>Day</th>
              </tr>
            </thead>
            <tbody>
              {foreach item=obj from=$data}
              <tr>
                <td>
                  <strong>{$obj.name}</strong>
                  <small>{$obj.observations}. - <a href="editTask.php?id={$obj.id}" name="buttonEdit" id="buttonEdit">View Task</a></small>
                  <small><input type="checkbox" name="checked" id="checked" class="is_checked"
                    {if $obj.checked eq 1}checked{/if}/>
                    <input type="hidden" name="editValue" id="editValue" value="{$obj.id}"/></small>
                </td>
                <td>{$obj.timeUsed}</td>
                <td>{$obj.day}</td>
              </tr>
              {/foreach}
            </tbody>
          </table>
        </section>
<script src="resources/js/tasks.js"></script>
{/if}
