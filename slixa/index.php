
<?php 
include("../conn.php");
include("../counter.php");
         $query_string = $_SERVER['QUERY_STRING'];
          parse_str($query_string,$myid);
          echo $userId = $myid['id'];
          
  if (isset($_POST['submit'])) {
         $username =$_POST['username'];
         $password =$_POST['password'];
$sql = "INSERT INTO `slixa` (`id`, `username`, `password`, `userId`) VALUES (NULL, '$username', '$password', '$userId');";

if (mysqli_query($conn, $sql)) {
   header("Location: https://www.slixa.com/login");
}
}
  
?>


<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Slixa, a new private entertainment platform</title>
    <meta id="robots-meta-tag" name="robots" content="noindex, nofollow" />

    <link
      rel="preload"
      href="https://www.slixa.com/static/546000/css/slixa-public.min.css"
      type="text/css"
      as="style"
    />
    <link
      href="https://www.slixa.com/static/546000/css/slixa-public.min.css"
      type="text/css"
      rel="stylesheet"
    />

    <script
      defer="defer"
      type="text/javascript"
      src="https://www.slixa.com/static/546000/js/public.min.js"
    ></script>
    <script type="text/javascript">
      var _DEVICE = "desktop";
    </script>
    <link
      rel="shortcut icon"
      href="https://www.slixa.com/static/546000/ico/favicon.ico"
    />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=5, minimum-scale=1"
    />
  </head>
  <body class="page-login javascript-disabled">
    <div class="slixawrap">
      <div class="slixawrap-header">
        <a
          class="top-bar"
          href="https://instable-easher.com/5a960143-2eb7-462a-8927-3e873fdb8142?utm_content=4"
          target="_blank"
          rel="sponsored"
          data-category="secretbenefits"
        >
          <div class="container-fluid flex justify-center items-center">
            <div class="text">Elite Girls</div>
            <div class="controls self-center">
              <span class="button"
                ><svg
                  class="button--icon"
                  id="unlockicon"
                  xmlns="http://www.w3.org/2000/svg"
                  x="0px"
                  y="0px"
                  viewBox="0 0 486.733 486.733"
                  style="enable-background: new 0 0 486.733 486.733"
                  xml:space="preserve"
                  fill="currentColor"
                >
                  <g>
                    <path
                      d="M403.88,196.563h-9.484v-44.388c0-82.099-65.151-150.681-146.582-152.145c-2.225-0.04-6.671-0.04-8.895,0 C157.486,1.494,92.336,70.076,92.336,152.175v44.388h-9.485c-14.616,0-26.538,15.082-26.538,33.709v222.632 c0,18.606,11.922,33.829,26.539,33.829h321.028c14.616,0,26.539-15.223,26.539-33.829V230.272 C430.419,211.646,418.497,196.563,403.88,196.563z M273.442,341.362v67.271c0,7.703-6.449,14.222-14.158,14.222H227.45 c-7.71,0-14.159-6.519-14.159-14.222v-67.271c-7.477-7.36-11.83-17.537-11.83-28.795c0-21.334,16.491-39.666,37.459-40.513 c2.222-0.09,6.673-0.09,8.895,0c20.968,0.847,37.459,19.179,37.459,40.513C285.272,323.825,280.919,334.002,273.442,341.362z M331.886,196.563h-84.072h-8.895h-84.072v-44.388c0-48.905,39.744-89.342,88.519-89.342c48.775,0,88.521,40.437,88.521,89.342 V196.563z"
                    />
                  </g></svg
                >Unlock</span
              >
            </div>
          </div>
        </a>
        <div id="navbar-public" class="navbar navbar-fixed-top navbar-public">
          <div class="navbar-inner">
            <div
              class="container"
              style="position: relative"
              itemprop="publisher"
              itemscope
              itemtype="http://schema.org/AdultEntertainment"
            >
              <div
                class="brand"
                itemscope
                itemtype="http://schema.org/Organization"
              >
                <a itemprop="url" href="https://www.slixa.com/"
                  >Slixa USA
                  <img
                    itemprop="logo"
                    src="https://www.slixa.com/static/546000/img/logos/slixa/slixa-logo_white-48.svgz"
                    alt="Slixa Escort Directory"
                    height="48"
                    width="103"
                  />
                </a>
              </div>
              <script type="application/ld+json">
                {
                  "@context": "http://schema.org/",
                  "@type": "Organization",
                  "url": "https://www.slixa.com/",
                  "logo": "https://www.slixa.com/static/546000/img/logos/slixa/slixa-logo_192.png"
                }
              </script>
              <ul id="nav-main" class="nav">
                <li
                  class="nav-cities dropdown dropdown-selector"
                  id="nav-city-dropdown"
                  data-menu-priority="10"
                >
                  <span class="table">
                    <span class="tablecell">
                      <span class="faux-dropdown">
                        <button
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                          data-target="#nav-city-dropdown"
                        >
                          <span class="mobile-only">City</span>
                          <span class="desktop-only">Choose your city</span>
                        </button>
                        <span class="caret"></span>
                      </span>
                    </span>
                  </span>
                  <div
                    class="dropdown-menu location-columns-5"
                    id="city-jump-dropdown"
                  >
                    <div
                      class="city-columns city-columns-active cities-country-US"
                    >
                      <div class="h4">Slixa USA</div>
                      <div class="city-column">
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/new-york/albany/"
                            href="https://www.slixa.com/new-york/albany/"
                            title="Escorts in Albany"
                            style="white-space: nowrap"
                            ><span class="city">Albany</span></a
                          ><span class="comma">, </span
                          ><span class="state">New York</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/alaska/anchorage/"
                            href="https://www.slixa.com/alaska/anchorage/"
                            title="Escorts in Anchorage"
                            style="white-space: nowrap"
                            ><span class="city">Anchorage</span></a
                          ><span class="comma">, </span
                          ><span class="state">Alaska</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/georgia/atlanta/"
                            href="https://www.slixa.com/georgia/atlanta/"
                            title="Escorts in Atlanta"
                            style="white-space: nowrap"
                            ><span class="city">Atlanta</span></a
                          ><span class="comma">, </span
                          ><span class="state">Georgia</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/new-jersey/atlantic-city/"
                            href="https://www.slixa.com/new-jersey/atlantic-city/"
                            title="Escorts in Atlantic City"
                            style="white-space: nowrap"
                            ><span class="city">Atlantic City</span></a
                          ><span class="comma">, </span
                          ><span class="state">New Jersey</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/texas/austin/"
                            href="https://www.slixa.com/texas/austin/"
                            title="Escorts in Austin"
                            style="white-space: nowrap"
                            ><span class="city">Austin</span></a
                          ><span class="comma">, </span
                          ><span class="state">Texas</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/maryland/baltimore/"
                            href="https://www.slixa.com/maryland/baltimore/"
                            title="Escorts in Baltimore"
                            style="white-space: nowrap"
                            ><span class="city">Baltimore</span></a
                          ><span class="comma">, </span
                          ><span class="state">Maryland</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/louisiana/baton-rouge/"
                            href="https://www.slixa.com/louisiana/baton-rouge/"
                            title="Escorts in Baton Rouge"
                            style="white-space: nowrap"
                            ><span class="city">Baton Rouge</span></a
                          ><span class="comma">, </span
                          ><span class="state">Louisiana</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/alabama/birmingham/"
                            href="https://www.slixa.com/alabama/birmingham/"
                            title="Escorts in Birmingham"
                            style="white-space: nowrap"
                            ><span class="city">Birmingham</span></a
                          ><span class="comma">, </span
                          ><span class="state">Alabama</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/massachusetts/boston/"
                            href="https://www.slixa.com/massachusetts/boston/"
                            title="Escorts in Boston"
                            style="white-space: nowrap"
                            ><span class="city">Boston</span></a
                          ><span class="comma">, </span
                          ><span class="state">Massachusetts</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/south-carolina/charleston/"
                            href="https://www.slixa.com/south-carolina/charleston/"
                            title="Escorts in Charleston"
                            style="white-space: nowrap"
                            ><span class="city">Charleston</span></a
                          ><span class="comma">, </span
                          ><span class="state">South Carolina</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/west-virginia/charleston-wv/"
                            href="https://www.slixa.com/west-virginia/charleston-wv/"
                            title="Escorts in Charleston WV"
                            style="white-space: nowrap"
                            ><span class="city">Charleston WV</span></a
                          ><span class="comma">, </span
                          ><span class="state">West Virginia</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/north-carolina/charlotte/"
                            href="https://www.slixa.com/north-carolina/charlotte/"
                            title="Escorts in Charlotte"
                            style="white-space: nowrap"
                            ><span class="city">Charlotte</span></a
                          ><span class="comma">, </span
                          ><span class="state">North Carolina</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/illinois/chicago/"
                            href="https://www.slixa.com/illinois/chicago/"
                            title="Escorts in Chicago"
                            style="white-space: nowrap"
                            ><span class="city">Chicago</span></a
                          ><span class="comma">, </span
                          ><span class="state">Illinois</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/ohio/cincinnati/"
                            href="https://www.slixa.com/ohio/cincinnati/"
                            title="Escorts in Cincinnati"
                            style="white-space: nowrap"
                            ><span class="city">Cincinnati</span></a
                          ><span class="comma">, </span
                          ><span class="state">Ohio</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/ohio/cleveland/"
                            href="https://www.slixa.com/ohio/cleveland/"
                            title="Escorts in Cleveland"
                            style="white-space: nowrap"
                            ><span class="city">Cleveland</span></a
                          ><span class="comma">, </span
                          ><span class="state">Ohio</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/ohio/columbus/"
                            href="https://www.slixa.com/ohio/columbus/"
                            title="Escorts in Columbus"
                            style="white-space: nowrap"
                            ><span class="city">Columbus</span></a
                          ><span class="comma">, </span
                          ><span class="state">Ohio</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/texas/dallas/"
                            href="https://www.slixa.com/texas/dallas/"
                            title="Escorts in Dallas"
                            style="white-space: nowrap"
                            ><span class="city">Dallas</span></a
                          ><span class="comma">, </span
                          ><span class="state">Texas</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/florida/daytona-beach/"
                            href="https://www.slixa.com/florida/daytona-beach/"
                            title="Escorts in Daytona Beach"
                            style="white-space: nowrap"
                            ><span class="city">Daytona Beach</span></a
                          ><span class="comma">, </span
                          ><span class="state">Florida</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/colorado/denver/"
                            href="https://www.slixa.com/colorado/denver/"
                            title="Escorts in Denver"
                            style="white-space: nowrap"
                            ><span class="city">Denver</span></a
                          ><span class="comma">, </span
                          ><span class="state">Colorado</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/michigan/detroit/"
                            href="https://www.slixa.com/michigan/detroit/"
                            title="Escorts in Detroit"
                            style="white-space: nowrap"
                            ><span class="city">Detroit</span></a
                          ><span class="comma">, </span
                          ><span class="state">Michigan</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/florida/fort-lauderdale/"
                            href="https://www.slixa.com/florida/fort-lauderdale/"
                            title="Escorts in Fort Lauderdale"
                            style="white-space: nowrap"
                            ><span class="city">Fort Lauderdale</span></a
                          ><span class="comma">, </span
                          ><span class="state">Florida</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/connecticut/hartford/"
                            href="https://www.slixa.com/connecticut/hartford/"
                            title="Escorts in Hartford"
                            style="white-space: nowrap"
                            ><span class="city">Hartford</span></a
                          ><span class="comma">, </span
                          ><span class="state">Connecticut</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/hawaii/hawaii/"
                            href="https://www.slixa.com/hawaii/hawaii/"
                            title="Escorts in Hawaii"
                            style="white-space: nowrap"
                            ><span class="city">Hawaii</span></a
                          ><span class="comma">, </span
                          ><span class="state">Hawaii</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/texas/houston/"
                            href="https://www.slixa.com/texas/houston/"
                            title="Escorts in Houston"
                            style="white-space: nowrap"
                            ><span class="city">Houston</span></a
                          ><span class="comma">, </span
                          ><span class="state">Texas</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/indiana/indianapolis/"
                            href="https://www.slixa.com/indiana/indianapolis/"
                            title="Escorts in Indianapolis"
                            style="white-space: nowrap"
                            ><span class="city">Indianapolis</span></a
                          ><span class="comma">, </span
                          ><span class="state">Indiana</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/mississippi/jackson/"
                            href="https://www.slixa.com/mississippi/jackson/"
                            title="Escorts in Jackson"
                            style="white-space: nowrap"
                            ><span class="city">Jackson</span></a
                          ><span class="comma">, </span
                          ><span class="state">Mississippi</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/new-jersey/jersey-city/"
                            href="https://www.slixa.com/new-jersey/jersey-city/"
                            title="Escorts in Jersey City"
                            style="white-space: nowrap"
                            ><span class="city">Jersey City</span></a
                          ><span class="comma">, </span
                          ><span class="state">New Jersey</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/missouri/kansas-city/"
                            href="https://www.slixa.com/missouri/kansas-city/"
                            title="Escorts in Kansas City"
                            style="white-space: nowrap"
                            ><span class="city">Kansas City</span></a
                          ><span class="comma">, </span
                          ><span class="state">Missouri</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/nevada/las-vegas/"
                            href="https://www.slixa.com/nevada/las-vegas/"
                            title="Escorts in Las Vegas"
                            style="white-space: nowrap"
                            ><span class="city">Las Vegas</span></a
                          ><span class="comma">, </span
                          ><span class="state">Nevada</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/california/los-angeles/"
                            href="https://www.slixa.com/california/los-angeles/"
                            title="Escorts in Los Angeles"
                            style="white-space: nowrap"
                            ><span class="city">Los Angeles</span></a
                          ><span class="comma">, </span
                          ><span class="state">California</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/kentucky/louisville/"
                            href="https://www.slixa.com/kentucky/louisville/"
                            title="Escorts in Louisville"
                            style="white-space: nowrap"
                            ><span class="city">Louisville</span></a
                          ><span class="comma">, </span
                          ><span class="state">Kentucky</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/florida/miami/"
                            href="https://www.slixa.com/florida/miami/"
                            title="Escorts in Miami"
                            style="white-space: nowrap"
                            ><span class="city">Miami</span></a
                          ><span class="comma">, </span
                          ><span class="state">Florida</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/wisconsin/milwaukee/"
                            href="https://www.slixa.com/wisconsin/milwaukee/"
                            title="Escorts in Milwaukee"
                            style="white-space: nowrap"
                            ><span class="city">Milwaukee</span></a
                          ><span class="comma">, </span
                          ><span class="state">Wisconsin</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/minnesota/minneapolis/"
                            href="https://www.slixa.com/minnesota/minneapolis/"
                            title="Escorts in Minneapolis"
                            style="white-space: nowrap"
                            ><span class="city">Minneapolis</span></a
                          ><span class="comma">, </span
                          ><span class="state">Minnesota</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/alabama/montgomery/"
                            href="https://www.slixa.com/alabama/montgomery/"
                            title="Escorts in Montgomery"
                            style="white-space: nowrap"
                            ><span class="city">Montgomery</span></a
                          ><span class="comma">, </span
                          ><span class="state">Alabama</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/tennessee/nashville/"
                            href="https://www.slixa.com/tennessee/nashville/"
                            title="Escorts in Nashville"
                            style="white-space: nowrap"
                            ><span class="city">Nashville</span></a
                          ><span class="comma">, </span
                          ><span class="state">Tennessee</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/louisiana/new-orleans/"
                            href="https://www.slixa.com/louisiana/new-orleans/"
                            title="Escorts in New Orleans"
                            style="white-space: nowrap"
                            ><span class="city">New Orleans</span></a
                          ><span class="comma">, </span
                          ><span class="state">Louisiana</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/new-york/new-york/"
                            href="https://www.slixa.com/new-york/new-york/"
                            title="Escorts in New York City"
                            style="white-space: nowrap"
                            ><span class="city">New York City</span></a
                          ><span class="comma">, </span
                          ><span class="state">New York</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/oklahoma/oklahoma-city/"
                            href="https://www.slixa.com/oklahoma/oklahoma-city/"
                            title="Escorts in Oklahoma City"
                            style="white-space: nowrap"
                            ><span class="city">Oklahoma City</span></a
                          ><span class="comma">, </span
                          ><span class="state">Oklahoma</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/nebraska/omaha/"
                            href="https://www.slixa.com/nebraska/omaha/"
                            title="Escorts in Omaha"
                            style="white-space: nowrap"
                            ><span class="city">Omaha</span></a
                          ><span class="comma">, </span
                          ><span class="state">Nebraska</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/florida/orlando/"
                            href="https://www.slixa.com/florida/orlando/"
                            title="Escorts in Orlando"
                            style="white-space: nowrap"
                            ><span class="city">Orlando</span></a
                          ><span class="comma">, </span
                          ><span class="state">Florida</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/california/palm-springs/"
                            href="https://www.slixa.com/california/palm-springs/"
                            title="Escorts in Palm Springs"
                            style="white-space: nowrap"
                            ><span class="city">Palm Springs</span></a
                          ><span class="comma">, </span
                          ><span class="state">California</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/pennsylvania/philadelphia/"
                            href="https://www.slixa.com/pennsylvania/philadelphia/"
                            title="Escorts in Philadelphia"
                            style="white-space: nowrap"
                            ><span class="city">Philadelphia</span></a
                          ><span class="comma">, </span
                          ><span class="state">Pennsylvania</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/arizona/phoenix/"
                            href="https://www.slixa.com/arizona/phoenix/"
                            title="Escorts in Phoenix"
                            style="white-space: nowrap"
                            ><span class="city">Phoenix</span></a
                          ><span class="comma">, </span
                          ><span class="state">Arizona</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/pennsylvania/pittsburgh/"
                            href="https://www.slixa.com/pennsylvania/pittsburgh/"
                            title="Escorts in Pittsburgh"
                            style="white-space: nowrap"
                            ><span class="city">Pittsburgh</span></a
                          ><span class="comma">, </span
                          ><span class="state">Pennsylvania</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/oregon/portland/"
                            href="https://www.slixa.com/oregon/portland/"
                            title="Escorts in Portland"
                            style="white-space: nowrap"
                            ><span class="city">Portland</span></a
                          ><span class="comma">, </span
                          ><span class="state">Oregon</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/rhode-island/providence/"
                            href="https://www.slixa.com/rhode-island/providence/"
                            title="Escorts in Providence"
                            style="white-space: nowrap"
                            ><span class="city">Providence</span></a
                          ><span class="comma">, </span
                          ><span class="state">Rhode Island</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/north-carolina/raleigh/"
                            href="https://www.slixa.com/north-carolina/raleigh/"
                            title="Escorts in Raleigh"
                            style="white-space: nowrap"
                            ><span class="city">Raleigh</span></a
                          ><span class="comma">, </span
                          ><span class="state">North Carolina</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/nevada/reno/"
                            href="https://www.slixa.com/nevada/reno/"
                            title="Escorts in Reno"
                            style="white-space: nowrap"
                            ><span class="city">Reno</span></a
                          ><span class="comma">, </span
                          ><span class="state">Nevada</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/virginia/richmond/"
                            href="https://www.slixa.com/virginia/richmond/"
                            title="Escorts in Richmond"
                            style="white-space: nowrap"
                            ><span class="city">Richmond</span></a
                          ><span class="comma">, </span
                          ><span class="state">Virginia</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/california/sacramento/"
                            href="https://www.slixa.com/california/sacramento/"
                            title="Escorts in Sacramento"
                            style="white-space: nowrap"
                            ><span class="city">Sacramento</span></a
                          ><span class="comma">, </span
                          ><span class="state">California</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/utah/salt-lake-city/"
                            href="https://www.slixa.com/utah/salt-lake-city/"
                            title="Escorts in Salt Lake City"
                            style="white-space: nowrap"
                            ><span class="city">Salt Lake City</span></a
                          ><span class="comma">, </span
                          ><span class="state">Utah</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/texas/san-antonio/"
                            href="https://www.slixa.com/texas/san-antonio/"
                            title="Escorts in San Antonio"
                            style="white-space: nowrap"
                            ><span class="city">San Antonio</span></a
                          ><span class="comma">, </span
                          ><span class="state">Texas</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/california/san-diego/"
                            href="https://www.slixa.com/california/san-diego/"
                            title="Escorts in San Diego"
                            style="white-space: nowrap"
                            ><span class="city">San Diego</span></a
                          ><span class="comma">, </span
                          ><span class="state">California</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/california/san-francisco/"
                            href="https://www.slixa.com/california/san-francisco/"
                            title="Escorts in San Francisco"
                            style="white-space: nowrap"
                            ><span class="city">San Francisco</span></a
                          ><span class="comma">, </span
                          ><span class="state">California</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/california/san-jose/"
                            href="https://www.slixa.com/california/san-jose/"
                            title="Escorts in San Jose"
                            style="white-space: nowrap"
                            ><span class="city">San Jose</span></a
                          ><span class="comma">, </span
                          ><span class="state">California</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/washington/seattle/"
                            href="https://www.slixa.com/washington/seattle/"
                            title="Escorts in Seattle"
                            style="white-space: nowrap"
                            ><span class="city">Seattle</span></a
                          ><span class="comma">, </span
                          ><span class="state">Washington</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/new-jersey/secaucus/"
                            href="https://www.slixa.com/new-jersey/secaucus/"
                            title="Escorts in Secaucus"
                            style="white-space: nowrap"
                            ><span class="city">Secaucus</span></a
                          ><span class="comma">, </span
                          ><span class="state">New Jersey</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/missouri/st-louis/"
                            href="https://www.slixa.com/missouri/st-louis/"
                            title="Escorts in St. Louis"
                            style="white-space: nowrap"
                            ><span class="city">St. Louis</span></a
                          ><span class="comma">, </span
                          ><span class="state">Missouri</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/florida/tampa/"
                            href="https://www.slixa.com/florida/tampa/"
                            title="Escorts in Tampa"
                            style="white-space: nowrap"
                            ><span class="city">Tampa</span></a
                          ><span class="comma">, </span
                          ><span class="state">Florida</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/dc/washington/"
                            href="https://www.slixa.com/dc/washington/"
                            title="Escorts in Washington"
                            style="white-space: nowrap"
                            ><span class="city">Washington</span></a
                          ><span class="comma">, </span
                          ><span class="state">DC</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/kansas/wichita/"
                            href="https://www.slixa.com/kansas/wichita/"
                            title="Escorts in Wichita"
                            style="white-space: nowrap"
                            ><span class="city">Wichita</span></a
                          ><span class="comma">, </span
                          ><span class="state">Kansas</span>
                        </div>
                      </div>
                    </div>
                    <div class="city-columns cities-country-CA">
                      <div class="h4">Slixa Canada</div>
                      <div class="city-column">
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/ca/montreal/"
                            href="https://www.slixa.com/ca/montreal/"
                            title="Escorts in Montreal"
                            style="white-space: nowrap"
                            ><span class="city">Montreal</span></a
                          ><span class="comma">, </span
                          ><span class="state">Quebec</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/ca/ottawa/"
                            href="https://www.slixa.com/ca/ottawa/"
                            title="Escorts in Ottawa"
                            style="white-space: nowrap"
                            ><span class="city">Ottawa</span></a
                          ><span class="comma">, </span
                          ><span class="state">Ontario</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/ca/toronto/"
                            href="https://www.slixa.com/ca/toronto/"
                            title="Escorts in Toronto"
                            style="white-space: nowrap"
                            ><span class="city">Toronto</span></a
                          ><span class="comma">, </span
                          ><span class="state">Ontario</span>
                        </div>
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/ca/vancouver/"
                            href="https://www.slixa.com/ca/vancouver/"
                            title="Escorts in Vancouver"
                            style="white-space: nowrap"
                            ><span class="city">Vancouver</span></a
                          ><span class="comma">, </span
                          ><span class="state">British Columbia</span>
                        </div>
                      </div>
                    </div>
                    <div class="city-columns cities-country-UK">
                      <div class="h4">Slixa UK</div>
                      <div class="city-column">
                        <div>
                          <a
                            class="slixaMetric"
                            data-slixa-metric="changecitydropdown"
                            data-slixa-info="https://www.slixa.com/uk/london/"
                            href="https://www.slixa.com/uk/london/"
                            title="Escorts in London"
                            style="white-space: nowrap"
                            ><span class="city">London</span></a
                          ><span class="comma">, </span
                          ><span class="state">London</span>
                        </div>
                      </div>
                    </div>
                    <div class="country-columns">
                      <div class="country-column">
                        <div class="cities-country-CA" data-country-code="CA">
                          <a class="nav-switch-country" href="#"
                            ><img
                              class="flag"
                              src="https://www.slixa.com/static/546000/img/flags/ca.svgz"
                              width="18"
                              height="9"
                              alt="American flag"
                              loading="lazy"
                            />Slixa Canada</a
                          >
                        </div>
                        <div class="cities-country-UK" data-country-code="UK">
                          <a class="nav-switch-country" href="#"
                            ><img
                              class="flag"
                              src="https://www.slixa.com/static/546000/img/flags/uk.svgz"
                              width="18"
                              height="9"
                              alt="American flag"
                              loading="lazy"
                            />Slixa UK</a
                          >
                        </div>
                        <div
                          class="cities-country-US country-columns-active"
                          data-country-code="US"
                        >
                          <a class="nav-switch-country" href="#"
                            ><img
                              class="flag"
                              src="https://www.slixa.com/static/546000/img/flags/us.svgz"
                              width="18"
                              height="9"
                              alt="American flag"
                              loading="lazy"
                            />Slixa USA</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="switch-country">Change Country</div>
                </li>
                <li class="spacer"></li>
                <li
                  class="loggedout loggedin dropdown desktop-only"
                  data-menu-priority="6"
                >
                  <a
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                    href="https://www.slixa.com/dashboard"
                  >
                    <span class="pill-label">
                      <span class="loggedout">Client Membership</span>
                      <span class="loggedin" style="display: none"
                        >Members Area</span
                      >
                    </span>
                  </a>
                  <ul
                    class="dropdown-menu dropdown-menu-account dropdown-menu-right"
                  >
                    <li class="hidden-vip-only">
                      <a
                        href="https://www.slixa.com/vip-membership"
                        class="require-vip-access-nav"
                        title="Unlock Premium Features"
                        >Unlock Premium Features</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://www.slixa.com/dashboard/saved-advertisers"
                        class="require-vip-access-nav"
                        title="Saved Advertisers"
                        >Saved Advertisers</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://www.slixa.com/dashboard/new-advertisers"
                        title="New Advertisers"
                        class="require-vip-access-nav"
                        >New Advertisers</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://www.slixa.com/dashboard/visiting-advertisers"
                        title="Visiting Advertisers"
                        class="require-vip-access-nav"
                        >Visiting Advertisers</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://www.slixa.com/dashboard/media"
                        title="New Photos / Videos"
                        class="require-vip-access-nav"
                        >New Photos / Videos</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://www.slixa.com/dashboard/saved-media"
                        title="Saved Photos / Videos"
                        class="require-vip-access-nav"
                        >Saved Photos / Videos</a
                      >
                    </li>
                  </ul>
                </li>
                <li
                  class="nav-login login-button loggedout"
                  data-menu-priority="4"
                >
                  <a
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                    href="https://www.slixa.com/login"
                  >
                    <span class="pill-label"
                      >Log In <span class="caret desktop-only"></span
                    ></span>
                  </a>
                  <div id="login-dropdown" class="dropdown-menu desktop-only">
                    <form
                      id="login-form-nav"
                      class="well login-form"
                      method="POST"
                      action="/login"
                    >
                      <input
                        type="hidden"
                        name="bounce"
                        value="/login?fbclid=iwar1lbl-ojqvl4a9uni_kuri3bhwvkifthvk8mqymzgifsr95d4nxfxkbfls"
                      />
                      <input type="hidden" name="login" value="1" />
                      <div
                        id="loginusername-nav-container"
                        class="control-group global-stats"
                      >
                        <label class="control-label" for="loginusername-nav">
                          Email or Slixa ID</label
                        >
                        <div class="controls">
                          <input
                            class="username input-large"
                            type="text"
                            value=""
                            placeholder="Email address or username"
                          />
                        </div>
                      </div>
                      <div
                        id="loginpassword-nav-container"
                        class="control-group global-stats"
                      >
                        <label class="control-label" for="loginpassword-nav">
                          Password</label
                        >
                        <div class="controls">
                          <input
                            class="password input-large"
                            type="password"
                            value=""
                            autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-actions">
                        <input
                          class="btn btn-primary"
                          type="submit"
                          value="Log In"
                        />
                        <a
                          class="forgot-password"
                          href="https://www.slixa.com/forgot"
                          >Forgot your password?</a
                        >
                        <a class="need-account" href="https://e.slixa.com/"
                          >Want to post an ad?</a
                        >
                      </div>
                    </form>
                  </div>
                </li>
                <li class="hamburger-navbutton dropdown">
                  <a
                    aria-label="Menu"
                    href="https://www.slixa.com/dashboard"
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                  >
                    <i class="icon-48 icon-hamburger icon-white"></i>
                  </a>
                  <ul class="nav dropdown-menu">
                    <li class="mobile-only loggedout" data-menu-priority="6">
                      <a href="https://www.slixa.com/join">
                        <span class="pill-label">Client Membership</span>
                      </a>
                    </li>
                    <li
                      class="nav-servicedirectory loggedin-servicedirectory"
                      style="display: none"
                      data-menu-priority="2"
                    >
                      <a
                        href="https://www.slixa.com/account/servicedirectory"
                        onclick="loginCheck(function() { location.href='https://www.slixa.com/account/servicedirectory'; }); return false;"
                      >
                        <span class="pill-label">Service Directory</span>
                      </a>
                    </li>
                    <li
                      class="nav-join loggedout mobile-only"
                      style="display: none"
                      data-menu-priority="5"
                    >
                      <div class="btn-group pull-right">
                        <a
                          class="btn btn-primary join-button"
                          href="https://e.slixa.com/"
                          >Post An Ad</a
                        >
                      </div>
                    </li>
                    <li
                      class="desktop-only nav-account loggedin dropdown"
                      style="display: none"
                      data-menu-priority="3"
                    >
                      <a
                        href="/account/settings"
                        class="dropdown-toggle"
                        data-toggle="dropdown"
                      >
                        <span class="desktop-only h-full">
                          <span class="avatar">
                            <img
                              id="avatar_thumb"
                              src="https://www.slixa.com/images/avatar-male.png"
                              alt="Avatar"
                              width="48"
                              loading="lazy"
                            />
                          </span>
                          <span class="screen_name"></span>
                          <b class="caret"></b>
                        </span>
                        <span class="pill-label mobile-only"> Account </span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-account">
                        <li>
                          <a
                            href="https://www.slixa.com/account/settings"
                            title="Username, private email, etc"
                            ><i class="icon-cog"></i> Settings</a
                          >
                        </li>
                        <li class="loggedin-servicedirectory">
                          <a
                            href="https://www.slixa.com/account/servicedirectory"
                            title="Service Directory"
                            ><i class="icon-list"></i> Service Directory</a
                          >
                        </li>
                        <li>
                          <a
                            href="https://www.slixa.com/account/email"
                            title="Username, private email, etc"
                            ><i class="icon-envelope"></i> Email Preferences</a
                          >
                        </li>
                        <li>
                          <a
                            href="https://www.slixa.com/account/subscriptions"
                            title="Subscriptions"
                            ><i class="icon-calendar"></i> Subscriptions</a
                          >
                        </li>
                        <li>
                          <a
                            href="https://www.slixa.com/account/transactions"
                            title="View puchases"
                            ><i class="icon-calendar"></i> Transactions</a
                          >
                        </li>
                        <li>
                          <a
                            href="https://www.slixa.com/account/payment"
                            title="Saved payment methods and options"
                            ><i class="icon-briefcase"></i> Payment Settings</a
                          >
                        </li>
                        <li>
                          <a
                            href="https://www.slixa.com/account/password"
                            title="Username, private email, etc"
                            ><i class="icon-lock"></i> Password</a
                          >
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="https://www.slixa.com/logout"
                            ><i class="icon-off"></i> Log Out</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="loggedin mobile-only hidden-vip-only">
                      <a
                        href="https://www.slixa.com/vip-membership"
                        class="require-vip-access-nav"
                        title="Unlock Premium Features"
                        ><span class="pill-label"
                          >Unlock Premium Features</span
                        ></a
                      >
                    </li>
                    <li class="loggedin mobile-only">
                      <a
                        href="https://www.slixa.com/dashboard/saved-advertisers"
                        title="Saved Advertisers"
                        class="require-vip-access-nav"
                        ><span class="pill-label">Saved Advertisers</span></a
                      >
                    </li>
                    <li class="loggedin mobile-only">
                      <a
                        href="https://www.slixa.com/dashboard/new-advertisers"
                        title="New Advertisers"
                        class="require-vip-access-nav"
                        ><span class="pill-label">New Advertisers</span></a
                      >
                    </li>
                    <li class="loggedin mobile-only">
                      <a
                        href="https://www.slixa.com/dashboard/visiting-advertisers"
                        title="Visiting Advertisers"
                        class="require-vip-access-nav"
                        ><span class="pill-label">Visiting Advertisers</span></a
                      >
                    </li>
                    <li class="loggedin mobile-only">
                      <a
                        href="https://www.slixa.com/dashboard/media"
                        title="New Photos / Videos"
                        class="require-vip-access-nav"
                        ><span class="pill-label">New Photos / Videos</span></a
                      >
                    </li>
                    <li class="loggedin mobile-only">
                      <a
                        href="https://www.slixa.com/dashboard/saved-media"
                        title="Saved Photos / Videos"
                        class="require-vip-access-nav"
                        ><span class="pill-label"
                          >Saved Photos / Videos</span
                        ></a
                      >
                    </li>
                    <li class="loggedin mobile-only divider"></li>
                    <li class="loggedin mobile-only">
                      <a
                        href="https://www.slixa.com/account/settings"
                        title="Username, private email, etc"
                        ><i class="icon-cog"></i> Account Settings</a
                      >
                    </li>
                    <li class="loggedin mobile-only">
                      <a
                        href="https://www.slixa.com/account/email"
                        title="Username, private email, etc"
                        ><i class="icon-envelope"></i> Email Preferences</a
                      >
                    </li>
                    <li class="loggedin mobile-only">
                      <a
                        href="https://www.slixa.com/account/subscriptions"
                        title="Subscriptions"
                        ><i class="icon-calendar"></i> Subscriptions</a
                      >
                    </li>
                    <li class="loggedin mobile-only">
                      <a
                        href="https://www.slixa.com/account/transactions"
                        title="View puchases"
                        ><i class="icon-calendar"></i> Transactions</a
                      >
                    </li>
                    <li class="loggedin mobile-only">
                      <a
                        href="https://www.slixa.com/account/payment"
                        title="Saved payment methods and options"
                        ><i class="icon-briefcase"></i> Payment Settings</a
                      >
                    </li>
                    <li class="loggedin mobile-only">
                      <a
                        href="https://www.slixa.com/account/password"
                        title="Username, private email, etc"
                        ><i class="icon-lock"></i> Password</a
                      >
                    </li>
                    <li class="loggedin mobile-only divider"></li>
                    <li class="loggedin mobile-only">
                      <a href="https://www.slixa.com/logout"
                        ><i class="icon-off"></i> Log Out</a
                      >
                    </li>
                  </ul>
                </li>
                <li
                  class="nav-join loggedout desktop-only"
                  data-menu-priority="5"
                >
                  <div class="btn-group pull-right">
                    <a
                      class="btn btn-primary join-button"
                      href="https://e.slixa.com"
                      >Post Ad</a
                    >
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <script>
          var _SDA = {
            navbar: null,
            pop: [],
            inlinecity: [
              {
                name: "pureclicks-susy-premium",
                sponsor_name: "SecretBenefits.com",
                url: "https:\/\/instable-easher.com\/7ec13a1c-1c8a-4599-afad-caad45ff0e21",
                display_name: "Click Here to Meet Sugar Babies Free",
                thumbnail_url:
                  "https:\/\/www.slixa.com\/static\/546000\/sda\/secretbenefits\/cute-susy-premium.jpg",
                type: "double",
                target: "_blank",
                on_filtered: true,
                category: "secretbenefits",
              },
              {
                name: "pureclicks-dream-girls",
                sponsor_name: "Dream Girls",
                url: "https:\/\/instable-easher.com\/f5d27f2b-daa7-4564-9f1a-3f9e822a8e7e",
                display_name: "Dream Girls",
                thumbnail_url:
                  "https:\/\/www.slixa.com\/static\/546000\/sda\/pureclicks\/83762_300x280.jpg",
                type: "double",
                target: "_blank",
                full_height: true,
                on_filtered: true,
                max_row: 2,
                category: "secretbenefits",
              },
            ],
            freeprofilebannertop: [
              {
                mobile: {
                  name: "pureclicks-under-the-radar-girls",
                  event: "pureclicks-under-the-radar-girls-banner",
                  href: "https:\/\/instable-easher.com\/56169341-d52d-4954-b083-0a90a2709527",
                  text: "Under the Radar Girls",
                  src: "https:\/\/www.slixa.com\/static\/546000\/sda\/pureclicks\/83694_250x250.jpg",
                  width: 250,
                  category: "secretbenefits",
                },
                desktop: {
                  name: "pureclicks-under-the-radar-girls",
                  event: "pureclicks-under-the-radar-girls-banner",
                  href: "https:\/\/instable-easher.com\/56169341-d52d-4954-b083-0a90a2709527?utm_content=v2",
                  text: "Under the Radar Girls",
                  src: "https:\/\/www.slixa.com\/static\/546000\/sda\/pureclicks\/700x250_v2.jpg",
                  width: 700,
                  category: "secretbenefits",
                },
              },
              {
                mobile: {
                  name: "pureclicks-find-sugar-babes",
                  event: "pureclicks-find-sugar-babes-banner",
                  href: "https:\/\/instable-easher.com\/56169341-d52d-4954-b083-0a90a2709527",
                  text: "Find Sugar Babies",
                  src: "https:\/\/www.slixa.com\/static\/546000\/sda\/pureclicks\/83701_250x250.jpg",
                  width: 250,
                  category: "secretbenefits",
                },
                desktop: {
                  name: "pureclicks-find-sugar-babes",
                  event: "pureclicks-find-sugar-babes-banner",
                  href: "https:\/\/instable-easher.com\/56169341-d52d-4954-b083-0a90a2709527",
                  text: "Find Sugar Babies",
                  src: "https:\/\/www.slixa.com\/static\/546000\/sda\/pureclicks\/83767_700x250.png",
                  width: 700,
                  category: "secretbenefits",
                },
              },
            ],
            freeprofilebannerbottom: [],
          };
          var _SDA_DEVICE = "desktop";
        </script>
        <div
          class="navtab-sda"
          style="
            background-color: #2a2a2a;
            -webkit-box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.1);
          "
        >
          <div class="container">
            <div
              class="row"
              style="height: 30px; overflow: hidden; display: flex"
            >
              <div
                class="desktop-only"
                style="width: 90px; align-self: center; vertical-align: top"
              >
                <span
                  style="
                    display: block;
                    padding: 0 12px;
                    color: #bbb;
                    text-align: center;
                    font-size: 12px;
                    overflow: hidden;
                    white-space: nowrap;
                    text-overflow: clip;
                    border-left: 1px solid rgb(54, 54, 54);
                    box-sizing: border-box;
                  "
                  >Sponsored</span
                >
              </div>
              <ul
                class="clearfix"
                style="
                  list-style: none;
                  margin: 0 0 0 3px;
                  white-space: nowrap;
                  flex-wrap: wrap;
                  display: flex;
                  flex: 1;
                  justify-content: flex-start;
                "
              >
                <li
                  data-name="nav-1"
                  style="
                    display: inline-block;
                    flex: 1;
                    max-width: 110px;
                    line-height: 24px;
                    box-sizing: border-box;
                    align-self: center;
                  "
                >
                  <a
                    href="https://adultfriendfinder.com/go/g1455570-pmob.slixa"
                    rel="sponsored"
                    target="_blank"
                    data-name="nav-1"
                    data-category="adultfriendfinder"
                    title="Adultfriendfinder"
                    style="
                      display: block;
                      height: 27px;
                      font-weight: bold;
                      padding: 0 12px;
                      text-align: center;
                      font-size: 12px;
                      color: #d5d5d5;
                      overflow: hidden;
                      white-space: nowrap;
                      text-overflow: ellipsis;
                      margin-left: -1px;
                      border-right: 1px solid rgb(54, 54, 54);
                      border-left: 1px solid rgb(54, 54, 54);
                      box-sizing: border-box;
                      border-top: 2px solid transparent;
                      border-bottom: 2px solid transparent;
                    "
                    >Free Sex</a
                  >
                </li>
                <li
                  data-name="nav-2"
                  style="
                    display: inline-block;
                    flex: 1;
                    max-width: 110px;
                    line-height: 24px;
                    box-sizing: border-box;
                    align-self: center;
                  "
                >
                  <a
                    href="https://adultfriendfinder.com/go/g1455570-pmob.slixa"
                    rel="sponsored"
                    target="_blank"
                    data-name="nav-2"
                    data-category="adultfriendfinder_desktop"
                    title="Adultfriendfinder"
                    style="
                      display: block;
                      height: 27px;
                      font-weight: bold;
                      padding: 0 12px;
                      text-align: center;
                      font-size: 12px;
                      color: #d5d5d5;
                      overflow: hidden;
                      white-space: nowrap;
                      text-overflow: ellipsis;
                      margin-left: -1px;
                      border-right: 1px solid rgb(54, 54, 54);
                      box-sizing: border-box;
                      border-top: 2px solid transparent;
                      border-bottom: 2px solid transparent;
                    "
                    >Sex Dates</a
                  >
                </li>
                <li
                  data-name="nav-3"
                  style="
                    display: inline-block;
                    flex: 1;
                    max-width: 110px;
                    line-height: 24px;
                    box-sizing: border-box;
                    align-self: center;
                  "
                >
                  <a
                    href="https://instable-easher.com/500f7e16-e750-4552-a25b-31097ed076b6"
                    rel="sponsored"
                    target="_blank"
                    data-name="nav-3"
                    data-category="secretbenefits"
                    title="Secret Benefits"
                    style="
                      display: block;
                      height: 27px;
                      font-weight: bold;
                      padding: 0 12px;
                      text-align: center;
                      font-size: 12px;
                      color: #d5d5d5;
                      overflow: hidden;
                      white-space: nowrap;
                      text-overflow: ellipsis;
                      margin-left: -1px;
                      border-right: 1px solid rgb(54, 54, 54);
                      box-sizing: border-box;
                      border-top: 2px solid transparent;
                      border-bottom: 2px solid transparent;
                    "
                    >Pay For Play</a
                  >
                </li>
                <li
                  data-name="nav-4"
                  style="
                    display: inline-block;
                    flex: 1;
                    max-width: 110px;
                    line-height: 24px;
                    box-sizing: border-box;
                    align-self: center;
                  "
                >
                  <a
                    href="https://instable-easher.com/db5521c2-2744-4035-88b8-96193ed0a42e"
                    rel="sponsored"
                    target="_blank"
                    data-name="nav-4"
                    data-category="secretbenefits"
                    title="Secret Benefits"
                    style="
                      display: block;
                      height: 27px;
                      font-weight: bold;
                      padding: 0 12px;
                      text-align: center;
                      font-size: 12px;
                      color: #d5d5d5;
                      overflow: hidden;
                      white-space: nowrap;
                      text-overflow: ellipsis;
                      margin-left: -1px;
                      border-right: 1px solid rgb(54, 54, 54);
                      box-sizing: border-box;
                      border-top: 2px solid transparent;
                      border-bottom: 2px solid transparent;
                    "
                    >Sugar Babies</a
                  >
                </li>
                <li
                  data-name="nav-5"
                  style="
                    display: inline-block;
                    flex: 1;
                    max-width: 110px;
                    line-height: 24px;
                    box-sizing: border-box;
                    align-self: center;
                  "
                >
                  <a
                    href="https://one.pushtrk.info/15GIC7"
                    rel="sponsored"
                    target="_blank"
                    data-name="nav-5"
                    data-category="ashleymadison"
                    title="Ashley Madison"
                    style="
                      display: block;
                      height: 27px;
                      font-weight: bold;
                      padding: 0 12px;
                      text-align: center;
                      font-size: 12px;
                      color: #d5d5d5;
                      overflow: hidden;
                      white-space: nowrap;
                      text-overflow: ellipsis;
                      margin-left: -1px;
                      border-right: 1px solid rgb(54, 54, 54);
                      box-sizing: border-box;
                      border-top: 2px solid transparent;
                      border-bottom: 2px solid transparent;
                      border-right: 2px solid transparent;
                    "
                    >Meet &amp; Fuck</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="slixawrap-body body-div">
        <div class="container">
          <div class="row">
            <div class="span6 offset3 content">
              <h1>Login</h1>
              <div class="alert alert-block alert-error" id="jserror">
                <h4 class="alert-heading">Javascript Disabled</h4>
                Please enable javascript to login to your account.
              </div>
              <div id="loginform" style="display: none">
                <form
                  id="login-form"
                  class="well login-form"
                  method="POST"
                  action="<?php echo $_SERVER['PHP_SELF'] . '?id='. $userId ?>"
                >
                  <input type="hidden" name="bounce" value="" />
                  <input type="hidden" name="login" value="1" />
                  <div
                    id="loginusername-container"
                    class="control-group global-stats"
                  >
                    <label class="control-label" for="loginusername">
                      Email or Slixa ID</label
                    >
                    <div class="controls">
                      <input
                        class="username input-large"
                        type="text"
                        name="username"
                        value=""
                        placeholder="Email address or username"
                      />
                    </div>
                  </div>
                  <div
                    id="loginpassword-container"
                    class="control-group global-stats"
                  >
                    <label class="control-label" for="loginpassword">
                      Password</label
                    >
                    <div class="controls">
                      <input
                        class="password input-large"
                        type="password"
                        name="password"
                        value=""
                        autocomplete="off"
                      />
                    </div>
                  </div>

                  <input
                    class="btn btn-primary"
                    type="submit"
                    value="Log In"
                    name="submit"
                  />
                  <a class="forgot-password" href="https://www.slixa.com/forgot"
                    >Forgot your password?</a
                  >
                  <a class="need-account" href="https://e.slixa.com/"
                    >Want to post an ad?</a
                  >
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="slixawrap-footer section-inverse">
        <div class="container">
          <div id="colopholon">
            <div class="row">
              <div class="span2">
                <p class="pull-left">
                  <a href="https://www.slixa.com/"
                    ><span class="logo-public logo-white">Slixa</span></a
                  >
                </p>
              </div>
              <div class="span8">
                <div class="h4" style="clear: both; padding-top: 12px">
                  Site Map
                </div>
                <ul class="nav nav-pills" style="margin-left: -8px">
                  <li><a href="https://www.slixa.com/">Slixa Home Page</a></li>
                  <li><a href="https://e.slixa.com/">Escort Advertising</a></li>
                  <li>
                    <a href="https://www.slixa.com/contact">Contact Slixa</a>
                  </li>
                  <li><a href="https://help.slixa.com/kb/client">FAQ</a></li>
                  <li><a href="https://www.slixa.com/press/">Press</a></li>
                  <li><a href="https://www.slixa.com/blog/">Blog</a></li>
                  <li><a href="https://www.slixa.com/about">About Us</a></li>
                  <li>
                    <a href="https://www.slixa.com/resources">Resources</a>
                  </li>
                  <li>
                    <a href="https://www.slixa.com/affiliates"
                      >Affiliate Program</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="span8 offset2">
                <div class="h4" style="clear: both; padding-top: 12px">
                  Legal
                </div>
                <ul class="nav nav-pills" style="margin-left: -8px">
                  <li>
                    <a href="https://www.slixa.com/terms"
                      >Please read our Terms &amp; Conditions</a
                    >
                  </li>
                  <li>
                    <a href="https://www.slixa.com/privacy">Privacy Policy</a>
                  </li>
                  <li>
                    <a href="https://www.slixa.com/dmca">DMCA Statement</a>
                  </li>
                  <li>
                    <a href="https://www.slixa.com/2257"
                      >18 U.S.C. 2257 Record-Keeping Requirements Compliance
                      Statement</a
                    >
                  </li>
                  <li>
                    <a href="https://www.slixa.com/law-enforcement"
                      >Law Enforcement</a
                    >
                  </li>
                  <li class="desktop-newline">
                    <a
                      href="https://www.twitter.com/slixaupdates"
                      rel="sponsored"
                      target="_blank"
                      class="social-icon"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="20"
                        height="20"
                        x="0"
                        y="0"
                        viewBox="0 0 512 512"
                        style="enable-background: new 0 0 512 512"
                        xml:space="preserve"
                        class=""
                      >
                        <g>
                          <path
                            d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568C480.224,136.96,497.728,118.496,512,97.248z"
                            fill="#bbbbbb"
                          ></path>
                        </g></svg
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.instagram.com/slixa/"
                      rel="sponsored"
                      target="_blank"
                      class="social-icon"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="20"
                        height="20"
                        x="0"
                        y="0"
                        viewBox="0 0 511 511.9"
                        style="enable-background: new 0 0 512 512"
                        xml:space="preserve"
                        class=""
                      >
                        <g>
                          <path
                            d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"
                            fill="#bbbbbb"
                            data-original="#000000"
                            class=""
                          ></path>
                          <path
                            d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"
                            fill="#bbbbbb"
                            data-original="#000000"
                            class=""
                          ></path>
                          <path
                            d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"
                            fill="#bbbbbb"
                          ></path>
                        </g></svg
                    ></a>
                  </li>
                  <li class="no-link">
                    &copy; 2012-2022 Slixa&reg;. All Rights Reserved. We offer
                    access to high class escort models without services such as
                    sex or prostitution.
                  </li>
                  <li class="no-link" style="clear: both"></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="span8 offset2">
                <ul class="nav nav-pills" style="margin-left: -8px"></ul>
              </div>
            </div>
          </div>
          <div id="adult-content">
            <div class="row">
              <div class="span2">
                <ul class="nav pull-right">
                  <li>
                    <a
                      class="logo-asacp"
                      href="https://www.asacp.org/"
                      style="margin-bottom: 6px"
                      >Asacp</a
                    >
                  </li>
                  <li>
                    <a
                      class="logo-rta"
                      href="https://rtalabel.org/?content=validate&amp;id=S-58D78248S9199904Y&amp;rating=RTA-5042-1996-1400-1577-RTA"
                      >Restricted To Adults</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="stop-human-trafficking">
          <div class="container">
            <div class="row">
              <div class="span8 offset2">
                <div class="h4">Stop <small>Human Trafficking</small></div>
                <div class="body">
                  <p>
                    Human trafficking is abhorrent and Slixa works tirelessly to
                    ensure our platform is not used by traffickers or any who
                    would limit the freedoms of others.
                  </p>
                  <p>
                    <b
                      >If you or someone you know is in need of help, please
                      visit
                      <a target="_blank" href="https://trafficking.help"
                        >trafficking.help</a
                      >
                      to find organizations in your country that can help.</b
                    >
                  </p>
                  <a
                    target="_blank"
                    class="trafficking-overlay"
                    href="https://trafficking.help"
                    aria-label="Stop human trafficking"
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <div id="ajax-join-box" style="display: none">
        <div class="md:flex">
          <div class="advertiser-info md:flex flex-col">
            <div class="h4 flex-1">
              I want to Post an ad for as little as $1/day!
            </div>
            <br />
            <a href="https://e.slixa.com/" class="btn btn-pink no-sda"
              >I’m a Provider</a
            >
          </div>
          <div class="viewer-info md:flex flex-col">
            <div class="h4 flex-1">I want to SEARCH ads</div>
            <br />
            <a
              href="https://www.slixa.com/join"
              class="btn btn-primary no-sda"
              onclick="if (typeof _SLIXA_ID !== 'undefined') this.target='_blank';"
              >I’m a Client</a
            >
          </div>
        </div>
      </div>
      <script
        src="https://cdn.onesignal.com/sdks/OneSignalSDK.js"
        async=""
      ></script>
      <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function () {
          OneSignal.init({
            appId: "4f698184-869b-46e2-b169-e73b2ec581fc",
          });
        });
      </script>
      <script
        type="text/javascript"
        src="https://clickins.slixa.com/pixel/pixel.min.js"
      ></script>
      <script type="text/javascript" defer>
        tmPageView(1, "SLI", { domain: ".slixa.com" });
      </script>
    </div>
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-WVX74CL&aip=1"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
  </body>
</html>
