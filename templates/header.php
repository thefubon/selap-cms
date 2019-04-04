<? $Core->mail("Тема", array('test' => "1111", "test2" => "2222"), ''); ?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$SELAP['page']['title'];?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='keywords' content='<?=$SELAP['page']['keywords'];?>'>
	<meta name='description' content='<?=$SELAP['page']['description'];?>'>
	<meta name="generator" content="SELAP CMS">
	<link rel="icon" href="/templates/assets/img/favicon.ico">
	<link rel='stylesheet' href='/templates/assets/css/uikit.min.css'>
	<link rel='stylesheet' href='/templates/assets/css/style.css'>
	<script src='/templates/assets/js/uikit.min.js'></script>
	<script src='/templates/assets/js/uikit-icons.min.js'></script>
	<!-- Documentation UiKit 3 http://getuikit.com -->
</head>
<body>

<? $side_memu = array();
	foreach ( $SELAP['menu'] as $menu_item ) {
		if ( ! empty( $menu_item['parent'] ) ) {
			$side_memu[] = $menu_item;
		}
	}
	echo '<ul class="uk-navbar-nav">';
	foreach ( $SELAP['menu'] as $menu_item ) {	
		if ( ! empty( $menu_item['parent'] ) ) {
			continue;
		}
		echo '<li><a href="' . $menu_item['link'] . '">' . $menu_item['name'] . '</a>';

				if ( $menu_item['keywords'] != $item['parent'] ) {

					/* NONE */

				} else {

					echo '<div class="uk-navbar-dropdown" uk-dropdown="offset: 0;"><ul class="uk-nav uk-navbar-dropdown-nav">';

						if ( $side_memu ) {
							foreach ( $side_memu as $item ) {
								if ( $menu_item['url'] == $item['parent'] ) {
								echo '<li><a class="uk-link-text" href="' . $item['link'] . '">' . $item['name'] . '</a></li>';
								}
							}
						}

					echo '</ul></div>';

				}

		echo '</li>';
	}
	echo '</ul>';
?>
