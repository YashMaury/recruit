<?php
include "include/header.php";
$url = $URL . "exam/read_exam_list.php";
$data = array();
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($client, CURLOPT_POST, 5);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
?>
<!-- breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <div class="banner-title">
      <h2>Recruitment</h2>
      <div class="line"> <span></span></div>
    </div>
    <ul class="inner-breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Recruitment</li>
    </ul>
  </div>
</div>
<!-- breadcrumb Wrapper End -->
<!-- Inner page Wrapper Start -->
<div class="inner-page-wrapper latest-jobs-wrapper">
  <div class="container">

    <?php
    $counter = 0;
    foreach ($result as $key => $value) {
      foreach ($value as $key1 => $value1) {
        ?>

        <div class="single-jobs"> <i class="fa fa-users"></i>
          <div class="job-heading">
            <h3>
              <?php echo $value1->exam_name; ?>
            </h3>
            <p>Total Post -
              <?php echo $value1->total_post; ?>
            </p>
          </div>
          <div class="our-location color1"> <span class="fa fa-calendar" aria-hidden="true"></span>
            <div class="location-content">
              <h3>
                <?php $date = date("d M Y", strtotime($value1->created_on));
                echo $date == "01-01-1970" ? '0' : $date; ?>
              </h3>
              <!-- <a href="#">Apply Now</a> -->
              <div class="btn">
                <form action="../user/Instructions.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $value1->id; ?>">
                  <input type="hidden" name="exam_name" value="<?php echo $value1->exam_name; ?>">
                  <button type="submit" name="submit" class="btn btn-success text-white">Apply</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      <?php }
    } ?>

    <!-- <ul class="pagination">
      <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
      <li><a href="#">1</a></li>
      <li class="active"><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
    </ul> -->

  </div>
</div>
<!-- Inner page Wrapper End -->


<?php
include "include/footer.php";
?>