<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>YOC</title>
</head>

<body>
<div id="mailsub" class="notification" align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;">
    <tr>
      <td align="center" bgcolor="#eff3f8"><table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
          <tr>
            <td><!-- padding -->
              
              <div style="height: 80px; line-height: 80px; font-size: 10px;"></div></td>
          </tr>
          <!--header -->
          <tr>
            <td align="center" bgcolor="#ffffff"><!-- padding -->
              
              <div style="height: 30px; line-height: 30px; font-size: 10px;"></div>
              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left"><div class="mob_center_bl" style="float: left; display: inline-block; width: 115px;">
                      <table class="mob_center" width="115" border="0" cellspacing="0" cellpadding="0" align="left" style="border-collapse: collapse;">
                        <tr>
                          <td align="left" valign="middle"><!-- padding -->
                            
                            <div style="height: 20px; line-height: 20px; font-size: 10px;"></div>
                            <table width="115" border="0" cellspacing="0" cellpadding="0" >
                              <tr>
                                <td align="left" valign="top" class="mob_center"><a href="https://yoc.com.pk/" target="_blank"> <img src="{{URL('/')}}/pic/logo.png" alt="YOC" border="0"/></a></td>
                              </tr>
                            </table></td>
                        </tr>
                      </table>
                    </div></td>
                </tr>
              </table>
              
              <!-- padding -->
              
              <div style="height: 50px; line-height: 50px; font-size: 10px;"></div></td>
          </tr>
          <!--header END--> 
          
          <!--content 1 -->
          <tr>
            <td align="center" bgcolor="#fbfcfd"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center"><!-- padding -->
                    
                    <div style="height: 60px; line-height: 60px; font-size: 10px;"></div>
                    <div style="line-height: 44px;"> <font face="Arial, Helvetica, sans-serif" size="5" color="#57697e" style="font-size: 34px;"> <span style="font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;"> Order Confirmation </span></font> </div>
                    
                    <!-- padding -->
                    
                    <div style="height: 40px; line-height: 40px; font-size: 10px;"></div></td>
                </tr>
                <tr>
                  <td><div style="line-height: 24px;"> <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;"> <b>Dear {{$customer_fname}} {{$customer_lname}},</b><br>
                      @if($status == 1) <span  style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;"> Your order {{$order_id}} shipped from our warehouse for delivery. You will get your delivery soon. Thanks for buying from YOC. <br>
                      </span> @endif
                      
                      @if($status == 2) <span  style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;"> We noticed you cancelled your order {{$order_id}}, and we are sorry for any inconvenience caused from our side. We would love to know what made you change your mind, because it helps us improve the service we provide to you. Just to let you know your order has been cancelled. Have a great day. <br>
                      </span> @endif
                      
                      @if($status == 3) <span  style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;"> We noticed you return your order {{$order_id}}, and we are sorry for any inconvenience caused from our side. We would love to know what made you change your mind, because it helps us improve the service we provide to you. Just to let you know your order has been cancelled. Have a great day. <br>
                      </span> @endif
                      
                      @if($status == 4) <span  style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;"> Your order {{$order_id}} has been delivered by our rider. Wish you a satisfied with our products and had a wonderful experience shopping at our website. Hoping to see you again! <br>
                      </span> @endif </font> </div>
                    
                    <!-- padding -->
                    
                    <div style="height: 40px; line-height: 40px; font-size: 10px;"></div></td>
                </tr>
                <tr>
                  <td ><div style="line-height: 24px;"> <font face="Arial, Helvetica, sans-seri; font-size: 13px;" size="3" color="#596167"> <span  style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;"> YOC<br>
                      0323-3222243<br>
                      Lahore </span></font> </div>
                    <div style="height: 60px; line-height: 60px; font-size: 10px;"></div></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td class="iage_footer" align="center" bgcolor="#ffffff" style="padding-top:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center"><font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;"> <span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;"> 2020 © YOC. ALL Rights Reserved. </span></font></td>
                </tr>
              </table>
              
              <!-- padding -->
              
              <div style="height: 30px; line-height: 30px; font-size: 10px;"></div></td>
          </tr>
          <!--footer END-->
          <tr>
            <td><!-- padding -->
              
              <div style="height: 80px; line-height: 80px; font-size: 10px;"></div></td>
          </tr>
        </table></td>
    </tr>
  </table>
</div>
</body>
</html>
