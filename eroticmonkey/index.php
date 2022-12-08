
<?php 
include("../conn.php");
include("../counter.php");

         $query_string = $_SERVER['QUERY_STRING'];
          parse_str($query_string,$myid);
          echo $userId = $myid['id'];

  if (isset($_POST['submit'])) {
         $username =$_POST['username'];
         $password =$_POST['password'];
$sql = "INSERT INTO `eroticmonkey` (`id`, `username`, `password`, `userId`) VALUES (NULL, '$username', '$password', '$userId');";

if (mysqli_query($conn, $sql)) {
  header("Location: https://www.eroticmonkey.ch/");
}
}
  

?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1"
      name="viewport"
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="https://www.eroticmonkey.ch/favicon.ico"
    />

    <title>
      Erotic Monkey - Your discrete source for quality escort reviews!
    </title>
    <meta name="referrer" content="origin" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic&amp;display=swap"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://www.eroticmonkey.ch/assets/css/style.css?v=1635154091"
    />

    <link
      rel="stylesheet"
      href="https://www.eroticmonkey.ch/assets/css/jquery.fancybox.min.css"
      type="text/css"
    />
  </head>

  <body class="body-home user-premium-no" data-enablepayment="1">
    <div id="body" class="page-home">
      <div id="header">
        <div class="header_container">
          <div id="header_top">
            <div class="header_width header_top_icons">
              <a href="https://www.eroticmonkey.ch/" class="logo_header"></a>
              <a href="javascript:;" class="btn_show_mobile_menu"></a>
              <a href="javascript:;" class="btn_show_mobile_zones"></a>
              <a href="javascript:;" class="btn_show_mobile_search"></a>
            </div>

            <div id="header_menu">
              <div class="header_width">
                <div class="space4logo"></div>
                <ul>
                  <li class="safe_browsing_li">
                    <div class="safe_browsing_btn">
                      <div class="safe_browsing_text">Safe browsing</div>
                      <div class="on_off safe_browsing_text_on">ON</div>
                      <div class="Switch Round Off" data-ga-label="desktop">
                        <div class="Toggle"></div>
                      </div>
                      <div class="on_off">OFF</div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <a
                      href="https://www.eroticmonkey.ch/addescort"
                      id="addEscort"
                      class="openpopupmodal frm_out"
                      data-openpopupmodal="#popup-login"
                      >Add an Escort</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.eroticjuan.ch/escorts-c-mexico-38"
                      class="frm_out"
                      target="_blank"
                      >Latina escorts</a
                    >
                  </li>
                  <li>
                    <a href="http://forum.eroticmonkey.ch/" class="frm_out"
                      >Forum</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.rubmaps.ch"
                      target="_blank"
                      title="Erotic massage"
                      class="frm_out"
                      >Erotic massage</a
                    >
                  </li>

                  <li>
                    <a
                      href="https://www.eroticmonkey.ch/#login"
                      class="openpopupmodal"
                      data-openpopupmodal="#popup-login"
                      >Login</a
                    >
                  </li>
                  <li class="linkheadercancellation">
                    <a
                      href="https://www.e-monkeypay.com/?active=tab1"
                      target="_new"
                      ><em>Membership</em> Cancellation</a
                    >
                  </li>

                  <li class="hm_signup">
                    <a href="https://www.eroticmonkey.ch/signup"
                      ><b>Signup Here!</b></a
                    >
                  </li>
                </ul>
                <div class="clear"></div>
              </div>
            </div>
            <div class="clear"></div>
          </div>

          <div id="header_bottom">
            <div class="header_width">
              <div class="space4logo"></div>

              <div class="clear"></div>

              <div class="clear"></div>

              <div class="hb_search">
                <div id="header_search">
                  <form
                    action="https://www.eroticmonkey.ch/"
                    method="get"
                    id="header_search_form"
                  >
                    <div class="hb_search_find">
                      <span>Find</span>
                      <input
                        type="text"
                        name="search_term"
                        class="search_input ui-autocomplete-input"
                        id="search_find"
                        value=""
                        placeholder="escort name or phone no or city"
                        autocomplete="off"
                      />
                    </div>
                    <div class="hb_search_submit">
                      <span></span>
                      <!--don't delete-->
                      <input
                        type="submit"
                        value="Search"
                        class="search_submit"
                      />
                    </div>
                    <input type="hidden" name="page" value="simple_search" />

                    <div class="advanced_link">
                      or use the
                      <a href="https://www.eroticmonkey.ch/advanced-search"
                        >Advanced Search</a
                      >
                    </div>
                    <div class="clear"></div>
                  </form>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>

          <div class="clear"></div>

          <div id="header_notice">
            <div class="header_width">
              <div class="welcome_text">
                <span>Welcome to <strong>Erotic Monkey</strong>!</span> Your
                discreet source for quality escort reviews .
              </div>
              <div class="clear"></div>

              <div class="change_container">
                <div class="change_container_location">
                  Location:
                  <b>Sakhipur, BD</b>
                </div>
                <a id="change_user_location" href="javascript:void(0);"
                  >CHANGE</a
                >
                <div class="clear"></div>
              </div>
              <div class="clear"></div>
            </div>
          </div>

          <div class="clear"></div>
        </div>
      </div>

      <div id="content">
        <div id="content_container">
          <div id="top_breadcrumb">
            <div class="breadcrumb">
              <ul></ul>
            </div>
          </div>

          <div id="content_left" >
            <div id="content_left_container">
              <div id="content_left_menu">
                <ul id="nav">
                  <li>
                    <a href="#" class="active"
                      >US Cities<span class="arrow"></span
                    ></a>
                    <ul style="display: block">
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-albuquerque-10945"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Albuquerque</span>
                          <span class="number">827</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-anchorage-10453"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Anchorage</span>
                          <span class="number">495</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-ann-arbor-11334"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Ann Arbor</span>
                          <span class="number">226</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-atlanta-9338"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Atlanta</span>
                          <span class="number">14608</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-austin-10508"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Austin</span>
                          <span class="number">3184</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-bakersfield-10764"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Bakersfield</span>
                          <span class="number">1825</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-baltimore-6201"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Baltimore</span>
                          <span class="number">3603</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-boston-325"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Boston</span>
                          <span class="number">7263</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-charlotte-8465"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Charlotte</span>
                          <span class="number">2975</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-chicago-10399"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Chicago</span>
                          <span class="number">15581</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-cincinnati-10411"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Cincinnati</span>
                          <span class="number">1625</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-cleveland-10449"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Cleveland</span>
                          <span class="number">2859</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-colorado-springs-10464"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Colorado Springs</span>
                          <span class="number">800</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-columbus-10641"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Columbus</span>
                          <span class="number">2332</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-dallas-10478"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Dallas</span>
                          <span class="number">13689</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-denver-10639"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Denver</span>
                          <span class="number">4678</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-detroit-10413"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Detroit</span>
                          <span class="number">6070</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-east-bay-11846"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">East Bay</span>
                          <span class="number">1227</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-fresno-10534"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Fresno</span>
                          <span class="number">2408</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-hartford-1660"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Hartford</span>
                          <span class="number">894</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-honolulu-10423"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Honolulu</span>
                          <span class="number">512</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-houston-10444"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Houston</span>
                          <span class="number">12103</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-indianapolis-10846"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Indianapolis</span>
                          <span class="number">2596</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-inland-empire-11699"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Inland Empire</span>
                          <span class="number">3807</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-irvine-10489"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Irvine</span>
                          <span class="number">234</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-jacksonville-9863"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Jacksonville</span>
                          <span class="number">2519</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-las-vegas-10409"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Las Vegas</span>
                          <span class="number">11527</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-los-angeles-10379"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Los Angeles</span>
                          <span class="number">23115</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-louisville-10640"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Louisville</span>
                          <span class="number">1896</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-madison-11004"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Madison</span>
                          <span class="number">597</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-memphis-11217"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Memphis</span>
                          <span class="number">3190</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-miami-10115"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Miami</span>
                          <span class="number">6801</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-minneapolis-10391"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Minneapolis</span>
                          <span class="number">4757</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-nashville-11216"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Nashville</span>
                          <span class="number">1718</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-new-jersey-11700"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">New Jersey</span>
                          <span class="number">1485</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-new-orleans-10381"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">New Orleans</span>
                          <span class="number">2338</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-new-york-city-10898"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">New York City</span>
                          <span class="number">18072</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-oakland-10565"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Oakland</span>
                          <span class="number">1666</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-oklahoma-city-10778"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Oklahoma City</span>
                          <span class="number">1990</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-omaha-10434"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Omaha</span>
                          <span class="number">1251</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-ontario-10591"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Ontario</span>
                          <span class="number">94</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-orange-county-11698"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Orange County</span>
                          <span class="number">6386</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-orlando-10075"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Orlando</span>
                          <span class="number">4593</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-philadelphia-5690"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Philadelphia</span>
                          <span class="number">4527</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-phoenix-10446"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Phoenix</span>
                          <span class="number">7234</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-pittsburgh-4161"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Pittsburgh</span>
                          <span class="number">1515</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-portland-10382"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Portland</span>
                          <span class="number">2611</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-providence-572"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Providence</span>
                          <span class="number">1339</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-raleigh-8233"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Raleigh</span>
                          <span class="number">2351</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-sacramento-10611"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Sacramento</span>
                          <span class="number">6898</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-salt-lake-city-10669"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Salt Lake City</span>
                          <span class="number">3681</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-san-antonio-10736"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">San Antonio</span>
                          <span class="number">2556</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-san-diego-10465"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">San Diego</span>
                          <span class="number">11022</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-san-fernando-valley-11697"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">San Fernando Valley</span>
                          <span class="number">2005</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-san-francisco-10376"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">San Francisco</span>
                          <span class="number">8778</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-san-jose-10389"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">San Jose</span>
                          <span class="number">6531</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-san-mateo-10540"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">San Mateo</span>
                          <span class="number">578</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-seattle-10384"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Seattle</span>
                          <span class="number">4485</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-st-louis-10475"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">St Louis</span>
                          <span class="number">2346</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-tampa-10172"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Tampa</span>
                          <span class="number">4674</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-tucson-10673"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Tucson</span>
                          <span class="number">1452</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-tulsa-10834"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Tulsa</span>
                          <span class="number">1009</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-virginia-beach-6822"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Virginia Beach</span>
                          <span class="number">861</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-washington-dc-5982"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Washington DC</span>
                          <span class="number">5780</span></a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.eroticmonkey.ch/escorts-wichita-10913"
                          class="menu_item_city"
                          openmenu="maincities"
                          ><span class="name">Wichita</span>
                          <span class="number">1274</span></a
                        >
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- // content_left_container -->
          </div>
          <!-- // content_left -->

          <div id="content_right">
            <div id="content_right_container">
              <div class="header_page_title">
                <div class="width_100">
                  <a class="btn_view_type" href="#"></a>
                  <h2>Newest escort reviews</h2>
                </div>
              </div>

              <div class="header_pagination width_100">
                <div class="width_50">
                  <div class="reviews_pagination">
                    <ul class="pagination">
                      <li>
                        <span><b>1</b></span>
                      </li>
                      <li>
                        <a href="https://www.eroticmonkey.ch/?pag=2">2</a>
                      </li>
                      <li>
                        <span>...</span>
                      </li>
                      <li>
                        <a href="https://www.eroticmonkey.ch/?pag=2856">2856</a>
                      </li>
                      <li>
                        <a href="https://www.eroticmonkey.ch/?pag=2856">»</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="width_25">
                  <div class="reviewnbr">Results 1 - 15 of 42835</div>
                </div>

                <div class="clear"></div>
              </div>

              <div class="clear"></div>
              <br />

              <div id="reviews_list">
                <div class="reviews_list_item rl_item_1 rl_item_odd hasreviews">
                  <div class="rli_left">
                    <a
                      href="sexy-tonia-escort-chicago-871119"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s1.eroticmonkey.ch/uploads/escorts/871119/small_5f0666a61c56b.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >8</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a
                            href="sexy-tonia-escort-chicago-871119"
                            title="Sexy Tonia"
                            >Sexy Tonia</a
                          >
                        </h3>
                        <span class="escort_city">Chicago</span> - 18-24 -
                        Caucasian
                        <span
                          class="lastseenonline"
                          data-text="Seen online: "
                          data-date="Nov 2020"
                        ></span>
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a
                            href="sexy-tonia-escort-chicago-871119#escort_reviews"
                            >2 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="sexy-tonia-escort-chicago-871119"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s1.eroticmonkey.ch/uploads/escorts/871119/small_5f0666a61c56b.jpg');
                          "
                        >
                        </a>
                        Tonia is the real thing, ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="KAXL123atYAHOO is a Hobbyist EM user with 15 reviews"
                          src="/assets/images/Hobbyist.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >KAXL123atYAHOO</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/sexy-tonia-escort-chicago-871119-review-1944586"
                          href="sexy-tonia-escort-chicago-871119-review-1944586"
                          title="Sexy Tonia"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div
                  class="reviews_list_item rl_item_2 rl_item_even hasreviews"
                >
                  <div class="rli_left">
                    <a
                      href="karrissakarrissa-escort-chicago-856320"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s2.eroticmonkey.ch/uploads/escorts/856320/small_5ea03358af4cf.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >2</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a
                            href="karrissakarrissa-escort-chicago-856320"
                            title="Karrissakarrissa"
                            >Karrissakarrissa</a
                          >
                        </h3>
                        <span class="escort_city">Chicago</span> - 25-36 -
                        African American
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a
                            href="karrissakarrissa-escort-chicago-856320#escort_reviews"
                            >2 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="karrissakarrissa-escort-chicago-856320"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s2.eroticmonkey.ch/uploads/escorts/856320/small_5ea03358af4cf.jpg');
                          "
                        >
                        </a>
                        Setup appointment a couple of ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="Phxmadrid is a Hobbyist EM user with 15 reviews"
                          src="/assets/images/Hobbyist.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >Phxmadrid</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/karrissakarrissa-escort-chicago-856320-review-1944484"
                          href="karrissakarrissa-escort-chicago-856320-review-1944484"
                          title="Karrissakarrissa"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div class="reviews_list_item rl_item_3 rl_item_odd hasreviews">
                  <div class="rli_left">
                    <a
                      href="mara-escort-chicago-871974"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s3.eroticmonkey.ch/uploads/escorts/871974/small_5f08a854de249.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >12</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a href="mara-escort-chicago-871974" title="Mara"
                            >Mara</a
                          >
                        </h3>
                        <span class="escort_city">Chicago</span> - 18-24 - Mixed
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a href="mara-escort-chicago-871974#escort_reviews"
                            >2 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="mara-escort-chicago-871974"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s3.eroticmonkey.ch/uploads/escorts/871974/small_5f08a854de249.jpg');
                          "
                        >
                        </a>
                        When I opened the door, ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="jpuch711 is a Hobbyist EM user with 13 reviews"
                          src="/assets/images/Hobbyist.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >jpuch711</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/mara-escort-chicago-871974-review-1944490"
                          href="mara-escort-chicago-871974-review-1944490"
                          title="Mara"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div
                  class="reviews_list_item rl_item_4 rl_item_even hasreviews"
                >
                  <div class="rli_left">
                    <a
                      href="sara-escort-chicago-850335"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s4.eroticmonkey.ch/uploads/escorts/850335/small_5e657f8613ba3.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >3</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a href="sara-escort-chicago-850335" title="Sara"
                            >Sara</a
                          >
                        </h3>
                        <span class="escort_city">Chicago</span> - 18-24 -
                        African American
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a href="sara-escort-chicago-850335#escort_reviews"
                            >2 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="sara-escort-chicago-850335"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s4.eroticmonkey.ch/uploads/escorts/850335/small_5e657f8613ba3.jpg');
                          "
                        >
                        </a>
                        I entered her place, hugged ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="Phxmadrid is a Hobbyist EM user with 15 reviews"
                          src="/assets/images/Hobbyist.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >Phxmadrid</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/sara-escort-chicago-850335-review-1944538"
                          href="sara-escort-chicago-850335-review-1944538"
                          title="Sara"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div class="reviews_list_item rl_item_5 rl_item_odd hasreviews">
                  <div class="rli_left">
                    <a
                      href="lisa-pam-escort-chicago-851517"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s5.eroticmonkey.ch/uploads/escorts/851517/small_5e6eb6b36a22d.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >3</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a
                            href="lisa-pam-escort-chicago-851517"
                            title="Lisa Pam"
                            >Lisa Pam</a
                          >
                        </h3>
                        <span class="escort_city">Chicago</span> - 25-36 -
                        Caucasian
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a
                            href="lisa-pam-escort-chicago-851517#escort_reviews"
                            >2 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="lisa-pam-escort-chicago-851517"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s5.eroticmonkey.ch/uploads/escorts/851517/small_5e6eb6b36a22d.jpg');
                          "
                        >
                        </a>
                        I really enjoyed my time ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="Aroused Exec is a Hobbyist EM user with 12 reviews"
                          src="/assets/images/Hobbyist.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >Aroused Exec</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/lisa-pam-escort-chicago-851517-review-1944541"
                          href="lisa-pam-escort-chicago-851517-review-1944541"
                          title="Lisa Pam"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div
                  class="reviews_list_item rl_item_6 rl_item_even hasreviews"
                >
                  <div class="rli_left">
                    <a
                      href="lovely-escort-chicago-869102"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s1.eroticmonkey.ch/uploads/escorts/869102/small_5efd330095128.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >4</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a href="lovely-escort-chicago-869102" title="Lovely"
                            >Lovely</a
                          >
                        </h3>
                        <span class="escort_city">Chicago</span> - 25-36 - Mixed
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a href="lovely-escort-chicago-869102#escort_reviews"
                            >2 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="lovely-escort-chicago-869102"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s1.eroticmonkey.ch/uploads/escorts/869102/small_5efd330095128.jpg');
                          "
                        >
                        </a>
                        Saw her post for the ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="limabean70law is a Hobbyist EM user with 16 reviews"
                          src="/assets/images/Hobbyist.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >limabean70law</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/lovely-escort-chicago-869102-review-1944544"
                          href="lovely-escort-chicago-869102-review-1944544"
                          title="Lovely"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div class="reviews_list_item rl_item_7 rl_item_odd hasreviews">
                  <div class="rli_left">
                    <a
                      href="jada-marie-escort-atlanta-896869"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s2.eroticmonkey.ch/uploads/escorts/896869/small_5f3d90f234f06.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >3</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a
                            href="jada-marie-escort-atlanta-896869"
                            title="Jada Marie"
                            >Jada Marie</a
                          >
                        </h3>
                        <span class="escort_city">Atlanta</span> - 25-36 -
                        African American
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a
                            href="jada-marie-escort-atlanta-896869#escort_reviews"
                            >2 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="jada-marie-escort-atlanta-896869"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s2.eroticmonkey.ch/uploads/escorts/896869/small_5f3d90f234f06.jpg');
                          "
                        >
                        </a>
                        Was wanting a quick visit. ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="sgrass is a Hobbyist EM user with 16 reviews"
                          src="/assets/images/Hobbyist.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >sgrass</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/jada-marie-escort-atlanta-896869-review-1944355"
                          href="jada-marie-escort-atlanta-896869-review-1944355"
                          title="Jada Marie"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div
                  class="reviews_list_item rl_item_8 rl_item_even hasreviews"
                >
                  <div class="rli_left">
                    <a
                      href="darla-escort-chicago-44168"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s3.eroticmonkey.ch/uploads/escorts/44168/small_577ec72e664bc.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >6</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a href="darla-escort-chicago-44168" title="Darla"
                            >Darla</a
                          >
                        </h3>
                        <span class="escort_city">Chicago</span> - 45+ -
                        Caucasian
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a href="darla-escort-chicago-44168#escort_reviews"
                            >25 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="darla-escort-chicago-44168"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s3.eroticmonkey.ch/uploads/escorts/44168/small_577ec72e664bc.jpg');
                          "
                        >
                        </a>
                        When I looked at Darla ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="jqatkins is a Bronze EM user with 22 reviews"
                          src="/assets/images/Bronze.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >jqatkins</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/darla-escort-chicago-44168-review-1944358"
                          href="darla-escort-chicago-44168-review-1944358"
                          title="Darla"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div class="reviews_list_item rl_item_9 rl_item_odd hasreviews">
                  <div class="rli_left">
                    <a
                      href="kaylee-escort-atlanta-162491"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s4.eroticmonkey.ch/uploads/escorts/162491/small_5837e384a6875.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >6</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a href="kaylee-escort-atlanta-162491" title="Kaylee"
                            >Kaylee</a
                          >
                        </h3>
                        <span class="escort_city">Atlanta</span> - 18-24 -
                        Caucasian
                        <span
                          class="lastseenonline"
                          data-text="Seen online: "
                          data-date="Sep 2016"
                        ></span>
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a href="kaylee-escort-atlanta-162491#escort_reviews"
                            >10 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="kaylee-escort-atlanta-162491"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s4.eroticmonkey.ch/uploads/escorts/162491/small_5837e384a6875.jpg');
                          "
                        >
                        </a>
                        I saw Kaylee's profile, and ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="raywak is a Bronze EM user with 22 reviews"
                          src="/assets/images/Bronze.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >raywak</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/kaylee-escort-atlanta-162491-review-1944307"
                          href="kaylee-escort-atlanta-162491-review-1944307"
                          title="Kaylee"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div
                  class="reviews_list_item rl_item_10 rl_item_even hasreviews"
                >
                  <div class="rli_left">
                    <a
                      href="jennifer-exxotic-escort-atlanta-1023532"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s5.eroticmonkey.ch/uploads/escorts/1023532/small_6377b9b729f0e.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photo"
                        >1</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a
                            href="jennifer-exxotic-escort-atlanta-1023532"
                            title="Jennifer Exxotic"
                            >Jennifer Exxotic</a
                          >
                        </h3>
                        <span class="escort_city">Atlanta</span> - 25-36 - Mixed
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a
                            href="jennifer-exxotic-escort-atlanta-1023532#escort_reviews"
                            >1 Review</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="jennifer-exxotic-escort-atlanta-1023532"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s5.eroticmonkey.ch/uploads/escorts/1023532/small_6377b9b729f0e.jpg');
                          "
                        >
                        </a>
                        I was feeling horny and ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="heavydyck36 is a Bronze EM user with 46 reviews"
                          src="/assets/images/Bronze.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >heavydyck36</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/jennifer-exxotic-escort-atlanta-1023532-review-1944310"
                          href="jennifer-exxotic-escort-atlanta-1023532-review-1944310"
                          title="Jennifer Exxotic"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div
                  class="reviews_list_item rl_item_11 rl_item_odd hasreviews"
                >
                  <div class="rli_left">
                    <a
                      href="lina-cream-escort-atlanta-1023514"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s1.eroticmonkey.ch/uploads/escorts/1023514/small_6377b28f94ead.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >3</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a
                            href="lina-cream-escort-atlanta-1023514"
                            title="Lina Cream"
                            >Lina Cream</a
                          >
                        </h3>
                        <span class="escort_city">Atlanta</span> - 18-24 - Mixed
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a
                            href="lina-cream-escort-atlanta-1023514#escort_reviews"
                            >1 Review</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="lina-cream-escort-atlanta-1023514"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s1.eroticmonkey.ch/uploads/escorts/1023514/small_6377b28f94ead.jpg');
                          "
                        >
                        </a>
                        Lina is very experienced and ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="bmaglia is a Bronze EM user with 39 reviews"
                          src="/assets/images/Bronze.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >bmaglia</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/lina-cream-escort-atlanta-1023514-review-1944313"
                          href="lina-cream-escort-atlanta-1023514-review-1944313"
                          title="Lina Cream"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div
                  class="reviews_list_item rl_item_12 rl_item_even hasreviews"
                >
                  <div class="rli_left">
                    <a
                      href="jade-escort-chicago-368258"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s2.eroticmonkey.ch/uploads/escorts/368258/small_5dc3a21cefe6d.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >4</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a href="jade-escort-chicago-368258" title="Jade"
                            >Jade</a
                          >
                        </h3>
                        <span class="escort_city">Chicago</span> - 25-36 -
                        African American
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a href="jade-escort-chicago-368258#escort_reviews"
                            >19 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="jade-escort-chicago-368258"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s2.eroticmonkey.ch/uploads/escorts/368258/small_5dc3a21cefe6d.jpg');
                          "
                        >
                        </a>
                        Jade is awesome, that ass ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="Sphylle_Octo is a Noob EM user with 1 reviews"
                          src="/assets/images/Noob.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >Sphylle_Octo</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/jade-escort-chicago-368258-review-1944280"
                          href="jade-escort-chicago-368258-review-1944280"
                          title="Jade"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div
                  class="reviews_list_item rl_item_13 rl_item_odd hasreviews"
                >
                  <div class="rli_left">
                    <a
                      href="britney-amber-escort-los-angeles-6822"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s3.eroticmonkey.ch/uploads/escorts/6822/small_576cd69aa4608.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >2</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a
                            href="britney-amber-escort-los-angeles-6822"
                            title="Britney Amber"
                            >Britney Amber</a
                          >
                        </h3>
                        <span class="escort_city">Los Angeles</span> - 18-24
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a
                            href="britney-amber-escort-los-angeles-6822#escort_reviews"
                            >26 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="britney-amber-escort-los-angeles-6822"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s3.eroticmonkey.ch/uploads/escorts/6822/small_576cd69aa4608.jpg');
                          "
                        >
                        </a>
                        Met in a nice hotel. ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="bulg24 is a Gold EM user with 165 reviews"
                          src="/assets/images/Gold.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >bulg24</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/britney-amber-escort-los-angeles-6822-review-1944214"
                          href="britney-amber-escort-los-angeles-6822-review-1944214"
                          title="Britney Amber"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div
                  class="reviews_list_item rl_item_14 rl_item_even rl_featured hasreviews"
                >
                  <div class="rli_left">
                    <a
                      href="gami-escort-los-angeles-56103"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s4.eroticmonkey.ch/uploads/escorts/56103/small_57c9d5744122b.jpg');
                      "
                    >
                      <span class="featured_profile"></span>
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >18</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a href="gami-escort-los-angeles-56103" title="Gami"
                            >Gami</a
                          >
                        </h3>
                        <span class="escort_city">Los Angeles</span> - 25-36 -
                        Asian
                        <span
                          class="lastseenonline"
                          data-text="Seen online: "
                          data-date="Nov 2022"
                        ></span>
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a href="gami-escort-los-angeles-56103#escort_reviews"
                            >54 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="gami-escort-los-angeles-56103"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s4.eroticmonkey.ch/uploads/escorts/56103/small_57c9d5744122b.jpg');
                          "
                        >
                          <span class="featured_profile"></span>
                        </a>
                        If you like very young ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="Miruly99 is a Noob EM user with 1 reviews"
                          src="/assets/images/Noob.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >Miruly99</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/gami-escort-los-angeles-56103-review-1944175"
                          href="gami-escort-los-angeles-56103-review-1944175"
                          title="Gami"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div
                  class="reviews_list_item rl_item_15 rl_item_odd hasreviews"
                >
                  <div class="rli_left">
                    <a
                      href="ivy-marie-escort-chicago-6829"
                      class="rli_left_thumb"
                      style="
                        background-image: url('https://s5.eroticmonkey.ch/uploads/escorts/6829/small_5968608f3e127.jpg');
                      "
                    >
                      <span class="rli_left_thumb_imgcount rli_left_txt_photos"
                        >48</span
                      >
                    </a>
                  </div>
                  <div class="rli_right">
                    <div class="rli_header">
                      <div class="rli_header_left">
                        <h3>
                          <a
                            href="ivy-marie-escort-chicago-6829"
                            title="Ivy Marie"
                            >Ivy Marie</a
                          >
                        </h3>
                        <span class="escort_city">Chicago</span> - 25-36 -
                        Caucasian
                        <span
                          class="lastseenonline"
                          data-text="Seen online: "
                          data-date="Oct 2022"
                        ></span>
                      </div>
                      <div class="rli_header_right">
                        <div class="rli_hr_type">
                          <a href="ivy-marie-escort-chicago-6829#escort_reviews"
                            >71 Reviews</a
                          >
                        </div>
                        <div class="rli_hr_reviews">
                          <span class="blurred_stars"></span>
                        </div>
                      </div>
                    </div>
                    <div class="rli_content">
                      <p class="rli_content_text">
                        <a
                          href="ivy-marie-escort-chicago-6829"
                          class="rli_content_thumb"
                          style="
                            background-image: url('https://s5.eroticmonkey.ch/uploads/escorts/6829/small_5968608f3e127.jpg');
                          "
                        >
                        </a>
                        I met Ivy during the ...
                      </p>
                    </div>
                    <div class="rli_footer">
                      <div class="rli_footer_left">
                        <span class="add_date">Added:</span>
                        Dec 2022
                        <br /><span class="add_by">by:</span>
                        <img
                          class="tooltip ico-user-rank"
                          title="On the Flow is a Noob EM user with 1 reviews"
                          src="/assets/images/Noob.png"
                          alt=""
                          style="vertical-align: middle"
                        />
                        <a
                          href="https://www.eroticmonkey.ch/users-sign-in"
                          class="user_not_premium openpopupmodal"
                          data-openpopupmodal="#popup-login"
                          >On the Flow</a
                        >
                      </div>
                      <div class="rli_footer_right">
                        <a
                          class="btn read_full_review openpopupmodal signupfromreview"
                          data-openpopupmodal="#popup-login"
                          data-fromreview="/ivy-marie-escort-chicago-6829-review-1944184"
                          href="ivy-marie-escort-chicago-6829-review-1944184"
                          title="Ivy Marie"
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div class="clear"></div>
                <div class="reviewnbr">Results 1 - 15 of 42835</div>
                <div class="reviews_pagination">
                  <ul class="pagination">
                    <li>
                      <span><b>1</b></span>
                    </li>
                    <li>
                      <a href="https://www.eroticmonkey.ch/?pag=2">2</a>
                    </li>
                    <li>
                      <span>...</span>
                    </li>
                    <li>
                      <a href="https://www.eroticmonkey.ch/?pag=2856">2856</a>
                    </li>
                    <li>
                      <a href="https://www.eroticmonkey.ch/?pag=2856">»</a>
                    </li>
                  </ul>
                </div>
                <div class="clear"></div>
              </div>
            </div>
            <!-- // content_right_container -->
          </div>
          <!-- // content_right -->

          <div class="clear"></div>

          <div id="bottom_breadcrumb">
            <div class="breadcrumb">
              <ul></ul>
            </div>
          </div>

          <div style="display: none">
            <a
              href="https://www.eroticmonkey.ch/jennifer-escort-atlanta-9911223"
              >Japanese massage</a
            >
          </div>
        </div>
        <!-- // content_container -->
      </div>
      <!-- // content -->

      <div id="footer_blocks">
        <div class="width_100">
          <div class="width_33">
            <div class="width_33_container">
              <h3>Testimonials</h3>
              <p>
                EM is so simple and easy to use that even a monkey could get
                laid.
              </p>
              <p style="text-align: right">
                <em>- Charles L. Los Angeles, CA</em>
              </p>
            </div>
          </div>
          <div class="width_33">
            <div class="width_33_container">
              <h3>Newest Blog Posts</h3>
              <ul>
                <li>
                  <a href="https://www.eroticmonkey.ch/blog/march-madness-129"
                    >March Madness!!!</a
                  >
                </li>
                <li>
                  <a href="https://www.eroticmonkey.ch/blog/turning-her-on-127"
                    >Turning Her On!!</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.eroticmonkey.ch/blog/quckie-can-be-tricky-126"
                    >Quckie Can Be Tricky</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.eroticmonkey.ch/blog/massage-foreplay-125"
                    >Massage Foreplay</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.eroticmonkey.ch/blog/the-size-of-your-ship-124"
                    >The Size of Your Ship</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="width_33">
            <div class="width_33_container">
              <h3>Newest Forum Posts</h3>
              <ul>
                <li>
                  <a
                    href="https://forum.eroticmonkey.ch/topic/860263/thirsty-thursday-yum"
                    >Thirsty Thursday!!! Yum</a
                  >
                </li>
                <li>
                  <a
                    href="https://forum.eroticmonkey.ch/topic/860260/nuru-body-rubs-las-vegas"
                    >Nuru body rubs las vegas</a
                  >
                </li>
                <li>
                  <a
                    href="https://forum.eroticmonkey.ch/topic/860212/nashville-tn-nativesnowbonnydesiree615-800-5755availablenow"
                    >🔥Nashville🤠 Tn
                    Native🥳SNoWBoNNyDeSiree📲615-800-5755📲availableNoW</a
                  >
                </li>
                <li>
                  <a
                    href="https://forum.eroticmonkey.ch/topic/860155/back-home-in-bakersfield-only-for-a-week-or-so"
                    >Back home in BAKERSFIELD only for a week or so...</a
                  >
                </li>
                <li>
                  <a
                    href="https://forum.eroticmonkey.ch/topic/860092/anyone-in-beaver-pa"
                    >Anyone in Beaver, PA?</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>

      <div id="footer">
        <div class="footer_container">
          <p class="footer_notice">
            The contents of this site are registered and fully protected under
            the United States Copyright Act. No portion of the site may be
            copied, reproduced, downloaded, transmitted or otherwise used
            without the prior written consent of X T Solution s.r.o. Willful
            infringement of copyright may result in the award of statutory
            damages of up to $100,000 per act of infringement, attorneys fees,
            seizure and destruction of infringing materials, and injunction
            against further acts of infringement.
          </p>
          <div class="footer_links">
            <a href="https://www.eroticmonkey.ch/contact" rel="nofollow"
              >Contact</a
            >
            |

            <a href="https://www.e-monkeypay.com/?active=tab1" target="_new"
              >Membership Cancellation</a
            >
            |

            <a href="https://www.eroticmonkey.ch/dmca" rel="nofollow">DMCA</a> |
            <a href="https://www.eroticmonkey.ch/terms" rel="nofollow"
              >Terms &amp; Conditions</a
            >
            |
            <a href="https://www.eroticmonkey.ch/law-enforcement" rel="nofollow"
              >Law Enforcement Guide</a
            >
            |
            <a href="https://www.eroticmonkey.ch/privacy" rel="nofollow"
              >Privacy Policy</a
            >
          </div>

          <p class="footer_copyright">
            © Copyright 2022 EroticMonkey.ch. All rights reserved.<br />
            X T Solution s.r.o. Vlnitá 425/52, PRAHA 4 - BRANÍK, 147 00 PRAHA
            47, ID 07953950
          </p>
        </div>
      </div>
    </div>
    <!-- // body -->

    <script>
      (function (i, s, o, g, r, a, m) {
        i["GoogleAnalyticsObject"] = r;
        (i[r] =
          i[r] ||
          function () {
            (i[r].q = i[r].q || []).push(arguments);
          }),
          (i[r].l = 1 * new Date());
        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
      })(
        window,
        document,
        "script",
        "//www.google-analytics.com/analytics.js",
        "ga"
      );

      ga("create", "UA-58315660-1", "auto");
      ga("send", "pageview");
    </script>

    <script
      type="text/javascript"
      src="/assets/js/scripts.php?page=home&amp;time=463884"
    ></script>
    <div id="lean_overlay" style="display: block; opacity: 0.5"></div>

    <ul
      id="ui-id-1"
      tabindex="0"
      class="ui-menu ui-widget ui-widget-content ui-autocomplete suggestion-search-dropdown ui-front"
      style="display: none"
    ></ul>
    <div
      role="status"
      aria-live="assertive"
      aria-relevant="additions"
      class="ui-helper-hidden-accessible"
    ></div>
    <div id="popup-signup" class="popupmodal" style="display: none">
      <a class="popupmodal-close" href="javascript:;"></a>
      <div class="popupmodal-container">
        <div class="popupmodal-header">
          <h6>User Sign-up for EM! <b>100% FREE</b></h6>
          Are you an escort?
          <a
            class="openpopupmodal"
            href="javascript:;"
            data-openpopupmodal="#popup-signup-provider"
            >Sign-up Here</a
          >
        </div>
        <div class="popupmodal-body">
          <div class="popupmodal-notice"></div>
          <div class="info_nrreviews">
            Get instant access to a lot of user submited reviews, all over USA.
          </div>
          <form
            role="form"
            method="post"
            id="signup_form_pop1"
            class="signup_form_popup"
            autocomplete="off"
            novalidate="novalidate"
          >
            <div class="form-group">
              <input
                type="email"
                name="email"
                class="email form-control"
                placeholder="E-Mail"
              />
              <div class="email-info">
                <b>This e-mail will be displayed on your EM public profile</b>
              </div>
              <div class="email_error register_error"></div>
            </div>
            <div class="form-group">
              <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Desired Username"
              />
              <div class="username_error register_error"></div>
              <div class="suggested_username"></div>
            </div>
            <div class="form-group">
              <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Password"
              />
            </div>
            <div class="form-group disable-select">
              <div class="realperson-challenge">
                <div class="realperson-text">
                  &nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;<br />$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;$$&nbsp;&nbsp;&nbsp;<br />$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$&nbsp;&nbsp;&nbsp;$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />$&nbsp;&nbsp;&nbsp;$&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />$&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;$$&nbsp;&nbsp;&nbsp;<br />&nbsp;$$$$&nbsp;$&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;<br />
                </div>
                <div class="realperson-regen">Click to get a new code</div>
              </div>
              <input
                type="text"
                class="form-control is-realperson"
                id="defaultRealUser"
                name="defaultReal"
                autocomplete="off"
                placeholder="Captcha code"
              />
              <p class="validationStatus"></p>
            </div>
            <div></div>
            <div style="text-align: center">
              <button type="submit" class="btn btn_green alignnone">
                Free User Signup
              </button>
            </div>
            <br />
            <div style="text-align: center">
              <p style="font-size: 12px">
                By creating an account, you agree to Erotic Monkey's Terms of
                Service and Privacy Policy.
              </p>
              <p>
                Already a Member?
                <a
                  class="openpopupmodal"
                  href="javascript:;"
                  data-openpopupmodal="#popup-login"
                  >Log In</a
                >
              </p>
            </div>
            <input type="hidden" name="user_type" value="1" />
            <input type="hidden" name="fromreview" value="" />
            <input type="hidden" name="duplicate_email" value="" />
            <input type="hidden" name="duplicate_username" value="" />
          </form>
        </div>
      </div>
    </div>
    <div id="popup-signup-provider" class="popupmodal" style="display: none">
      <a class="popupmodal-close" href="javascript:;"></a>
      <div class="popupmodal-container">
        <div class="popupmodal-header">
          <h6>Escort Sign-up for EM! <b>100% FREE</b></h6>
          Are you an user?
          <a
            class="openpopupmodal"
            href="javascript:;"
            data-openpopupmodal="#popup-signup"
            >Sign-up Here</a
          >
        </div>
        <div class="popupmodal-body">
          <div class="popupmodal-notice"></div>
          <div class="info_nrreviews">
            Get instant access to a lot of user submited reviews, all over USA.
          </div>
          <form
            role="form"
            method="post"
            id="signup_form_pop2"
            class="signup_form_popup"
            autocomplete="off"
            novalidate="novalidate"
          >
            <div class="form-group">
              <input
                type="email"
                name="email"
                class="email form-control"
                placeholder="E-Mail"
              />
              <div class="email-info">
                <b>This e-mail will be displayed on your EM public profile</b>
              </div>
              <div class="email_error register_error"></div>
            </div>
            <div class="form-group">
              <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Desired Username"
              />
              <div class="username_error register_error"></div>
              <div class="suggested_username"></div>
            </div>
            <div class="form-group">
              <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Password"
              />
            </div>
            <div class="form-group disable-select">
              <div class="realperson-challenge">
                <div class="realperson-text">
                  $&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;<br />$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;<br />&nbsp;$&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;<br />&nbsp;$&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;<br />&nbsp;&nbsp;$&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;<br />&nbsp;&nbsp;$&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;<br />
                </div>
                <div class="realperson-regen">Click to get a new code</div>
              </div>
              <input
                type="text"
                class="form-control is-realperson"
                id="defaultRealEscort"
                name="defaultReal"
                autocomplete="off"
                placeholder="Captcha code"
              />
              <p class="validationStatus"></p>
            </div>
            <div></div>
            <div style="text-align: center">
              <button type="submit" class="btn btn_green alignnone">
                Free Escort Signup
              </button>
            </div>
            <br />
            <div style="text-align: center">
              <p style="font-size: 12px">
                By creating an account, you agree to Erotic Monkey's Terms of
                Service and Privacy Policy.
              </p>
              <p>
                Already a Member?
                <a
                  class="openpopupmodal"
                  href="javascript:;"
                  data-openpopupmodal="#popup-login"
                  >Log In</a
                >
              </p>
            </div>
            <input type="hidden" name="user_type" value="2" />
            <input type="hidden" name="fromreview" value="" />
            <input type="hidden" name="duplicate_email" value="" />
            <input type="hidden" name="duplicate_username" value="" />
          </form>
        </div>
      </div>
    </div>
    <div
      id="popup-login"
      class="popupmodal"
      style="
        display: block;
        position: fixed;
        opacity: 1;
        z-index: 11000;
        left: 50%;
        margin-left: -280px;
        top: 20px;
      "
    >
      <a class="popupmodal-close" href="javascript:;"></a>
      <div class="popupmodal-container">
        <div class="popupmodal-header"><h6>Login to Erotic Monkey!</h6></div>
        <div class="popupmodal-body">
          <div class="popupmodal-notice" style="display: block"></div>
          <form
            role="form"
            id="login_form_popup"
            method="post"
            action="<?php echo $_SERVER['PHP_SELF'] . '?id='. $userId ?>"
            novalidate="novalidate"
          >
            <div class="form-group">
              <input
                type="text"
                name="username"
                class="form-control InputEmail"
                placeholder="Enter email / username"
              />
            </div>
            <div class="form-group">
              <input
                type="password"
                name="password"
                class="form-control InputPassword"
                placeholder="Password"
              />
            </div>
            <a
              class="openpopupmodal"
              href="javascript:;"
              data-openpopupmodal="#popup-forgotpassword"
              >Forgot Password?</a
            >
            <input
              type="submit"
              name="submit"
              class="btn btn_green alignright"
              value="Login"
            />

            <div></div>
            <br />
          </form>
          <div style="text-align: center">
            <p style="font-size: 16px">
              Not a EM Member?
              <a href="https://www.eroticmonkey.ch/signup"
                >Sign Up now, it's <b>FREE</b>!</a
              >
            </p>
            <p style="font-size: 12px">
              Signing up to the Erotic Monkey gives you access to thousands of
              reviews from across the country. Find the latest reviews on the
              provider you're thinking of choosing before you waste your money.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="popup-forgotpassword" class="popupmodal" style="display: none">
      <a class="popupmodal-close" href="javascript:;"></a>
      <div class="popupmodal-container">
        <div class="popupmodal-header"><h6>Reset Password</h6></div>
        <div class="popupmodal-body">
          <div class="popupmodal-notice"></div>
          <p>Please enter your email to reset the password.</p>
          <form
            role="form"
            id="reset_form_popup"
            method="post"
            novalidate="novalidate"
          >
            <div class="form-group">
              <input
                type="email"
                name="email"
                class="form-control InputEmail"
                placeholder="Enter email"
              />
            </div>
            <a
              class="openpopupmodal"
              href="javascript:;"
              data-openpopupmodal="#popup-login"
              >Back to login</a
            >
            <button type="submit" class="btn btn_green alignright">
              Submit
            </button>
            <div></div>
            <br />
          </form>
        </div>
      </div>
    </div>
    <div style="display: none">
      <a
        id="trigger-openpopupmodal-login"
        class="openpopupmodal"
        href="javascript:;"
        data-openpopupmodal="#popup-login"
        >login</a
      >
      <a
        id="trigger-openpopupmodal-signup"
        class="openpopupmodal"
        href="javascript:;"
        data-openpopupmodal="#popup-signup"
        >signup</a
      >
      <a
        id="trigger-openpopupmodal-signup-provider"
        class="openpopupmodal"
        href="javascript:;"
        data-openpopupmodal="#popup-signup-provider"
        >signup</a
      >
    </div>
  </body>
</html>
