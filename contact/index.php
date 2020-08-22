<?php $pageName = 'Contact';
require_once('../includes/header.php'); ?>
<div class="contact-container">
  <form action="https://formspree.io/mnqgyooe" method="POST">
  	<span class="contact-title"><i class="fas fa-user-tag"></i> name</span>
  	<br />
    <input type="text" name="name">
    <br />
    <span class="contact-title"><i class="fas fa-envelope"></i> email address</span>
    <br />
    <input type="email" name="_replyto">
    <br />
    <span class="contact-title"><i class="fas fa-comments"></i> comments</span>
    <br />
    <input type="text" name="comment">
    <br />
    <span class="contact-title"><i class="fas fa-money-bill-wave"></i> budget</span>
    <br />
    <input type="number" name="budget">
    <br />
    <input type="submit" value="Send">
  </form>
</div>
<?php require_once('../includes/footer.php'); ?>
