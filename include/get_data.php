<?php
include('config.php');
if(isset($_GET['cat_id'])) {
    $id = $_GET['cat_id'];
    if($id == 'allShow') {
?>
<div class="row grid">
                            <?php 
                                $sql = mysqli_query($con,"SELECT * FROM theme");
                                while($rows = mysqli_fetch_assoc($sql)) {
                            ?>
                            <div class="col-sm-4 all corporate">
                              <div class="item feature">
                                <img src="images/themes/<?php echo $rows['thm_img'];?>" alt="<?php echo $rows['thm_img'];?>">
                                <div class="p-inner">
                                  <h5><?php echo $rows['thm_name'];?></h5>
                                  <a href="<?php echo $rows['thm_link'];?>" target="_blank"><button class="btn button m-auto">View Demo</button></a>
                                </div>
                              </div>
                            </div>
                            <?php
                                }
                            ?>
      </div>
      <?php
    }
else {
      ?>
<div class="row grid">
                            <?php 
                                $sql = mysqli_query($con,"SELECT * FROM theme WHERE thm_cat_id = '$id'");
                                while($rows = mysqli_fetch_assoc($sql)) {
                            ?>
                            <div class="col-sm-4 all corporate">
                              <div class="item feature">
                                <img src="images/themes/<?php echo $rows['thm_img'];?>" alt="<?php echo $rows['thm_img'];?>">
                                <div class="p-inner">
                                  <h5><?php echo $rows['thm_name'];?></h5>
                                  <a href="<?php echo $rows['thm_link'];?>" target="_blank"><button class="btn button m-auto">View Demo</button></a>
                                </div>
                              </div>
                            </div>
                            <?php
                                }
                            ?>
      </div>
<?php
}
}
if(isset($_POST['year'])) {
    $year = trim($_POST['year'],'#');
    $sql = mysqli_query($con,"SELECT YEAR(post_date) as YEAR, MONTHNAME(post_date) AS MONTH, COUNT(*) AS TOTAL FROM posts WHERE YEAR(post_date) = $year GROUP BY MONTH ORDER BY post_id DESC");
        if(!$sql) {
            echo mysqli_error($con);
        }
        while($rows = mysqli_fetch_assoc($sql)) {
    ?>
        <a href="#<?php echo $rows['MONTH'].'-'.$rows['YEAR'];?>" class="list-group-item mnthClk" data-toggle="collapse" aria-expanded="false" data-parent="#<?php echo $year;?>"><?php echo $rows['MONTH'].' ('.$rows['TOTAL'].')';?></a>
        <div class="collapse" id="<?php echo $rows['MONTH'].'-'.$rows['YEAR'];?>"></div>
    <?php
        }
}
if(isset($_POST['month'])) {
    $year = $_POST['yaer'];
    $month = $_POST['month'];
    
    $sql = mysqli_query($con,"SELECT * FROM posts WHERE YEAR(post_date) = '$year' AND MONTHNAME(post_date) = '$month'");
    while($rows = mysqli_fetch_assoc($sql)) {
        ?>
        <a href="#<?php echo $rows['post_id'];?>" class="list-group-item pstClk" data-parent="#<?php echo $month.'-'.$year;?>"><?php echo $rows['post_name'];?></a>
    <?php
        // print_r($rows);
    }
    
}
if(isset($_POST['title_id'])) {
    
    $id  = $_POST['title_id'];
    //echo $id;
    $sql = mysqli_query($con,"SELECT * FROM posts WHERE post_id = '$id'");
    while($rows = mysqli_fetch_assoc($sql))
    {
    ?>
    <div class="conteudo">
        <div class="post-info">
          Posted on <?php
          $ps_date = $rows['post_date'];
          $dt = new DateTime($ps_date);
          echo $dt->format('d-m-Y');
          ?>
        </div>
        <h1> <?php echo $rows['post_name'];?> </h1>
        <hr>
        <img src="images/blog/<?php echo $rows['post_img'];?>" class="img-fluid width-100">
        <p class="comment more">
            <?php echo $rows['post_content'];?>
        </p>
    </div>
    <?php
    }
}
if(isset($_POST['all'])) {
    
    $sql = mysqli_query($con,"SELECT * FROM posts");
    while($rows = mysqli_fetch_assoc($sql))
    {
    ?>
    <div class="conteudo">
        <div class="post-info">
          Posted on <?php
          $ps_date = $rows['post_date'];
          $dt = new DateTime($ps_date);
          echo $dt->format('d-m-Y');
          ?>
        </div>
        <h1> <?php echo $rows['post_name'];?> </h1>
        <hr>
        <img src="images/blog/<?php echo $rows['post_img'];?>" class="img-fluid width-100">
        <p class="comment more">
            <?php echo $rows['post_content'];?>
        </p>
    </div>
    <?php
    }
}
?>