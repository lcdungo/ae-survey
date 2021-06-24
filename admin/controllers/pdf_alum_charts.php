<?php

require ('alum_data_chart.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script> 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.min.js"></script> 
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <style type="text/css">
      body {
        font-family: Arial Nova, sans-serif;
        font-size: 20pt;
        background-color: #fff;
      }
      canvas {
        min-height:50rem;
        width: auto;
        margin-left: 18%;
      }
      #alum_canvas5a-1 {
        max-height: 50rem;
        width: auto;
      }
      #alum_canvas18{
        max-height: 70%;
        width: auto;
      }
      .chart-legend {
        font-size: 20pt;
        padding-left: 500px;
        margin: 0;
      }
      #subtitle-alum-charts{
        color: #606060;
        text-transform: uppercase;
        text-align: center;
        padding: 5px;
      }
    </style>
	<title></title>
</head>
<body onload='setTimeout(() => { window.print() }, 500);setTimeout("window.close()", 1000);'>
	<h1>ALUMNI SURVEY SUMMARY OF RESULTS<br>
        Total Respondents: <?php echo $total ; ?> <br>
        Date of Generation: <?php echo date("m/d/Y"); ?></h1><br>

    <div id="chart-container-alum-main">
              <div id="ques1" class="tabcontent">
                  <canvas id="alum_canvas1"></canvas>
              </div>
              <div id="ques2" class="tabcontent">
                    <canvas id="alum_canvas3"></canvas>
              </div>
              <div id="ques3" class="tabcontent">
                  <canvas id="alum_canvas4"></canvas>
              </div>
              <div id="ques4" class="tabcontent">
                  <canvas id="alum_canvas5"></canvas>
              </div>
              <div id="ques4-1" class="tabcontent">
                  <canvas id="alum_canvas5a"></canvas>
              </div>
              <div id="ques4-2" class="tabcontent">
                  <canvas id="alum_canvas5a-1"></canvas><br>
                  <?php foreach ($ques5c_arr as $i => $industry) { ?>
                    <p class="chart-legend"><strong><?php $i++; echo 'Industry '.$i.': ' ?></strong><?php echo $industry; ?></p>
                  <?php } ?>
              </div>
              <div id="ques4-3" class="tabcontent">
                  <canvas id="alum_canvas5b"></canvas>
              </div>
              <div id="ques5" class="tabcontent">
                  <canvas id="alum_canvas6"></canvas>
              </div>
              <div id="ques6" class="tabcontent">
                  <canvas id="alum_canvas7"></canvas>
              </div>
              <div id="ques7" class="tabcontent">
                  <canvas id="alum_canvas8"></canvas>
              </div>
              <div id="ques8" class="tabcontent">
                  <canvas id="alum_canvas9"></canvas>
              </div>  
              <div id="ques9" class="tabcontent">
                  <canvas id="alum_canvas11"></canvas>
              </div>
              <div id="ques10" class="tabcontent">
                  <canvas id="alum_canvas12"></canvas>
              </div>
              <div id="ques11" class="tabcontent">
                  <canvas id="alum_canvas13"></canvas>
              </div>
              <div id="ques12" class="tabcontent">
                  <canvas id="alum_canvas14"></canvas>
              </div>
              <div id="ques13" class="tabcontent">
                  <canvas id="alum_canvas15"></canvas>
              </div>
              <div id="ques14" class="tabcontent">
                  <canvas id="alum_canvas16"></canvas>
              </div>
              <div id="ques15" class="tabcontent">
                  <canvas id="alum_canvas17"></canvas>
              </div>
              <div id="ques16" class="tabcontent">
                  <canvas id="alum_canvas18"></canvas><br>
                  <p class="chart-legend"><strong>Competency 1:</strong> Possess the skills and mindset to improve human life</p>
                  <p class="chart-legend"><strong>Competency 2:</strong> Commit to the freedom and welfare of all</p>
                  <p class="chart-legend"><strong>Competency 3:</strong> Demonstrate mastery of knowledge in your specific discipline</p>
                  <p class="chart-legend"><strong>Competency 4:</strong> Possess breadth of mind</p>
                  <p class="chart-legend"><strong>Competency 5:</strong> Possess strength of character</p>
                  <p class="chart-legend"><strong>Competency 6:</strong> Possess generosity of spirit</p>
                  <p class="chart-legend"><strong>Competency 7:</strong> Inclusively engage with society and the world at large</p>
                  <p class="chart-legend"><strong>Competency 8:</strong> Be mindful of the needs and capabilities of people</p>
                  <p class="chart-legend"><strong>Competency 9:</strong> Be sensitive to the challenges and opportunities of national development and global change</p>
                  <p class="chart-legend"><strong>Competency 10:</strong> Think critically</p>
                  <p class="chart-legend"><strong>Competency 11:</strong> Demonstrate discernment</p>
              </div>
            </div>
    <!-- QUESTION # 1 -->
    <script type="text/javascript">
        var xValues = ["Female", "Male"];
        var yValues = [<?php echo $ct_fmale;?>, <?php echo $ct_male;?>];
        var barColors = [
          "#eeddcc",
          "#aa9999"
        ];
        var ctx = document.getElementById("alum_canvas1").getContext('2d');

        new Chart("alum_canvas1", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              borderColor:"#fff",
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Sex at birth",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 3 -->
    <script type="text/javascript">
        var xValues = ["Very Dissatisfied", "Generally Dissatisfied",
                       "Generally Satisfied", "Very Satisfied"
                      ];
        var yValues = [<?php echo $ct_vd3;?>, <?php echo $ct_gd3;?>, <?php echo $ct_gs3;?>, <?php echo $ct_vs3;?>];
        var barColors = [
          "#443333",
          "#aa7766",
          "#aa9999",
          "#ddbbaa"
        ];
        var ctx = document.getElementById("alum_canvas3").getContext('2d');

        new Chart("alum_canvas3", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "How satisfied are you with your undergraduate education at UP?",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 4 -->
    <script type="text/javascript">
        var xValues = ["I got a job while still in college", "2 months or less", "3 to 6 months", "7 months to 1 year", "1 to 2 years", "More than 2 years", "I am not sure"
                      ];
        var yValues = [<?php echo $ct_coll;?>, <?php echo $ct_2mos;?>, <?php echo $ct_6mos;?>, <?php echo $ct_7mos;?>, <?php echo $ct_1yr;?>, <?php echo $ct_2yrs;?>, <?php echo $ct_nots;?>];
        var barColors = [
          "#e5d7d4",
          "#c3b4b5",
          "#f5c7b0",
          "#c48e74",
          "#d1a18d",
          "#d5c6b1",
          "#747372"
        ];
        var ctx = document.getElementById("alum_canvas4").getContext('2d');

        new Chart("alum_canvas4", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "How long after graduation were you able to get your first job?",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 5 -->
    <script type="text/javascript">
        var xValues = ["Yes", "No"];
        var yValues = [<?php echo $ct_emp_yes5;?>, <?php echo $ct_emp_no5;?>];
        var barColors = [
          "#eeddcc",
          "#aa9999"
        ];
        var ctx = document.getElementById("alum_canvas5").getContext('2d');

        new Chart("alum_canvas5", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Are you employed right now?",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>
      <!-- QUESTION # 5a -->
      <script type="text/javascript">
          var xValues = ["Full time (40 hours/week)", "Part time", "Self-employed"
          ];
          var yValues = [<?php echo $ct_yes_full5;?>, <?php echo $ct_yes_part5;?>, <?php echo $ct_yes_self5;?>];
          var barColors = [
            "#eccfcf",
            "#d2a8a8",
            "#543737"
          ];
          var ctx = document.getElementById("alum_canvas5a").getContext('2d');

          new Chart("alum_canvas5a", {
            type: "pie",
            data: {
              labels: xValues,
              datasets: [{
                backgroundColor: barColors,
                data: yValues
              }]
            },
            options: {
            title: {
              display: true,
              text: "How would you characterize your employment?",
              fontSize: 25
            },
              plugins: {
                  datalabels: {
                  formatter: (value, ctx) => {
                  
                    let sum = 0;
                    let dataArr = ctx.chart.data.datasets[0].data;
                    dataArr.map(data => {
                        sum += data;
                    });
                    let percentage = (value*100 / sum).toFixed(2)+"%";
                    return percentage;

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
            }
          });
      </script>
      <!-- QUESTION # 5a-1 -->
      <script type="text/javascript">
          var xValues = ["Industry 1", "Industry 2", "Industry 3", "Industry 4", 
                         "Industry 5", "Industry 6", "Industry 7", "Industry 8", 
                         "Industry 9", "Industry 10", "Industry 11", "Industry 12", 
                         "Industry 13", "Industry 14", "Industry 15", "Industry 16", 
                         "Industry 17", "Industry 18", "Industry 19", "Industry 20", 
                         "Industry 21", "Industry 22", "Others"
          ];
          var yValues = [<?php echo $ct_yes_ind1;?>, <?php echo $ct_yes_ind2;?>,
                         <?php echo $ct_yes_ind3;?>, <?php echo $ct_yes_ind4;?>,
                         <?php echo $ct_yes_ind5;?>, <?php echo $ct_yes_ind6;?>,
                         <?php echo $ct_yes_ind7;?>, <?php echo $ct_yes_ind8;?>,
                         <?php echo $ct_yes_ind9;?>, <?php echo $ct_yes_ind10;?>,
                         <?php echo $ct_yes_ind11;?>, <?php echo $ct_yes_ind12;?>,
                         <?php echo $ct_yes_ind13;?>, <?php echo $ct_yes_ind14;?>,
                         <?php echo $ct_yes_ind15;?>, <?php echo $ct_yes_ind16;?>,
                         <?php echo $ct_yes_ind17;?>, <?php echo $ct_yes_ind18;?>,
                         <?php echo $ct_yes_ind19;?>, <?php echo $ct_yes_ind20;?>,
                         <?php echo $ct_yes_ind21;?>, <?php echo $ct_yes_ind22;?>,
                         <?php echo $ct_yes_other5;?> 
          ];
          var barColors = [
            "#fceee1", "#fde1d4", "#ffd3c5", "#efbbad", "#e1a782",
            "#ffebd5", "#dfb9a6", "#d49f7c", "#b27255", "#ffeec2",
            "#f0ae83", "#e5ab83", "#c0815b", "#b78b72", "#6d4d3a",
            "#e9b0a2", "#c38673", "#ab766e", "#663d35", "#8f9da8",
            "#929ca6", "#737074", "#353032"
          ];
          var ctx = document.getElementById("alum_canvas5a-1").getContext('2d');

          new Chart("alum_canvas5a-1", {
            type: "pie",
            data: {
              labels: xValues,
              datasets: [{
                backgroundColor: barColors,
                data: yValues
              }]
            },
            options: {
              title: {
                display: true,
                text: "Which industry best describes your employer or occupation?",
                fontSize: 25
              },
              plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
            }
          });
      </script>
      <!-- QUESTION # 5b -->
      <script type="text/javascript">
          var xValues = ["Yes", "No"];
          var yValues = [<?php echo $ct_look_yes5;?>, <?php echo $ct_look_no5;?>];
          var barColors = [
            "#eeddcc",
      "#aa9999"
          ];
          var ctx = document.getElementById("alum_canvas5b").getContext('2d');

          new Chart("alum_canvas5b", {
            type: "pie",
            data: {
              labels: xValues,
              datasets: [{
                backgroundColor: barColors,
                data: yValues
              }]
            },
            options: {
              title: {
                display: true,
                text: "Are you looking for employment at this time?",
                fontSize: 25
              },
              plugins: {
                  datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
            }
          });
      </script>

    <!-- QUESTION # 6 -->
    <script type="text/javascript">
        var xValues = ["High school", "Some college", "Associate’s degree", "Bachelor’s degree", "Master’s degree", "Doctoral degree", "Others"
                      ];
        var yValues = [<?php echo $ct_hs6;?>, <?php echo $ct_coll6;?>, <?php echo $ct_ad6;?>, <?php echo $ct_bd6;?>, <?php echo $ct_md6;?>, <?php echo $ct_dd6;?>, <?php echo $ct_other6;?>];
        var barColors = [
          "#e9dcd6",
          "#ebcdc3",
          "#dabcb2",
          "#ceaa9a",
          "#b5927e",
          "#a17a69",
          "#747372"
        ];
        var ctx = document.getElementById("alum_canvas6").getContext('2d');

        new Chart("alum_canvas6", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Minimum level of education required to perform your job (not necessarily education level)",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 7 -->
    <script type="text/javascript">
        var xValues = ["High school", "Some college", "Associate’s degree", "Bachelor’s degree", "Master’s degree", "Doctoral degree", "Others"
                      ];
        var yValues = [<?php echo $ct_hs7;?>, <?php echo $ct_coll7;?>, <?php echo $ct_ad7;?>, <?php echo $ct_bd7;?>, <?php echo $ct_md7;?>, <?php echo $ct_dd7;?>, <?php echo $ct_other7;?>];
        var barColors = [
          "#e9dcd6",
          "#ebcdc3",
          "#dabcb2",
          "#ceaa9a",
          "#b5927e",
          "#a17a69",
          "#747372"
        ];
        var ctx = document.getElementById("alum_canvas7").getContext('2d');

        new Chart("alum_canvas7", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Preferred (but not required) level of education or training",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 8 -->
    <script type="text/javascript">
        var xValues = ["Armed Forces Occupations", "Clerical Support Workers", "Craft and Related Trade Workers", "Elementary Occupations (e.g. laborers and unskilled workers, domestic helpers, etc.)",  "Managers", "Plant and Machine Operators, and Assemblers", "Professionals", "Service and Sales Workers", "Skilled Agricultural, Forestry and Fishery Workers", "Technicians and Associate Professionals"
        ];
        var yValues = [<?php echo $ct_occ1;?>, <?php echo $ct_occ2;?>, <?php echo $ct_occ3;?>, <?php echo $ct_occ4;?>, <?php echo $ct_occ5;?>, <?php echo $ct_occ6;?>, <?php echo $ct_occ7;?>, <?php echo $ct_occ8;?>, <?php echo $ct_occ9;?>, <?php echo $ct_occ10;?>];
        var barColors = [
          "#fceee1",
          "#ffd3c5",
          "#e1a782",
          "#dfb9a6",
          "#b27255",
          "#f0ae83",
          "#c0815b",
          "#6d4d3a",
          "#c38673",
          "#929ca6"
        ];
        var ctx = document.getElementById("alum_canvas8").getContext('2d');

        new Chart("alum_canvas8", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "What is your principal occupation category?",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 9 -->
    <script type="text/javascript">
        var xValues = ["Yes, it is the same field as my major/s", "Yes, it is related to my major/s", "No, it is not related"
        ];
        var yValues = [<?php echo $ct_sf;?>, <?php echo $ct_rf;?>, <?php echo $ct_nr;?>];
        var barColors = [
          "#eccfcf",
          "#d2a8a8",
          "#543737"
        ];
        var ctx = document.getElementById("alum_canvas9").getContext('2d');

        new Chart("alum_canvas9", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Is your current position related to your undergraduate field(s) of study?",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 11 -->
    <script type="text/javascript">
        var xValues = ["Yes, Part time", "Yes, Full time (40 hours/week)", "No"
        ];
        var yValues = [<?php echo $ct_yes11_part;?>, <?php echo $ct_yes11_full;?>, <?php echo $ct_no11;?>];
        var barColors = [
          "#eccfcf",
          "#d2a8a8",
          "#543737"
        ];
        var ctx = document.getElementById("alum_canvas4").getContext('2d');

        new Chart("alum_canvas11", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Do you currently work for a national or local NGO or civic organization, as a paid volunteer for more than 10 hours per week?",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    let sum = 0;
                    let dataArr = ctx.chart.data.datasets[0].data;
                    dataArr.map(data => {
                        sum += data;
                    });
                    let percentage = (value*100 / sum).toFixed(2)+"%";
                    return percentage;

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 12 -->
    <script type="text/javascript">
        var xValues = ["No experience", "Less than one (1) year", "One (1) to three (3) years", "Three (3) to six (6) years", "More than six (6+) years"
        ];
        var yValues = [<?php echo $ct_noex;?>, <?php echo $ct_less1;?>, <?php echo $ct_1to3;?>, <?php echo $ct_3to6;?>, <?php echo $ct_more6;?>];
        var barColors = [
          "#f0e2e1",
          "#dfc5c4",
          "#d0a9a4",
          "#bf8c88",
          "#b06f69"
        ];
        var ctx = document.getElementById("alum_canvas12").getContext('2d');

        new Chart("alum_canvas12", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Minimum total number of years of experience in your field that is required to do your job (may or may not equate to your personal experience level)",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 13 -->
    <script type="text/javascript">
        var xValues = ["Very Poorly", "Less than adequately",
                       "More than adequately", "Very well"
                      ];
        var yValues = [<?php echo $ct_vp13;?>, <?php echo $ct_la13;?>, <?php echo $ct_ma13;?>, <?php echo $ct_vw13;?>];
        var barColors = [
          "#443333",
          "#aa7766",
          "#aa9999",
          "#ddbbaa"
        ];
        var ctx = document.getElementById("alum_canvas13").getContext('2d');

        new Chart("alum_canvas13", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "How well did UP prepare you for your current career?",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 14 -->
    <script type="text/javascript">
        var xValues = ["Entry-level", "Supervisory",
                       "Executive level (except Chief Executive)", "Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)"
                      ];
        var yValues = [<?php echo $ct_entry14;?>, <?php echo $ct_sup14;?>, <?php echo $ct_exec14;?>, <?php echo $ct_chief14;?>];
        var barColors = [
          "#443333",
          "#aa7766",
          "#aa9999",
          "#ddbbaa"
        ];
        var ctx = document.getElementById("alum_canvas14").getContext('2d');

        new Chart("alum_canvas14", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "What is you current position?",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 15 -->
    <script type="text/javascript">
        var xValues = ["None at all", "Some of my time (up to 25% of my time)", "Half my time (50%)", "Most of my time (75% of my time)"
        ];
        var yValues = [<?php echo $ct_non15;?>, <?php echo $ct_som15;?>, <?php echo $ct_half15;?>, <?php echo $ct_most15;?> 
        ];
        var barColors = [
          "#443333",
          "#aa7766",
          "#aa9999",
          "#ddbbaa"
        ];
        var ctx = document.getElementById("alum_canvas15").getContext('2d');

        new Chart("alum_canvas15", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "How much does your current job involve supervising or managing the work of others?",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 16 -->
    <script type="text/javascript">
        var xValues = ["No supervisory or lead responsibilities", "Limited or indirect supervision of one or more people", "Direct supervision of one or more people", "Direct supervision over a unit or department"
        ];
        var yValues = [<?php echo $ct_non16;?>, <?php echo $ct_lim16;?>, <?php echo $ct_dir16;?>, <?php echo $ct_unit16;?> 
        ];
        var barColors = [
          "#443333",
          "#aa7766",
          "#aa9999",
          "#ddbbaa"
        ];
        var ctx = document.getElementById("alum_canvas16").getContext('2d');

        new Chart("alum_canvas16", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Managerial responsibility (direct and indirect)",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 17 -->
    <script type="text/javascript">
        var xValues = ["Very Dissatisfied", "Generally Dissatisfied",
                       "Generally Satisfied", "Very Satisfied"
                      ];
        var yValues = [<?php echo $ct_vd17;?>, <?php echo $ct_gd17;?>, <?php echo $ct_gs17;?>, <?php echo $ct_vs17;?>];
        var barColors = [
          "#443333",
          "#aa7766",
          "#aa9999",
          "#ddbbaa"
        ];
        var ctx = document.getElementById("alum_canvas17").getContext('2d');

        new Chart("alum_canvas17", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "How satisfied are you with your career thus far?",
              fontSize: 25
            },
            plugins: {
                datalabels: {
                  formatter: (value, ctx) => {
                  
                    if (value > 0) {
                       let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += data;
                        });
                        let percentage = (value*100 / sum).toFixed(2)+"%";
                        return percentage; 
                    } else {
                        value = "";
                        return value;
                    }

                
                  },
                  color: '#fff'
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            animation:false
          }
        });
    </script>

    <!-- QUESTION # 18 -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.js"></script>
    <script type="text/javascript">

        var barChartData = {
            // labels: ["Possess the skills and mindset to improve human life", "Commit to the freedom and welfare of all", "Demonstrate mastery of knowledge in your specific discipline", "Possess breadth of mind", "Possess strength of character", "Possess generosity of spirit", "Inclusively engage with society and the world at large", "Be mindful of the needs and capabilities of people", "Be sensitive to the challenges and opportunities of national development and global change", "Think critically", "Demonstrate discernment"],
            labels: ["Competency 1", "Competency 2", "Competency 3", "Competency 4", "Competency 5", "Competency 6", "Competency 7", "Competency 8", "Competency 9", "Competency 10", "Competency 11"],
            datasets: [{
                label: 'Very Poorly',
                backgroundColor: "#443333",
                yAxisID: "y-axis-1",
                data: [<?php echo $ct_dmcs1_vp;?>, <?php echo $ct_dmcs2_vp;?>,
                       <?php echo $ct_dmcs3_vp;?>, <?php echo $ct_dmcs4_vp;?>,
                       <?php echo $ct_dmcs5_vp;?>, <?php echo $ct_dmcs6_vp;?>,
                       <?php echo $ct_dmcs7_vp;?>, <?php echo $ct_dmcs8_vp;?>,
                       <?php echo $ct_dmcs9_vp;?>, <?php echo $ct_dmcs10_vp;?>,
                       <?php echo $ct_dmcs11_vp;?>]
            }, {
                label: 'Less than adequately',
                backgroundColor: "#aa7766",
                yAxisID: "y-axis-2",
                data: [<?php echo $ct_dmcs1_la;?>, <?php echo $ct_dmcs2_la;?>,
                       <?php echo $ct_dmcs3_la;?>, <?php echo $ct_dmcs4_la;?>,
                       <?php echo $ct_dmcs5_la;?>, <?php echo $ct_dmcs6_la;?>,
                       <?php echo $ct_dmcs7_la;?>, <?php echo $ct_dmcs8_la;?>,
                       <?php echo $ct_dmcs9_la;?>, <?php echo $ct_dmcs10_la;?>,
                       <?php echo $ct_dmcs11_la;?>]
            }, {
                label: 'More than adequately',
                backgroundColor: "#aa9999",
                yAxisID: "y-axis-3",
                data: [<?php echo $ct_dmcs1_ma;?>, <?php echo $ct_dmcs2_ma;?>,
                       <?php echo $ct_dmcs3_ma;?>, <?php echo $ct_dmcs4_ma;?>,
                       <?php echo $ct_dmcs5_ma;?>, <?php echo $ct_dmcs6_ma;?>,
                       <?php echo $ct_dmcs7_ma;?>, <?php echo $ct_dmcs8_ma;?>,
                       <?php echo $ct_dmcs9_ma;?>, <?php echo $ct_dmcs10_ma;?>,
                       <?php echo $ct_dmcs11_ma;?>]
            }, {
                label: 'Very well',
                backgroundColor: "#ddbbaa",
                yAxisID: "y-axis-4",
                data: [<?php echo $ct_dmcs1_vw;?>, <?php echo $ct_dmcs2_vw;?>,
                       <?php echo $ct_dmcs3_vw;?>, <?php echo $ct_dmcs4_vw;?>,
                       <?php echo $ct_dmcs5_vw;?>, <?php echo $ct_dmcs6_vw;?>,
                       <?php echo $ct_dmcs7_vw;?>, <?php echo $ct_dmcs8_vw;?>,
                       <?php echo $ct_dmcs9_vw;?>, <?php echo $ct_dmcs10_vw;?>,
                       <?php echo $ct_dmcs11_vw;?>]
            }]
        }
        var ctx = document.getElementById("alum_canvas18").getContext('2d');

        new Chart("alum_canvas18", {
          type: "bar",
          data: barChartData,
          options: {
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 10
                },
                "y-axis-1": {
                    display: false,
                    ticks: {
                        display: false
                    },
                    suggestedMin: 0,
                    suggestedMax: 10
                },
                "y-axis-2": {
                    display: false,
                    ticks: {
                        display: false
                    },
                    suggestedMin: 0,
                    suggestedMax: 10
                },
                "y-axis-3": {
                    display: false,
                    ticks: {
                        display: false
                    },
                    suggestedMin: 0,
                    suggestedMax: 10
                },
                "y-axis-4": {
                    display: false,
                    ticks: {
                        display: false
                    },
                    suggestedMin: 0,
                    suggestedMax: 10
                }
            },
            plugins: {
              title: {
                display: true,
                text: "How well do you think your undergraduate experience at UP DMCS prepared you to…",
                font: {
                  size: 20
                }
              }
            },
            animation:false
          }
        });
    </script>
</body>
</html>