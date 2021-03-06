<!DOCTYPE html><html class="menu">
<html>

<head>



  <style>

   @import url(http://fonts.googleapis.com/css?family=Meddon);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300);
@import url(http://weloveiconfonts.com/api/?family=entypo);

/* entypo */
[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
}

body, ul, li {
  margin: 0;
  padding: 0;
}

body {
  background-color: #ccc;
}

header {
  width: 100%;
  height: 70px;
  box-sizing: border-box;
  background-color: #373948;
  position: fixed;
  top: 0px;
  left: 0px;
  padding: 0px 0px 0px 30px;
}

header h1 {
  float: left;
  margin: 5px 0px;
  color: white;
  font-family: 'Meddon', cursive;
}

header nav ul {
  height: 70px;
  float: right;
}

header nav ul li {
  height: 70px;
  display: inline-block;
}

header nav ul li a {
  height: 30px;
  display: block;
  padding: 17px 20px;
  color: white;
  font-size: 2.2em;
  text-decoration: none;
  border-top: 3px solid #373948;
  border-bottom: 3px solid #373948;
  -webkit-transition: color 1s ease;
  -moz-transition: color 1s ease;
  -o-transition: color 1s ease;
  transition: color 1s ease;
}

header nav ul li a:hover{
  color: #373948;
}

header nav ul li a.active{
  height: 33px;
  border-bottom: none;
}

header nav ul li a.link-1 { background-color: #00c0e4; }
header nav ul li a.link-2 { background-color: #e6567a; }
header nav ul li a.link-3 { background-color: #eac14d; }
header nav ul li a.link-4 { background-color: #5bd999; }


section {
  width: 100%;
  height: 800px;
  box-sizing: border-box;
  padding: 20px;
  overflow: hidden;
}

section#home { background-color: #00c0e4; margin-top: 70px;}
section#about { background-color: #eac14d; }
section#clients { background-color: #e6567a; }
section#contact-us { background-color: #5bd999; }

section h2 {
  color: white;
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  font-size: 3em;
  margin: 0px;
}

section .illustration {
  width: 100%;
  height: 240px;
  border: 3px solid white;
  background: url(http://placekitten.com/g/800/240) no-repeat;
  margin-top: 15px;
}

section p {
  color: white;
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  font-size: 1em;
}

    </style>

<script>
   $(document).ready(function() {

  // On click, remove class on active element, add it to the new one

  $('header nav a').click(function(e) {

    $('header nav a.active').removeClass('active');
    $(this).addClass('active');

    // Scroll to anchor

    $('html,body').animate({scrollTop: $($(this).attr('href')).offset().top - 70},'slow');

    e.preventDefault();
    return false;

  });

  // On scroll, remove class on active element and add it to the new one

  $(document).scroll(function() {

     var position = Math.floor($(this).scrollTop() / 800) + 1;

     $('header nav a.active').removeClass('active');
     $('header nav a.link-' + position).addClass('active');

  });

});
    </script>


</head>
<body>

<header>
  <h1>Acme</h1>
  <nav role='navigation'>
    <ul>
      <li><a class="link-1 entypo-home active" href="#home"></a></li>
       <li><a class="link-2 entypo-picture" href="#clients"></a></li>
      <li><a class="link-3 entypo-user" href="#about"></a></li>
      <li><a class="link-4 entypo-mail" href="#contact-us"></a></li>
    </ul>
  </nav>
</header>

<section id="home">
  <h2>Home</h2>
  <div class="illustration"></div>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis diam id nulla dictum rhoncus. Praesent interdum, diam sit amet pretium fermentum, libero lacus porttitor justo, vitae molestie velit justo et est. Sed ut urna aliquet leo ornare viverra eu a est. Vivamus dignissim nisl sed metus hendrerit scelerisque. Nam facilisis velit id velit congue vitae venenatis orci tempor. Nam vel est id orci feugiat rhoncus. Duis tempus lectus non urna aliquam mollis. In at lacinia eros. Nam sed lorem est.<br/><br/>

Nullam condimentum felis eu quam molestie sit amet dignissim justo tempus. Mauris ultricies massa aliquam lorem viverra in tristique purus fermentum. Mauris dictum erat eu ipsum rhoncus laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id orci ante. <br/><br/>Fusce ut risus a ligula scelerisque fermentum porttitor a tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent sodales lobortis neque, id convallis purus pharetra a. Nullam aliquam tristique urna vel molestie. Vestibulum eu nisl magna.</p>
</section>
<section id="clients">
  <h2>Clients</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel est id orci feugiat rhoncus. Duis tempus lectus non urna aliquam mollis. In at lacinia eros. Nam sed lorem est. Vestibulum placerat lorem in massa facilisis et mattis lacus mollis. Morbi nec dui ac magna dignissim euismod.Nullam condimentum felis eu quam molestie sit amet dignissim justo tempus. Mauris ultricies massa aliquam lorem viverra in tristique purus fermentum. Mauris dictum erat eu ipsum rhoncus laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id orci ante. <br/><br/>Fusce ut risus a ligula scelerisque fermentum porttitor a tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent sodales lobortis neque, id convallis purus pharetra a. Nullam aliquam tristique urna vel molestie. Vestibulum eu nisl magna. Suspendisse justo sem, dapibus eu dapibus vitae, mollis nec tellus. Duis volutpat ligula metus. <br/><br/>Vivamus placerat, purus et aliquet vehicula, leo odio tempor dui, quis interdum augue leo quis quam. Maecenas facilisis viverra risus, id interdum sem elementum nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
</section>
<section id="about">
  <h2>About</h2>
  <div class="illustration"></div>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel est id orci feugiat rhoncus. Duis tempus lectus non urna aliquam mollis. In at lacinia eros. Nam sed lorem est. Vestibulum placerat lorem in massa facilisis et mattis lacus mollis. Morbi nec dui ac magna dignissim euismod.<br/><br/>

Nullam condimentum felis eu quam molestie sit amet dignissim justo tempus. Mauris ultricies massa aliquam lorem viverra in tristique purus fermentum. Mauris dictum erat eu ipsum rhoncus laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id orci ante. <br/><br/>Nullam aliquam tristique urna vel molestie. Vestibulum eu nisl magna. Suspendisse justo sem, dapibus eu dapibus vitae, mollis nec tellus. Duis volutpat ligula metus. <br/><br/>Vivamus placerat, purus et aliquet vehicula, leo odio tempor dui, quis interdum augue leo quis quam. Maecenas facilisis viverra risus, id interdum sem elementum nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum placerat lorem in massa facilisis et mattis lacus mollis. Morbi nec dui ac magna dignissim euismod.Nullam condimentum felis eu quam molestie sit amet dignissim justo tempus. Mauris ultricies massa aliquam lorem viverra in tristique purus fermentum. </p>
</section>
<section id="contact-us">
  <h2>Contact Us</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis diam id nulla dictum rhoncus. Praesent interdum, diam sit amet pretium fermentum, libero lacus porttitor justo, vitae molestie velit justo et est. Sed ut urna aliquet leo ornare viverra eu a est. Vivamus dignissim nisl sed metus hendrerit scelerisque. Nam facilisis velit id velit congue vitae venenatis orci tempor. Nam vel est id orci feugiat rhoncus. Duis tempus lectus non urna aliquam mollis. In at lacinia eros. Nam sed lorem est. Vestibulum placerat lorem in massa facilisis et mattis lacus mollis. Morbi nec dui ac magna dignissim euismod.<br/><br/>

Nullam condimentum felis eu quam molestie sit amet dignissim justo tempus. Mauris ultricies massa aliquam lorem viverra in tristique purus fermentum. Mauris dictum erat eu ipsum rhoncus laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id orci ante. <br/><br/>Fusce ut risus a ligula scelerisque fermentum porttitor a tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent sodales lobortis neque, id convallis purus pharetra a. Nullam aliquam tristique urna vel molestie. Vestibulum eu nisl magna. Suspendisse justo sem, dapibus eu dapibus vitae, mollis nec tellus. Duis volutpat ligula metus. Vivamus placerat, purus et aliquet vehicula, leo odio tempor dui, quis interdum augue leo quis quam. Maecenas facilisis viverra risus, id interdum sem elementum nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
</section>


</body>
</html>
