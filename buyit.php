<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/style1.css?version=1">

    <title>Buy Focus</title>
</head>
<body>
        <header class="mainHeader">
          <?php require 'includes/mainNav.inc.php'; 
                include 'includes/functions.php'?>
        </header><!--end of main Header-->

        <main class="content">
            <article class="article1">
            <header class="articleHeader">
            <h1><a href="articles/fordfocusmk1.html">Buy Ford Focus MK1</a></h1>
            </header> <!--end of article2 header-->
            <img class="thumbnail-buy" src="imgs/ffcosucmk1-thumbnail-buy.jpg" alt="fordfocusmk1">
            
              <table width="200">
              <tbody>
                <tr>
                  <th scope="row">Year;</th>
                  <td>1988</td>
                </tr>
                <tr>
                  <th scope="row">Condtition</th>
                  <td style="color: red;">Poor</td>
                </tr>
                <tr>
                  <th scope="row">Price</th>
                  <td style="color: green;">1000$</td>
                </tr>
              </tbody>
            </table>
        <br>
        <button>Buy It NOW!</button>
            </article><!--end of article2 section-->

            <article class="article">
                <header class="articleHeader">
                <h1><a href="articles/fordfocusmk2.html">Buy Ford Focus MK2</a></h1>
                </header> <!--end of article header-->
                <img class="thumbnail-buy" src="imgs/ffocusmk2-thumnail-buy.jpg" alt="fordfocusmk2">
                <table width="200">
                    <tbody>
                      <tr>
                        <th scope="row">Year;</th>
                        <td>2006</td>
                      </tr>
                      <tr>
                        <th scope="row" >Condtition</th>
                        <td style="color: orange;">Good</td>
                      </tr>
                      <tr>
                        <th scope="row">Price</th>
                        <td style="color: green;">3500$</td>
                      </tr>
                    </tbody>
                  </table>
                          <br>
                          <button>Buy It NOW!</button>
                </article><!--end of article section-->

            <article class="article2">
            <header class="articleHeader">
            <h1><a href="articles/fordfocusmk3.html">Buy Ford Focus MK3</a></h1> 
            </header> <!--end of article header-->

            <img class="thumbnail-buy" src="imgs/ffocusmk3_thumbnail-buy.jpg" alt="img">
            <table width="200">
                <tbody>
                  <tr>
                    <th scope="row">Year;</th>
                    <td>2013</td>
                  </tr>
                  <tr>
                    <th scope="row">Condtition</th>
                    <td style="color: green">Excelent!</td>
                  </tr>
                  <tr>
                    <th scope="row">Price</th>
                    <td style="color: green;">5500$</td>
                  </tr>
                </tbody>
              </table>
                      <br>
                      <button>Buy It NOW!</button>
            </article><!--end of article3section-->
        </main><!--end of content section-->

        <aside class="mainSidebar">
            <header class="sidebarHeader">
                <h3>Categories</h3>
               <?php getCategories($conn); ?>
            </header> <!--end of sidebarHeader section-->
        </aside><!--end of mainSidebar section-->

        <aside class="secondSidebar">
            <header class="sidebarHeader">
                <h3>Find Your Closest Ford Dealer</h3>
                </header> <!--end of sidebarHeader section-->
                <?php  getLocation(); ?>
        </aside><!--end of secondSidebar section-->
</body>
</html>