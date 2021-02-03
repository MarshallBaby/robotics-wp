<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package robotics
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        .card__background{
            background-image:url('<?php echo esc_url( get_theme_mod( 'titlecard_background' ) ); ?>');
        }
    </style>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="container mt-lg-3 mb-lg-3 pt-2 d-flex justify-content-between justify-content-md-start align-items-center">
        <img onclick="location.href = '<?php echo home_url(); ?>';" class="mh-100" src="img/logo.png" alt="logo" style="cursor: pointer;">
        <ul class="header__list offset-lg-1 w-100 d-none d-md-flex justify-row align-items-center mb-0 mt-0 h-100">
        <li><a href="about.php"> О нас </a> </li>
            <li><a href="news.php"> Новости </a> </li>
            <li><a href="projects.php"> Проекты </a> </li>
            <li><a href="partners.php"> Сотрудничество </a> </li>
            <li><a href="#"> Экскурсии </a> </li>
            <li><a href="#"> Wiki </a> </li>

        </ul>
        <i id="mobile-menu-button" class="bi bi-three-dots-vertical d-md-none"></i>
    </div>
</header>
<section class="mobile-menu container d-md-none">
    <div class=" col-10 offset-10 fs-2 row justify-content-end">
    <i id="mobile-menu-button-exit" class="bi bi-x"></i>
    </div>
    <div class="row">
        <ul class="mobile-menu__list container offset-1 mt-4 ml-2 col-2">
            <li><a href="about.php"> О нас </a> </li>
            <li><a href="news.php"> Новости </a> </li>
            <li><a href="projects.php"> Проекты </a> </li>
            <li><a href="partners.php"> Сотрудничество </a> </li>
            <li><a href="#"> Экскурсии </a> </li>
        </ul>
    </div>
</section>
