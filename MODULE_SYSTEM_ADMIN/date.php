<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
  <style>
  #invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);

  background: #FFF;


::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
h1{

  color: #222;
}
h2{}
h3{

  font-weight: 300;
  line-height: 2em;
}
p{

  color: #666;
  line-height: 1.2em;
}

#top, #mid,#bot{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}

#top{min-height: 100px;}
#mid{min-height: 80px;}
#bot{ min-height: 50px;}

#top .logo{

	height: 60px;
	width: 60px;
	background: url(images.png) no-repeat;
	background-size: 60px 60px;
}
.clientlogo{

	height: 60px;
	width: 60px;
	background: url(images.jpg) no-repeat;
	background-size: 60px 60px;
  border-radius: 50px;
}
.info{
  display: block;
  //float:left;
  margin-left: 0;
  width: 30px;
}
.title{
  float: right;
}
.title p{text-align: right;}
table{
  width: 100%;
  border-collapse: collapse;
}
td{
  padding: 5px 0 5px 5px;
  border: 1px solid #EEE
}
.tabletitle{
  padding: 5px;
  background: #EEE;
}
.service{border-bottom: 1px solid #EEE;}
.item{width: 24mm;}
.itemtext{}

#legalcopy{
  margin-top: 5mm;
}



}
  </style>
<body>

      <div class="logo" style="padding-left: 5%;">
      	<img src="images.jpg" style="width: 80px;">
      </div>
      <div class="info">
      </div><!--End Info-->


    <div id="mid">
      <div class="info">
        <h4 style="padding-left: 5%;">Token Number</h4><h1 style="padding-left: 7%;">01</h1>

  						<table>
							<tr class="tabletitle">
								<td class="item"><h3>Item</h3></td>
								<td class="Hours"><h3>Qty</h3></td>
								<td class="Rate"><h3>Sub Total</h3></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Communication</p></td>
								<td class="tableitem"><p class="itemtext">5</p></td>
								<td class="tableitem"><p class="itemtext">$375.00</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Asset Gathering</p></td>
								<td class="tableitem"><p class="itemtext">3</p></td>
								<td class="tableitem"><p class="itemtext">$225.00</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Design Development</p></td>
								<td class="tableitem"><p class="itemtext">5</p></td>
								<td class="tableitem"><p class="itemtext">$375.00</p></td>
							</tr>

<tr class="tabletitle"><td></td>
								<td class="Rate"><h3>Total</h3></td>
								<td class="payment"><h3>$3,644.25</h3></td>
										 <p style="padding-left: 14%; font-size: 100%;"  id="date"></p>


							</tr>

						</table>
						<small style="padding-left: 5%; font-size: 60%;" >@copyright by quicktech </small>
					</div><!--End Table-->



				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
<script type="text/javascript">

 n =  new Date();
  y = n.getFullYear();
  m = n.getMonth() + 1;
  d = n.getDate();
  document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
</script>
</body>
</html>
