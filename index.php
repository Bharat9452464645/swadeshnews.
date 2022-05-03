<?php 
session_start();

//include('includes/config.php');
define('DB_SERVER','sql302.epizy.com');

define('DB_USER','epiz_31635859');

define('DB_PASS' ,'YcYeoDGs6Qp9e0c');
define('DB_NAME','epiz_31635859_newsfeed');


$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    ?>

<!DOCTYPE html>
<html lang="en">

  <head>

        <title>Swadesh : Read Latest News, Hindi News, Breaking News, Sports, Bollywood, Economy, Politics</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <meta charset="UTF-8">
        <meta content="IE=Edge" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
        <meta name="description" content=" स्वदेश हिंदी दैनिक उत्तर प्रदेश व मध्य प्रदेश का लोकप्रिय हिंदी दैनिक समाचार पत्र । ध्येयनिष्ठ पत्रकारिता के पाचदशक।‌ से अनवलतअद्म सम्पादक भारत रत्न प . अटल बिहारी बाजपेई लखनऊ , झांसी , आगरा, गुना, सतना , रीवा , भोपाल व ग्वालियर से एक साथ प्रकाशित।">
        <meta name="application-name" content="swadeshbanda.epizy.com">
        <meta name="keywords" content="Swadesh Gwalior, Swadesh Gwalior Group, Swadesh News, swadesh indore, swadesh guna, swadesh bhopal, swadesh agra, swadesh jhansi, swadesh satna, latest news gwalior, latest news bhopal,  Swadesh, Swadesh Gwalior, Swadesh News, Swadesh Newspaper, Swadesh Newspaper Bhopal, Swadesh Newspaper Gwalior, Swadesh Newspaper Guna, Swadesh Newspaper Jhansi, Swadesh Newspaper Agra, Swadesh, Latest News, News, Swadesh Group, Swadesh Epaper, Epaper, Epaper, Gwalior, epaper bhopal, epaper Jhansi, epaper guna, epaper agra, swadesh epaper, स्वदेश अखबार ग्वालियर, स्वदेश समाचार पत्र, हिन्दी का दैनिक समाचार पत्र, स्वदेश, Gwalior Hindi News, Gwalior Hindi News Paper, Hindi news portal, Hindi News Paper, Hindi news, gwalior news portal, hindi news gwalior, swades, gwalior news today">
        <meta name="language" content="hindi">
        <meta name="google" content="notranslate">
        <meta name="author" content="swadeshbanda">
        <meta name="copyright" content="swadeshbanda">
        <meta name="robots" content="follow, index">
        <meta name="robots" content="max-image-preview:large">
        <meta name="HandheldFriendly" content="true">
        <meta name="referrer" content="origin">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="og:url" content="http://www.swadeshbanda.epizy.com">
        <meta name="twitter:url" content="http://www.swadeshbanda.epizy.com">
        <meta name="title" content="Swadesh : Read Latest News, Hindi News, Breaking News, Sports, Bollywood, Economy, Politics">
        <meta name="image" content="https://www.swadeshnews.in/h-upload/uid/20319dZ5Jfhk   ">
        <link rel="dns-prefetch" href="//cdn.syndication.twimg.com">
        <link rel="dns-prefetch" href="//www.facebook.com">
        <link rel="dns-prefetch" href="//connect.facebook.net">
        <link rel="dns-prefetch" href="//pagead2.googlesyndication.com">
        <link rel="dns-prefetch" href="//www.youtube.com">
        <link rel="dns-prefetch" href="//platform.twitter.com">
        <link rel="dns-prefetch" href="//gstatic.com">
        <link rel="dns-prefetch" href="//www.google.com">
        <link rel="dns-prefetch" href="//www.google.co.in">
        <link rel="dns-prefetch" href="//s.ytimg.com">
        <link rel="dns-prefetch" href="//hocalwire.com">
        <link rel="dns-prefetch" href="//www.hocalwire.com">
        <link rel="dns-prefetch" href="//adservice.google.co.in">
        <link rel="dns-prefetch" href="//tpc.googlesyndication.com">
        <link rel="dns-prefetch" href="//cdnimg.izooto.com">
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="dns-prefetch" href="//www.googletagservices.com">
        <link rel="dns-prefetch" href="//securepubads.g.doubleclick.net">
        <link rel="dns-prefetch" href="//stats.g.doubleclick.net">
        <link rel="preconnect" href="//cdn.syndication.twimg.com">
        <link rel="preconnect" href="//www.facebook.com">
        <link rel="preconnect" href="//connect.facebook.net">
        <link rel="preconnect" href="//pagead2.googlesyndication.com">
        <link rel="preconnect" href="//www.youtube.com">
        <link rel="preconnect" href="//platform.twitter.com">
        <link rel="preconnect" href="//gstatic.com">
        <link rel="preconnect" href="//www.google.com">
        <link rel="preconnect" href="//www.google.co.in">
        <link rel="preconnect" href="//s.ytimg.com">
        <link rel="preconnect" href="//hocalwire.com">
        <link rel="preconnect" href="//www.hocalwire.com">
        <link rel="preconnect" href="//adservice.google.co.in">
        <link rel="preconnect" href="//tpc.googlesyndication.com">
        <link rel="preconnect" href="//cdnimg.izooto.com">
        <link rel="preconnect" href="//fonts.googleapis.com">
        <link rel="preconnect" href="//fonts.gstatic.com">
        <link rel="preconnect" href="//www.googletagservices.com">
        <link rel="preconnect" href="//securepubads.g.doubleclick.net">
        <link rel="preconnect" href="//stats.g.doubleclick.net">
    


  <!-- og tag on -->


        <meta property="fb:app_id" content="291089061693772">
        <meta property="og:type" content="website">
    
        <meta property="og:title" content="Swadesh : Read Latest News, Hindi News, Breaking News, Sports, Bollywood, Economy, Politics">
        <meta property="og:description" content="Swadesh is a leading media house since 1971 active in Madhya Pradesh and Uttar Pradesh">
      
        <meta property="og:image" itemprop="image" content="https://www.swadeshnews.in/h-upload/uid/20319dZ5JfhkIzJWJ2m2VFrJx7yUGWLxtPsi4557725?width=500&amp;height=300">
        <meta property="og:author" content="swadesh">
        <meta name="twitter:title" content="Swadesh : Read Latest News, Hindi News, Breaking News, Sports, Bollywood, Economy, Politics">
        <meta name="twitter:description" content="Swadesh is a leading media house since 1971 active in Madhya Pradesh and Uttar Pradesh">
        <meta name="twitter:image" content="https://www.swadeshnews.in/h-upload/uid/20319dZ5JfhkIzJWJ2m2VFrJx7yUGWLxtPsi4557725?width=500&amp;height=300">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        

  <!-- og tag of 







        <title>Swadeshdanda : Read Latest News, Hindi News, Breaking News, Sports, Bollywood, Economy, Politics</title>
        <link rel="icon" href="admin/assets/images/favicon-32x32.png" type="image/x-icon">
        <link rel="shortcut icon" href="admin/assets/images/favicon-32x32.png" type="image/x-icon">
        <meta charset="UTF-8">
        <meta content="IE=Edge" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
        <meta name="description" content=" स्वदेश हिंदी दैनिक उत्तर प्रदेश व मध्य प्रदेश का लोकप्रिय हिंदी दैनिक समाचार पत्र । ध्येयनिष्ठ पत्रकारिता के पाचदशक।‌ से अनवलतअद्म सम्पादक भारत रत्न प . अटल बिहारी बाजपेई लखनऊ , झांसी , आगरा, गुना, सतना , रीवा , भोपाल व ग्वालियर से एक साथ प्रकाशित।">
        <meta name="application-name" content="swadesh">
        <meta name="keywords" content="Swadesh Gwalior, Swadesh Gwalior Group, Swadesh News, swadesh indore, swadesh guna, swadesh bhopal, swadesh agra, swadesh jhansi, swadesh satna, latest news gwalior, latest news bhopal,  Swadesh, Swadesh Gwalior, Swadesh News, Swadesh Newspaper, Swadesh Newspaper Bhopal, Swadesh Newspaper Gwalior, Swadesh Newspaper Guna, Swadesh Newspaper Jhansi, Swadesh Newspaper Agra, Swadesh, Latest News, News, Swadesh Group, Swadesh Epaper, Epaper, Epaper, Gwalior, epaper bhopal, epaper Jhansi, epaper guna, epaper agra, swadesh epaper, स्वदेश अखबार ग्वालियर, स्वदेश समाचार पत्र, हिन्दी का दैनिक समाचार पत्र, स्वदेश, Gwalior Hindi News, Gwalior Hindi News Paper, Hindi news portal, Hindi News Paper, Hindi news, gwalior news portal, hindi news gwalior, swades, gwalior news today">
        <meta name="language" content="hindi">
        <meta name="google" content="notranslate">
        <meta name="author" content="swadesh">
        <meta name="copyright" content="swadesh">
        <meta name="robots" content="follow, index">
        <meta name="robots" content="max-image-preview:large">
        <meta name="HandheldFriendly" content="true">
        <meta name="referrer" content="origin">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="og:url" content="https://www.swadeshnews.ml/">
        <meta name="twitter:url" content="https://www.swadeshbanda.epizy.com/">
        <meta name="title" content="Swadesh : Read Latest News, Hindi News, Breaking News, Sports, Bollywood, Economy, Politics">
        <meta name="image" content="https://www.swadeshnews.in/h-upload/uid/20319dZ5Jfhk   ">
        <link rel="dns-prefetch" href="//cdn.syndication.twimg.com">
        <link rel="dns-prefetch" href="//www.facebook.com">
        <link rel="dns-prefetch" href="//connect.facebook.net">
        <link rel="dns-prefetch" href="//pagead2.googlesyndication.com">
        <link rel="dns-prefetch" href="//www.youtube.com">
        <link rel="dns-prefetch" href="//platform.twitter.com">
        <link rel="dns-prefetch" href="//gstatic.com">
        <link rel="dns-prefetch" href="//www.google.com">
        <link rel="dns-prefetch" href="//www.google.co.in">
        <link rel="dns-prefetch" href="//s.ytimg.com">
        <link rel="dns-prefetch" href="//hocalwire.com">
        <link rel="dns-prefetch" href="//www.hocalwire.com">
        <link rel="dns-prefetch" href="//adservice.google.co.in">
        <link rel="dns-prefetch" href="//tpc.googlesyndication.com">
        <link rel="dns-prefetch" href="//cdnimg.izooto.com">
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="dns-prefetch" href="//www.googletagservices.com">
        <link rel="dns-prefetch" href="//securepubads.g.doubleclick.net">
        <link rel="dns-prefetch" href="//stats.g.doubleclick.net">
        <link rel="preconnect" href="//cdn.syndication.twimg.com">
        <link rel="preconnect" href="//www.facebook.com">
        <link rel="preconnect" href="//connect.facebook.net">
        <link rel="preconnect" href="//pagead2.googlesyndication.com">
        <link rel="preconnect" href="//www.youtube.com">
        <link rel="preconnect" href="//platform.twitter.com">
        <link rel="preconnect" href="//gstatic.com">
        <link rel="preconnect" href="//www.google.com">
        <link rel="preconnect" href="//www.google.co.in">
        <link rel="preconnect" href="//s.ytimg.com">
        <link rel="preconnect" href="//hocalwire.com">
        <link rel="preconnect" href="//www.hocalwire.com">
        <link rel="preconnect" href="//adservice.google.co.in">
        <link rel="preconnect" href="//tpc.googlesyndication.com">
        <link rel="preconnect" href="//cdnimg.izooto.com">
        <link rel="preconnect" href="//fonts.googleapis.com">
        <link rel="preconnect" href="//fonts.gstatic.com">
        <link rel="preconnect" href="//www.googletagservices.com">
        <link rel="preconnect" href="//securepubads.g.doubleclick.net">
        <link rel="preconnect" href="//stats.g.doubleclick.net">
    


  


        <meta property="fb:app_id" content="29108906169372">
        <meta property="og:type" content="website">
    
        <meta property="og:title" content="Swadesh : Read Latest News, Hindi News, Breaking News, Sports, Bollywood, Economy, Politics">
        <meta property="og:description" content="Swadesh is a leading media house since 1971 active in Madhya Pradesh and Uttar Pradesh">
      
        <meta property="og:image" itemprop="image" content="https://www.swadeshnews.in/h-upload/uid/20319dZ5JfhkIzJWJ2m2VFrJx7yUGWLxtPsi4557725?width=500&amp;height=300">
        <meta property="og:author" content="swadesh">
        <meta name="twitter:title" content="Swadesh : Read Latest News, Hindi News, Breaking News, Sports, Bollywood, Economy, Politics">
        <meta name="twitter:description" content="Swadesh is a leading media house since 1971 active in Madhya Pradesh and Uttar Pradesh">
        <meta name="twitter:image" content="https://www.swadeshnews.in/h-upload/uid/20319dZ5JfhkIzJWJ2m2VFrJx7yUGWLxtPsi4557725?width=500&amp;height=300">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        








    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    -->
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
   <?php include('http://swadeshbanda.epizy.com/includes/header.php');?>
<?php include('http://swadeshbanda.epizy.com/includes/search.php');?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4 m-2">
 <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
                 <p><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> </p>
       
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?>
       

      

          <!-- Pagination -->


    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>

        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>
