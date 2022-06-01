<?php
/**
 * front-pages template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bestand_s
 */
?>

<?php
get_header();
?>

	<main>
		<section id="top-message" class="top-section-message">
			<?php get_template_part( 'parts/front-page/top' ); ?>
		</section>
		<section id="service" class="top-section">
			<div class="section-title">
				<h2 class="section-title-main">Service</h2>
				<h4 class="section-title-sub">サービス</h4>
			</div>
			<div class="section-content service-items">
				<?php get_template_part( 'parts/front-page/services' ); ?>
			</div>
		</section>
		<section id="member" class="top-section">
			<div class="section-title">
				<h2 class="section-title-main">Member</h2>
				<h4 class="section-title-sub">メンバー</h4>
			</div>
			<div class="section-content member-items">
				<?php get_template_part( 'parts/front-page/members' ); ?>
			</div>
		</section>
		<section id="about" class="top-section">
			<div class="section-title">
				<h2 class="section-title-main">About</h2>
				<h4 class="section-title-sub">会社概要</h4>
			</div>
			<div class="section-content">
				<?php get_template_part( 'parts/front-page/about' ); ?>
			</div>
		</section>
		<section id="works" class="top-section">
			<div class="section-title">
				<h2 class="section-title-main">Works</h2>
				<h4 class="section-title-sub">事例</h4>
			</div>
			<div class="section-content works-items">
				<?php get_template_part( 'parts/front-page/works' ); ?>
			</div>
		</section>
		<section id="news" class="top-section">
			<div class="section-title">
				<h2 class="section-title-main">News</h2>
				<h4 class="section-title-sub">お知らせ</h4>
			</div>
			<div class="section-content">
				<?php get_template_part( 'parts/front-page/news' ); ?>
			</div>
		</section>
		<section id="contact" class="top-section">
			<div class="section-title">
				<h2 class="section-title-main">Contact</h2>
				<h4 class="section-title-sub">お問い合わせ</h4>
			</div>
			<div class="section-content">
				<?php get_template_part( 'parts/front-page/contact' ); ?>
			</div>
		</section>
	</main>

<?php
get_footer();
?>