<script src="../public/static/js/jquery-3.3.1.min.js" ></script>
    <script src="../public/static/js/bootstrap.min.js" ></script>

  <?php
    if(isset($conn)) {
      mysqli_close($conn);
    } 
  ?>
  </body>
</html>