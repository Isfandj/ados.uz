<a href="#" class="cat_menu d-flex flex-row align-items-center">
	<div class="cat_icon"><i class="fa fa-bars"></i></div>
	<div class="cat_text">Mahsulotlar katalogi</div>
</a>
<ul class="cat_menu_list menu-vertical">
	<li><a href="#" class="close-side"><i class="fa fa-times"></i></a></li>
	<?php $terms = get_terms( array(
		'taxonomy' => 'product_cat',
		'hide_empty' => true,
		'pad_counts'=> true,
		'orderby' => 'name',
		'parent' => 0
	) ); ?>
	<?php if($terms) : ?>
	<?php foreach($terms as $term) : ?>
		<?php // Создаем массив терминов детей текущего термина текущей таксономии
		$tax = $term->taxonomy;
		$children_terms = get_terms( array(
			'taxonomy' => $tax,
			'hide_empty' => false,
			'parent' => $term->term_id
		) ); ?>
	
		<?php if($children_terms):?>
			<li class="parent">
				<a href="<?php echo get_term_link($term->term_id);?>"><?php echo $term->name;?></a>
				<div class="sub-menu megamenu column3">
					<ul class="list-unstyled childs_1">
						<?php foreach ($children_terms as $children_term) : ?>
				<?php $link = get_term_link($children_term); ?>
						<li><a href="<?php echo $link ?>"><?php echo $children_term->name ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</li>
		<?php else: ?>
			<li>
				<a href="<?php echo get_term_link($term->term_id);?>"><?php echo $term->name;?></a>
			</li>
		<?php endif ?>
	

	<?php endforeach; ?>
	<?php endif; ?>
<!-- 	<li class="parent">
		<a href="#">Telefonlar</a>
		<div class="sub-menu megamenu column3">
			<ul class="list-unstyled childs_1">
				<li><a href="#">Smartphones</a></li>
				<li><a href="#">Batteries</a></li>
				<li><a href="#">Charger</a></li>
				<li><a href="#">USB cables</a></li>
				<li><a href="#">Covers</a></li>
				<li><a href="#">Headphones</a></li>
			</ul>
		</div>
	</li>
	<li class="parent">
		<a href="#">Oshxona texnikalari</a>
		<div class="sub-menu megamenu column3">
			<ul class="list-unstyled childs_1">
				<li><a href="#">Газовые кухонные плиты</a></li>
				<li><a href="#">Кухонные мини-печи</a></li>
				<li><a href="#">Встраиваемые варочные поверхности</a></li>
				<li><a href="#">Микроволновые печи</a></li>
				<li><a href="#">Вытяжки</a></li>
				<li><a href="#">Mixers and blender</a></li>
				<li><a href="#">Электрочайники</a></li>
			</ul>
		</div>
	</li>
	<li class="parent">
		<a href="#">Uy maishiy texnikalari</a>
		<div class="sub-menu megamenu column3">
			<ul class="list-unstyled childs_1">
				<li><a href="#">Пылесосы</a></li>
				<li><a href="#">Cтиральные машины</a></li>
				<li><a href="#">Кондиционеры</a></li>
				<li><a href="#">Muzlatgichlar | Холодильники</a></li>
				<li><a href="#">Утюг</a></li>
			</ul>
		</div>
	</li>
	<li class="parent">
		<a href="#">Kompyuter qismlari</a>
		<div class="sub-menu megamenu column3">
			<ul class="list-unstyled childs_1">
				<li><a href="#">USB флешки</a></li>
				<li><a href="#">CD/DVD диски</a></li>
				<li><a href="#">Кабели</a></li>
				<li><a href="#">Клавиатуры</a></li>
			</ul>
		</div>
	</li> -->
</ul>