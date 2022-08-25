
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php echo wp_site_icon(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class()?>>
    <div class="wrapper">
        <header class="header" id="header">
            <div class="container">
                <?php echo get_custom_logo(); ?>
            </div>
        </header>