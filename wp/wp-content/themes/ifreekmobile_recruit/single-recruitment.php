<?php get_header(); ?>

<div class="pageTitle">
    <div class="title_inner">
        <div class="text-area">
			<h1 class="jp">募集要項</h1>
			<p class="eng">RECRUITMENT</p>
        </div>
        <div class="sq_carat">
			<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
            <svg id="layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 559 280">
                <g id="title_sq">
                    <rect id="_長方形_4" class="title_sq_1" x="519" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-2" class="title_sq_1" x="479" y="40" width="40" height="40"/>
                    <rect id="_長方形_4-3" class="title_sq_1" x="439" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-4" class="title_sq_1" x="359" y="0" width="40" height="40"/><rect id="_長方形_4-5" class="title_sq_1" x="319" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-6" class="title_sq_1" x="239" y="0" width="40" height="40"/><rect id="_長方形_4-7" class="title_sq_1" x="199" y="160" width="40" height="40"/><rect id="_長方形_4-8" class="title_sq_1" x="159" y="0" width="40" height="40"/><rect id="_長方形_4-9" class="title_sq_1" x="79" y="0" width="40" height="40"/><rect id="_長方形_4-10" class="title_sq_1" x="0" y="0" width="40" height="40"/><rect id="_長方形_4-11" class="title_sq_1" x="519" y="80" width="40" height="40"/><rect id="_長方形_4-13" class="title_sq_1" x="399" y="40" width="40" height="40"/><rect id="_長方形_4-14" class="title_sq_1" x="359" y="40" width="40" height="40"/><rect id="_長方形_4-15" class="title_sq_1" x="279" y="40" width="40" height="40"/><rect id="_長方形_4-16" class="title_sq_1" x="239" y="80" width="40" height="40"/><rect id="_長方形_4-17" class="title_sq_1" x="159" y="40" width="40" height="40"/><rect id="_長方形_4-18" class="title_sq_1" x="119" y="40" width="40" height="40"/><rect id="_長方形_4-19" class="title_sq_1" x="479" y="120" width="40" height="40"/><rect id="_長方形_4-20" class="title_sq_1" x="399" y="80" width="40" height="40"/><rect id="_長方形_4-21" class="title_sq_1" x="319" y="80" width="40" height="40"/><rect id="_長方形_4-22" class="title_sq_1" x="199" y="80" width="40" height="40"/><rect id="_長方形_4-23" class="title_sq_1" x="119" y="80" width="40" height="40"/><rect id="_長方形_4-24" class="title_sq_1" x="79" y="80" width="40" height="40"/><rect id="_長方形_4-25" class="title_sq_1" x="439" y="160" width="40" height="40"/><rect id="_長方形_4-26" class="title_sq_1" x="439" y="80" width="40" height="40"/><rect id="_長方形_4-27" class="title_sq_1" x="279" y="120" width="40" height="40"/><rect id="_長方形_4-28" class="title_sq_1" x="319" y="160" width="40" height="40"/><rect id="_長方形_4-29" class="title_sq_1" x="159" y="120" width="40" height="40"/><rect id="_長方形_4-30" class="title_sq_1" x="519" y="160" width="40" height="40"/><rect id="_長方形_4-31" class="title_sq_1" x="439" y="240" width="40" height="40"/><rect id="_長方形_4-32" class="title_sq_1" x="359" y="160" width="40" height="40"/><rect id="_長方形_4-33" class="title_sq_1" x="479" y="200" width="40" height="40"/><rect id="_長方形_4-34" class="title_sq_1" x="399" y="200" width="40" height="40"/><rect id="_長方形_4-35" class="title_sq_1" x="519" y="240" width="40" height="40"/>
                </g>
            </svg>
        </div>
    </div>

    <div class="breadcrumbs">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        }?>
    </div>

    <div class="title_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/title/title_recruitment.jpg);"></div>
</div>


<main id="main_wrap" role="main">
	<div class="page_section page_section__pink">
		<div class="middlewrap">
			<div class="bg-white">
				<div class="recruitment_title">
					<p class="division">
						<?php
						$terms = get_the_terms($post->ID, 'interview_division');
						if ($terms) :
							foreach ($terms as $term) {
								echo '<span>' . $term->name . '</span>';
							}
						endif;
						?>
					</p>
					<h2 class="job_type">
						<?php
						$terms = get_the_terms($post->ID, 'recruitment_job');
						if ($terms) :
							foreach ($terms as $term) {
								echo '<span>' . $term->name . '</span>';
							}
						endif;
						?>
					</h2>
				</div>

				<div class="wanted_wrap">
					<div class="con_text">
						<h3>求める人物像</h3>
						<ul class="list-disc">
							<li><?php the_field('motomeru_1'); ?></li>
							<?php if (get_field('motomeru_2')) : ?>
								<li><?php the_field('motomeru_2'); ?></li>
							<?php endif; ?>
							<?php if (get_field('motomeru_3')) : ?>
								<li><?php the_field('motomeru_3'); ?></li>
							<?php endif; ?>
							<?php if (get_field('motomeru_4')) : ?>
								<li><?php the_field('motomeru_4'); ?></li>
							<?php endif; ?>
							<?php if (get_field('motomeru_5')) : ?>
								<li><?php the_field('motomeru_5'); ?></li>
							<?php endif; ?>
							<?php if (get_field('motomeru_6')) : ?>
								<li><?php the_field('motomeru_6'); ?></li>
							<?php endif; ?>
							<?php if (get_field('motomeru_7')) : ?>
								<li><?php the_field('motomeru_7'); ?></li>
							<?php endif; ?>
							<?php if (get_field('motomeru_8')) : ?>
								<li><?php the_field('motomeru_8'); ?></li>
							<?php endif; ?>
							<?php if (get_field('motomeru_9')) : ?>
								<li><?php the_field('motomeru_9'); ?></li>
							<?php endif; ?>
							<?php if (get_field('motomeru_10')) : ?>
								<li><?php the_field('motomeru_10'); ?></li>
							<?php endif; ?>
						</ul>
					</div>
					<div class="con_text">
						<h3>歓迎スキル</h3>
						<ul class="list-disc">
							<li><?php the_field('skill_1'); ?></li>
							<?php if (get_field('skill_2')) : ?>
								<li><?php the_field('skill_2'); ?></li>
							<?php endif; ?>
							<?php if (get_field('skill_3')) : ?>
								<li><?php the_field('skill_3'); ?></li>
							<?php endif; ?>
							<?php if (get_field('skill_4')) : ?>
								<li><?php the_field('skill_4'); ?></li>
							<?php endif; ?>
							<?php if (get_field('skill_5')) : ?>
								<li><?php the_field('skill_5'); ?></li>
							<?php endif; ?>
							<?php if (get_field('skill_6')) : ?>
								<li><?php the_field('skill_6'); ?></li>
							<?php endif; ?>
							<?php if (get_field('skill_7')) : ?>
								<li><?php the_field('skill_7'); ?></li>
							<?php endif; ?>
							<?php if (get_field('skill_8')) : ?>
								<li><?php the_field('skill_8'); ?></li>
							<?php endif; ?>
							<?php if (get_field('skill_9')) : ?>
								<li><?php the_field('skill_9'); ?></li>
							<?php endif; ?>
							<?php if (get_field('skill_10')) : ?>
								<li><?php the_field('skill_10'); ?></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>

				<div class="horizontal_tit mt70">
					<h3 class="jp">募集要項</h3>
					<p class="eng">APPLICATION REQUIREMENTS</p>
				</div>

				<table class="table-s1">
					<tbody>
						<tr>
							<th>雇用形態</th>
							<td><?php the_field('status'); ?></td>
						</tr>
						<tr>
							<th>雇用期間</th>
							<td><?php the_field('period'); ?></td>
						</tr>
						<tr>
							<th>業務内容</th>
							<td><?php the_field('work'); ?></td>
						</tr>
						<tr>
							<th>募集背景</th>
							<td><?php the_field('back'); ?></td>
						</tr>
						<tr>
							<th>勤務地</th>
							<td><?php the_field('place'); ?></td>
						</tr>
						<tr>
							<th>年齢</th>
							<td><?php the_field('age'); ?></td>
						</tr>
						<tr>
							<th>語学力</th>
							<td><?php the_field('language'); ?></td>
						</tr>
						<tr>
							<th>就業時間</th>
							<td><?php the_field('working_time'); ?></td>
						</tr>
						<tr>
							<th>休日・休暇</th>
							<td><?php the_field('holiday'); ?></td>
						</tr>
						<tr>
							<th>時間外労働</th>
							<td><?php the_field('overtime_work'); ?></td>
						</tr>
						<tr>
							<th>給与</th>
							<td><?php the_field('salary'); ?></td>
						</tr>
						<tr>
							<th>社会保険</th>
							<td><?php the_field('insurance'); ?></td>
						</tr>
						<tr>
							<th>その他・福利厚生</th>
							<td><?php the_field('welfare'); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>


	<div class="page_section">
		<div class="wrap">
			<div class="big-title">
				<h2 class="jp">採用の流れ</h2>
				<p class="eng">SELECTION PROCESS</p>
			</div>

			<div class="flow_wrap">
				<div class="con_flow">
					<div class="tit_wrap">
						<p class="tit">1.エントリー</p>
					</div>
					<div class="text_wrap">
						<p class="text">本サイトよりご応募ください。各職種毎にフォームを設置しています。内容を確認の上、弊社よりご連絡をさせていただきます。</p>
					</div>
				</div>
				<div class="con_flow">
					<div class="tit_wrap">
						<p class="tit">2.書類選考</p>
					</div>
					<div class="text_wrap">
						<p class="text">応募された職種の弊社担当・採用担当が職務経歴書の内容を確認し、こちらからご連絡面接の日程をご連絡させていただきます。</p>
					</div>
				</div>
				<div class="con_flow">
					<div class="tit_wrap">
						<p class="tit">3.面接</p>
					</div>
					<div class="text_wrap">
						<p class="text">担当部署の責任者と面接をしていただきます。お互いに理解を深めることが目的です。面接はウェブで行うことも多いです。</p>
					</div>
				</div>
				<div class="con_flow">
					<div class="tit_wrap">
						<p class="tit">4.採用</p>
					</div>
					<div class="text_wrap">
						<p class="text">これからのメンバーとして、私たちと一緒にIT業界で活躍していきましょう！ よろしくお願いいたします。</p>
					</div>
				</div>
			</div>

			<div class="ws_bottoms">
				<?php
                $terms = get_the_terms($post->ID, 'recruitment_division');
                if ($terms) :
                    foreach ($terms as $term) {
                        echo '<a href="' . esc_url( home_url( '/' ) ) . 'jobs/' . $term->slug .'/" class="btn-red">事業部の仕事内容<i class="fas fa-angle-right"></i></a>';
                    }
                endif;
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>entry/" class="btn-red">エントリー<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>

</main>


<div class="bottom_entry">
    <div class="inner">
        <p class="eng">ENTRY</p>
        <p class="jp">エントリー</p>
    </div>
    <div class="bottom_entry_bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/entry_bg.jpg" alt="エントリー">
    </div>
    <span class="arrow"><i class="fas fa-angle-right"></i></span>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>entry/" class="float_link"></a>
</div>


<?php get_footer(); ?>
