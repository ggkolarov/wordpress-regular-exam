<li class="property-card">
    <div class="property-primary">
        <h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        <div class="property-details">
            <span class="property-author">Author: <?php the_author(); ?></span>
            <span class="property-date">Posted <?php the_date(); ?> days ago</span>
        </div>
    </div>
    <div class="property-image">
        <div class="property-image-box">
            <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } else {
                    echo '<img src="https://picsum.photos/200" alt="Default image thumbnail!"';
                }
            ?>
        </div>
    </div>
</li>