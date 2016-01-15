<?php $cat = $this->filters['nowStateCat']; ?>
<?php if (! empty($cat) and is_object($cat)): ?>
    <li>
        <?php echo $cat->title; ?>
    </li>
<?php endif; ?>