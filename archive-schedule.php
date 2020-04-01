<?php
    get_header();
?>

    <main class="main-content">
      <div class="wrapper">
        <?php get_template_part( 'tmp/breadcrumbs' ); ?>
        <h1 class="main-heading schedule-page__h">расписание</h1>
        <div class="tabs">
          <ul class="tabs-btns">
          <?php
            $days = get_terms([
              'taxonomy' => 'schedule_days',
              'order' => 'ASC',
              'orderby' => 'slug'
            ]);
            $index = 0;
            $active_class = '';
            foreach( $days as $day ):
              if( $index === 0 ){
                $active_class = ' active-tab';
              } else {
                $active_class = '';
              }
          ?>
            <li class="tabs-btns__item<?php echo $active_class; ?>">
              <a 
                href="#<?php echo $day->slug; ?>" 
                class="tabs-btns__btn"
                aria-label="<?php echo $day->description; ?>"
              >
                <?php echo $day->name; ?>
              </a>
            </li>
          <?php
            $index++;
            endforeach;
          ?>
          </ul>
          <ul class="tabs-content">
          <?php
            $index = 0;
            foreach( $days as $day ):
              if( $index === 0 ){
                $active_class = 'active-tab';
              } else{
                $active_class = '';
              }
          ?>
            <li 
              class="tabs-content__item<?php echo $active_class; ?>" 
              id="<?php echo $day->slug; ?>"
            >
              <h2 class="sr-only"><?php echo $day->description; ?></h2>
              <ul class="schedule tabs-content__list">
              <?php
                $actions = 
                foreach( $actions as $act ):
              ?>
                <li class="schedule__item">
                  <p class="schedule__time"> 07:00 - 22:00 </p>
                  <h2 class="schedule__h"> Фитнесс </h2>
                  <p class="schedule__trainer"> с Литвиненко Ольгой </p>
                  <p class="schedule__place"> фитнесс зал </p>
                </li>
              <?
                endforeach;
              ?>
                <!-- <li class="schedule__item">
                  <p class="schedule__time"> 07:00 - 22:00 </p>
                  <h2 class="schedule__h"> Фитнесс </h2>
                  <p class="schedule__trainer"> с Литвиненко Ольгой </p>
                  <p class="schedule__place"> фитнесс зал </p>
                </li>
                <li class="schedule__item">
                  <p class="schedule__time"> 07:00 - 22:00 </p>
                  <h2 class="schedule__h"> Фитнесс </h2>
                  <p class="schedule__trainer"> с Литвиненко Ольгой </p>
                  <p class="schedule__place"> фитнесс зал </p>
                </li>
                <li class="schedule__item">
                  <p class="schedule__time"> 07:00 - 22:00 </p>
                  <h2 class="schedule__h"> Фитнесс </h2>
                  <p class="schedule__trainer"> с Литвиненко Ольгой </p>
                  <p class="schedule__place"> фитнесс зал </p>
                </li>
                <li class="schedule__item">
                  <p class="schedule__time"> 07:00 - 22:00 </p>
                  <h2 class="schedule__h"> Фитнесс </h2>
                  <p class="schedule__trainer"> с Литвиненко Ольгой </p>
                  <p class="schedule__place"> фитнесс зал </p>
                </li>
                <li class="schedule__item">
                  <p class="schedule__time"> 07:00 - 22:00 </p>
                  <h2 class="schedule__h"> Фитнесс </h2>
                  <p class="schedule__trainer"> с Литвиненко Ольгой </p>
                  <p class="schedule__place"> фитнесс зал </p>
                </li>
                <li class="schedule__item">
                  <p class="schedule__time"> 07:00 - 22:00 </p>
                  <h2 class="schedule__h"> Фитнесс </h2>
                  <p class="schedule__trainer"> с Литвиненко Ольгой </p>
                  <p class="schedule__place"> фитнесс зал </p>
                </li>
                <li class="schedule__item">
                  <p class="schedule__time"> 07:00 - 22:00 </p>
                  <h2 class="schedule__h"> Фитнесс </h2>
                  <p class="schedule__trainer"> с Литвиненко Ольгой </p>
                  <p class="schedule__place"> фитнесс зал </p>
                </li> -->
              </ul>
            </li>
          <?php
            $index++;
            endforeach;
          ?>
          </ul>
        </div>
      </div>
    </main>

<?php
    get_footer();
?>