<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Portfolio</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,400,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>

    <div class="portfolio">
      <div class = "name">
        <h1>Nikita Novikov</h1>
        <h2>Web developer</h2>
      </div>
      <div class="info">
        <div class="dvig">
       <i class = "fa fa-map-marker-alt"><span class="ot">Ukraine, Zaporozhye</span></i>
       <i class = "fa fa-envelope"><span class="ot">nikitosnov@gmail.com</span></i>
       <i class = "fab fa-telegram-plane"><span class="ot">Make_up_your_mind</span></i>
       </div>
      </div>
      <div class="works">
          <h2>Examples my of knowledge</h2>
        <ul>
          <li><a target="_blank" href="https://vast-gorge-79544.herokuapp.com/">Site on Node.js + Angular</a></li>
          <li><a target="_blank" href="https://salty-badlands-30495.herokuapp.com/">Site on Node.js + React.js</a></li>
          <li><a target="_blank" href="https://site-mongodb-passport.herokuapp.com/">Site on Node.js + Passport.js</a></li>
          <li><a target="_blank" href="https://php-test-nik.herokuapp.com/">Site on PHP + Ajax</a></li>
       </ul>
      </div>
    </div>

    <div class="about">
     <div class="inf">
       <h2 class = "ab">Hello! I’m Nikita Novikov. I study at the Zaporozhye National University on the 3rd year of software engineering. A junior Web Developer  specializing in front-end and back-end development.
Experienced with all stages of the development cycle for dynamic web projects.Having a good knowledge including advanced <span class="soft">Node.js (Express), PHP (Laravel), PostgreSQL, MongoDB, Ajax, Angular JS, React.js, JavaScript, JQuery.</span></h2>
     </div>
    </div>
       <h2 class="em">Contact Me</h2>
<div class="contactMe">
<div class="fo">
    <form id = "myForm" class="form">
      <div class="input">
        <input autocomplete="off" required type="text" id = "name" name="name" placeholder="Your name">
      </div>
      <div class="input">
        <input autocomplete="off" required type="text" id = "subject" name="subject" placeholder="Your subject">
      </div>
      <div class="input">
        <input autocomplete="off" required type="email" id = "email" name="email" placeholder="Your email">
      </div>
      <div class="textarea">
        <textarea autocomplete="off" required type="text" id = "message" name="message" placeholder="Your message"></textarea>
      </div>
      <div class="send">
        <button class = "btn" type="submit" name="button">Send</button>

		<p id = "Okay" class="Okay">Okay</p>
      </div>

    </form>
</div>

</div>

<script>
  $("#myForm").submit(function(event) {

    event.preventDefault();
    $.post('sendToAdmin.php', {'name':$('#name').val(), 'email':$('#email').val(), 'subject':$('#subject').val(), 'message':$('#message').val()},
                      function(data) {
                          //alert(data);
						  $("#Okay").css("display","block");
                        setTimeout(function(){ $('#Okay').hide(); }, 3000);

                        setTimeout(function(){
                        $("#name").val('');
                        $("#subject").val('');
                        $("#email").val('');
                        $("#message").val(''); }, 3000);

                        setTimeout(function(){ $('#Okay').show(); }, 500);
                });
          });
</script>


<script>
  $(document).ready(function () {
   $('input,textarea').focus(function(){
     $(this).data('placeholder',$(this).attr('placeholder'))
     $(this).attr('placeholder','');
   });

   $('input,textarea').blur(function(){
     $(this).attr('placeholder',$(this).data('placeholder'));
   });
   });
 </script>

  </body>

</html>
