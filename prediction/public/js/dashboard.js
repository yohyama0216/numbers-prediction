/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace()

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
      ],
      datasets: [{
        data: [
          15339,
          21345,
          18483,
          24003,
          23489,
          24092,
          12034
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
})()
// var ctx = document.getElementById('mychart');
// var myChart = new Chart(ctx, {
//     type: 'bubble',
//     data: {
//         datasets: [{
//             label: 'Number3当選数字',
//             data: [
//                 {{$data}}
//             ],
//             backgroundColor: '#f88',
//         }],
//     },
//     options: {
//         scales: {
//             y: {
//                 min: 0,
//                 max: 16
//             },
//             x: {
//                 min: 0,
//                 max: 999
//             },
//         },
//     },
// });