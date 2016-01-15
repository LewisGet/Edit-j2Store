<?php $cat = $this->filters['nowStateCat']; ?>
<?php if (! empty($cat) and is_object($cat)): ?>
    <?php $catParams = json_decode($cat->params); ?>
    <li>
        <a class="j2store-categories-href" href="<?php echo JRoute::_("&filter_category={$cat->id}&category_title=" . urlencode($cat->title)); ?>">

            <?php if(isset($catParams->image) and !empty($catParams->image)): ?>
                <img class="j2store-category-icon" src="<?php echo $catParams->image; ?>" />
            <?php endif; ?>

            <span class="j2store-category-title">
                <?php echo $cat->title; ?>
            </span>
        </a>

        <?php

        // 如果有女建立下個家庭
        if (! empty($cat->childCat))
        {
            // give next state
            $this->filters['nowStateCats'] = $cat->childCat;
            echo $this->loadTemplate('category_block');
        }

        ?>
    </li>
<?php endif; ?>