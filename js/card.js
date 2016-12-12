function validate_creditcardnumber()
{
var count = document.getElementById("CreditCardNumber").value;

if((/[^0-9-\s]+/.test(count)))
	document.body.style.background= "orange";

else if (count.length < 16)
	document.body.style.background= "white";

else if (count.length > 16)
	document.body.style.background= "yellow";

else
{
	if(valid_credit_card(count) == true)
		document.body.style.background= "green";
	
	else
		document.body.style.background= "red";
	}
}

function valid_credit_card(value) {

	var nCheck = 0, nDigit = 0, bEven = false;
	value = value.replace(/\D/g, "");

	for (var n = value.length - 1; n >= 0; n--) {
		var cDigit = value.charAt(n),
			  nDigit = parseInt(cDigit, 10);

		if (bEven) {
			if ((nDigit *= 2) > 9) nDigit -= 9;
		}

		nCheck += nDigit;
		bEven = !bEven;
	}

	return (nCheck % 10) == 0;
}