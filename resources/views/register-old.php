<!-- MARK: - Registration -->
<section id='p4a' class="morphing-content hidden">
    <div class="row services-list block-1-1 block-tab-full">
		<h1><span>PICK YOUR PLANET. NAME YOUR VIRTUAL STARPORT. BUILD IT. OWN IT!</span>
		<span class="white"> SIGN UP NOW. IT’S FREE!</span></h1>
		<img src="resources/images/1/p1-b.png"/>
		<form method="post" name="sign-up" id="sign-up" >
			<table>
                <!-- Name -->
				<tr>
                    <td>1. Your Name</td>
                    <td>
                        <input type="text" name="name" id="name" class="form-control" />
                    </td>
                </tr>
                <!-- Email -->
				<tr>
                    <td>
                        2. Your Email Address
                    </td>
                    <td>
                        <input type="email" name="email" id="email" class="form-control" />
                    </td>
                </tr>
                <!-- Username -->
				<tr>
                    <td>
                        3. Your User Name
                    </td>
                    <td>
                        <input type="text" name="uname" id="username" class="form-control" />
                    </td>
                </tr>
                <!-- Password -->
				<tr>
                    <td>
                        4. Your Password
                    </td>
                    <td>
                        <input type="password" name="password" id="password" class="form-control" />
                    </td>
                </tr>
                <!-- Password confirmation -->
				<tr>
                    <td>
                        5. Retype Your Password
                    </td>
                    <td>
                        <input type="password" name="cpassword" id="confirm-password" class="form-control" />
                    </td>
                </tr>
                <!-- Planet -->
				<tr>
                    <td>6. Pick Your Planet</td>
                    <td>
                        <select name="planet" class="form-control">
                            <option>--PICK YOUR PLANET--</option>
                        </select>
                    </td>
                </tr>
                <!-- City -->
				<tr>
                    <td>
                        7. Select A City
                    </td>
                    <td>
                        <select name="city" class="form-control">
                            <option>--SELECT A CITY--</option>
                        </select>
                    </td>
                </tr>
                <!-- Starport -->
				<tr>
                    <td>
                        8. Name Your Starport
                    </td>
                    <td>
                        <input type="text" name="starport" id="starport" class="form-control" />
                    </td>
                </tr>
			</table>
            <!-- Terms, captcha, and forgot/join buttons -->
			<div class="p4a_popup_bottom">
				<!-- Holder for terms and captcha -->
				<div class="p4_botm1">
						<!-- Terms -->
						<div class="p4a_left_psec checkbox-container">
							<label>I AGREE TO THE TERMS AND CONDITIONS<input type="checkbox" id="terms-checkbox"><span class="checkmark"></span></label>
						</div>
						<!-- Recaptcha -->
                        <div class="g-recaptcha-inner">
                            <div class="g-recaptcha" data-sitekey="6LdXLFgUAAAAALjknPb1t4QDnmzTOg6wOZFtCTiv"></div>
                        </div>
						<label>I AM NOT A ROBOT</label>
				</div>
                <!-- Forgot password -->
				<div class="p4_botm2">
					<p id="forgot-password-btn">TROUBLE LOGGING IN. CLICK HERE.</p>
				</div>
                <!-- Submit button -->
				<div class="p4_botm3">
					<p id="sign-up-btn">JOIN</p>
				</div>
			</div>
		</form>
		<!-- Loading spinner  -->
		<div class="loading" id="signup-loading">
            <br/>
            <b>Loading...</b>
        </div>
    </div>
    </section> <!-- End registration -->
</body>
</html>