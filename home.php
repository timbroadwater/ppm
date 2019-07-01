<?php /* Template Name: CustomHomePage */ ?>
<?php get_header(); ?>

<div id="hpimage">
	<div id="hpimage-text">
		<?php if(is_active_sidebar('homepage-banner')){
			dynamic_sidebar('homepage-banner');
			}
		?>
	</div>
</div>

<!-- WordPress page content starts here 
<main id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="header">
			<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
		</header>
		<div class="entry-content">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			<?php the_content(); ?>
			<div class="entry-links"><?php wp_link_pages(); ?></div>
		</div>
	</article>
	<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
	<?php endwhile; endif; ?>
</main> -->

<!-- Impact Card -->
<div class="colwrapper">
	<div class="twocol twocol-textpadleft">
		<h2>Our Impact</h2>
		<p>The Pantry Plus More is a non-profit organization that operates free school pantries, food giveaways, and health and wellness programs across Monongalia County.<br><br><b>Since 2016, we have…</b></p>
	</div>
	<div class="twocol">
		<img alt="Pantry Plus More" title="Pantry Plus More" src="<?php echo get_bloginfo('template_url') ?>/images/header5.jpg"/>
	</div>
</div>

<!-- Results-->
<div class="colwrapper">
	<div class="onecol">
		<ul>
			<li>Reached 1,200 students every month</li>
			<li>Reached 1,200 students every month</li>
			<li>Reached 1,200 students every month</li>
		</ul>
	</div>
</div>

<!-- Get Involved Stories-->
<div class="colwrapper">
	<div class="onecol">
		<h2>Get Involved</h2>
		<p>As an all-volunteer organization, The Pantry Plus More is always looking for passionate people to help our mission. There are multiple ways to get involved:</p>
	</div>
</div>

<!-- Program Card-->
<div class="colwrapper">
	<div class="threecol">
		<img alt="" title="" src="<?php echo get_bloginfo('template_url') ?>/images/mobile-food-giveaway.svg"/>
		<h3>Mobile Food Giveaway</h3>
		<p>A partnership with Mountaineer Food Bank, this food giveaway distributes more than 12,000 lbs of foods to people in need. These monthly, Saturday morning events typically require 60 volunteers who are capable of lifting 40-lb food boxes and are committed to staying for the entire 4-hour event.</p>
	</div>
	<div class="threecol">
		<img alt="" title="" src="<?php echo get_bloginfo('template_url') ?>/images/health-wellness.svg"/>
		<h3>Fresh Start Health & Wellness</h3>
		<p>This program provides 8,000 lbs of fresh food to families in need every month. 10-15 volunteers are needed for these events, which occur at 8:30 a.m. on the second Thursday of every month.</p>
	</div>
	<div class="threecol">
		<img alt="" title="" src="<?php echo get_bloginfo('template_url') ?>/images/school-pantries.svg"/>
		<h3>In-School Pantries</h3>
		<p>Our in-school pantries operate in partnership with volunteer school representatives, who are liaisons between between the schools and The Pantry Plus More. The hands-on training for these selective volunteer positions typically lasts six months. In addition, we also need 5-15 volunteers to help with our weekly inventory checks, which take place on weekends.</p>
	</div>
</div>

<!-- Volunteer-->
<div class="colwrapper">
	<div class="onecol">
		<button>Volunteer</button>
	</div>
</div>

<!-- Facebook Stories-->
<div class="colwrapper">
	<div class="onecol"></div>
</div>

<!-- Hiring-->
<div class="colwrapper">
	<div class="twocol twocol-textpadleft">
		<h2>Our Board is always looking  for people with a passion for helping those in need.</h2>
	</div>
	<div class="twocol">
		<p><b>We currently have three open Board Member positions:</b></p>
		<ul>
			<li>At-large Board Member Position One</li>
			<li>At-large Board Member Position Two</li>
			<li>Fundraising Co-Chair</li>
		</ul>
		<button>Apply</button>
	</div>
</div>

<!-- Donate Card -->
<div class="colwrapper">
	<div class="twocol">
		<img alt="Pantry Plus More" title="Pantry Plus More" src="<?php echo get_bloginfo('template_url') ?>/images/header4.jpg"/>
	</div>
	<div class="twocol twocol-textpadright">
		<h2>Donate</h2>
		<p>The Pantry Plus More is proud to operate with some of the best efficiency in our sector. As a volunteer organization, X% of your tax-deductible donation is allocated to our programs that provide nutrition, hygiene, and school supplies to children and families in need, with a small portion of donations supporting our operating costs.</p><br>
		<button>Donate</button>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>