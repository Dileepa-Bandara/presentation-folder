<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./pages/css/style.css">
    <title>View Salary Details</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #6880d3;
  text-align: left;
  padding: 8px;
}

.button-1 {
    background-color: #6880d3; 
    border: none;
    border-radius: 4px;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    /* display: inline-block; */
    font-size: 16px;
    margin: 4px 10px;
    cursor: pointer;
    display: block;

  }
  input[type=submit] {
    background-color: #071d56;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
      }


/* tr:nth-child(even) {
  background-color: #dddddd;
} */
</style>
</head>
<body>
<div class="home">        
<div class="sales-boxes">
<div class="recent-sales">
<h2>Employee Salary Details</h2>

<input type="submit" onclick="alert('Hello world!')" value="Add New"/>
<br><br>
<br>

<table>
  <tr>
    <th style="text-align:center" rowspan="2">Employee ID</th>
    <th style="text-align:center" rowspan="2">Name</th>
    <th style="text-align:center" rowspan="2">Basic</th>
    <th style="text-align:center" colspan="3">Additions</th>
    <th style="text-align:center" colspan="3">Deductions</th>
    <th style="text-align:center" rowspan="2">Total</th>
    <th style="text-align:center" rowspan="2">Report</th>
  </tr>
  <tr>
    <td style="text-align:center">OT</td>
    <td style="text-align:center">Allowances</td>
    <td style="text-align:center">Bonus</td>
    <td style="text-align:center">No-pay</td>
    <td style="text-align:center">EPF</td>
    <td style="text-align:center">ETF</td>
  </tr>
  <tr>
    <td>SE0080</td>
    <td>Nimal Nila</td>
    <td>10,000</td>
    <td>200</td>
    <td style="text-align:center">200</td>
    <td style="text-align:center">200</td>
    <td style="text-align:center">200</td>
    <td>200</td>
    <td>200</td>
    <td>50,000</td>
    <td><button class="button-1" type="button" onclick="alert('Hello world!')">Print</button></td>
  </tr>
  <tr>
    <td>SE0090</td>
    <td>Sunil Nila</td>
    <td>10,000</td>
    <td>200</td>
    <td style="text-align:center">200</td>
    <td style="text-align:center">200</td>
    <td style="text-align:center">200</td>
    <td>200</td>
    <td>200</td>
    <td>50,000</td>
    <td><button class="button-1" type="button" onclick="alert('Hello world!')">Print</button></td>
  </tr>
  <tr>
    <td>SE0100</td>
    <td>Nisal Vinod</td>
    <td>10,000</td>
    <td>200</td>
    <td style="text-align:center">200</td>
    <td style="text-align:center">200</td>
    <td style="text-align:center">200</td>
    <td>200</td>
    <td>200</td>
    <td>50,000</td>
    <td><button  class="button-1" type="button" onclick="alert('Hello world!')">Print</button></td>
  </tr>
  
</table>
</div>
</div>
</div>

</body>
</html>