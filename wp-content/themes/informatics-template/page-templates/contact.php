<?php
/*
* Template Name: Contact
*/
get_header(); ?>

<div class="section-container-holder m-4">
	<div class="section-container">
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h5 class="contact-p" style="border-top: 1px solid black;">We are here to answer any question you may have about Informatics and our offered programs and services. <br> <br> Reach out to us by filling out the form below and we'll respond as soon as we can.</h5> <br>
						 <?php echo do_shortcode('[wpforms id="3856" title="false" description="false"]') ?>
<!-- 						echo do_shortcode('[contact-form-7 id="155" title="Contact Us"]') -->
<!-- 						<form id="contact-us-form">
						  <div class="form-group">
							<input type="text" class="form-control" id="user-name" placeholder="Your Name">
						  </div>
						  <div class="form-group">
							<input type="text" class="form-control" id="user-number" placeholder="Contact Number">
						  </div>
						  <div class="form-group">
							<input type="email" class="form-control" id="user-email" placeholder="Email Address" required>
						  </div>
							<div class="form-group">
							<select id="user-concern" class="form-control">
								<option value="Concern">Concern</option>
								<option value="Courses">Courses</option>
								<option value="Tuition Fee">Tuition Fee</option>
								<option value="Scholarships">Scholarships</option>
								<option value="Enrollment">Enrollment</option>
								<option value="Credentials">Credentials</option>
								<option value="Careers">Careers</option>
								<option value="Proposals">Proposals</option>
							  </select>
						  </div>
						  <div class="form-group">
							<select id="user-branch" class="form-control">
								<option value="Preferred Branch">Preferred Branch</option>
								<option value="info.marketing@informatics.com.ph">Informatics Head Office</option>
								<option value="Baguio">Informatics Institute - Baguio</option>
								<option value="Cagayan De Oro">Informatics Institute – Cagayan De Oro</option>
								<option value="Caloocan">Informatics College - Caloocan</option>
								<option value="Cavite">Informatics College - Cavite</option>
								<option value="Cebu">Informatics College - Cebu</option>
								<option value="Consolacion">Informatics Institute – Cebu Consolacion</option>
								<option value="Eastwood">Informatics College - Eastwood</option>
								<option value="Festival Alabang">Informatics College - Festival Alaang</option>
								<option value="Manila">Informatics College - Manila</option>
								<option value="Megamall">Informatics Institute - Megamall</option>
								<option value="Northgate">Informatics College – Northgate</option>
							  </select>
						  </div>
						  <div class="form-group">
							<textarea class="form-control" id="user-message" rows="3" placeholder="Your Message" required></textarea>
						  </div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form> -->
					</div>
					<div class="col-md-6">
						<iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=185%20E.%20Rodriguez%20Jr.%20Avenue%20(C5)%2C%20Acropolis%20Dr%20Bagumbayan%2C%20Quezon%20City%201800%20Metro%20Manila%2C%20Philippines+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=21&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create route map</a></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <script>
	(function(){
		var $ = jQuery;
	 $('#contact-us-form').on('submit',function(e){
					 e.preventDefault();
					var my_user = {
						sender_email: $('#user-email').val(),
						receipient_email: 'info.marketing@informatics.com.ph',
						sender_name:$('#user-name').val(),
						message:
						'Message: '+$('#user-message').val()+'\n, My Contact Number is ' + $('#user-number').val()+ '|| Informatics Branch : '+$('#user-branch').val()
					};
					 $('#user-email').val("");
		  			$('#user-name').val("");
		 			$('#user-number').val("");
					 $('#user-message').val("");
					 alert("Message Succesfully Send, kindly wait for the reply, Thank You");
		            fetch('https://system.informatics-inculab.com/api/inquiry',{
		                method: 'POST',
		                body: JSON.stringify(my_user),
						mode:'cors',
		                headers:{
		                     'Accept': 'application/json',
		    				'Content-Type': 'application/json'
		                }
		            }).then((response)=>{
		              return response.json();
		            }).then((myJson)=>{
		                console.log(JSON.stringify(myJson));
		            }).catch((error)=>{
						console.log(error)
					})
				 });
	})();
</script> -->


<?php
get_footer();
?>

