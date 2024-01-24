
<?php
include "include/header.php";
?>
<!-- breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <div class="banner-title">
      <h2>Blog Details</h2>
      <div class="line"> <span></span></div>
    </div>
    <ul class="inner-breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Blog Details</li>
    </ul>
  </div>
</div>
<!-- breadcrumb Wrapper End --> 
<!-- Inner page Wrapper Start -->
<div class="inner-page-wrapper blog-details">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12">

      <?php if($_REQUEST['d']=='edu'){ ?>
        <article class="post format-image bg-white">
          <div class="post-preview"> <a href="#"><img src="https://ssegr.org.in/website/assets/images/blog/blog-image-1.jpg" alt=""></a> </div>
          <div class="post-content post-no-pad">
            <h2 class="post-title">Education Reform</h2>
            <p>In the time of independence, one importace deficiency in the education system was that education was hearly art and humanity based with passage of time, these deficiency has been removed to some extent. Now India has the third number of science graduates in the world.</p>
            <p>But one serious flow is still these indian scientific teaching is not basically search based. Thus the young scientist do get scientific knowledge but not many of them can do research, because research is castly affairs because a haphazard churning of art students, doctors and engineer in Indian institute, there has been wide spread of unemployment in a large scale in these fields.</p>
            <p>The media has also brought about a revolution in the field of education. Teaching through, satellite and open universities has opened new vistas for empolyed and for those who can not attend any educational institute.</p>
            <p>Inspite of this, the typical institution particularly in rural areas and small town still lacks basic educational facility. The class rooms are over crowded and teachers are not well informed.</p>
            <p>The examination system also needs some improvement. The poorest are still usable to learn, the primary education needs much more attention. These are some areas where we need to improve.</p>
            <p></p>
          </div>
        </article>
      <?php } elseif($_REQUEST['d'] == 'agr'){?>
        <article class="post format-image bg-white">
          <div class="post-preview"> <a href="#"><img src="https://ssegr.org.in/website/assets/images/blog/blog-details-img-1.jpg" alt=""></a> </div>
          <div class="post-content post-no-pad">
            <h2 class="post-title">Importance Of Agriculture</h2>
            <p>Agriculture is one of the most important aspect in everyone's life. It is some thing that is necessary for the survival of each every human being. Along with being a necessity, it also helps in the economy of Country.</p>
            <p>Agriculture has been defined from two word's 'ager' and 'culture' where ager means field and culture means cultivation. So the meaning of agriculture is cultivation of fields. Agriculture is the process of practicing of forming.</p>
            <p>Agriculture plays a vital role in living life. It is impossible for one to sustain his/her life without agriculture as it gives the most usable product of human life such as food, fruits etc. As we all know that food is the most important thing for survival, nothing comes before food. So we can say the agriculture is particularly important because it is our main source of food supply. It is also the backbone of our economic system. Agriculture not only provide food and raw materials but also employment opportunities to a large proportion of population.</p>
            <p>Agriculture is most important aspect of each and everyone's life, It is impossible to feed human being without agriculture. There are some bad impact of agriculture in our environment such as manure fertilizer cause pollution, over all it is the backbone of economy of country.</p>
            <p></p>
          </div>
        </article>
      <?php } elseif($_REQUEST['d'] == 'ssi'){ ?>
        <article class="post format-image bg-white">
          <div class="post-preview"> <a href="#"><img src="https://ssegr.org.in/website/assets/images/blog/blog-image-2.jpg" alt=""></a> </div>
          <div class="post-content post-no-pad">
            <h2 class="post-title">Small Scale Education</h2>
              <p>Home industry means the manufacturing of goods at home by hands with small capital an a small scale by some members.</p>
              <p>In the past cottage industries played an important role in the economy of our country. They provided employment to a large number of people.</p>
              <p>Modern age is the age of machine and large scale industries. Yet even in the highly industrialized countries like Japan France & Russia, a good proportion of their industries are run in domestic industries.</p>
              <p>In India home industries have a more important part to play than other country. They can help a lot in solving the problem of unemployment and poverty. For more than four months in a year our farmer have nothing to do. Domestic Industries can give them employment during free time.</p>
              <p>Domestic industries can successfully complete with machine made goods, if they run on modern way. periodic exhibition of the goods, manufactured by small industries and development of co-operative system of great are advantages of their progress.</p>
              <p>Co-operative system can help in solving the problem of capital, raw material, and marketing then they would easily with stand the competition large scale factory production.           </p>
              <p></p>
          </div>
        </article>
      <?php } else { ?> 
      
        <script>
          window.location.href = "index.php";
        </script>

      <?php } ?>

      </div>
    </div>
  </div>
</div>
<!-- Inner page Wrapper End --> 

<?php
include "include/footer.php";
?>