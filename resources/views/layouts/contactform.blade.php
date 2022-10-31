<div class="contact-container bg-dark" id="contact_us">
		<div class="item1">
			<h3 class="text-light">Contact Us.</h3>
		<em><p class="text-light">Feel Free to Contact Us.</p></em>
		</div>
		<div class="item2">
			<form action="{{ route('submitContactUsForm') }}" method="POST">
                @csrf
				<div class="form-group">
					<input type="text" name="username" class="forms" placeholder="Enter Your Name">
					<span class="text-danger small">@error('username') {{$message}} @enderror</span>
				</div>
				<div class="form-group">
					<input type="email" name="useremail" class="forms" placeholder="Enter Your Email">
                    <span class="text-danger small">@error('useremail') {{$message}} @enderror</span>
				</div>
				<div class="form-group">
					<input type="text" name="usercontact" class="forms" placeholder="Enter Your Contact Number">
                    <span class="text-danger small">@error('usercontact') {{$message}} @enderror</span>
				</div>
				<div class="form-group">
					<input type="text" name="useraddress" class="forms" placeholder="Enter Your Address">
                    <span class="text-danger small">@error('useraddress') {{$message}} @enderror</span>
				</div>

		</div>
		<div class="item3">
			<div class="form-group">
                <textarea name="usermessage" id="message" class="form-control" placeholder="Plese Enter Your Message Here !"></textarea>
                <span class="text-danger small">@error('usermessage') {{$message}} @enderror</span>
            </div>
		</div>

		<div class="item4">
			<div class="button">
                <button id="sendMessageButton" class="btn btn-light" type="submit">Send Message</button>
            </div>
		</div>
			</form>
	</div>