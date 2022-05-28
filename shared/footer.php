<?php
function get_footer()
{
  echo "
    </body>

    <footer>
      <p class='copy'> &copy; Ghost Burgers</p>
    </footer>

    <script>
      document.querySelector('.copy').innerHTML = new Date().getFullYear() + document.querySelector('.copy').innerHTML;
    </script>

    </html>
  ";
}
