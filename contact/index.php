<?php $pageName = 'Contact';
require_once('../includes/header.php'); ?>
<div class="contact-container">
  <form action="https://formspree.io/mnqgyooe" method="POST">
    <input type="text" name="name">
    <input type="email" name="_replyto">
    <input type="text" name="comment">
    <input type="number" name="budget">
    <input type="submit" value="Send">
  </form>
</div>
<?php require_once('../includes/footer.php'); ?>
