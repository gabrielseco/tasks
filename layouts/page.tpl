<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>
        <link rel="stylesheet" href="resources/sass/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
    </head>
    <body class="Site">
        <div class="row">
          {if $anon}
            <div class="bar">
                <li><a class="item" href="tasks.php">Tasks</a></li>
                <li class="bar-button"><a class="item" href="signup.php">Sign Up</a></li>
                <li class="bar-button"><a class="item" href="login.php">Log In</a></li>
            </div>
          {/if}
            {if $session}
            <div class="bar">
              <li><a class="item" href="tasks.php">Tasks</a></li>
              <li><a class="item" href="createTask.php">New Task</a></li>
              <li class="bar-button"><a class="item" href="logoff.php">Log off</a></li>
            </div>
            {/if}
        </div>
        <div class="Site-content">
          {$__content}
        </div>
        <footer>
            <div class="row">
            <div class="col-left">
              <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Email US</li>
                <li>Developer Site</li>
              </ul>
            </div>
            <div class="col-right">
              <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Email US</li>
                <li>Developer Site</li>
              </ul>
            </div>
          </div>
        </footer>
    </body>
</html>
