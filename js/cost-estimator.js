			function calculateEstimate() {
				var total = 0, dvdPrice = 25.0, bluRayPrice = 30.0, photoMonPrice = 79.0, photoBoothPrice = 49.0;
				var minimum = 350.0, bulkDiscount = 0.15, usbBox = 35.00;
				var payRate = 95.00, shortPayRate = 125, secondaryRate = 25.00;
				var startTime = parseInt(document.forms.estimate.startTimeHours.value); var endTime = parseInt(document.forms.estimate.endTimeHours.value);
				//Calculate AM or PM
				if (document.forms.estimate.startTimeAMPM.value == 'PM' && startTime != 12)
					startTime += 12;
				if (document.forms.estimate.startTimeAMPM.value == 'PM' && document.forms.estimate.endTimeAMPM.value == 'AM' && endTime != 12)
					endTime += 24;
				else if ((document.forms.estimate.endTimeAMPM.value == 'PM') || (document.forms.estimate.endTimeAMPM.value == 'AM' && document.forms.estimate.endTimeHours.value == 12))
					endTime += 12;
				var totalHours = (endTime + (parseInt(document.forms.estimate.endTimeMinutes.value) / 60)) - (startTime + (parseInt(document.forms.estimate.startTimeMinutes.value) / 60));
				if ((totalHours < 0) && ((document.forms.estimate.startTimeAMPM.value == 'AM') && (document.forms.estimate.endTimeAMPM.value == 'AM') && (parseInt(document.forms.estimate.endTimeHours.value) < parseInt(document.forms.estimate.startTimeHours.value))))
					totalHours = (endTime + 24 + (parseInt(document.forms.estimate.endTimeMinutes.value) / 60)) - (startTime + (parseInt(document.forms.estimate.startTimeMinutes.value) / 60));

				if (totalHours <= 0) {
					document.forms.estimate.answer.value = "Invalid Time";
					return;
				}
				if (totalHours < 3)
					total += minimum;
				else if (totalHours < 6)
					total += totalHours * shortPayRate;
				else
					total += totalHours * payRate;
				if (document.forms.estimate.recap.checked)
					total += 275.00;
				if (document.forms.estimate.photoMon.checked)
					total += photoMonPrice;
				if (document.forms.estimate.photoBooth.checked)
					total += photoBoothPrice;
				if (document.forms.estimate.usbBox.checked)
					total += usbBox;
				if (parseInt(document.forms.estimate.dvdCopies.value) > 2) {
					if (parseInt(document.forms.estimate.dvdCopies.value) >= 50)
						total = parseInt(document.forms.estimate.dvdCopies.value) * (dvdPrice - (dvdPrice * bulkDiscount));
					else
						total += (parseInt(document.forms.estimate.dvdCopies.value) - 2) * dvdPrice;
				}
				if (document.forms.estimate.cc.checked)
					total += shortPayRate * (Math.log(totalHours) + 2);
				if (parseInt(document.forms.estimate.bluCopies.value) > 1) {
					if (parseInt(document.forms.estimate.bluCopies.value) >= 50) {
						if (parseInt(document.forms.estimate.dvdCopies.value) >= 50)
							total += (parseInt(document.forms.estimate.bluCopies.value) * (bluRayPrice - (bluRayPrice * bulkDiscount)));
						else
							total = (parseInt(document.forms.estimate.bluCopies.value) * (bluRayPrice - (bluRayPrice * bulkDiscount)));
					}
					else
						total += (parseInt(document.forms.estimate.bluCopies.value) - 2) * bluRayPrice;
				}
				if (document.forms.estimate.coverage.checked) {
					if (totalHours < 5)
						total += 150.00;
					else if (totalHours < 10)
						total += totalHours * secondaryRate;
					else
						total += 300.00;
				}
				document.forms.estimate.answer.value = "$" + total.toFixed(2);
			}