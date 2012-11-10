<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Konvertor | Konvertuj brzo i lako</title>
<meta name="description" content="Konvertor valuta, jednostavan alat za konverziju. Konvertujte valutu u dva klika">
<meta name="keywords" content="konvertor, valuta, kursna lista">
<meta name="author" content="Mihailo Milojevic">
<link rel="icon" type="image/x-icon" href="http://localhost/favicon.ico" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	$('#convert').click(function(){
	 
	 var amount = $('#amount').val();
	 var from = $('#fromCurrency').val();
	 var to = $('#toCurrency').val();
	 
	 var dataString = "amount=" + amount + "&from=" + from + "&to=" + to;
	 
		 $.ajax({
		   type: "POST",
		   url: "ajax_converter.php",
		   data: dataString,
		   success: function(data){
			 
			 $('.results').show();
			
			 $('.results').html(data);
		   }
		 });
	});
});
</script>
<style type="text/css">
body {
background-image:url('wood.jpg');
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}

.logo {
margin-left:150px; 
background-image:url('logo.png'); 
background-position:center top;
background-repeat: no-repeat;
height: 175px; 
width: 300px; 
position: absolute;
}

#heading, #currencyBox, #results {
width:775px; 
margin:0 auto;
}

#heading {font-weight:bold; 
font-size:28px; 
padding-bottom: 10px;
color:#333;
}

#currencyBox {
background-image:url('konvertor.png'); 
background-position:center top;  
overflow:hidden; 
padding:10px; 
height:500px; 
background-repeat: no-repeat;
}

label {
text-align: center; 
display:block;
padding-bottom:2px;
font-weight:bold;
}

.data {
float:left; 
width:auto; 
padding:0 5px;
}

.list{
width:130px;
}

.amount {
width: 96px; 
margin: 330px 0 0 288px; 
border: 0; 
background: none;
font-weight:bold; 
}

.amount-text {
margin-left:10px; 
font-weight:bold; 
font-size:14px;
}

.select {
color: white; 
margin:245px 0 0 260px; 
position: absolute;
}

input[type=button] {
width: 90px; 
margin-top:15px; 
cursor:pointer; 
background:none; 
color:#ffffff; 
border:none; 
padding:2px 5px; 
}

.selectb{
margin: 370px 0 0 430px; 
width:100px;
}

.results {
width:190px; 
position: absolute; 
display:none; 
font-weight:bold; 
font-size:14px; 
overflow:hidden; 
text-align:center; 
margin:60px 0 0 300px;
}

</style>
</head>

<body>
<div class="logo"></div>
<div id="results"><div class="results"></div></div>
<div id="currencyBox">
    <div class="data">
        <input class="amount" type="text" name="amount" id="amount" value="1" />
		<span class="amount-text">Unesi iznos</span>
    </div>

<div class="select">	
    <div class="data">
        <label for="fromCurrency">IZ VALUTE:</label>
        <select class="list" name="fromCurrency" id="fromCurrency">
          <option selected="" value="EUR">Evro - EUR</option>
	  <option value="RSD">Srpski dinar - RSD</option>
          <option value="USD">Americki dolar - USD</option>
          <option value="GBP">Britanska funta - GBP</option>
          <option value="CAD">Canada Dollars - CAD</option>
          <option value="AUD">Australijski dolar - AUD</option>
          <option value="JPY">Japan Yen - JPY</option>
          <option value="INR">India Rupees - INR</option>
          <option value="NZD">New Zealand Dollars - NZD</option>
          <option value="CHF">Switzerland Francs - CHF</option>
          <option value="ZAR">South Africa Rand - ZAR</option>
          <option value="DZD">Algeria Dinars - DZD</option>
          <option value="ARS">Argentina Pesos - ARS</option>
          <option value="AUD">Australia Dollars - AUD</option>
          <option value="BHD">Bahrain Dinars - BHD</option>
          <option value="BRL">Brazil Reais - BRL</option>
          <option value="BGN">Bulgaria Leva - BGN</option>
          <option value="CAD">Canada Dollars - CAD</option>
          <option value="CLP">Chile Pesos - CLP</option>
          <option value="CNY">China Yuan Renminbi - CNY</option>
          <option value="CNY">RMB (China Yuan Renminbi) - CNY</option>
          <option value="COP">Colombia Pesos - COP</option>
          <option value="CRC">Costa Rica Colones - CRC</option>
          <option value="HRK">Hrvatska kuna - HRK</option>
          <option value="CZK">Ceska kruna - CZK</option>
          <option value="DKK">Denmark Kroner - DKK</option>
          <option value="DOP">Dominican Republic Pesos - DOP</option>
          <option value="EGP">Egypt Pounds - EGP</option>
          <option value="EEK">Estonia Krooni - EEK</option>
          <option value="FJD">Fiji Dollars - FJD</option>
          <option value="HKD">Hong Kong Dollars - HKD</option>
          <option value="HUF">Madjarska forinta - HUF</option>
          <option value="ISK">Iceland Kronur - ISK</option>
          <option value="INR">India Rupees - INR</option>
          <option value="IDR">Indonesia Rupiahs - IDR</option>
          <option value="ILS">Israel New Shekels - ILS</option>
          <option value="JMD">Jamaica Dollars - JMD</option>
          <option value="JPY">Japan Yen - JPY</option>
          <option value="JOD">Jordan Dinars - JOD</option>
          <option value="KES">Kenya Shillings - KES</option>
          <option value="KRW">Korea (South) Won - KRW</option>
          <option value="KWD">Kuwait Dinars - KWD</option>
          <option value="LBP">Lebanon Pounds - LBP</option>
          <option value="MYR">Malaysia Ringgits - MYR</option>
          <option value="MUR">Mauritius Rupees - MUR</option>
          <option value="MXN">Mexico Pesos - MXN</option>
          <option value="MAD">Morocco Dirhams - MAD</option>
          <option value="NZD">New Zealand Dollars - NZD</option>
          <option value="NOK">Norway Kroner - NOK</option>
          <option value="OMR">Oman Rials - OMR</option>
          <option value="PKR">Pakistan Rupees - PKR</option>
          <option value="PEN">Peru Nuevos Soles - PEN</option>
          <option value="PHP">Philippines Pesos - PHP</option>
          <option value="PLN">Poland Zlotych - PLN</option>
          <option value="QAR">Qatar Riyals - QAR</option>
          <option value="RON">Romania New Lei - RON</option>
          <option value="RUB">Russia Rubles - RUB</option>
          <option value="SAR">Saudi Arabia Riyals - SAR</option>
          <option value="SGD">Singapore Dollars - SGD</option>
          <option value="SKK">Slovakia Koruny - SKK</option>
          <option value="ZAR">South Africa Rand - ZAR</option>
          <option value="KRW">South Korea Won - KRW</option>
          <option value="LKR">Sri Lanka Rupees - LKR</option>
          <option value="SEK">Sweden Kronor - SEK</option>
          <option value="CHF">Switzerland Francs - CHF</option>
          <option value="TWD">Taiwan New Dollars - TWD</option>
          <option value="THB">Thailand Baht - THB</option>
          <option value="TTD">Trinidad and Tobago Dollars - TTD</option>
          <option value="TND">Tunisia Dinars - TND</option>
          <option value="TRY">Turkey Lira - TRY</option>
          <option value="AED">United Arab Emirates Dirhams - AED</option>
          <option value="GBP">United Kingdom Pounds - GBP</option>
          <option value="USD">United States Dollars - USD</option>
          <option value="VEB">Venezuela Bolivares - VEB</option>
          <option value="VND">Vietnam Dong - VND</option>
          <option value="ZMK">Zambia Kwacha - ZMK</option>
        </select>
    </div>
    
    <div class="data">
        <label for="toCurrency">U VALUTU:</label>
	<select class="list" name="toCurrency" id="toCurrency">
	  <option value="RSD">Srpski dinar - RSD</option>
	  <option value="EUR">Evro - EUR</option>
          <option value="USD">Americki dolar - USD</option>
          <option value="GBP">Britanska funta - GBP</option>
          <option value="CAD">Canada Dollars - CAD</option>
          <option value="AUD">Australijski dolar - AUD</option>
          <option value="JPY">Japan Yen - JPY</option>
          <option value="INR">India Rupees - INR</option>
          <option value="NZD">New Zealand Dollars - NZD</option>
          <option value="CHF">Switzerland Francs - CHF</option>
          <option value="ZAR">South Africa Rand - ZAR</option>
          <option value="DZD">Algeria Dinars - DZD</option>
          <option value="ARS">Argentina Pesos - ARS</option>
          <option value="AUD">Australia Dollars - AUD</option>
          <option value="BHD">Bahrain Dinars - BHD</option>
          <option value="BRL">Brazil Reais - BRL</option>
          <option value="BGN">Bulgaria Leva - BGN</option>
          <option value="CAD">Canada Dollars - CAD</option>
          <option value="CLP">Chile Pesos - CLP</option>
          <option value="CNY">China Yuan Renminbi - CNY</option>
          <option value="CNY">RMB (China Yuan Renminbi) - CNY</option>
          <option value="COP">Colombia Pesos - COP</option>
          <option value="CRC">Costa Rica Colones - CRC</option>
          <option value="HRK">Hrvatska kuna - HRK</option>
          <option value="CZK">Ceska kruna - CZK</option>
          <option value="DKK">Denmark Kroner - DKK</option>
          <option value="DOP">Dominican Republic Pesos - DOP</option>
          <option value="EGP">Egypt Pounds - EGP</option>
          <option value="EEK">Estonia Krooni - EEK</option>
          <option value="FJD">Fiji Dollars - FJD</option>
          <option value="HKD">Hong Kong Dollars - HKD</option>
          <option value="HUF">Madjarska forinta - HUF</option>
          <option value="ISK">Iceland Kronur - ISK</option>
          <option value="INR">India Rupees - INR</option>
          <option value="IDR">Indonesia Rupiahs - IDR</option>
          <option value="ILS">Israel New Shekels - ILS</option>
          <option value="JMD">Jamaica Dollars - JMD</option>
          <option value="JPY">Japan Yen - JPY</option>
          <option value="JOD">Jordan Dinars - JOD</option>
          <option value="KES">Kenya Shillings - KES</option>
          <option value="KRW">Korea (South) Won - KRW</option>
          <option value="KWD">Kuwait Dinars - KWD</option>
          <option value="LBP">Lebanon Pounds - LBP</option>
          <option value="MYR">Malaysia Ringgits - MYR</option>
          <option value="MUR">Mauritius Rupees - MUR</option>
          <option value="MXN">Mexico Pesos - MXN</option>
          <option value="MAD">Morocco Dirhams - MAD</option>
          <option value="NZD">New Zealand Dollars - NZD</option>
          <option value="NOK">Norway Kroner - NOK</option>
          <option value="OMR">Oman Rials - OMR</option>
          <option value="PKR">Pakistan Rupees - PKR</option>
          <option value="PEN">Peru Nuevos Soles - PEN</option>
          <option value="PHP">Philippines Pesos - PHP</option>
          <option value="PLN">Poland Zlotych - PLN</option>
          <option value="QAR">Qatar Riyals - QAR</option>
          <option value="RON">Romania New Lei - RON</option>
          <option value="RUB">Russia Rubles - RUB</option>
          <option value="SAR">Saudi Arabia Riyals - SAR</option>
          <option value="SGD">Singapore Dollars - SGD</option>
          <option value="SKK">Slovakia Koruny - SKK</option>
          <option value="ZAR">South Africa Rand - ZAR</option>
          <option value="KRW">South Korea Won - KRW</option>
          <option value="LKR">Sri Lanka Rupees - LKR</option>
          <option value="SEK">Sweden Kronor - SEK</option>
          <option value="CHF">Switzerland Francs - CHF</option>
          <option value="TWD">Taiwan New Dollars - TWD</option>
          <option value="THB">Thailand Baht - THB</option>
          <option value="TTD">Trinidad and Tobago Dollars - TTD</option>
          <option value="TND">Tunisia Dinars - TND</option>
          <option value="TRY">Turkey Lira - TRY</option>
          <option value="AED">United Arab Emirates Dirhams - AED</option>
          <option value="GBP">United Kingdom Pounds - GBP</option>
          <option value="USD">United States Dollars - USD</option>
          <option value="VEB">Venezuela Bolivares - VEB</option>
          <option value="VND">Vietnam Dong - VND</option>
          <option value="ZMK">Zambia Kwacha - ZMK</option>
        </select>
    </div>
  </div>
    <div class="selectb">
    	<input type="button" name="convert" id="convert" value="" />
		
    </div>
	
 </div>

</body>
</html>