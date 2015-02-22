{if $result gt ""}
<div class="errorSignUp">
  <p>This user exists.Try with another one</p>
</div>
{/if}
<form id="signUp" method="post" action="prg/signup.php">
      <label class="is-required"  for="user">User</label>
      <input type="text" name="username" id="username" required placeholder="User">
      <label class="is-required" for="password">Password</label>
      <input type="password" name="password" id="password" required placeholder="Password"/>
      <label class="is-required" for="password2">Confirm Password</label>
      <input type="password" name="password2" id="password2" required placeholder="Confirm Password"/>
      <input type="submit" name="createUser" id="createUser" value="Submit"></input>
</form>
<script src="resources/js/signUpValidation.js"></script>
