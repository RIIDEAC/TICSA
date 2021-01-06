<footer class="container mt-5">
  <p>&copy; <?php echo date("Y"); ?></p>
</footer>
</main><!-- /.container -->
</div>
</div>
<script>
        CKEDITOR.replace( 'Editor');
        CKEDITOR.config.readOnly = true; 
</script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>js/main.js"></script>
</body>
</html>