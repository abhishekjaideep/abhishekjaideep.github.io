<?php get_header(); ?>	
	<div class="container">
		<div class="jumbotron" id="welcomeID">
			 <div style="height: 10vw"></div>
		  <h1 class="display-3">Welcome to Flash Car</h1>
		  <p class="lead">Dude ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
		  <hr class="my-4">
		  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
		  <p class="lead">
			<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
		  </p>
		</div>    
	</div>  

    
    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">What is Flash Car ?</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">"What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.</p>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#">
            <i class="mr-2"></i>
            Learn more
          </a>
        </div>
      </div>
    </section>

	
	<div class="container" id="fleetID">
	  <div style="height: 8vw"></div>
	  <h1>Our Cars</h1>
	  <div class="row">
		<div class="col-md-4">
		  <h4>car 1</h4>
		  <img src='#'>
		  <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
		</div>
		<div class="col-md-4">
		  <h4>car 2</h4>
		  <img src='#'>
		  <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
		</div>
		<div class="col-md-4">
		  <h4>car 3</h4>
		  <img src='#'>
		  <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
		</div>
	  </div>
	</div>

	<div class="container" id="priceID">
	  <div style="height: 8vw"></div>
	  <h1>Pricing</h1>
		<div class="row">
		  <div class="col-4">
		  <h4>car 1:</h4>
		  <p>Rs9999999/30mn</p>
		</div>
		  <div class="col-4">
		  <h4>car 2:</h4>
		  <p>Rs9999999/30mn</p>
		</div>
		  <div class="col-4">
		  <h4>car 3: </h4>
		  <p>Rs9999999/30mn</p>
		</div>
	  </div>
	</div>

	
	<div class="container" id="rcID">
		<h1>Pricing</h1>
		<div class="mb-4" id="map"> mr map should be here</div>
		<div class="row">
		  <div class="col-4">
			<a href="#demo" class="btn btn-info" data-toggle="collapse">Car 1</a>
			<div id="demo" class="collapse">
				<div class="form-group">
				  <label for="usr">Name:</label>
				  <input type="text" class="form-control" id="usr">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="pwd">
				</div>
				<div class="form-group">
				  <label for="pwd">Time:</label>
				  <input type="number" class="form-control" id="pwd">
				</div>
				<button type="submit" class="btn btn-primary">reserve</button>
			 </div>
		  </div>
		  <div class="col-4">
			<a href="#demo2" class="btn btn-info" data-toggle="collapse">Car 2</a>
			<div id="demo2" class="collapse">
				<div class="form-group">
				  <label for="usr">Name:</label>
				  <input type="text" class="form-control" id="usr">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="pwd">
				</div>
				<div class="form-group">
				  <label for="pwd">Time:</label>
				  <input type="number" class="form-control" id="pwd">
				</div>
				<button type="submit" class="btn btn-primary">reserve</button>
			 </div>	
		  </div>
		  <div class="col-4">
			<a href="#demo3" class="btn btn-info" data-toggle="collapse">Car 3</a>
			<div id="demo3" class="collapse">
				<div class="form-group">
				  <label for="usr">Name:</label>
				  <input type="text" class="form-control" id="usr">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="pwd">
				</div>
				<div class="form-group">
				  <label for="pwd">Time:</label>
				  <input type="number" class="form-control" id="pwd">
				</div>
				<button type="submit" class="btn btn-primary">reserve</button>
			 </div>	
		  </div>
		</div>
	</div>

	
	<!-- login & register -->
	<div class="container" id="loginID">
	  <div style="height: 8vw"></div>
		<div class="row">
			  <div class="container col-md-6" >
				  <h2>Login</h2>
				  <form action="/action_page.php">
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input type="email" class="form-control" id="email" placeholder="Enter email" `="email">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
					</div>
					<div class="form-check">
					  <label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="remember"> Remember me
					  </label>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				  </form>
				</div>
				
				<div class="container col-md-6">
					<h2>Sign up</h2>
					<form action="/action_page.php">
						<div class="form-group">
						  <label for="name">Name:</label>
						  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
						</div>
						<div class="form-group">
						  <label for="email">Email:</label>
						  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
						<div class="form-group">
						  <label for="phone">Phone:</label>
						  <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
						</div>
						<div class="form-group">
						  <label for="pwd">Password:</label>
						  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
						</div>
						<div class="form-group">
						  <label for="pwd">Repeat Password:</label>
						  <input type="password" class="form-control" id="pwd" placeholder="Repeat Password" name="pswd">
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					 </form>
				</div>
		</div>
	</div>

    <!-- Contact Section -->
    <section id="feedbackID">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Feedback</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
	
<?php get_footer(); ?>