

<section class="article-grid">
	<div class="inner-column">

		<header class="grid-head">
			<h2>Article head</h2>
			<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Molestias, debitis.</p>
		</header>

		<section class="grid-container">

			<ul>
				<?php foreach([1,2,3,5,6,7,] as $article) { ?>
				<li>

					<article>
						<h3>This is the title of an article</h3>

						<p>Something Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quis ipsam, ratione praesentium, repellendus labore perspiciatis. Fuga cumque mollitia, voluptate.</p>

						<a class="action-button" href="#"> Read more</a>
					</article>

				</li>
				<?php } ?>
			</ul>

		</section>	

	</div>
</section>