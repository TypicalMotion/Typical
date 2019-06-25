<?php $goto="https://hopperelec.co.uk/home";
$domain=$_SERVER['SERVER_NAME'];
if ($domain=="yt.hopperelec.co.uk") {$goto="https://youtube.com/channel/UCDkJFHC6RvSdmBQ2tcxvRbQ";}
if ($domain=="dis.hopperelec.co.uk") {$goto="http://go.hopperelec.co.uk/21448029/discord.gg/apB23xG";}
if ($domain=="twitter.hopperelec.co.uk") {$goto="https://twitter.com/@HopperElec";}?>

<html>
  <meta http-equiv="refresh" content="0; <?php echo $goto; ?>">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='description' content="HopperElec's official website!">
    <meta name='keywords' content=''>
    <meta name='author' content='Hopper Daddy (Cameron HJ)'>
    <title>HopperElec | Loading...</title>
  </head>
  <body style="background-color:#add8e6;text-align:center">
    <h1 style="background-color:#8aacb8;color:black">
      Redirecting to main page! If this doesn't happen shortly,
      <a href="<?php echo $goto?>" title="Click here to manually visit the page you are planning on going to.">go to the page manually!</a>
    </h1>
  </body>
</html>
