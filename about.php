<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/style1.css">
    <title>About Ford</title>
</head>
        <header class="mainHeader">
        <?php require 'includes/mainNav.inc.php';
              include 'includes/functions.php';?>
        </header>

        <main class="articleContent">
            <article class="fullArticle">
            <header class="articleHeader">
                <h1 class="mainH1"><a href="about.php">Ford </a></h1>
            </header> 
            <br class="clrflt">

            <h3>Ford Logo</h3>

            <img class="bigPic" src="imgs/ford_logo.png" alt="fordlogo">
            <h3>About Ford</h3>
            <p>Ford Motor Company, commonly known as Ford, is an American multinational automaker that has its main headquarters in Dearborn, Michigan, a suburb of Detroit. It was founded by Henry Ford and incorporated on June 16, 1903. The company sells automobiles and commercial vehicles under the Ford brand, and most luxury cars under the Lincoln brand. Ford also owns Brazilian SUV manufacturer Troller, an 8% stake in Aston Martin of the United Kingdom and a 32% stake in Jiangling Motors. It also has joint-ventures in China (Changan Ford), Taiwan (Ford Lio Ho), Thailand (AutoAlliance Thailand), Turkey (Ford Otosan), and Russia (Ford Sollers). The company is listed on the New York Stock Exchange and is controlled by the Ford family; they have minority ownership but the majority of the voting power.</p>

            <p>Ford introduced methods for large-scale manufacturing of cars and large-scale management of an industrial workforce using elaborately engineered manufacturing sequences typified by moving assembly lines; by 1914, these methods were known around the world as Fordism. Ford's former UK subsidiaries Jaguar and Land Rover, acquired in 1989 and 2000 respectively, were sold to Tata Motors of India in March 2008. Ford owned the Swedish automaker Volvo from 1999 to 2010.[7] In 2011, Ford discontinued the Mercury brand, under which it had marketed entry-level luxury cars in the United States, Canada, Mexico, and the Middle East since 1938.</p>

            <p>Ford is the second-largest U.S.-based automaker (behind General Motors) and the fifth-largest in the world (behind Toyota, VW, Hyundai-Kia and General Motors) based on 2015 vehicle production. At the end of 2010, Ford was the fifth largest automaker in Europe.[8] The company went public in 1956 but the Ford family, through special Class B shares, still retain 40 percent voting rights.[9][4] During the financial crisis at the beginning of the 21st century, it was close to bankruptcy, but it has since returned to profitability.[10] Ford was the eleventh-ranked overall American-based company in the 2018 Fortune 500 list, based on global revenues in 2017 of $156.7 billion.[11] In 2008, Ford produced 5.532 million automobiles[12] and employed about 213,000 employees at around 90 plants and facilities worldwide.</p>
            <h3>Find Your Closest Ford Dealer</h3>
        <?php  getLocation(); ?>

        </article>
        </main>
        <aside class="mainSidebar">
            <header class="sidebarHeader">
                <h3>Categories</h3>
               <?php getCategories(); ?>
            </header> 
        </aside>

        <aside class="secondSidebar">
            <header class="sidebarHeader">
                <h3>Find Your Closest Ford Dealer</h3>
                </header> 
                <?php  getLocation(); ?>
        </aside>
        </main>
<?php require 'footer.php'; ?>
