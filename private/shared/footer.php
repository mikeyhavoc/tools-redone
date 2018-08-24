</main>
<a type="button" role="button" class="btn btn-lg btn-outline-primary" href="#top">Top</a>
<footer role="footer">
    <div class="row">
        <div class="col-sm-12 col-md-6 text-left">
            <p>Created by Michael Williams, &copy;<?php echo DATE('Y'); ?>  last update <?php echo DATE("d, m, Y H:i:s.", getlastmod()); ?></p>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
            <a href="./privacy.html" class="mr-3">Pirvacy Page</a>
        </div>
    </div>

</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script  src="<?php echo url_for( 'public/js/main.js');  ?>"></script>
</body>
</html>
