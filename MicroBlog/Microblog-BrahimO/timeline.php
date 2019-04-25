<?php

session_start();
require 'includes/bootstrap.php';
require 'includes/register.php';
require 'includes/timelinehead.php';
require 'inc/comments.php';



?>



    <!-- AJOUTER UN MESSAGE -->


  <div class='container'>

    <div class='tab-pane'>
      <div class='col-md-offset-2'>

      <?php

       if (isset($_SESSION['iduser']) && isset($_SESSION['auth'])): ?>


        <form action='' method='post' class='form-horizontal'  role='form'>

          <?php if (isset($errorsl)){ echo "<div class='alert alert-danger'>$errorsl</div>";} ?>

          <input type='hidden' name='uid' value=''>
          <input type='hidden' name='udate' value=''>
            <div class='form-group'>
              <label for='email' class='col-sm-2 control-label'>Ajouter un message :</label>
              <div class='col-sm-10'>
                <textarea class='form-control fc' name='message' rows='5'></textarea>
              </div>
            </div>
              <div class='form-group'>
              <div class='col-sm-offset-2 col-sm-10'>
            <button class='btn btn-success btn-circle text-uppercase' type='submit' name='commentSubmit'>Publier</button>
            </div>
          </div>
        </form>
      <?php else:  ?>
        <meta http-equiv="refresh" content="1;url=login.php"/>
      <?php endif; ?>
      </div>
    </div>
  </div>



    <!-- MESSAGE -->

    <section id="right">
<!--- Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3 class="reviews">Message</h3>
        </div>
        <div class="comment-tabs">

            <div class="tab-content">

                    <ul class="media-list">
                      <li class="media">
                        <?php foreach ($posts as $post): ?>
                        <div style="display:block !important;" class="media-body">
                          <div class="well well-lg">

                            <!-- On affiche l'id de l'utilisateur -->

                              <h4 class="media-heading text-uppercase reviews"><?php if(isset($post['uid'])) {
                                echo $post['uid'];
                                } else {

                                } ?> </h4>
                              <ul class="media-date text-uppercase reviews list-inline pull-right">

                                <!-- On affiche la date du poste  -->
                                <?php

                                 if(isset($post['udate'])){echo date('d/m/Y H:i:s',strtotime( $post['udate']) );} else{} ?>

                              </ul>

                              <!-- On affiche le message  -->

                              <p class="media-comment">
                                 <?php if(isset($post['message'])){echo $post['message'];} else{} ?>
                              </p>
                              <form method="GET" action="timeline.php" class="pull-right">
                                  <input type="hidden" name="cid" value="<?= $post['cid']?>">
                                 <input type="submit" name="delete" value="Supprimer" />
                              </form>
                          </div>
                        </div>
                      <?php endforeach; ?>
                      </li>

                </div>

            </div>
        </div>
	</div>
  </div>
  <div class="notes text-center"><small>Copyright (c) 2018 Brahim Ouarradi.</small></div>
</div>
    </section>

    <!-- SCRIPT -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  </body>
</html>
