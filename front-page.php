<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>


  <main class="">

    <div class="hero">
      <h1>Old Faithful Hero Area</h1>
      <button>Let's Go</button>
    </div>

    <div class="intro wrapper">
      <h2>Welcome to this site</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nostrum, dolorem corrupti iusto aperiam quo eligendi dicta vel aliquam deleniti in asperiores, dignissimos ex, perspiciatis aspernatur accusamus cum non libero.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nostrum, dolorem corrupti iusto aperiam quo eligendi dicta vel aliquam deleniti in asperiores, dignissimos ex, perspiciatis aspernatur accusamus cum non libero.</p>

    </div>

    <div class="blocks-bg">
      <div class="blocks wrapper">
        <a href="#" class="block">
        <div class="inner">
          <h4>Title</h4>
          <p>Achieve Your Goals</p>
        </div>
      </a>
      <a href="#" class="block">
        <div class="inner">
          <h4>Title</h4>
          <p>Build Things</p>
        </div>
      </a>
      <a href="#" class="block">
        <div class="inner">
          <h4>Title</h4>
          <p>Results Matter</p>
        </div>
      </a>
      </div>
    </div>




  </main>


  <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
