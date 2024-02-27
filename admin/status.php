<?php


if(isset($_SESSION['status']) && $_SESSION['status'] != '')
{
  ?>
  <script>
  Swal.fire({
  title: "<?php echo $_SESSION['status']; ?> ",
  icon: "<?php echo $_SESSION['status_a']; ?>"
  
});
  </script>

<?php
  unset($_SESSION['status']);
}
?>
