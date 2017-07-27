<html>
    <head>
      <!-- flatsy bootstrap -->
      <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
      <!-- ckeditor -->
      <script src="//cdn.ckeditor.com/4.7.1/basic/ckeditor.js"></script>
      <!-- custom styles  -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
      <!-- webix integration  -->
      <script src="<?php echo base_url(); ?>assets/webix/webix.js"></script>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/webix/webix.css">
      
      <title>CodeIgniter App</title>
    </head>
    <body>
      <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">ciApp</a>
          </div>
          <div id="navbar">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
              <li><a href="<?php echo base_url(); ?>about">About</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url(); ?>posts/create">New Post</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
