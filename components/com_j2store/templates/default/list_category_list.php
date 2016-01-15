<?php $cat = $this->filters['nowStateCat']; ?>
<?php if (! empty($cat) and is_object($cat)): ?>
    <li>
        <a href="<?php echo JRoute::_("&filter_category={$cat->id}&category_title=" . urlencode($cat->title)); ?>">
            <?php echo $cat->title; ?>
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