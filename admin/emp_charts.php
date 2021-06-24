<?php

require ('controllers/emp_data_chart.php');

// if user is not logged in
if (!isset($_SESSION['email'])) {
    header('location: ../login.php');
    exit();
}

// if user is not an admin but alumni
if ($_SESSION['role'] == 1) {
    header('location: ../alum_survey.php');
    exit();
}
// if user is not an admin but employer
if ($_SESSION['role'] == 2) {
    header('location: ../emp_survey.php');
    exit();
}
// if user is not an admin but alum and employer
if ($_SESSION['role'] == 3) {
    header('location: ../alum_emp.php');
    exit();
}
  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="images/png" href="images/UP_seal.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- for charts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script> 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.min.js"></script> 

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <title>Admin</title>
</head>
<?php include('header.php');  ?>
    <section>
        <?php include('sidenav.php');  ?>
        <div class="content-emp-charts">
            <h2 id="title-emp-charts">Employer Satisfaction Survey Summary of Results</h2>
            <h5 id="note-charts">To export to pdf, click the button. In the new window, change "Destination" to "Save as pdf"</h5>
                <br>
            <?php  if($total != 0) { ?>
                <div class="export-btn">
                  <a href="controllers/pdf_emp_charts.php" id="" target="_blank" class="export-pdf">Export to pdf</a>
                </div>
                <div class="tab">
                    <button class="tablinks" onclick="openQues(event, 'ques1')" id="defaultOpen">1</button>
                    <button class="tablinks" onclick="openQues(event, 'ques2')">2</button>
                    <button class="tablinks" onclick="openQues(event, 'ques3')">3</button>
                    <button class="tablinks" onclick="openQues(event, 'ques4')">4</button>
                    <button class="tablinks" onclick="openQues(event, 'ques5')">5</button>
                    <button class="tablinks" onclick="openQues(event, 'ques6')">6</button>
                    <button class="tablinks" onclick="openQues(event, 'ques7')">7</button>
                    <button class="tablinks" onclick="openQues(event, 'ques8')">8</button>
                    <button class="tablinks" onclick="openQues(event, 'ques9')">9</button>
                    <button class="tablinks" onclick="openQues(event, 'ques10')">10</button>
                    <button class="tablinks" onclick="openQues(event, 'ques11')">11</button>
                    <button class="tablinks" onclick="openQues(event, 'ques12')">12</button>
                    <button class="tablinks" onclick="openQues(event, 'ques13')">13</button>
                </div>
                <div id="ques1" class="tabcontent">
                    <p id="subtitle-emp-charts">Which sector of economy does your company/organization belong to?</p>
                    <canvas id="mycanvas1"></canvas>
                </div>
                <div id="ques2" class="tabcontent">
                    <p id="subtitle-emp-charts">Where is your company/organization located?</p>
                    <canvas id="mycanvas2"></canvas>
                </div>
                <div id="ques3" class="tabcontent">
                    <p id="subtitle-emp-charts">Which industry and business does your company/organization belong to?</p>
                    <canvas id="mycanvas3"></canvas><br>
                    <?php foreach ($ques3_arr as $i => $industry) { ?>
                        <p class="chart-legend"><strong><?php $i++; echo 'Industry '.$i.': ' ?></strong><?php echo $industry; ?></p>
                    <?php } ?>
                </div>
                <div id="ques4" class="tabcontent">
                    <p id="subtitle-emp-charts">What is your position in your company/organization?</p>
                    <canvas id="mycanvas4"></canvas>
                </div>
                <div id="ques5" class="tabcontent">
                    <p id="subtitle-emp-charts">“UP graduates recruited in the last three to five years have the skills to work in my company/organization.”</p>
                    <canvas id="mycanvas6"></canvas>
                </div>
                <div id="ques6" class="tabcontent">
                    <p id="subtitle-emp-charts">Importance of each skill when hiring new staff</p>
                    <canvas id="mycanvas7"></canvas>
                </div>
                <div id="ques7" class="tabcontent">
                    <p id="subtitle-emp-charts">Satisfaction on how well each skill is demonstrated by staff who are UP graduates</p>
                    <canvas id="mycanvas8"></canvas>
                </div>
                <div id="ques8" class="tabcontent">
                    <p id="subtitle-emp-charts">How LIKELY are you to hire other graduates of UP?</p>
                    <canvas id="mycanvas9"></canvas>
                </div>
                <div id="ques9" class="tabcontent">
                    <p id="subtitle-emp-charts">How likely are you going to keep the UP graduates in your company/organization?</p>
                    <canvas id="mycanvas10"></canvas>
                </div>
                <div id="ques10" class="tabcontent">
                    <p id="subtitle-emp-charts">Importance of each skill to the successful performance of the job for which the staff, who are UP graduates, were hired</p>
                    <canvas id="mycanvas11"></canvas><br>
                    <?php foreach ($dmcs_skills_arr as $i => $skill) { ?>
                        <p class="chart-legend"><strong><?php $i++; echo 'Skill '.$i.': ' ?></strong><?php echo $skill; ?></p>
                    <?php } ?>
                </div>
                <div id="ques11" class="tabcontent">
                    <p id="subtitle-emp-charts">Satisfaction on how well each skill was demonstrated by hired UP graduates</p>
                    <canvas id="mycanvas12"></canvas>
                    <?php foreach ($dmcs_skills_arr as $i => $skill) { ?>
                        <p class="chart-legend"><strong><?php $i++; echo 'Skill '.$i.': ' ?></strong><?php echo $skill; ?></p>
                    <?php } ?>
                </div>
                <div id="ques12" class="tabcontent">
                    <p id="subtitle-emp-charts">Which actions should UP take in order to improve the skill and competency set of its graduates?</p>
                    <canvas id="mycanvas13"></canvas>
                </div>
                <div id="ques13" class="tabcontent">
                    <p id="subtitle-emp-charts">How important is UP cooperation for your company/organization?</p>
                    <canvas id="mycanvas14"></canvas>
                </div>
            <?php }?>
        </div>
    </section>
    <!-- QUESTION # 1 -->
    <script type="text/javascript">
        var xValues = ["Public", "Private", "Others"];
        var yValues = [<?php echo $ct_pub;?>, <?php echo $ct_priv;?>, <?php echo $ct_other1;?>,];
        var barColors = [
          "#eccfcf",
          "#d2a8a8",
          "#543737"
        ];
        var ctx = document.getElementById("mycanvas1").getContext('2d');

        new Chart("mycanvas1", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
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
            maintainAspectRatio: false
          }
        });
    </script>

    <!-- QUESTION # 2 -->
    <script type="text/javascript">
        var xValues = ["Philippines", "Abroad"];
        var yValues = [<?php echo $ct_ph;?>, <?php echo $ct_ab;?>];
        var barColors = [
          "#eeddcc",
          "#aa9999"
        ];
        var ctx = document.getElementById("mycanvas2").getContext('2d');

        new Chart("mycanvas2", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
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
            maintainAspectRatio: false
          }
        });
    </script>

    <!-- QUESTION # 3 -->
    <script type="text/javascript">
        var xValues = ["Industry 1", "Industry 2", "Industry 3", "Industry 4", 
                       "Industry 5", "Industry 6", "Industry 7", "Industry 8", 
                       "Industry 9", "Industry 10", "Industry 11", "Industry 12", 
                       "Industry 13", "Industry 14", "Industry 15", "Industry 16", 
                       "Industry 17", "Industry 18", "Industry 19", "Industry 20", 
                       "Industry 21", "Industry 22", "Others"
        ];
        var yValues = [<?php echo $ct_ind1;?>, <?php echo $ct_ind2;?>,
                       <?php echo $ct_ind3;?>, <?php echo $ct_ind4;?>,
                       <?php echo $ct_ind5;?>, <?php echo $ct_ind6;?>,
                       <?php echo $ct_ind7;?>, <?php echo $ct_ind8;?>,
                       <?php echo $ct_ind9;?>, <?php echo $ct_ind10;?>,
                       <?php echo $ct_ind11;?>, <?php echo $ct_ind12;?>,
                       <?php echo $ct_ind13;?>, <?php echo $ct_ind14;?>,
                       <?php echo $ct_ind15;?>, <?php echo $ct_ind16;?>,
                       <?php echo $ct_ind17;?>, <?php echo $ct_ind18;?>,
                       <?php echo $ct_ind19;?>, <?php echo $ct_ind20;?>,
                       <?php echo $ct_ind21;?>, <?php echo $ct_ind22;?>,
                       <?php echo $ct_other3;?> 
        ];
        var barColors = [
          "#fceee1", "#fde1d4", "#ffd3c5", "#efbbad", "#e1a782",
           "#ffebd5", "#dfb9a6", "#d49f7c", "#b27255", "#ffeec2",
           "#f0ae83", "#e5ab83", "#c0815b", "#b78b72", "#6d4d3a",
           "#e9b0a2", "#c38673", "#ab766e", "#663d35", "#8f9da8",
           "#929ca6", "#737074", "#353032"
        ];
        var ctx = document.getElementById("mycanvas3").getContext('2d');

        new Chart("mycanvas3", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
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
                  color: '#fff',
                  // anchor: 'end'
                }
            },
            responsive: true,
            maintainAspectRatio: false
          }
        });
    </script>

    <!-- QUESTION # 4 -->
    <script type="text/javascript">
        var xValues = ["Chief", "Supervisory", "Rank and file"];
        var yValues = [<?php echo $ct_chief;?>, <?php echo $ct_sup;?>, <?php echo $ct_rank;?>];
        var barColors = [
          "#eccfcf",
          "#d2a8a8",
          "#543737"
        ];
        var ctx = document.getElementById("mycanvas4").getContext('2d');

        new Chart("mycanvas4", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
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
            maintainAspectRatio: false
          }
        });
    </script>

    <!-- QUESTION # 6 -->
    <script type="text/javascript">
        var xValues = ["Strongly Disagree", "Disagree",
                       "Agree", "Strongly Agree"
                      ];
        var yValues = [<?php echo $ct_sd;?>, <?php echo $ct_d;?>, <?php echo $ct_a;?>, <?php echo $ct_sa;?>];
        var barColors = [
          "#443333",
          "#aa7766",
          "#aa9999",
          "#ddbbaa"
        ];
        var ctx = document.getElementById("mycanvas6").getContext('2d');

        new Chart("mycanvas6", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
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
            maintainAspectRatio: false
          }
        });
    </script>

    

    <!-- QUESTION # 9 -->
    <script type="text/javascript">
        var xValues = ["Very Unlikely", "Unlikely",
                       "Likely", "Very Likely"
                      ];
        var yValues = [<?php echo $ct_9vu;?>, <?php echo $ct_9u;?>, <?php echo $ct_9l;?>, <?php echo $ct_9vl;?>];
        var barColors = [
          "#443333",
          "#aa7766",
          "#aa9999",
          "#ddbbaa"
        ];
        var ctx = document.getElementById("mycanvas9").getContext('2d');

        new Chart("mycanvas9", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
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
            maintainAspectRatio: false
          }
        });
    </script>

    <!-- QUESTION # 10 -->
    <script type="text/javascript">
        var xValues = ["Very Unlikely", "Unlikely",
                       "Likely", "Very Likely"
                      ];
        var yValues = [<?php echo $ct_10vu;?>, <?php echo $ct_10u;?>, <?php echo $ct_10l;?>, <?php echo $ct_10vl;?>];
        var barColors = [
          "#443333",
          "#aa7766",
          "#aa9999",
          "#ddbbaa"
        ];
        var ctx = document.getElementById("mycanvas10").getContext('2d');

        new Chart("mycanvas10", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
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
            maintainAspectRatio: false
          }
        });
    </script>

    

    <!-- QUESTION # 13 -->
    <script type="text/javascript">
        var xValues = ["Design courses that are more relevant to the needs of employers", "Include practical experience as part of the academic programs", "Include sector specific job placements as an integral part of the degree program", "Provide better post-graduation support (facilitate relations between graduates and companies/organizations)", "Others"
                      ];
        var yValues = [<?php echo $ct_des;?>, <?php echo $ct_prac;?>, <?php echo $ct_sec;?>, <?php echo $ct_post;?>, <?php echo $ct_other13;?>];
        var barColors = [
          "#f0e2e1",
          "#dfc5c4",
          "#d0a9a4",
          "#bf8c88",
          "#b06f69"
        ];
        var ctx = document.getElementById("mycanvas13").getContext('2d');

        new Chart("mycanvas13", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
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
            maintainAspectRatio: false
          }
        });
    </script>

    <!-- QUESTION # 14 -->
    <script type="text/javascript">
        var xValues = ["Unimportant", "Of Little Importance",
                       "Moderately part Important", "Important"
                      ];
        var yValues = [<?php echo $ct_un;?>, <?php echo $ct_of;?>, <?php echo $ct_mod;?>, <?php echo $ct_im;?>];
        var barColors = [
          "#443333",
          "#aa7766",
          "#aa9999",
          "#ddbbaa"
        ];
        var ctx = document.getElementById("mycanvas14").getContext('2d');

        new Chart("mycanvas14", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
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
            maintainAspectRatio: false
          }
        });
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.js"></script>

    <!-- QUESTION # 7 -->
    <script type="text/javascript">

        var barChartData = {
            labels: ["Reading Comprehension", "Active Listening", "Writing Skills", "Verbal Communication", "Mathematics Skills", "Scientific Literacy", "Digital Literacy", "Critical Thinking", "Participatory Learning", "Creative and Innovation", "Leadership Skills", "Social Awareness", "Service Orientation", "Time Management", "Complex Problem Solving Skills", "Judgment and Decision Making", "Systems Analysis and Evaluation"],
            datasets: [{
                label: 'Unimportant',
                backgroundColor: "#443333",
                yAxisID: "y-axis-1",
                data: [<?php echo $ct_read_un;?>, <?php echo $ct_list_un;?>,
                       <?php echo $ct_writ_un;?>, <?php echo $ct_verb_un;?>,
                       <?php echo $ct_math_un;?>, <?php echo $ct_sci_un;?>,
                       <?php echo $ct_dig_un;?>, <?php echo $ct_crit_un;?>,
                       <?php echo $ct_part_un;?>, <?php echo $ct_crea_un;?>,
                       <?php echo $ct_lead_un;?>, <?php echo $ct_soca_un;?>,
                       <?php echo $ct_serv_un;?>, <?php echo $ct_time_un;?>,
                       <?php echo $ct_prob_un;?>, <?php echo $ct_judg_un;?>,
                       <?php echo $ct_sys_un;?>]
            }, {
                label: 'Of Little Importance',
                backgroundColor: "#aa7766",
                yAxisID: "y-axis-2",
                data: [<?php echo $ct_read_ofl;?>, <?php echo $ct_list_ofl;?>,
                       <?php echo $ct_writ_ofl;?>, <?php echo $ct_verb_ofl;?>,
                       <?php echo $ct_math_ofl;?>, <?php echo $ct_sci_ofl;?>,
                       <?php echo $ct_dig_ofl;?>, <?php echo $ct_crit_ofl;?>,
                       <?php echo $ct_part_ofl;?>, <?php echo $ct_crea_ofl;?>,
                       <?php echo $ct_lead_ofl;?>, <?php echo $ct_soca_ofl;?>,
                       <?php echo $ct_serv_ofl;?>, <?php echo $ct_time_ofl;?>,
                       <?php echo $ct_prob_ofl;?>, <?php echo $ct_judg_ofl;?>,
                       <?php echo $ct_sys_ofl;?>]
            }, {
                label: 'Important',
                backgroundColor: "#aa9999",
                yAxisID: "y-axis-3",
                data: [<?php echo $ct_read_im;?>, <?php echo $ct_list_im;?>,
                       <?php echo $ct_writ_im;?>, <?php echo $ct_verb_im;?>,
                       <?php echo $ct_math_im;?>, <?php echo $ct_sci_im;?>,
                       <?php echo $ct_dig_im;?>, <?php echo $ct_crit_im;?>,
                       <?php echo $ct_part_im;?>, <?php echo $ct_crea_im;?>,
                       <?php echo $ct_lead_im;?>, <?php echo $ct_soca_im;?>,
                       <?php echo $ct_serv_im;?>, <?php echo $ct_time_im;?>,
                       <?php echo $ct_prob_im;?>, <?php echo $ct_judg_im;?>,
                       <?php echo $ct_sys_im;?>]
            }, {
                label: 'Very Important',
                backgroundColor: "#ddbbaa",
                yAxisID: "y-axis-4",
                data: [<?php echo $ct_read_vim;?>, <?php echo $ct_list_vim;?>,
                       <?php echo $ct_writ_vim;?>, <?php echo $ct_verb_vim;?>,
                       <?php echo $ct_math_vim;?>, <?php echo $ct_sci_vim;?>,
                       <?php echo $ct_dig_vim;?>, <?php echo $ct_crit_vim;?>,
                       <?php echo $ct_part_vim;?>, <?php echo $ct_crea_vim;?>,
                       <?php echo $ct_lead_vim;?>, <?php echo $ct_soca_vim;?>,
                       <?php echo $ct_serv_vim;?>, <?php echo $ct_time_vim;?>,
                       <?php echo $ct_prob_vim;?>, <?php echo $ct_judg_vim;?>,
                       <?php echo $ct_sys_vim;?>]
            }]
        }

        new Chart("mycanvas7", {
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
            }
          }
        });
    </script>

    <!-- QUESTION # 8 -->
    <script type="text/javascript">

        var barChartData = {
            labels: ["Reading Comprehension", "Active Listening", "Writing Skills", "Verbal Communication", "Mathematics Skills", "Scientific Literacy", "Digital Literacy", "Critical Thinking", "Participatory Learning", "Creative and Innovation", "Leadership Skills", "Social Awareness", "Service Orientation", "Time Management", "Complex Problem Solving Skills", "Judgment and Decision Making", "Systems Analysis and Evaluation"],
            datasets: [{
                label: 'Very Unsatisfied',
                backgroundColor: "#443333",
                yAxisID: "y-axis-1",
                data: [<?php echo $ct_read_vu;?>, <?php echo $ct_list_vu;?>,
                       <?php echo $ct_writ_vu;?>, <?php echo $ct_verb_vu;?>,
                       <?php echo $ct_math_vu;?>, <?php echo $ct_sci_vu;?>,
                       <?php echo $ct_dig_vu;?>, <?php echo $ct_crit_vu;?>,
                       <?php echo $ct_part_vu;?>, <?php echo $ct_crea_vu;?>,
                       <?php echo $ct_lead_vu;?>, <?php echo $ct_soca_vu;?>,
                       <?php echo $ct_serv_vu;?>, <?php echo $ct_time_vu;?>,
                       <?php echo $ct_prob_vu;?>, <?php echo $ct_judg_vu;?>,
                       <?php echo $ct_sys_vu;?>]
            }, {
                label: 'Unsatisfied',
                backgroundColor: "#aa7766",
                yAxisID: "y-axis-2",
                data: [<?php echo $ct_read_us;?>, <?php echo $ct_list_us;?>,
                       <?php echo $ct_writ_us;?>, <?php echo $ct_verb_us;?>,
                       <?php echo $ct_math_us;?>, <?php echo $ct_sci_us;?>,
                       <?php echo $ct_dig_us;?>, <?php echo $ct_crit_us;?>,
                       <?php echo $ct_part_us;?>, <?php echo $ct_crea_us;?>,
                       <?php echo $ct_lead_us;?>, <?php echo $ct_soca_us;?>,
                       <?php echo $ct_serv_us;?>, <?php echo $ct_time_us;?>,
                       <?php echo $ct_prob_us;?>, <?php echo $ct_judg_us;?>,
                       <?php echo $ct_sys_us;?>]
            }, {
                label: 'Satisfied',
                backgroundColor: "#aa9999",
                yAxisID: "y-axis-3",
                data: [<?php echo $ct_read_sa;?>, <?php echo $ct_list_sa;?>,
                       <?php echo $ct_writ_sa;?>, <?php echo $ct_verb_sa;?>,
                       <?php echo $ct_math_sa;?>, <?php echo $ct_sci_sa;?>,
                       <?php echo $ct_dig_sa;?>, <?php echo $ct_crit_sa;?>,
                       <?php echo $ct_part_sa;?>, <?php echo $ct_crea_sa;?>,
                       <?php echo $ct_lead_sa;?>, <?php echo $ct_soca_sa;?>,
                       <?php echo $ct_serv_sa;?>, <?php echo $ct_time_sa;?>,
                       <?php echo $ct_prob_sa;?>, <?php echo $ct_judg_sa;?>,
                       <?php echo $ct_sys_sa;?>]
            }, {
                label: 'Very Satisfied',
                backgroundColor: "#ddbbaa",
                yAxisID: "y-axis-4",
                data: [<?php echo $ct_read_vs;?>, <?php echo $ct_list_vs;?>,
                       <?php echo $ct_writ_vs;?>, <?php echo $ct_verb_vs;?>,
                       <?php echo $ct_math_vs;?>, <?php echo $ct_sci_vs;?>,
                       <?php echo $ct_dig_vs;?>, <?php echo $ct_crit_vs;?>,
                       <?php echo $ct_part_vs;?>, <?php echo $ct_crea_vs;?>,
                       <?php echo $ct_lead_vs;?>, <?php echo $ct_soca_vs;?>,
                       <?php echo $ct_serv_vs;?>, <?php echo $ct_time_vs;?>,
                       <?php echo $ct_prob_vs;?>, <?php echo $ct_judg_vs;?>,
                       <?php echo $ct_sys_vs;?>]
            }]
        }

        new Chart("mycanvas8", {
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
            }
          }
        });
    </script>
    <!-- QUESTION # 11 -->
    <script type="text/javascript">

        var barChartData = {
            // labels: ["Willing to undergo training and/or further education", "Has strong and professional work ethic", "Willing to share knowledge and expertise within the company and/or community", "Willing and has a positive attitude towards working with others", "Is able to learn quickly the basic company operations", "Is able to provide solutions and contribute to the growth of the company", "Is able to master company operations", "Effective in both oral and written communication", "Computer and Technical Literate", "Effective and efficient in accomplishing tasks", "Able to provide innovative ideas to the company"],
            labels: ["Skill 1", "Skill 2", "Skill 3", "Skill 4", "Skill 5", "Skill 6", "Skill 7", "Skill 8", "Skill 9", "Skill 10", "Skill 11"],
            datasets: [{
                label: 'Unimportant',
                backgroundColor: "#443333",
                yAxisID: "y-axis-1",
                data: [<?php echo $ct_dmcs1_un;?>, <?php echo $ct_dmcs2_un;?>,
                       <?php echo $ct_dmcs3_un;?>, <?php echo $ct_dmcs4_un;?>,
                       <?php echo $ct_dmcs5_un;?>, <?php echo $ct_dmcs6_un;?>,
                       <?php echo $ct_dmcs7_un;?>, <?php echo $ct_dmcs8_un;?>,
                       <?php echo $ct_dmcs9_un;?>, <?php echo $ct_dmcs10_un;?>,
                       <?php echo $ct_dmcs11_un;?>]
            }, {
                label: 'Of Little Importance',
                backgroundColor: "#aa7766",
                yAxisID: "y-axis-2",
                data: [<?php echo $ct_dmcs1_ofl;?>, <?php echo $ct_dmcs2_ofl;?>,
                       <?php echo $ct_dmcs3_ofl;?>, <?php echo $ct_dmcs4_ofl;?>,
                       <?php echo $ct_dmcs5_ofl;?>, <?php echo $ct_dmcs6_ofl;?>,
                       <?php echo $ct_dmcs7_ofl;?>, <?php echo $ct_dmcs8_ofl;?>,
                       <?php echo $ct_dmcs9_ofl;?>, <?php echo $ct_dmcs10_ofl;?>,
                       <?php echo $ct_dmcs11_ofl;?>]
            }, {
                label: 'Important',
                backgroundColor: "#aa9999",
                yAxisID: "y-axis-3",
                data: [<?php echo $ct_dmcs1_im;?>, <?php echo $ct_dmcs2_im;?>,
                       <?php echo $ct_dmcs3_im;?>, <?php echo $ct_dmcs4_im;?>,
                       <?php echo $ct_dmcs5_im;?>, <?php echo $ct_dmcs6_im;?>,
                       <?php echo $ct_dmcs7_im;?>, <?php echo $ct_dmcs8_im;?>,
                       <?php echo $ct_dmcs9_im;?>, <?php echo $ct_dmcs10_im;?>,
                       <?php echo $ct_dmcs11_im;?>]
            }, {
                label: 'Very Important',
                backgroundColor: "#ddbbaa",
                yAxisID: "y-axis-4",
                data: [<?php echo $ct_dmcs1_vim;?>, <?php echo $ct_dmcs2_vim;?>,
                       <?php echo $ct_dmcs3_vim;?>, <?php echo $ct_dmcs4_vim;?>,
                       <?php echo $ct_dmcs5_vim;?>, <?php echo $ct_dmcs6_vim;?>,
                       <?php echo $ct_dmcs7_vim;?>, <?php echo $ct_dmcs8_vim;?>,
                       <?php echo $ct_dmcs9_vim;?>, <?php echo $ct_dmcs10_vim;?>,
                       <?php echo $ct_dmcs11_vim;?>]
            }]
        }

        new Chart("mycanvas11", {
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
            }
           
          }
        });
    </script>

    <!-- QUESTION # 12 -->
    <script type="text/javascript">

        var barChartData = {
            // labels: ["Willing to undergo training and/or further education", "Has strong and professional work ethic", "Willing to share knowledge and expertise within the company and/or community", "Willing and has a positive attitude towards working with others", "Is able to learn quickly the basic company operations", "Is able to provide solutions and contribute to the growth of the company", "Is able to master company operations", "Effective in both oral and written communication", "Computer and Technical Literate", "Effective and efficient in accomplishing tasks", "Able to provide innovative ideas to the company"],
            labels: ["Skill 1", "Skill 2", "Skill 3", "Skill 4", "Skill 5", "Skill 6", "Skill 7", "Skill 8", "Skill 9", "Skill 10", "Skill 11"],
            datasets: [{
                label: 'Very Unsatisfied',
                backgroundColor: "#443333",
                yAxisID: "y-axis-1",
                data: [<?php echo $ct_dmcs1_vu;?>, <?php echo $ct_dmcs2_vu;?>,
                       <?php echo $ct_dmcs3_vu;?>, <?php echo $ct_dmcs4_vu;?>,
                       <?php echo $ct_dmcs5_vu;?>, <?php echo $ct_dmcs6_vu;?>,
                       <?php echo $ct_dmcs7_vu;?>, <?php echo $ct_dmcs8_vu;?>,
                       <?php echo $ct_dmcs9_vu;?>, <?php echo $ct_dmcs10_vu;?>,
                       <?php echo $ct_dmcs11_vu;?>]
            }, {
                label: 'Unsatisfied',
                backgroundColor: "#aa7766",
                yAxisID: "y-axis-2",
                data: [<?php echo $ct_dmcs1_us;?>, <?php echo $ct_dmcs2_us;?>,
                       <?php echo $ct_dmcs3_us;?>, <?php echo $ct_dmcs4_us;?>,
                       <?php echo $ct_dmcs5_us;?>, <?php echo $ct_dmcs6_us;?>,
                       <?php echo $ct_dmcs7_us;?>, <?php echo $ct_dmcs8_us;?>,
                       <?php echo $ct_dmcs9_us;?>, <?php echo $ct_dmcs10_us;?>,
                       <?php echo $ct_dmcs11_us;?>]
            }, {
                label: 'Satisfied',
                backgroundColor: "#aa9999",
                yAxisID: "y-axis-3",
                data: [<?php echo $ct_dmcs1_sa;?>, <?php echo $ct_dmcs2_sa;?>,
                       <?php echo $ct_dmcs3_sa;?>, <?php echo $ct_dmcs4_sa;?>,
                       <?php echo $ct_dmcs5_sa;?>, <?php echo $ct_dmcs6_sa;?>,
                       <?php echo $ct_dmcs7_sa;?>, <?php echo $ct_dmcs8_sa;?>,
                       <?php echo $ct_dmcs9_sa;?>, <?php echo $ct_dmcs10_sa;?>,
                       <?php echo $ct_dmcs11_sa;?>]
            }, {
                label: 'Very Satisfied',
                backgroundColor: "#ddbbaa",
                yAxisID: "y-axis-4",
                data: [<?php echo $ct_dmcs1_vs;?>, <?php echo $ct_dmcs2_vs;?>,
                       <?php echo $ct_dmcs3_vs;?>, <?php echo $ct_dmcs4_vs;?>,
                       <?php echo $ct_dmcs5_vs;?>, <?php echo $ct_dmcs6_vs;?>,
                       <?php echo $ct_dmcs7_vs;?>, <?php echo $ct_dmcs8_vs;?>,
                       <?php echo $ct_dmcs9_vs;?>, <?php echo $ct_dmcs10_vs;?>,
                       <?php echo $ct_dmcs11_vs;?>]
            }]
        }

        new Chart("mycanvas12", {
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
            }
           
          }
        });
    </script>

    <?php include('footer.php'); ?>

    <script>
        function openQues(evt, quesNum) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(quesNum).style.display = "block";
          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

</body>
</html>