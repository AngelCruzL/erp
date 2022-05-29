<?php
function confirm_alert($register, $registerMsg, $registerId)
{
  echo "
    <button class='btn' onclick='deleteRegister()'>Eliminar $registerMsg</button>

    <script>
      function deleteRegister() {
        if (confirm('¿Está seguro de eliminar este $registerMsg?')) {
          window.location.href = '../controller/$register/delete_$register.php?id=$registerId';
        }
      }
    </script>
  ";
}
