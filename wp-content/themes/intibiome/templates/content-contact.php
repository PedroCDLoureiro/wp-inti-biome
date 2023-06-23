<?php global $info; ?>
<section id="contact">	
	<article>
		<div class="container">
			<div class="row">
				<div class="col-12 div-contact">
					<h2>Contact</h2>
					<form id="form">
						<input type="hidden" name="para" placeholder="para" value="<?php echo $info['email']; ?>">
						<input type="hidden" name="assunto" placeholder="assunto" value="Contact Form">
						<label for="">Name</label>
						<input type="text" required="require" name="nome" placeholder="Name">
						<label for="">Email</label>
						<input type="email" required="require" name="email" placeholder="Email">
						<label for="">Phone</label>
						<input type="text" required="require" name="phone" placeholder="Phone" class="celular">
						<label for="">Message</label>
						<textarea required="require" name="message" rows="8" placeholder="Message"></textarea>
						<input class="submit-button" type="submit" value="Send">
					</form>
				</div>
			</div>
		</div>
	</article>
</section>