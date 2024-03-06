<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <style type="text/css">
* {
    margin: 0;
    padding: 0;
    font-size: 100%;
    font-family: 'Avenir Next', "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    line-height: 1.65;
}

img {
    max-width: 10%;
}

body,
.body-wrap {
    width: 100% !important;
    height: 100%;
    background: #efefef;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
}

a {
    color: #71bc37;
    /*text-decoration: none;*/
}

.text-center {
    text-align: center;
}

.text-right {
    text-align: right;
}

.text-left {
    text-align: left;
}


h1, h2, h3, h4, h5, h6 {
    margin-bottom: 20px;
    line-height: 1.25;
}

h1 {
    font-size: 32px;
}

h2 {
    font-size: 28px;
}

h3 {
    font-size: 24px;
}

h4 {
    font-size: 20px;
}

h5 {
    font-size: 16px;
}

.fix-font-p p, ul, ol {
    font-size: 16px;
    font-weight: normal;
    margin-bottom: 20px;
}


.container table {
    width: 100% !important;border-collapse: collapse;
}
.container .masthead {
    padding: 80px 0;
    background: #71bc37;
    color: white;
}
.container .masthead h1 {
    margin: 0 auto !important;
    max-width: 90%;
    text-transform: uppercase;
}
.container .content {
    background: white;padding: 30px 35px;
}
.container .content.footer {
    background: none;
}
.container .content.footer p {
    margin-bottom: 0;
    color: #888;
    text-align: center;
    font-size: 14px;
}
.container .content.footer a {
    color: #888;
    text-decoration: none;
    font-weight: bold;
}
.fix-font p{
	font-size: 14px;
}


.button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
    </style>
</head>
<body>

	<?php 

$databook =  $data['book'][0];
$datacart = json_decode($databook['cartbooking'],TRUE);
$datalistuser = json_decode($databook['userlists'],TRUE);
//print_r($datalistuser);
	 ?>
	<div style="height: 50px;"></div>
<table style="width: 100% !important;height: 100%;background: #efefef;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;">
    <tr>
        <td style="display: block !important;clear: both !important;margin: 0 auto !important;max-width: 580px !important;">

            <!-- Message start -->
            <table style="width: 100% !important;border-collapse: collapse;">

                <tr style="border: 1px solid #ccc;">
                    <td class="content fix-font fix-font-p" style="background: white;padding: 30px 35px;">

                        <h3> <span style="color: #01a99c;">Thank you for booking your</span> river cruise <span style="color: #01a99c;">with</span> Tweet World Travel group</h3>

                        <p>Dear {{$data['user']['name']}}</p>
                        <p>It has been a great pleasure to assist you in booking our river cruise for your journey.</p>
                        <p>A summary of your booking is below.</p>
                        <p>All of your booking information can also be viewed by logging into your <a href="https://worldwiderivercruises.com.au/my-bookings" target="_blank">customer account</a>. Don’t have an account? It will only take you a few minutes to <a href="https://worldwiderivercruises.com.au/register" target="_blank">create one</a>.</p>
                        <p>We hope you will have a memorable cruise holiday!</p>

                        <p>Best regards, <br /><em>Tweet World Travel Team</em></p>

            

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td style="display: block !important;clear: both !important; margin: 0 auto !important;max-width: 580px !important;">
            <!-- Message start -->
            <table style="width: 100% !important;border-collapse: collapse;">
                <tr>
                    <td class="footer" align="left" style="font-size: 16.5pt;font-family: 'Arial',sans-serif;color: #D5B04B;padding: 30px 10px;font-weight: 600;">
                        Order Summary
                    </td>
                    <td class="footer" align="right" style="padding: 30px 10px;color: #666666;font-weight: 600;">
                        Booking number: <span style="color: #000;">{{$databook['ordercode']}}</span>
                    </td>                    
                </tr>
            </table>
        </td>
    </tr>


<?php 
foreach ($datacart as $keycart => $valuecart) {
 ?>
         <tr>
        <td style="display: block !important;clear: both !important; margin: 0 auto !important;max-width: 580px !important;">

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;overflow:hidden;word-break:normal;}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
</style>


<table class="tg" style="background: #22374e;width: 100% !important;border-collapse: collapse;">
  <tr>
    <th class="tg-0pky" colspan="4" style="font-size: 16.5pt;font-weight: 600;padding: 20px;padding-bottom: 0;color: #fff;">{{$valuecart['name']}}</th>
  </tr>
  <tr>
    <td class="tg-0pky" colspan="4" style="font-size: 12pt;padding:0 20px;padding-bottom: 20px;color: #fff;">
	<?php 
	$number_adult = 0;
	$name_user_string = '';
	foreach ($datalistuser[$keycart] as $keyul => $valueul) {
	//	print_r($keyul);
	//	print_r($valueul);
		foreach ($valueul as $keyedul_name => $valuedul_name) {
			$name_user_string .= $valuedul_name['name']." ".$valuedul_name['lastname']." , ";
			$number_adult++;
		}

		
	}
	 ?>

    {{$number_adult}} TRAVELERS : {{$name_user_string}}</td>
  </tr>
  <tr>
    <td class="tg-0pky" colspan="2" style="font-size: 12pt;font-weight: 600;padding:0 20px;text-align: left;padding-bottom: 10px;position: relative;color: #fff;">
        <img src="http://dev.tweetworldtravel.com.au/img/calendar-icon.png" alt="" style="position: absolute;top: -1px;float: left;" />
                        <p style="font-size: 10pt;color: white;margin-left: 35px;">Start Date</p>
                        <p style="margin-left: 35px">{{$valuecart['options']['daystart']}}</p>
    </td>
    <td class="tg-0pky" colspan="2" style="font-size: 12pt;font-weight: 600;padding:0 20px;text-align: left;position: relative;color: #fff;">
        <img src="http://dev.tweetworldtravel.com.au/img/calendar-icon.png" alt="" style="position: absolute;top: -1px;float: left;" />
                        <p style="font-size: 10pt;color: white;margin-left: 35px">End Date</p>
                        <p style="margin-left: 35px">{{$valuecart['options']['endstart']}}</p>
    </td>
  </tr>
  <tr>
    <td class="tg-0pky" colspan="2" style="font-size: 12pt;font-weight: 600;padding:0 20px;text-align: left;position: relative;color: #fff;">
         <img src="http://dev.tweetworldtravel.com.au/img/cruise-icon.png" alt="" style="position: absolute;top: -1px;float: left;" />
                        <p style="font-size: 10pt;color: white;margin-left: 35px">Ship Name</p>
                        <p style="margin-left: 35px">{{$valuecart['options']['product_ship']}}</p>
    </td>
    <td class="tg-0pky" colspan="2" style="font-size: 12pt;font-weight: 600;padding:0 20px;text-align: left;position: relative;color: #fff;">
        <img src="http://dev.tweetworldtravel.com.au/img/rate-icon.png" alt="" style="position: absolute;top: -1px;float: left;" />
                        <p style="font-size: 10pt;color: white;margin-left: 35px">Cabin Type</p>
                        <p style="margin-left: 35px">{{$valuecart['options']['product_cabintype']}}</p>
    </td>
  </tr>
</table>


        </td>
    </tr>

        <tr>
        <td style="display: block !important;clear: both !important; margin: 0 auto !important;max-width: 580px !important;">

            <!-- Message start -->
            <table style="background-color: #fff;border: 1px solid #ccc;margin-top: 20px;width: 100% !important;border-collapse: collapse;">

                <tr>
                    <td align="left" style="font-size: 16.5pt;padding: 10px 20px 5px 20px;">Cruise</td>   
                    <td align="right" style="font-size: 16.5pt;font-weight: 600;padding: 10px 20px 5px 20px;color: #D5B04B;">${{$valuecart['options']['product_price_all'] - $valuecart['options']['product_excursion_price']}}</td>
                </tr>
                <tr>
                    <td align="left" style="font-size: 16.5pt;padding: 10px 20px 5px 20px;">Excursion</td>
                    <td align="right" style="font-size: 16.5pt;font-weight: 600;padding: 10px 20px 5px 20px;color: #D5B04B;">${{$valuecart['options']['product_excursion_price']}}</td>
                </tr>                
            </table>

        </td>
    </tr>
        <?php } ?>
         <tr>
        <td style="display: block !important;clear: both !important; margin: 0 auto !important;max-width: 580px !important;">

            <!-- Message start -->
            <table style="background: #22374e;margin-top: 20px;width: 100% !important;border-collapse: collapse;">

                <tr>
                    <td align="left" style="font-size: 16.5pt;font-weight: 600;padding: 20px;color: #fff;">Total</td>
                    <td align="right" style="font-size: 16.5pt;font-weight: 600;padding: 20px;color: #fff;">${{$valuecart['subtotal']}}</td>
                </tr>               
            </table>

        </td>
    </tr>


          <tr>
          
        <td style="display: block !important;clear: both !important; margin: 0 auto !important;max-width: 580px !important;">
            <!-- Message start -->
            <table style="background: #fff;margin-top: 20px;border: 1px solid #ccc;width: 100% !important;border-collapse: collapse;">
                <tr>

                    <td class="content fix-font" style="background: white;padding: 30px 35px;">
                    	
                        <h3 style="font-weight: 600;color: #D5B04B;">Contact details</h3>
                        <h4 style="font-weight: 600;color: #D5B04B;">Billing information</h4>
                        <p>{{$data['user']['name']}}</p>
                        <p><a href="#">{{$data['user']['email']}}</a></p>
                        <p>{{$data['user']['stage']}}</p>
                        <p>{{$data['user']['city']}}</p>
                        <p>{{$data['user']['city']}}</p>
                        <p>{{$data['user']['country']}}</p>
                    </td>
                </tr>               
            </table>

        </td>
    </tr>   
          <tr>
        <td style="display: block !important;clear: both !important; margin: 0 auto !important;max-width: 580px !important;">
            <!-- Message start -->
            <table style="background: #fff;margin-top: 20px;border: 1px solid #ccc;width: 100% !important;border-collapse: collapse;">
                <tr>
                    <td class="content fix-font" style="background: white;padding: 30px 35px;">
                        <h3 style="font-weight: 600;color: #D5B04B;">Payment details</h3>
                        <p>Payment type: Bank Transfer</p>
                        <p>Account Name:Tweet World Travel</p>
                        <p>BSB: 065-145</p>
                        <p>Account No.: 10458191</p>
                      <!--   <p>Card holder: xxxxxxxxxxxxxxxxxxx</p>
                        <p>Card number: xxxxxxxxxxxxxxxxxxxx</p>
                        <p>Payment date: xxxxxxxxxxxxxxxxxx</p> -->
                    </td>
                </tr>               
            </table>

        </td>
    </tr>
              <tr>
        <td style="display: block !important;clear: both !important; margin: 0 auto !important;max-width: 580px !important;">
            <!-- Message start -->
            <table style="background: #fff;margin-top: 20px;border: 1px solid #ccc;width: 100% !important;border-collapse: collapse;">
                <tr>
                    <td class="content fix-font" style="background: white;padding: 30px 35px;">
                        <h3 style="font-weight: 600;color: #D5B04B">Full Itinerary :</h3>
							<a href="https://b2b.tweetworldtravel.com.au/printItinerarySumary/{{$databook['ordercode']}}" style="background-color: #22374e;border: none;color: white;padding: 5px 30px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;  cursor: pointer;" target="_blank">DOWNLOAD</a>
                    </td>
                </tr>               
            </table>

        </td>
    </tr>
              <tr>
        <td style="display: block !important;clear: both !important; margin: 0 auto !important;max-width: 580px !important;">
            <!-- Message start -->
            <table style="background: #fff;margin-top: 20px;border: 1px solid #22374e;width: 100% !important;border-collapse: collapse;">
                <tr>
                	<td class="content fix-font" align="left" style="font-size: 16.5pt;font-weight: 600;padding: 20px;background: white;">
	                    <h4 style="font-weight: 600;color: #D5B04B;">Need assistance?</h4>
                        <h5 style="margin-bottom: 0;color: #D5B04B;">Refund Request</h5>
                        <p><a href="#">contact@worldwiderivercruises.com.au</a></p>
                	</td>
                    <td class="fix-font" align="right" style="font-size: 16.5pt;font-weight: 600;padding: 20px;color: #fff;">
                        <br />
                    	<h5 style="color: #D5B04B;margin-bottom: 0">Customer service</h5>
                    	<p style="color: #000">1300 356 391</p>
                    </td>

                </tr>               
            </table>

        </td>
    </tr>
                  <tr>
        <td style="display: block !important;clear: both !important; margin: 0 auto !important;max-width: 580px !important;">
            <!-- Message start -->
            <table style="margin: 20px 0;width: 100% !important;border-collapse: collapse;">
                <tr>
                    <td class="fix-font" align="right">
                        <p>To read our terms and conditions visit our <a href="#">website</a>.</p>
                    </td>
                </tr>               
            </table>

        </td>
    </tr>
</table>
</body>
</html>