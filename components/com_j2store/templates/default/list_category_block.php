<?php if (! empty($this->filters['nowStateCats'])): ?>
    <?php
    // save this state
    $nowStateCat = $this->filters['nowStateCat'];
    $nowStateCats = $this->filters['nowStateCats'];

    $hiddenCats = $this->filters['filter_hidden_categories'];
    $hiddenFunction = false;

    if (is_array($hiddenCats) and is_object($nowStateCat) and in_array($nowStateCat->id, $hiddenCats))
    {
        $hiddenFunction = true;
    }
    ?>
    <ul class="<?php if ($hiddenFunction) { echo " hiddenFunction "; } ?>">
        <?php
        foreach ($nowStateCats as $cat)
        {
            // 個人建立
            // 給予版型這個人資料狀態
            $this->filters['nowStateCat'] = $cat;
            echo $this->loadTemplate('category_list');
        }
        ?>
    </ul>
<?php endif; ?>