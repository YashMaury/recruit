<?php
include "include/header.php";

function giplCurl($url, $postdata)
{
  $client = curl_init($url);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  $response = curl_exec($client);
  // print_r($response);
  return $result = json_decode($response);
}


$url_read_total_reg = $URL . "dashboard/total_reg_count.php";
$url_read_total_vacancy = $URL . "dashboard/total_vacancy_count.php";


$data_pending = array("status" => '0');
$postdata_pending = json_encode($data_pending);

$data_approved = array("status" => '1');
$postdata_approved = json_encode($data_approved);

$data_rejected = array("status" => '2');
$postdata_rejected = json_encode($data_rejected);

$result_pendin_reg = giplCurl($url_read_total_reg, $postdata_pending);
//print_r($result_pendin_reg);
$pending_registration = $result_pendin_reg->records[0]->reg_count;

$result_approved_reg = giplCurl($url_read_total_reg, $postdata_approved);
//print_r($result_approved_reg);
$approved_registration = $result_approved_reg->records[0]->reg_count;

$result_rejected_reg = giplCurl($url_read_total_reg, $postdata_rejected);
//print_r($result_rejected_reg);
$rejected_registration = $result_rejected_reg->records[0]->reg_count;

$result_vacancy_count = giplCurl($url_read_total_vacancy, $postdata_approved);
//print_r($result_vacancy_count);
$total_vacncy = $result_vacancy_count->records[0]->exam_count;

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3> <?php echo $pending_registration; ?></h3>

              <p>Pending Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="pending registration_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $approved_registration; ?></h3>

              <p>Approved Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="approved_registration_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $rejected_registration; ?></h3>

              <p>Rejected Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="rejected_registration_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">

              <h3><?php echo $total_vacncy;  ?></h3>
              <p>Number of vacancies</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="exam_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
      </div>
    
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include "include/footer.php";
?>