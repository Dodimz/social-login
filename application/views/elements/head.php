<title><?php echo $this->config->item('site_name') . ' | ' . $title; ?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#000000" />

<meta name="title" content='<?php echo $this->config->item('site_name') . ' | ' . $title; ?>' />
<meta name="description" content="<?php echo $description; ?>" />

<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo base_url() . $page; ?>" />
<meta property="og:title" content="<?php echo $this->config->item('site_name') . ' | ' . $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:image" content="<?php echo base_url(); ?>assets/images/social-login-preview.png" />

<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="<?php echo base_url() . $page; ?>" />
<meta property="twitter:title" content="<?php echo $this->config->item('site_name') . ' | ' . $title; ?>" />
<meta property="twitter:description" content="<?php echo $description; ?>" />
<meta property="twitter:image" content="<?php echo base_url(); ?>assets/images/social-login-preview.png" />

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/favicon/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/favicon/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/favicon/favicon-16x16.png" />
<link rel="manifest" href="<?php echo base_url(); ?>assets/favicon/site.webmanifest">

<meta name="robots" content="index, follow" />

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,300italic,600italic,700" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/5411e794bf.js" crossorigin="anonymous"></script>