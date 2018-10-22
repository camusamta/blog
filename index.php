<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width" />
    <title>Code & coffee blog</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet">
  </head>
  <body>
  <div class="begrudging-wrapper">

  <header>
    <!-- <h1>coffee<br/>
      <span style="background-color:#fff; color: #E04866; line-height:1.6; border-radius:2px; padding:0 4px 0 4px; font-weight:400">&&</span></br> code</h1> -->
    <h1>coffee <br/>
      <span style="font-weight:400">&&</span></br> <span style="background-color:#fff; color: #E04866; line-height:1.6; border-radius:2px; padding:0 4px 0 4px;">c<span>o</span><span>d</span><span>e</span><span id="cursor-anim">|</span></span></h1>
    <!-- <p id="subhead">(code && coffee)</p> -->

       <nav>
         <a href="#"><i class="fas fa-bars"></i></a>
       </nav>
  </header>

 <main>

    <!-- <h2 class="temp">Latest articles</h2> -->
    <article class="card white">

    <i class="fas fa-code"></i>

    <?php

    $date = date('dS Y');
    $monthsArray = [January, February, March, April, May, June, July, August, September, October, November, December];
    $currMonth = date('F');


    for ($i=0;$i<12;$i++) {

    if ($monthsArray[$i] == $currMonth) {

    $upDate = $monthsArray[$i - 1];

    };

    };

    ?>

    <time><?php echo $upDate , '&nbsp', $date ?> </time>
    <h2 class="white-heading">How does the inspect tool work?</h2>
    <p>We take a closer look at the oft-used browser-based developer tool</p>

    </article>

    <article class="card white">

    <i class="fas fa-coffee"></i>
    <time>September 6th</time>
    <h2 class="white-heading">Is the Hario V60 the best way to make coffee?</h2>
    <p>Using a pour-over brewing method gives you more flavour flexibility</p>

    </article>

    <article class="card white">

    <i class="fas fa-code"></i>
    <time>September 6th</time>
    <h2 class="white-heading">What happens when you click a link?</h2>
    <p>How hyperlinks are the literal and philosophical backbone of the web</p>

    </article>

    <article class="card white">

    <i class="fas fa-code"></i>
    <time>September 2nd</time>
    <h2 class="white-heading">Why is Atom the superior IDE?</h2>
    <p>We take a closer look at the oft-used browser-based developer tool</p>

    </article>

    <article class="card white">

    <i class="fas fa-coffee"></i>
    <time>September 6th</time>
    <h2 class="white-heading">Is the Hario V60 the best way to make coffee?</h2>
    <p>Using a pour-over brewing method gives you more flavour flexibility</p>

    </article>

 </main>

</div>
<script>console.log('hmm');</script>
  </body>
</html>
