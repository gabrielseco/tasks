{if $result gt ""}
<div class="errorLogIn">
  <p>This username or the password are incorrect.</p>
</div>
{/if}

<form id="loginForm" method="post" action="prg/login.php"   role="form">
      <label class="is-required"  for="user">User</label>
      <input type="text"  name="username" id="username"
      required placeholder="User">
    <label class="is-required"  for="password">Password</label>
    <input type="password" name="password" id="password" required placeholder="Password">
  <input type="submit" value="Log In"></input>
</form>
<script>
(function() {
  "use strict";

    document.getElementById('username').focus();


}());

</script>
