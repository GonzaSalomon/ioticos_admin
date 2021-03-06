<main class="mdl-layout__content">

  <div class="mdl-grid mdl-grid--no-spacing dashboard">

    <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

      <!-- TEMP -->
      <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
        <div class="mdl-card mdl-shadow--2dp weather">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Temperature</h2>

            <div class="mdl-layout-spacer"></div>
            <div class="mdl-card__subtitle-text">
              <i class="material-icons">room</i>
              Córdoba, Argentina
            </div>
          </div>
          <div class="mdl-card__supporting-text mdl-card--expand">
            <p id="display_temp" class="weather-temperature">--<sup>&deg;</sup></p>

            <p class="weather-description">
              Cloudy and snow
            </p>
          </div>
        </div>
      </div>
      <!-- HUM -->
      <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
        <div class="mdl-card mdl-shadow--2dp weather">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Humidity</h2>

            <div class="mdl-layout-spacer"></div>
            <div class="mdl-card__subtitle-text">
              <i class="material-icons">room</i>
              Córdoba, Argentina
            </div>
          </div>
          <div class="mdl-card__supporting-text mdl-card--expand">
            <p id="display_hum" class="weather-temperature">--</p>

            <p class="weather-description">
              Cloudy and snow
            </p>
          </div>
        </div>
      </div>
      <!-- Trending widget-->
      <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
        <div class="mdl-card mdl-shadow--2dp trending">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Actuators</h2>
          </div>
          <div class="mdl-card__supporting-text">
            <ul class="mdl-list">

              <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content list__item-text">DOOR LIGHT</span>
                <span class="mdl-list__item-secondary-content">


                  <!-- SWITCH-->
                  <label class="switch">
                    <input onchange="sw1_change()" type="checkbox" id="display_sw1">
                    <span class="slider round"></span>
                  </label>

                </span>
              </li>

              <li class="mdl-list__item list__item--border-top">

                <span class="mdl-list__item-primary-content list__item-text">DOOR</span>
                <span class="mdl-list__item-secondary-content">

                  <!-- SWITCH-->
                  <label class="switch">
                    <input onchange="sw2_change()" type="checkbox" id="display_sw2">
                    <span class="slider round"></span>
                  </label>

                </span>
              </li>

              <li class="mdl-list__item list__item--border-top">

                <span class="mdl-list__item-primary-content list__item-text">FAN</span>
                <span class="mdl-list__item-secondary-content">

                  <input onchange="slider_change()" id="display_slider" class="mdl-slider mdl-js-slider slider--colored-light-blue" type="range" min="0" max="254" value="12" tabindex="0">

                </span>
              </li>


            </ul>
          </div>
        </div>
      </div>
      <!-- Cotoneaster card-->

      <!-- Line chart-->
      <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card mdl-shadow--2dp line-chart">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Temperature</h2>
          </div>
          <div class="mdl-card__supporting-text">
            <canvas id="my_chart" width="300" height="300"  ></canvas>
          </div>
        </div>
      </div>
      <!-- Table-->


      <!-- Line chart2-->
      <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card mdl-shadow--2dp line-chart">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Humidity</h2>
          </div>
          <div class="mdl-card__supporting-text">
            <canvas id="my_chart2" width="300" height="300"  ></canvas>
          </div>
        </div>
      </div>
      <!-- Table-->

    </div>

    </div>

</main>

<script>
var ctx = document.getElementById('my_chart').getContext('2d');
var ctx2 = document.getElementById('my_chart2').getContext('2d');


var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [<?php echo $dates ?>],
        datasets: [{
            label: '° C',
            data: [<?php echo $temps ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
      maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: [<?php echo $dates ?>],
        datasets: [{
            label: '%',
            data: [<?php echo $hums ?>],
            backgroundColor: [
                'rgba(30, 170, 132, 0.2)',
            ],
            borderColor: [
                'rgba(30, 170, 132, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
      maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

</script>
