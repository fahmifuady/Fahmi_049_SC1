<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php
if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];
    unset($_SESSION["message"]);
}
?>
<div class="alert alert-<?php echo (isset($message)) ? ($message['type']) : '' ?> alert-dismissible fade <?php echo (isset($message)) ? ($message['show']) : '' ?>" role="alert">
    <i class="fa fa-<?php echo (isset($message)) ? ($message['icon']) : '' ?>"></i> <?php echo (isset($message)) ? ($message['text']) : '' ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>