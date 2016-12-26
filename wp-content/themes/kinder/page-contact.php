<?php get_header(); ?>
<main id="main" class="page_content page_contact">
<!-- contact page -->
<div class="contact_page flw">
	<div class="maps flw">
		<div class="point">
			<span class="ion-ios-location"></span>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7451.6436922590065!2d105.80044439999999!3d20.959668399999998!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1455616124139" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8">
				<div class="box_mes flw">
					<div class="title_l">
						<h3>Send us your messenge</h3>
						<h4>• For the best of us •</h4>
						<p>Duis tristique urna lacus. Nunc enim neque, eleifend et mollis in, convallis vitae lorem. Nam quis consectetur nunc. Vivamus pulvinar odio id purus luctus, quis commodo lorem congue.</p>
					</div>
					<form action="#" class="form_">
						<div class="required first">
							<input type="text" placeholder="Enter your name" required>
						</div>
						<div class="required">
							<input type="text" placeholder="Enter your email" required>
						</div>
						<textarea placeholder="Your messenge" required></textarea>
						<input type="submit" value="SEND MESSENGER">
					</form>
				</div>
			</div>
			<div class="col-md-4 col-lg-4">
				<div class="box_info flw">
					<div class="spt flw">
						<div class="item_spt">
							<div class="icon_ ion-map"></div>
							<dl class="add_">
								<dt><h3>Kidkad Kinder Add #1</h3></dt>
								<dd><img src="<?=get_stylesheet_directory_uri()?>/images/sp1.png" alt="shape1"></dd>
								<dt>
									<p>1600 Blue Amphitheatre Parkway, Mountain View, CA 94043, USA</p>
								</dt>
							</dl>
						</div>
						<div class="item_spt bg_">
							<div class="icon_ ion-ios-telephone"></div>
							<dl class="add_">
								<dt><h3>Calling support</h3></dt>
								<dd><img src="<?=get_stylesheet_directory_uri()?>/images/sp2.png" alt="shape1"></dd>
								<dt>
									<p>+00 44 123 456 78910</p>
									<p>+00 44 1900 1570 001</p>
								</dt>
							</dl>
						</div>
						<div class="item_spt">
							<div class="icon_ ion-email-unread"></div>
							<dl class="add_">
								<dt><h3>E-mail live</h3></dt>
								<dd><img src="<?=get_stylesheet_directory_uri()?>/images/sp1.png" alt="shape1"></dd>
								<dt>
									<p>Info@kidkatkg.co.us</p>
									<p>Support@kidkadkinder.co.us</p>
								</dt>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end contact page -->
</main>

<?php get_footer(); ?>