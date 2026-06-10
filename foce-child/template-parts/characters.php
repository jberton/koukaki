            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            
            <article id="characters">
                <div>
                    <h3>Les personnages</h3>
                    <swiper-container class="swiper-container" pagination="false" effect="coverflow" coverflowEffect-slideShadows="false" grab-cursor="true" centered-slides="true"
                    slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="50"
                    coverflow-effect-modifier="1" coverflow-effect-slide-shadows="false" autoplay="true" autoplay-delay="1000" loop="true" speed="600">
                    
                        <swiper-slide>
                            <?php
                            $main_character = $characters_query->posts[0];
                            echo '<figure>';
                            echo get_the_post_thumbnail( $main_character->ID, 'full' );
                            echo '<figcaption>'. $main_character->post_title . '</figcaption>';
                            echo '</figure>';
                            $characters_query->next_post();
                            ?>
                        </swiper-slide>

                        <?php
                        while ( $characters_query->have_posts() ) {
                            
                            $characters_query->the_post();
                            echo '<swiper-slide><figure>';
                            echo get_the_post_thumbnail( get_the_ID(), 'full' );
                            echo '<figcaption>';
                            the_title();
                            echo'</figcaption>';
                            echo '</figure></swiper-slide>';
                        }
                        ?>
                       
                    </swiper-container>
                </div>
            </article>
        
      
