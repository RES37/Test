<button class="btn" onClick="window.location.href='../server_login/server_login_index.php';">
  <i class="fa fa-home"></i>
</button>

<div id="pie_chart" style="border: .1em solid black; margin-top: 1em;"></div>
<div id="tbl_table" style="border: .1em solid black; padding-left: 5em; margin-top: 1em;"></div>

<script>
  // Load the visualization libraries and set callback functions
  google.charts.load('current', {'packages':['corechart', 'table']});
  google.charts.setOnLoadCallback(drawCharts);
  
  function drawCharts() {
    // Get the data from PHP and create a DataTable for the PieChart
    var pieData = new google.visualization.DataTable();
    pieData.addColumn('string', 'Name');
    pieData.addColumn('number', 'Value');
    <?php
      foreach($data as $row) {
        echo "pieData.addRow(['".$row['Names']."', ".$row['Total']."]);";
      }
    ?>
    
    // Set options for the PieChart
    var pieOptions = {
      title: 'Booth Report',
      width: '50%',
      height: '50%'
    };
    
    // Draw the PieChart
    var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    pieChart.draw(pieData, pieOptions);
    
    // Get the data from PHP and create a DataTable for the TableChart
    var tableData = new google.visualization.DataTable();
    tableData.addColumn('string', 'Name');
    tableData.addColumn('number', 'Value');
    <?php
      foreach($data as $row) {
        echo "tableData.addRow(['".$row['Names']."', ".$row['Total']."]);";
      }
    ?>

    // Set options for the TableChart
    var tableOptions = {
      showRowNumber: true,
      width: '50%',
      height: '50%',
    }

    // Draw the TableChart
    var tableChart = new google.visualization.Table(document.getElementById('tbl_table'));
    tableChart.draw(tableData, tableOptions);
  }
</script>
