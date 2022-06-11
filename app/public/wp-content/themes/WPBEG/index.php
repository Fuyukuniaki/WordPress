<?php get_header(); ?>
	<body>
		<header class="header">
			<h1 class="header__ttl"><a href="./">WPBEG<span class="header__ttl__sub">static</span></a></h1>
			<p class="header__descrition">Just another WordPress site</p>
			<form class="p-search-form" id="searchform">
				<input class="p-search-form__keyword" placeholder="キーワード">
				<input class="p-search-form__submit" id="searchsubmit" type="submit" value="検索">
			</form>
			<div class="menu-gmenu-container">
				<ul class="menu">
					<li class="menu-item current_page_item"><a href="index.html">Blog</a></li>
					<li class="menu-item"><a href="page.html">About</a></li>
				</ul>
			</div>
		</header>
		<div class="c-wrap">
			<div class="c-grid">
				<div class="p-contents">
					<div class="post">
						<h2 class="post__ttl"><a href="single.html">記事タイトル</a></h2>
						<ul class="post__meta">
							<li class="post__meta__item">
								<date class="post__meta__date">2017年10月31日</date>
							</li>
							<li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><a class="post__meta__link" href="#">カテゴリ名</a></i></li>
							<li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><a class="post__meta__link" href="#">タグ名</a></i></li>
						</ul><img class="attachment-post-thumbnail" src="images/eyecatch/001.png" alt="アイキャッチ">
						<p>本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。<a class="more-link" href="single.html">続きを読む</a></p>
					</div>
					<div class="post">
						<h2 class="post__ttl"><a href="single.html">長い記事のタイトル長い記事のタイトル長い記事のタイトル長い記事のタイトル長い記事のタイトル長い記事のタイトル長い記事のタイトル</a></h2>
						<ul class="post__meta">
							<li class="post__meta__item">
								<date class="post__meta__date">2017年10月31日</date>
							</li>
							<li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><a class="post__meta__link" href="#">カテゴリ名</a></i></li>
							<li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><a class="post__meta__link" href="#">タグ名</a></i></li>
						</ul><img class="attachment-post-thumbnail" src="images/eyecatch/002.png" alt="アイキャッチ">
						<p>本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。<a class="more-link" href="single.html">続きを読む</a></p>
					</div>
					<div class="post">
						<h2 class="post__ttl"><a href="single.html">記事タイトル</a></h2>
						<ul class="post__meta">
							<li class="post__meta__item">
								<date class="post__meta__date">2017年10月31日</date>
							</li>
							<li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><a class="post__meta__link" href="#">カテゴリ名</a></i></li>
							<li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><a class="post__meta__link" href="#">タグ名</a></i></li>
						</ul><img class="attachment-post-thumbnail" src="images/eyecatch/003.png" alt="アイキャッチ">
						<p>本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。<a class="more-link" href="single.html">続きを読む</a></p>
					</div>
				</div>
				<ul class="p-pagenation">
					<li class="prevpostslink"><a rel="next" href="#">Prev</a></li>
					<li class="nextpostslink"><a rel="next" href="#">Next</a></li>
				</ul>
				<?php get_sidebar(); ?>
			</div>
		</div>
		<?php get_footer(); ?> 