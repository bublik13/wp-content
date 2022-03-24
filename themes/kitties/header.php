<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kitties
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800&family=Montserrat:wght@400;500;600;700&family=Poppins:wght@400;500;600;800&display=swap" rel="stylesheet"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class('body js-body'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<svg display="none">
        <symbol id="magnifier" viewBox="0 0 24 24">
            <path d="M23.414 20.586L18.337 15.509C19.386 13.928 20 12.035 20 10C20 4.486 15.514 0 10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C12.035 20 13.928 19.386 15.509 18.337L20.586 23.414C21.366 24.195 22.634 24.195 23.414 23.414C24.195 22.633 24.195 21.367 23.414 20.586ZM3 10C3 6.14 6.14 3 10 3C13.86 3 17 6.14 17 10C17 13.86 13.86 17 10 17C6.14 17 3 13.86 3 10Z" fill="currentColor"/>
        </symbol>
        <symbol id="user" viewBox="0 0 24 24">
           <path d="M12 11.0769C15.3137 11.0769 18 8.59727 18 5.53846C18 2.47965 15.3137 0 12 0C8.68629 0 6 2.47965 6 5.53846C6 8.59727 8.68629 11.0769 12 11.0769Z" fill="currentColor"/>
            <path d="M24 20.7691V22.1537C24 22.521 23.842 22.8731 23.5607 23.1328C23.2794 23.3925 22.8978 23.5383 22.5 23.5383H1.5C1.10218 23.5383 0.720645 23.3925 0.43934 23.1328C0.158036 22.8731 0 22.521 0 22.1537V20.7691C0 18.5658 0.948212 16.4527 2.63604 14.8947C4.32387 13.3367 6.61305 12.4614 9 12.4614H15C17.3869 12.4614 19.6761 13.3367 21.364 14.8947C23.0518 16.4527 24 18.5658 24 20.7691Z" fill="currentColor"/>
        </symbol>
        <symbol id="paw" viewBox="0 0 452 450">
            <path d="M307.541 125.81C299.974 133.196 291.648 138.983 282.562 143.173C273.477 147.362 263.766 149.083 253.432 148.335C243.097 147.587 234.175 143.366 226.667 135.674C217.311 126.089 212.443 113.848 212.063 98.9514C211.682 84.0544 214.564 69.9135 220.708 56.5286C226.851 43.1437 234.526 31.9582 243.732 22.9722C251.299 15.5864 259.625 9.79868 268.711 5.60914C277.797 1.41959 287.507 -0.301109 297.842 0.44704C308.177 1.19519 317.098 5.41567 324.607 13.1085C334.086 22.8191 338.984 35.0914 339.303 49.9253C339.622 64.7592 336.741 78.8378 330.661 92.1612C324.58 105.485 316.873 116.701 307.541 125.81ZM153.025 150.298C142.936 160.146 131.586 166.053 118.975 168.019C106.365 169.985 95.3201 166.112 85.8416 156.402C76.4863 146.817 71.2768 134.479 70.2132 119.387C69.1496 104.295 71.3819 89.7408 76.9102 75.7254C82.4386 61.7099 89.8689 50.1476 99.2012 41.0385C109.29 31.1907 120.671 25.2531 133.345 23.2255C146.019 21.198 157.095 25.0395 166.573 34.7501C175.929 44.3346 181.138 56.6729 182.202 71.7651C183.265 86.8573 181.002 101.442 175.41 115.519C169.819 129.596 162.357 141.189 153.025 150.298ZM230.882 219.845C245.408 234.726 254.955 256.806 259.523 286.085C264.091 315.365 263.242 344.391 256.974 373.166C250.706 401.94 240.321 423.405 225.818 437.561C220.017 443.224 214.147 446.86 208.208 448.471C202.269 450.081 196.446 449.793 190.74 447.605C185.034 445.417 179.803 442.581 175.047 439.097C170.291 435.612 165.267 431.158 159.974 425.735C151.603 417.16 142.9 402.567 133.865 381.957C124.83 361.348 116.435 347.07 108.68 339.125C100.556 330.802 85.9016 321.403 64.7179 310.927C43.5342 300.452 28.3878 290.548 19.2787 281.216C-3.24803 258.137 -5.30521 237.612 13.1071 219.64C23.9527 209.054 39.4746 200.798 59.6728 194.874C79.871 188.949 100.595 185.898 121.846 185.719C143.096 185.54 163.842 188.377 184.085 194.229C204.328 200.082 219.927 208.621 230.882 219.845ZM314.927 226.096C307.418 218.403 303.415 209.382 302.917 199.032C302.419 188.682 304.374 179.017 308.782 170.035C313.19 161.053 319.178 152.869 326.744 145.483C336.077 136.374 347.476 128.941 360.942 123.185C374.409 117.428 388.553 114.889 403.375 115.566C418.197 116.244 430.347 121.438 439.826 131.149C447.334 138.842 451.338 147.863 451.836 158.213C452.334 168.563 450.379 178.228 445.97 187.21C441.562 196.192 435.575 204.376 428.008 211.761C418.802 220.747 407.434 228.15 393.904 233.968C380.375 239.786 366.168 242.325 351.285 241.584C336.402 240.843 324.282 235.68 314.927 226.096ZM414.367 288.613C423.845 298.324 427.418 309.489 425.084 322.11C422.751 334.731 416.539 345.966 406.45 355.813C397.118 364.923 385.379 372.071 371.234 377.259C357.089 382.446 342.486 384.326 327.424 382.897C312.362 381.469 300.153 375.962 290.798 366.378C281.319 356.667 277.715 345.532 279.986 332.973C282.256 320.413 288.436 309.21 298.525 299.362C307.857 290.253 319.627 283.074 333.835 277.825C348.044 272.576 362.679 270.665 377.741 272.094C392.803 273.522 405.011 279.029 414.367 288.613Z" fill="currentColor"/>
        </symbol>
        <symbol id="inst" viewBox="0 0 60 60">
            <path d="M31.2479 14.3263C22.5679 14.3263 15.3759 21.3059 15.3759 29.9998C15.3759 38.6936 22.4439 45.6732 31.2479 45.6732C40.0519 45.6732 47.1199 38.5712 47.1199 29.9998C47.1199 21.4283 39.9279 14.3263 31.2479 14.3263ZM31.2479 40.0406C25.6679 40.0406 21.0799 35.51 21.0799 29.9998C21.0799 24.4896 25.6679 19.9589 31.2479 19.9589C36.8279 19.9589 41.4159 24.4896 41.4159 29.9998C41.4159 35.51 36.8279 40.0406 31.2479 40.0406Z" fill="currentColor"/>
            <path d="M47.7405 17.5102C49.7265 17.5102 51.3365 15.9204 51.3365 13.9592C51.3365 11.998 49.7265 10.4082 47.7405 10.4082C45.7545 10.4082 44.1445 11.998 44.1445 13.9592C44.1445 15.9204 45.7545 17.5102 47.7405 17.5102Z" fill="currentColor"/>
            <path d="M57.04 4.77529C53.816 1.46917 49.228 -0.245117 44.02 -0.245117H18.476C7.68803 -0.245117 0.496033 6.85692 0.496033 17.51V42.612C0.496033 47.8773 2.23203 52.4079 5.70403 55.7141C9.05203 58.8977 13.516 60.4896 18.6 60.4896H43.896C49.228 60.4896 53.692 58.7753 56.916 55.7141C60.264 52.5304 62 47.9998 62 42.7345V17.51C62 12.3671 60.264 7.95896 57.04 4.77529ZM56.544 42.7345C56.544 46.5304 55.18 49.5916 52.948 51.6733C50.716 53.7549 47.616 54.8569 43.896 54.8569H18.6C14.88 54.8569 11.78 53.7549 9.54803 51.6733C7.31603 49.4692 6.20003 46.4079 6.20003 42.612V17.51C6.20003 13.8365 7.31603 10.7753 9.54803 8.57121C11.656 6.48958 14.88 5.38754 18.6 5.38754H44.144C47.864 5.38754 50.964 6.48958 53.196 8.69366C55.304 10.8977 56.544 13.959 56.544 17.51V42.7345Z" fill="currentColor"/>
        </symbol>
        <symbol id="facebook" viewBox="0 0 62 60">
            <path d="M29.8854 59.9998L29.9122 59.9999H29.903L29.8854 59.9998ZM30.097 59.9999H30.0878L30.1146 59.9998L30.097 59.9999ZM29.7938 59.9993L29.8227 59.9994H29.8061L29.7938 59.9993V59.9993ZM30.1939 59.9994H30.1773L30.2063 59.9993L30.1939 59.9994ZM29.7054 59.9986L29.7247 59.9987L29.7093 59.9986H29.7054ZM30.2907 59.9986L30.2753 59.9987L30.2946 59.9986H30.2907ZM30.3875 59.9975L30.3807 59.9977L30.4069 59.9973L30.3875 59.9975ZM29.5931 59.9973L29.6193 59.9977L29.6125 59.9975L29.5931 59.9973V59.9973ZM30.4842 59.9961L30.4684 59.9964L30.5006 59.9959L30.4842 59.9961ZM29.4994 59.9959L29.5316 59.9964L29.5158 59.9961L29.4994 59.9959V59.9959ZM30.5808 59.9945L30.5595 59.9948L30.5892 59.9943L30.5808 59.9945ZM29.4108 59.9943L29.4405 59.9948L29.4192 59.9945L29.4108 59.9943ZM29.301 59.992L29.3273 59.9926L29.3227 59.9925L29.301 59.992ZM30.6773 59.9925L30.6727 59.9926L30.699 59.992L30.6773 59.9925ZM29.2046 59.9896L29.2409 59.9905L29.2262 59.9902L29.2046 59.9896ZM30.7738 59.9902L30.7591 59.9905L30.7954 59.9896L30.7738 59.9902ZM30.8702 59.9876L30.8467 59.9883L30.8837 59.9872L30.8702 59.9876V59.9876ZM29.1163 59.9872L29.1533 59.9883L29.1298 59.9876L29.1163 59.9872V59.9872ZM29.0319 59.9846L29.0583 59.9855L29.0334 59.9846L29.0107 59.9839L29.0319 59.9846V59.9846ZM30.9666 59.9846L30.9417 59.9855L30.9681 59.9846L30.9893 59.9839L30.9666 59.9846ZM31.0628 59.9815L31.0496 59.982L31.0901 59.9805L31.0628 59.9815ZM28.9099 59.9805L28.9504 59.982L28.9372 59.9815L28.9099 59.9805ZM28.8221 59.9773L28.8646 59.9788L28.841 59.978L28.8221 59.9773ZM31.159 59.978L31.1354 59.9788L31.1779 59.9773L31.159 59.978ZM28.736 59.9738L28.7775 59.9755L28.745 59.9742L28.736 59.9738V59.9738ZM31.255 59.9742L31.2225 59.9755L31.264 59.9738L31.255 59.9742V59.9742ZM28.6153 59.9685L28.6598 59.9705L28.6489 59.9701L28.6153 59.9685ZM31.3511 59.9701L31.3402 59.9705L31.3847 59.9685L31.3511 59.9701ZM28.5287 59.9645L28.5749 59.9666L28.5531 59.9657L28.5287 59.9645ZM31.4469 59.9657L31.4251 59.9666L31.4713 59.9645L31.4469 59.9657ZM28.4434 59.9602L28.4899 59.9625L28.4572 59.961L28.4434 59.9602ZM31.5428 59.961L31.5101 59.9625L31.5566 59.9602L31.5428 59.961ZM31.6386 59.9559L31.5962 59.9582L31.6338 59.9562L31.6781 59.9537L31.6386 59.9559ZM28.3662 59.9562L28.4038 59.9582L28.3614 59.9559L28.3219 59.9537L28.3662 59.9562ZM31.7343 59.9505L31.7155 59.9516L31.7631 59.9489L31.7343 59.9505ZM28.2369 59.9489L28.2845 59.9516L28.2657 59.9505L28.2369 59.9489ZM28.1523 59.9439L28.1998 59.9467L28.1701 59.945L28.1523 59.9439V59.9439ZM31.8299 59.945L31.8002 59.9467L31.8477 59.9439L31.8299 59.945ZM28.0716 59.9388L28.1143 59.9415L28.0745 59.9391L28.0344 59.9365L28.0716 59.9388ZM31.9255 59.9391L31.8857 59.9415L31.9284 59.9388L31.9656 59.9365L31.9255 59.9391V59.9391ZM32.0209 59.9329L32.0066 59.9338L32.052 59.9307L32.0209 59.9329V59.9329ZM27.948 59.9307L27.9934 59.9338L27.9791 59.9329L27.948 59.9307V59.9307ZM27.8636 59.9249L27.9081 59.928L27.8837 59.9264L27.8636 59.9249ZM32.1163 59.9264L32.0919 59.928L32.1364 59.9249L32.1163 59.9264V59.9264ZM27.7793 59.9189L27.8202 59.9218L27.7884 59.9196L27.7793 59.9189ZM32.2116 59.9196L32.1798 59.9218L32.2207 59.9189L32.2116 59.9196ZM27.666 59.9103L27.7018 59.913L27.6932 59.9125L27.666 59.9103V59.9103ZM32.3068 59.9125L32.2982 59.913L32.334 59.9103L32.3068 59.9125V59.9125ZM32.4019 59.9051L32.3848 59.9064L32.4212 59.9034L32.4019 59.9051V59.9051ZM27.5788 59.9034L27.6152 59.9064L27.5981 59.9051L27.5788 59.9034V59.9034ZM27.4938 59.8965L27.5248 59.8991L27.503 59.8973L27.4938 59.8965ZM32.497 59.8973L32.4752 59.8991L32.5062 59.8965L32.497 59.8973V59.8973ZM27.4003 59.8887L27.4096 59.8895L27.408 59.8894L27.4003 59.8887V59.8887ZM32.592 59.8894L32.5904 59.8895L32.5997 59.8887L32.592 59.8894V59.8894ZM32.6869 59.8811L32.6784 59.8818L32.6996 59.8799L32.6869 59.8811V59.8811ZM27.3004 59.8799L27.3216 59.8818L27.3131 59.8811L27.3004 59.8799V59.8799ZM27.2125 59.8719L27.2283 59.8734L27.2184 59.8725L27.2125 59.8719ZM32.7816 59.8725L32.7717 59.8734L32.7875 59.8719L32.7816 59.8725ZM25.3125 59.6352C10.9782 57.3821 0 44.963 0 30C0 13.4426 13.4426 0 30 0C46.5574 0 60 13.4426 60 30C60 44.963 49.0218 57.3821 34.6875 59.6352V38.6719H41.6777L43.0078 30H34.6875V24.3725C34.6875 22.0001 35.8498 19.6875 39.5764 19.6875H43.3594V12.3047C43.3594 12.3047 39.9263 11.7188 36.6439 11.7188C29.7913 11.7188 25.3125 15.8719 25.3125 23.3906V30H17.6953V38.6719H25.3125V59.6352Z" fill="currentColor"/>
        </symbol>
</svg>    
	<header class="header" style="background: url('<?php echo get_field('background','options')['url']; ?>') center center / cover no-repeat">
        <div class="header__container">
            <div class="header__top">
                <a href="#" class="header__logo" style="background: url('<?php echo get_field('logo','options')['url']; ?>') center center / cover no-repeat">
                </a>
				<nav class='header__nav js-nav'>
					<?php 
						wp_nav_menu([
						'menu' => 'Header menu',
						'container' => 'ul',
                        'menu_class' => 'header__menu',
						'items_wrap' => '<ul class="menu menu_header header__menu menu__item">%3$s</ul>'
						])
					?>
				</nav>
                <div class="header__wrap-btn">   
                    <button type="button" class="header__btn-icon">
                        <svg aria-hidden="true" class="header__icon">
                            <use xlink:href="#magnifier"></use>
                        </svg>
                    </button>
                    <button type="button" class="header__btn-icon">
                        <svg aria-hidden="true" class="header__icon">
                            <use xlink:href="#user"></use>
                        </svg>
                    </button>
                </div>
                <button type="button" aria-label="close" class="burger header__burger js-burger">
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                  </button>
            </div>
            <div class="header__wrap">
                <h1 class="header__title"><?php echo get_field('title_header', 'options'); ?></h1>
                <p class="header__subtitle"><?php echo get_field('subtitle_header', 'options'); ?></p>
				<?php $btn_header = get_field('button_header', 'options'); ?>
				<a href="<?php echo $btn_header['url'] ?>" target="<?php echo $btn_header['target']; ?>" class="header__button"><?php echo $btn_header['title'];?></a>
            </div>
        </div>
    </header>