<div class="categories-block">
    <?php $terms = get_terms( array(
        'taxonomy' => 'product_cat',
        'hide_empty' => true,
        'pad_counts'=> true,
        'orderby' => 'name',
        'parent' => 0
    ) ); ?>              
    <select id="search_category" name="product_cat" class="form-control top_bar_search_select">
        <option value="0">Barchasi</option>
        <?php if($terms) : ?>
            <?php foreach($terms as $term) : ?>
                <option value="<?php echo $term->slug;?>"><?php echo $term->name;?></option>
            <?php endforeach; ?>
        <?php endif; ?>
        <option hidden value="Categories 2">Categories 2</option>

    </select>
</div>
